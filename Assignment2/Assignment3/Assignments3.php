<?php
session_start();

$errors = [];
$success = "";

$fields = [
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

function oldValue($key) {
    return htmlspecialchars($_POST[$key] ?? "", ENT_QUOTES, "UTF-8");
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["register"])) {

    // QUESTION 2: Check that every required field has a value.
    foreach ($fields as $key => $label) {
        if (trim($_POST[$key] ?? "") === "") {
            $errors[$key] = "Please enter " . $label . ".";
        }
    }

    // QUESTION 3: Name must contain letters and spaces only.
    $name = trim($_POST["name"] ?? "");
    if ($name !== "" && !preg_match("/^[a-zA-Z ]+$/", $name)) {
        $errors["name"] = "Name must contain letters and spaces only.";
    }

    // QUESTION 3: Check email format.
    $email = trim($_POST["email"] ?? "");
    if ($email !== "" && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Please enter a valid email address.";
    }

    // QUESTION 3: Validate the uploaded image.
    if (!isset($_FILES["image"]) || $_FILES["image"]["error"] === UPLOAD_ERR_NO_FILE) {
        $errors["image"] = "Please upload a student image.";
    } elseif ($_FILES["image"]["error"] !== UPLOAD_ERR_OK) {
        $errors["image"] = "There was a problem uploading the image.";
    } else {
        $originalName = $_FILES["image"]["name"];
        $extension = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));
        $allowedExtensions = ["jpg", "jpeg", "png", "gif"];

        if (!in_array($extension, $allowedExtensions, true)) {
            $errors["image"] = "Only JPG, JPEG, PNG, and GIF images are allowed.";
        } elseif (getimagesize($_FILES["image"]["tmp_name"]) === false) {
            $errors["image"] = "The uploaded file is not a valid image.";
        }
    }

    // If there are no errors, save the image and redirect to Question 4's page.
    if (empty($errors)) {
        $uploadDirectory = __DIR__ . "/uploads/";

        if (!is_dir($uploadDirectory) && !mkdir($uploadDirectory, 0755, true)) {
            $errors["image"] = "Could not create the uploads folder.";
        } else {
            $newImageName = uniqid("student_", true) . "." . $extension;
            $imageDestination = $uploadDirectory . $newImageName;

            if (!move_uploaded_file($_FILES["image"]["tmp_name"], $imageDestination)) {
                $errors["image"] = "Could not save the uploaded image.";
            } else {
                $_SESSION["student"] = [
                    "name" => trim($_POST["name"] ?? ""),
                    "pob" => trim($_POST["pob"] ?? ""),
                    "dob" => $_POST["dob"] ?? "",
                    "address" => trim($_POST["address"] ?? ""),
                    "gender" => $_POST["gender"] ?? "",
                    "telephone" => trim($_POST["telephone"] ?? ""),
                    "email" => trim($_POST["email"] ?? ""),
                    "parent_name" => trim($_POST["parent_name"] ?? ""),
                    "parent_telephone" => trim($_POST["parent_telephone"] ?? ""),
                    "relationship" => $_POST["relationship"] ?? "",
                    "student_id" => trim($_POST["student_id"] ?? ""),
                    "faculty" => trim($_POST["faculty"] ?? ""),
                    "department" => trim($_POST["department"] ?? ""),
                    "class" => trim($_POST["class"] ?? ""),
                    "registration_date" => $_POST["registration_date"] ?? "",
                    "image" => "uploads/" . $newImageName
                ];

                header("Location: display.php");
                exit;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration - Assignment 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f2f5f9; }
        .registration-card { max-width: 900px; margin: 35px auto; }
        .section-title { color: #0d6efd; border-bottom: 2px solid #dee2e6; padding-bottom: 8px; margin-top: 24px; }
    </style>
</head>
<body>
<div class="container registration-card">
    <div class="card shadow border-0">
        <div class="card-body p-4 p-md-5">
            <h1 class="text-center text-primary mb-4">Student Registration</h1>

            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">
                    <strong>Please correct the following:</strong>
                    <ul class="mb-0">
                        <?php foreach ($errors as $message): ?>
                            <li><?= htmlspecialchars($message, ENT_QUOTES, "UTF-8") ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <!-- QUESTION 1: Student registration form -->
            <form method="post" action="" enctype="multipart/form-data" id="registrationForm" novalidate>
                <h2 class="h4 section-title">Personal Information</h2>

                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= oldValue('name') ?>">
                    <?php if (isset($errors["name"])): ?><div class="text-danger small"><?= htmlspecialchars($errors["name"]) ?></div><?php endif; ?>
                </div>

                <div class="mb-3">
                    <label for="pob" class="form-label">Place of Birth (POB)</label>
                    <input type="text" class="form-control" id="pob" name="pob" value="<?= oldValue('pob') ?>">
                    <?php if (isset($errors["pob"])): ?><div class="text-danger small"><?= htmlspecialchars($errors["pob"]) ?></div><?php endif; ?>
                </div>

                <div class="mb-3">
                    <label for="dob" class="form-label">Date of Birth (DOB)</label>
                    <input type="date" class="form-control" id="dob" name="dob" value="<?= oldValue('dob') ?>">
                    <?php if (isset($errors["dob"])): ?><div class="text-danger small"><?= htmlspecialchars($errors["dob"]) ?></div><?php endif; ?>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="<?= oldValue('address') ?>">
                    <?php if (isset($errors["address"])): ?><div class="text-danger small"><?= htmlspecialchars($errors["address"]) ?></div><?php endif; ?>
                </div>

                <fieldset class="mb-3" id="gender">
                    <legend class="col-form-label pt-0">Gender</legend>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="Male" <?= (($_POST["gender"] ?? "") === "Male") ? "checked" : "" ?>>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="Female" <?= (($_POST["gender"] ?? "") === "Female") ? "checked" : "" ?>>
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <?php if (isset($errors["gender"])): ?><div class="text-danger small"><?= htmlspecialchars($errors["gender"]) ?></div><?php endif; ?>
                </fieldset>

                <div class="mb-3">
                    <label for="telephone" class="form-label">Telephone</label>
                    <input type="tel" class="form-control" id="telephone" name="telephone" value="<?= oldValue('telephone') ?>">
                    <?php if (isset($errors["telephone"])): ?><div class="text-danger small"><?= htmlspecialchars($errors["telephone"]) ?></div><?php endif; ?>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= oldValue('email') ?>">
                    <?php if (isset($errors["email"])): ?><div class="text-danger small"><?= htmlspecialchars($errors["email"]) ?></div><?php endif; ?>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Student Image (JPG, JPEG, PNG, GIF)</label>
                    <input type="file" class="form-control" id="image" name="image" accept=".jpg,.jpeg,.png,.gif">
                    <?php if (isset($errors["image"])): ?><div class="text-danger small"><?= htmlspecialchars($errors["image"]) ?></div><?php endif; ?>
                </div>

                <h2 class="h4 section-title">Parent Information</h2>

                <div class="mb-3">
                    <label for="parent_name" class="form-label">Parent Name</label>
                    <input type="text" class="form-control" id="parent_name" name="parent_name" value="<?= oldValue('parent_name') ?>">
                    <?php if (isset($errors["parent_name"])): ?><div class="text-danger small"><?= htmlspecialchars($errors["parent_name"]) ?></div><?php endif; ?>
                </div>

                <div class="mb-3">
                    <label for="parent_telephone" class="form-label">Parent Telephone</label>
                    <input type="tel" class="form-control" id="parent_telephone" name="parent_telephone" value="<?= oldValue('parent_telephone') ?>">
                    <?php if (isset($errors["parent_telephone"])): ?><div class="text-danger small"><?= htmlspecialchars($errors["parent_telephone"]) ?></div><?php endif; ?>
                </div>

                <div class="mb-3">
                    <label for="relationship" class="form-label">Relationship</label>
                    <select class="form-select" id="relationship" name="relationship">
                        <option value="">Select Relationship</option>
                        <option value="Father" <?= (($_POST["relationship"] ?? "") === "Father") ? "selected" : "" ?>>Father</option>
                        <option value="Mother" <?= (($_POST["relationship"] ?? "") === "Mother") ? "selected" : "" ?>>Mother</option>
                        <option value="Guardian" <?= (($_POST["relationship"] ?? "") === "Guardian") ? "selected" : "" ?>>Guardian</option>
                    </select>
                    <?php if (isset($errors["relationship"])): ?><div class="text-danger small"><?= htmlspecialchars($errors["relationship"]) ?></div><?php endif; ?>
                </div>

                <h2 class="h4 section-title">Academic Information</h2>

                <div class="mb-3">
                    <label for="student_id" class="form-label">Student ID</label>
                    <input type="text" class="form-control" id="student_id" name="student_id" value="<?= oldValue('student_id') ?>">
                    <?php if (isset($errors["student_id"])): ?><div class="text-danger small"><?= htmlspecialchars($errors["student_id"]) ?></div><?php endif; ?>
                </div>

                <div class="mb-3">
                    <label for="faculty" class="form-label">Faculty</label>
                    <input type="text" class="form-control" id="faculty" name="faculty" value="<?= oldValue('faculty') ?>">
                    <?php if (isset($errors["faculty"])): ?><div class="text-danger small"><?= htmlspecialchars($errors["faculty"]) ?></div><?php endif; ?>
                </div>

                <div class="mb-3">
                    <label for="department" class="form-label">Department</label>
                    <input type="text" class="form-control" id="department" name="department" value="<?= oldValue('department') ?>">
                    <?php if (isset($errors["department"])): ?><div class="text-danger small"><?= htmlspecialchars($errors["department"]) ?></div><?php endif; ?>
                </div>

                <div class="mb-3">
                    <label for="class" class="form-label">Class</label>
                    <input type="text" class="form-control" id="class" name="class" value="<?= oldValue('class') ?>">
                    <?php if (isset($errors["class"])): ?><div class="text-danger small"><?= htmlspecialchars($errors["class"]) ?></div><?php endif; ?>
                </div>

                <div class="mb-4">
                    <label for="registration_date" class="form-label">Registration Date</label>
                    <input type="date" class="form-control" id="registration_date" name="registration_date" value="<?= oldValue('registration_date') ?>">
                    <?php if (isset($errors["registration_date"])): ?><div class="text-danger small"><?= htmlspecialchars($errors["registration_date"]) ?></div><?php endif; ?>
                </div>

                <button type="submit" name="register" class="btn btn-primary">Register</button>
                <button type="reset" class="btn btn-outline-secondary">Clear</button>
            </form>
        </div>
    </div>
</div>

<?php if (!empty($errors)): ?>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const firstError = <?= json_encode(array_key_first($errors)) ?>;
    let field = document.getElementById(firstError);
    if (firstError === "gender") {
        field = document.getElementById("male");
    }
    if (field) {
        field.focus();
        field.scrollIntoView({ behavior: "smooth", block: "center" });
    }
});
</script>
<?php endif; ?>
</body>
</html>
