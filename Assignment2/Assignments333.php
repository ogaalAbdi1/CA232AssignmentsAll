
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 3</title>
</head>
<body>
    <h1>student Registration</h1>
      <!-- questionss1 -->
    <form method="post" action="" enctype="multipart/form-data">
        <!-- Personal Information -->
          <h2>Personal Information</h2>
            <h4>question1</h4>
          <label>Full Name:</label> 
          <input type="text" name="name"><br><br> 
          <label>Place of Birth (POB):</label> 
          <input type="text" name="pob"><br><br> 
          <label>Date of Birth (DOB):</label> 
          <input type="date" name="dob"><br><br> 
          <label>Address:</label> 
          <input type="text" name="address"><br><br>
          <label>Gender:</label> 
          <input type="radio" name="gender" value="Male"> Male
           <input type="radio" name="gender" value="Female"> Female <br><br>

           <label>Telephone:</label>
           <input type="number" name="telephone">
           <label>Email:</label> 
           <input type="email" name="email"><br><br>
            <label>Student Image:</label> 
           <input type="file" name="image" accept=".jpg,.jpeg,.png,.gif"> <br><br>

           <!-- Parent Information --> 
            <h2>Parent Information</h2>
            <label>Parent Name:</label>
             <input type="text" name="parent_name"><br><br> 
            <label>Parent Telephone:</label> 
            <input type="tel" name="parent_telephone"><br><br>

            <label>Relationship:</label> 
            
            <select name="relationship"> 
                <option value="">Select Relationship</option> 
                <option value="Father">Father</option> 
                <option value="Mother">Mother</option> 
                <option value="Guardian">Guardian</option> 
            </select> <br><br>

            <!-- Academic Information -->
              <h2>Academic Information</h2>
              <label>Student ID:</label> 
              <input type="text" name="student_id"><br><br>
               <label>Faculty:</label>
                <input type="text" name="faculty"><br><br>
                <label>Department:</label> 
                <input type="text" name="department"><br><br>
               <label>Class:</label> 
               <input type="text" name="class"><br><br>
               <label>Registration Date:</label> 
               <input type="date" name="registration_date"><br><br> 
               <input type="submit" name="register" value="Register">
                <input type="reset" value="Clear"><br><br>
    </form>

               echo '------------------------------- ------";
               echo "<h2>questions2</h2>";

               <form method="post" action="" enctype="multipart/form-data" id="registrationForm"> 
                <h2>Personal Information</h2> 
                Name:
                 <input type="text" id="name" name="name" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>"> <br><br>

                 Place of Birth: 
                 <input type="text" id="pob" name="pob" value="<?= htmlspecialchars($_POST['pob'] ?? '') ?>"> <br><br>

        Address: 
        <input type="text" id="address" name="address" value="<?= htmlspecialchars($_POST['address'] ?? '') ?>"> <br><br>

        Gender: 
        <input type="radio" id="gender" name="gender" value="Male" <?= (($_POST['gender'] ?? '') === 'Male') ? 'checked' : '' ?>> 
        Male:
         <input type="radio" name="gender" value="Female" <?= (($_POST['gender'] ?? '') === 'Female') ? 'checked' : '' ?>> Female <br><br>
    Telephone:
     <input type="text" id="telephone" name="telephone" value="<?= htmlspecialchars($_POST['telephone'] ?? '') ?>"> <br><br>

     Email: 
     <input type="email" id="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"> <br><br>
    Student Image:
     <input type="file" id="image" name="image" accept=".jpg,.jpeg,.png,.gif"> <br><br>

     <h2>Parent Information</h2> Parent Name: <input type="text" id="parent_name" name="parent_name" value="<?= htmlspecialchars($_POST['parent_name'] ?? '') ?>"> <br><br> 
     Parent Telephone: 
     <input type="text" id="parent_telephone" name="parent_telephone" value="<?= htmlspecialchars($_POST['parent_telephone'] ?? '') ?>"> <br><br>

    Relationship: 
    <select id="relationship" name="relationship"> 
        <option value="">Select Relationship</option> <option value="Father" <?= (($_POST['relationship'] ?? '') === 'Father') ? 'selected' : '' ?>> Father </option>
        <option value="Mother" <?= (($_POST['relationship'] ?? '') === 'Mother') ? 'selected' : '' ?>> Mother </option>

        <option value="Guardian" <?= (($_POST['relationship'] ?? '') === 'Guardian') ? 'selected' : '' ?>> Guardian </option>
     </select> <br><br>
     <h2>Academic Information</h2>
      Student ID: <input type="text" id="student_id" name="student_id" value="<?= htmlspecialchars($_POST['student_id'] ?? '') ?>"> <br><br>
      Faculty: 
      <input type="text" id="faculty" name="faculty" value="<?= htmlspecialchars($_POST['faculty'] ?? '') ?>"> <br><br>
      Department:
       <input type="text" id="department" name="department" value="<?= htmlspecialchars($_POST['department'] ?? '') ?>"> <br><br>
      Class: 
      <input type="text" id="class" name="class" value="<?= htmlspecialchars($_POST['class'] ?? '') ?>"> <br><br>
       Registration Date: <input type="date" id="registration_date" name="registration_date" value="<?= htmlspecialchars($_POST['registration_date'] ?? '') ?>"> <br><br> 
       <input type="submit" name="register" value="Register">
        <input type="reset" value="Clear"> 
    </form>
    <?php if (!empty($errors)): ?>

        <script> 
        document.addEventListener("DOMContentLoaded", function () { 
        let firstError = <?= json_encode(array_key_first($errors)) ?>;

        let field = document.getElementById(firstError); 
        if (field) { field.focus(); 
        field.scrollIntoView({
             behavior: "smooth", block: "center" }); } });

  </script>
  <?php endif; ?>
        <h4>Questions 3----------------------</h4>
        <form method="post"action=""enctype="multipart/form-data">

    <h2>Personal Information</h2>

    Name:
    <input type="text"
           id="name"
           name="name"
           value="<?= htmlspecialchars($_POST['name'] ?? '') ?>"> <br><br>

           Place of Birth:
             <input type="text"id="pob"name="pob"
           value="<?= htmlspecialchars($_POST['pob'] ?? '') ?>"> <br><br>
               Date of Birth:
                 <input type="date"id="dob"name="dob"
                    value="<?= htmlspecialchars($_POST['dob'] ?? '') ?>"> <br><br>
              Address:
            <input type="text" id="address"name="address"
           value="<?= htmlspecialchars($_POST['address'] ?? '') ?>"><br><br>

             Gender:
              <input type="radio" id="gender"name="gender"value="Male"
             <?= (($_POST['gender'] ?? '') === 'Male') ? 'checked' : '' ?>>

              Male 
              <input type="radio"name="gender"value="Female"
           <?= (($_POST['gender'] ?? '') === 'Female') ? 'checked' : '' ?>>
            Female<br><br>

    Telephone:
    <input type="text"
           id="telephone"
           name="telephone"
           value="<?= htmlspecialchars($_POST['telephone'] ?? '') ?>">
    <br><br>
     Email:
    <input type="text"
           id="email"
           name="email"
           value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
    <br><br>
      Student Image:
    <input type="file"
           id="image"
           name="image"
           accept=".jpg,.jpeg,.png,.gif">
    <br><br>

       <h2>Parent Information</h2>

    Parent Name:
    <input type="text"
           id="parent_name"
           name="parent_name"
           value="<?= htmlspecialchars($_POST['parent_name'] ?? '') ?>">
    <br><br>
      Parent Telephone:
    <input type="text"
           id="parent_telephone"
           name="parent_telephone"
           value="<?= htmlspecialchars($_POST['parent_telephone'] ?? '') ?>">
    <br><br>

    Relationship:

    <select id="relationship" name="relationship">

        <option value="">Select Relationship</option>

        <option value="Father"
            <?= (($_POST['relationship'] ?? '') === 'Father') ? 'selected' : '' ?>>
            Father
        </option>

        <option value="Mother"
            <?= (($_POST['relationship'] ?? '') === 'Mother') ? 'selected' : '' ?>>
            Mother
        </option>
              <option value="Guardian"
            <?= (($_POST['relationship'] ?? '') === 'Guardian') ? 'selected' : '' ?>>
            Guardian
        </option>

    </select>

    <br><br>
        <h2>Academic Information</h2>

    Student ID:
    <input type="text"
           id="student_id"
           name="student_id"
           value="<?= htmlspecialchars($_POST['student_id'] ?? '') ?>">
    <br><br>

    Faculty:
    <input type="text"
           id="faculty"
           name="faculty"
           value="<?= htmlspecialchars($_POST['faculty'] ?? '') ?>">
    <br><br>
      Department:
    <input type="text"
           id="department"
           name="department"
           value="<?= htmlspecialchars($_POST['department'] ?? '') ?>">
    <br><br>

    Class:
    <input type="text"
           id="class"
           name="class"
           value="<?= htmlspecialchars($_POST['class'] ?? '') ?>">
    <br><br>
      Registration Date:
    <input type="date"
           id="registration_date"
           name="registration_date"
           value="<?= htmlspecialchars($_POST['registration_date'] ?? '') ?>">
    <br><br>

    <input type="submit" name="register" value="Register">

    <input type="reset" value="Clear">




        </form>

