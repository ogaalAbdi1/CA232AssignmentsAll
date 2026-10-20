<?php
session_start();

if (!isset($_SESSION["student"])) {
    header("Location: Assignments3.php");
    exit;
}

$student = $_SESSION["student"];

$labels = [
    "name" => "Full Name",
    "pob" => "Place of Birth",
    "dob" => "Date of Birth",
    "address" => "Address",
    "gender" => "Gender",
    "telephone" => "Telephone",
    "email" => "Email",
    "parent_name" => "Parent Name",
    "parent_telephone" => "Parent Telephone",
    "relationship" => "Relationship",
    "student_id" => "Student ID",
    "faculty" => "Faculty",
    "department" => "Department",
    "class" => "Class",
    "registration_date" => "Registration Date"
];

function safe($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, "UTF-8");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Student Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f2f5f9; }
        .result-card { max-width: 900px; margin: 40px auto; }
    </style>
</head>
<body>
<div class="container result-card">
    <div class="card shadow border-0">
        <div class="card-body p-4 p-md-5">
            <h1 class="text-center text-primary mb-4">Student Registration Details</h1>
            <div class="alert alert-success">Registration completed successfully!</div>

            <?php if (!empty($student["image"]) && is_file(__DIR__ . "/" . $student["image"])): ?>
                <div class="text-center mb-4">
                    <img src="<?= safe($student["image"]) ?>" alt="Student Image"
                         class="img-thumbnail" style="max-width: 180px; max-height: 180px;">
                </div>
            <?php endif; ?>

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Information</th>
                            <th scope="col">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($labels as $key => $label): ?>
                        <tr>
                            <th scope="row"><?= safe($label) ?></th>
                            <td><?= safe($student[$key] ?? "") ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <a href="Assignments3.php" class="btn btn-primary">Back to Registration</a>
        </div>
    </div>
</div>
</body>
</html>
