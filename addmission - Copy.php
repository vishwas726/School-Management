<?php include 'auth.php';?>
<!DOCTYPE html>
<html>
<head>
  <title>New Admission Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
    }

    .form-container {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-title {
      text-align: center;
      margin-top: 0;
      color: #333333;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      color: #333333;
    }

    input[type="text"],
    input[type="date"],
    input[type="number"],
    input[type="email"],
    input[type="tel"],
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #cccccc;
      border-radius: 5px;
      background-color: #ffffff;
      box-sizing: border-box;
      transition: border-color 0.3s ease;
      color: #333333;
      font-size: 14px;
    }

    input[type="text"]:focus,
    input[type="date"]:focus,
    input[type="number"]:focus,
    input[type="email"]:focus,
    input[type="tel"]:focus,
    select:focus {
      outline: none;
      border-color: #3399ff;
    }

    select {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='6' viewBox='0 0 10 6'%3E%3Cpath d='M0 0l5 5 5-5z'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 8px center;
    }

    select::-ms-expand {
      display: none;
    }

    .form-submit {
      text-align: center;
    }

    .button {
      padding: 10px 20px;
      background-color: #3399ff;
      color: #ffffff;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: #0077ff;
    }

    .form-row {
      display: flex;
      flex-direction: row;
      align-items: center;
      margin-bottom: 15px;
    }

    .form-row label {
      flex: 0 0 150px;
    }

    .form-row input[type="text"],
    .form-row input[type="date"],
    .form-row input[type="number"],
    .form-row input[type="email"],
    .form-row input[type="tel"],
    .form-row select {
      flex: 1;
      margin-left: 10px;
    }

    .form-row select {
      padding-right: 25px;
    }

    .form-row:last-child {
      margin-bottom: 0;
    }



    .form-row.file-upload {
      display: flex;
      flex-direction: row;
      align-items: center;
      margin-bottom: 15px;
    }

    .form-row.file-upload label {
      flex: 0 0 150px;
    }

    .form-row.file-upload input[type="file"] {
      flex: 1;
      margin-left: 10px;
    }

    .form-row.file-upload .preview-image {
      max-width: 100px;
      margin-left: 10px;
    }
  </style>
</head>
<?php include 'connection.php';?>
<?php



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $studentId = $_POST['student-id'];
    $grId = $_POST['gr-id'];
    $dob = $_POST['dob'];
    $religion = $_POST['religion'];
    $cast = $_POST['cast'];
    $subcast = $_POST['subcast'];
    $age = $_POST['age'];
    $placeOfBirth = $_POST['place-of-birth'];
    $fatherName = $_POST['father-name'];
    $permanentAddress = $_POST['permanent-address'];
    $pinCode = $_POST['pin-code'];
    $email = $_POST['email'];
    $contactNumber = $_POST['contact-number'];
    $otherContactNumber = $_POST['other-contact-number'];
    $transportation = $_POST['transportation'];
    $class=$_POST['class'];
   
    $query = "INSERT INTO admissions (name, student_id, gr_id, dob, religion, cast, subcast, age, place_of_birth, father_name, permanent_address, pin_code, email, contact_number, other_contact_number, transportation,class)
              VALUES ('$name', '$studentId', '$grId', '$dob', '$religion', '$cast', '$subcast', '$age', '$placeOfBirth', '$fatherName', '$permanentAddress', '$pinCode', '$email', '$contactNumber', '$otherContactNumber', '$transportation','$class')";

   
    if (mysqli_query($conn, $query)) {
       
        header('Location: dashboard.php');
        exit;
    } else {

        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
<body>
  <div class="form-container">
    <h2 class="form-title">New Admission Form</h2>
    <form method="POST">
      <div class="form-row">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-row">
        <label for="student-id">Student School ID:</label>
        <input type="text" id="student-id" name="student-id" required>
      </div>
      <div class="form-row">
        <label for="gr-id">GR ID:</label>
        <input type="text" id="gr-id" name="gr-id" required>
      </div>
      <div class="form-row">
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>
      </div>
      <div class="form-row">
        <label for="class">Class:</label>
        <input type="text" id="class" name="class" required>
      </div>
      <div class="form-row">
        <label for="religion">Religion:</label>
        <input type="text" id="religion" name="religion" required>
      </div>
      <div class="form-row">
        <label for="cast">Cast:</label>
        <input type="text" id="cast" name="cast" required>
      </div>
      <div class="form-row">
        <label for="subcast">Subcast:</label>
        <input type="text" id="subcast" name="subcast" required>
      </div>
      <div class="form-row">
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
      </div>
      <div class="form-row">
        <label for="place-of-birth">Place of Birth:</label>
        <input type="text" id="place-of-birth" name="place-of-birth" required>
      </div>
      <div class="form-row">
        <label for="father-name">Father's Name:</label>
        <input type="text" id="father-name" name="father-name" required>
      </div>
      <div class="form-row">
        <label for="permanent-address">Permanent Address:</label>
        <input type="text" id="permanent-address" name="permanent-address" required>
      </div>
      <div class="form-row">
        <label for="pin-code">Pin Code:</label>
        <input type="text" id="pin-code" name="pin-code" required>
      </div>
      <div class="form-row">
        <label for="email">Email ID:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-row">
        <label for="contact-number">Contact Number:</label>
        <input type="tel" id="contact-number" name="contact-number" required>
      </div>
      <div class="form-row">
        <label for="other-contact-number">Other Contact Number:</label>
        <input type="tel" id="other-contact-number" name="other-contact-number" required>
      </div>
      <div class="form-row">
        <label for="transportation">Transportation:</label>
        <select id="transportation" name="transportation" required>
          <option value="" disabled selected>Select an option</option>
          <option value="school-van">School Van</option>
          <option value="Arrange By Parents">Arrange by Parents</option>
        </select>
      </div>
      <div class="form-submit">
        <input type="submit" class="button" value="Submit">
      </div>
    </form>
  </div>
</body>
</html>