</html>
</body>

<?php if (isset($_POST["register"])) { 
    echo "<h1>Student Information</h1>"; 
    echo "Name: " . $_POST["name"] . "<br>"; 
    echo "Place of Birth: " . $_POST["pob"] . "<br>"; 
    echo "Date of Birth: " . $_POST["dob"] . "<br>"; 
    echo "Address: " . $_POST["address"] . "<br>"; 
    echo "Gender: " . $_POST["gender"] . "<br>"; 
    echo "Telephone: " . $_POST["telephone"] . "<br>"; 
    echo "Email: " . $_POST["email"] . "<br>"; 
    echo "<h2>Parent Information</h2>"; 
    echo "Parent Name: " . $_POST["parent_name"] . "<br>"; 
    echo "Parent Telephone: " . $_POST["parent_telephone"] . "<br>"; 
    echo "Relationship: " . $_POST["relationship"] . "<br>";

    echo "<h2>Academic Information</h2>"; 
    echo "Student ID: " . $_POST["student_id"] . "<br>";
     echo "Faculty: " . $_POST["faculty"] . "<br>";
      echo "Department: " . $_POST["department"] . "<br>"; 
      echo "Class: " . $_POST["class"] . "<br>"; 
     echo "Registration Date: " . $_POST["registration_date"] . "<br>";
      } ?>

      <!-- echo "<h>Question2 php code waaye </h -->

    <?php
    $errors = [];
    $fields = [ 
        "name" => "Name", 
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
        if (isset($_POST["register"])) {
             // Check all required text fields 
             foreach ($fields as $key => $label) { 
                if (empty(trim($_POST[$key] ?? ""))) {
                     $errors[$key] = "Please enter " . $label; 
  }
     } 
// Check if an image was selected 
if ( !isset($_FILES["image"]) || $_FILES["image"]["error"] === UPLOAD_ERR_NO_FILE ) { 
    $errors["image"] = "Please upload your image"; } 
    // Display result 
    if (empty($errors)) { 
        echo "<h2>All required fields have been completed!</h2>"; 
        echo "<p>You can now proceed to the next step.</p>"; 
        } } 


    ?>
          <!-- echo "<h>Question3 php code waaye </h -->

          <?php

$errors = [];
$success = "";

$fields = [
    "name" => "Name",
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
if (isset($_POST["register"])) {

    // 1. Check all required fields
    foreach ($fields as $key => $label) {

        if (empty(trim($_POST[$key] ?? ""))) {
            $errors[$key] = "Please enter " . $label;
        }
    }
        // 2. Validate Name: letters and spaces only
    $name = trim($_POST["name"] ?? "");

    if ($name !== "" && !preg_match("/^[a-zA-Z ]+$/", $name)) {
        $errors["name"] =
            "Name must contain letters and spaces only.";
    }

    // 3. Validate Email format
    $email = trim($_POST["email"] ?? "");

    if (
        $email !== "" &&
        !filter_var($email, FILTER_VALIDATE_EMAIL)
    ) {
        $errors["email"] = "Please enter a valid email address.";
    }
     // 4. Validate uploaded image
    if (
        !isset($_FILES["image"]) ||
        $_FILES["image"]["error"] === UPLOAD_ERR_NO_FILE
    ) {
        $errors["image"] = "Please upload your image.";

    } elseif ($_FILES["image"]["error"] !== UPLOAD_ERR_OK) {

        $errors["image"] = "There was a problem uploading the image.";

    } else {

        $imageName = $_FILES["image"]["name"];

        // Get the file extension
        $extension = strtolower(
            pathinfo($imageName, PATHINFO_EXTENSION)
        );

        // Allowed image extensions
        $allowedExtensions = ["jpg", "jpeg", "png", "gif"];

        if (!in_array($extension, $allowedExtensions)) {

            $errors["image"] =
                "Only JPG, JPEG, PNG and GIF images are allowed.";

        } else {

            // Confirm that the uploaded file is an actual image
            $imageInfo = getimagesize($_FILES["image"]["tmp_name"]);

            if ($imageInfo === false) {

                $errors["image"] =
                    "The uploaded file is not a valid image.";
            }
        }
    }

    // 5. Display success message if there are no errors
    if (empty($errors)) {

        $success = "All information is valid! Registration completed.";

    }
}

?>

<?php 
if (!empty($errors)): ?>

<script>
document.addEventListener("DOMContentLoaded", function () {

    let firstError = <?= json_encode(array_key_first($errors)) ?>;

    let field = document.getElementById(firstError);

    if (field) {
        field.focus();

        field.scrollIntoView({
            behavior: "smooth",
            block: "center"
        });
    }

});
</script>

<?php endif; ?>




