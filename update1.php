<?php include 'auth.php';?>
<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Francois+One&display=swap" rel="stylesheet">
  <title>New update Admission Form</title>
  <style>
       * {
      font-family: 'Bree Serif', serif;
    
    }
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
      background: url(back.jpg) no-repeat center top/cover;background: url(back1.jpg) no-repeat center top/cover;
      
    }

    .form-container {
     width: 500px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin: 106px auto;
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
    /* font-weight: bold; */
    margin-bottom: 5px;
    color: #333333;
    font-size: 1.2rem;

    }

   
    input[type="file"],
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
      box-shadow: 1px 1px #94a4c9;
      font-size: 20px;
    }
    input[type="file"]{
        font-size: 17px;
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
      padding: 20px 60px;
    background-color: #3399ff;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    font-size: 27px;
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
    min-width: 600px;
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

    .form-row.file-upload{
      width: 150px;
            height: 150px;

    }
    .img-preview {
            margin: auto;
            margin-bottom: 10px;
            text-align: center;
            border-radius: 50%;
            overflow: hidden;
            width: 150px;
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .img-preview img {
          width: 150px;
            height: 150px;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        img{
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
        .form-container {
         
          width:90%;

        }
        form{

          margin-top: 30px;
    display: flex;
    /* width: 90%; */
    flex-wrap: wrap;
    gap: 22px;
    justify-content: center;

           display:flex;
     
          flex-wrap:wrap;
        }

        nav ul {
    list-style: none;
}

nav ul li a {
    text-decoration: none;
    color: #333;
}



header {
    background-color: #fff;
    padding: 0px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    z-index: 999;
}

nav ul {
    display: flex;
    align-items: center;
}

nav li {
    margin-right: 20px;
}

nav a {
    font-size: 1rem;    font-size: 0.9rem;
    color: #555;
    padding: 10px;
    transition: all 0.2s ease-in-out;
}

nav a:hover {
    color: #007bff;
    background-color: #f9f9f9;
    border-radius: 5px;
}
.data{
zoom:90%;  line-height: 30px;
      word-spacing: 6px;

}
  </style>
</head>

<body>
    
</body>
</html>
<?php include 'connection.php';?>
<?php


if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $studentId = $_POST['student_id'];
    $grId = $_POST['gr_id'];
    $dob = $_POST['dob'];
    $religion = $_POST['religion'];
    $cast = $_POST['cast'];
    $subcast = $_POST['subcast'];
    $age = $_POST['age'];
    $placeOfBirth = $_POST['place_of_birth'];
    $fatherName = $_POST['father_name'];
    $permanentAddress = $_POST['permanent_address'];
    $pinCode = $_POST['pin_code'];
    $email = $_POST['email'];
    $contactNumber = $_POST['contact_number'];
    $otherContactNumber = $_POST['other_contact_number'];
    $transportation = $_POST['transportation'];
    $class=$_POST['class'];

    if ($_FILES['photo']['name']) {
    $file = $_FILES['photo'];
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    

    // Specify the directory where the file will be saved
    $target_directory = 'uploads/';
    
    // Generate a unique name for the file
    $file_destination = $target_directory . uniqid() . '_' . $file_name;
    
    // Move the uploaded file to the desired location
    move_uploaded_file($file_tmp, $file_destination);

    $query = "UPDATE admissions SET name='$name', student_id='$studentId', gr_id='$grId', dob='$dob', religion='$religion', cast='$cast', subcast='$subcast', age='$age', place_of_birth='$placeOfBirth', father_name='$fatherName', permanent_address='$permanentAddress', pin_code='$pinCode', email='$email', contact_number='$contactNumber', other_contact_number='$otherContactNumber', transportation='$transportation', class='$class', photo='$file_destination' WHERE id=$id";
     }
     else{
      $query = "UPDATE admissions SET name='$name', student_id='$studentId', gr_id='$grId', dob='$dob', religion='$religion', cast='$cast', subcast='$subcast', age='$age', place_of_birth='$placeOfBirth', father_name='$fatherName', permanent_address='$permanentAddress', pin_code='$pinCode', email='$email', contact_number='$contactNumber', other_contact_number='$otherContactNumber', transportation='$transportation', class='$class' WHERE id=$id";
     }
     $result = $conn->query($query);

    if ($result) { 
      // header("Location: search1.php");
      // exit();
        
      echo "<script>  alert('Student record updated successfully.')</script>";
        echo "Student record updated successfully.";
       
    } else {
        echo "Error updating student record: " . $conn->error;
    }
}

$id = $_GET['id'];

$query = "SELECT * FROM admissions WHERE id=$id";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    ?>
 <!DOCTYPE html>
    <html>
    <head>
        <title>Update Student Data</title>
    </head>
    <body>
      
<header>
    <nav>
        <ul>
        <li><a href="addmission.php">New Admission</a></li>
      <li><a href="search1.php">Search For Student</a></li>
      <li><a href="fees.php">Manage Fees</a></li>
      <li><a href="changeclass.php">Change Class</a></li> 
     
      <li><a href="logout.php">Logout</a></li> 
        </ul>
    </nav>
</header>
<div class="data">
    <div class="form-container">
    <h2 class="form-title">New update Admission Form</h2><div class="img-preview">
            <div class="imgsize preview-image"> <img id="preview" src="user.jpg" alt="Photo Preview"></div>
        </div>

    <form method="POST" action="" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
      


      <div class="form-row">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
      
      </div>
      <div class="form-row">
       
        <label for="image">Image:</label>
        <input type="file" id="photo" name="photo" accept="image/*" onchange="previewImage(event)" >
      
      </div>

      <div class="form-row">
        <label for="student-id">Student School ID:</label>
        <input type="text" name="student_id" value="<?php echo $row['student_id']; ?>"><br><br>
      </div>
      <div class="form-row">
        <label for="gr-id">GR ID:</label>
        <input type="text" name="gr_id" value="<?php echo $row['gr_id']; ?>"><br><br>
      </div>
      <div class="form-row">
        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" value="<?php echo $row['dob']; ?>"><br><br>
      </div>
      <div class="form-row">
        <label for="class">Class:</label>
        <input type="text" name="class" value="<?php echo $row['class']; ?>"><br><br>
      </div>
      <div class="form-row">
        <label for="religion">Religion:</label>
        <input type="text" name="religion" value="<?php echo $row['religion']; ?>"><br><br>
      </div>
      <div class="form-row">
        <label for="cast">Cast:</label>
        <input type="text" name="cast" value="<?php echo $row['cast']; ?>"><br><br>
      </div>
      <div class="form-row">
        <label for="subcast">Subcast:</label>
        <input type="text" name="subcast" value="<?php echo $row['subcast']; ?>"><br><br>
      </div>
      <div class="form-row">
        <label for="age">Age:</label>
        <input type="data" name="age" value="<?php echo $row['age']; ?>"><br><br>
      </div>
      <div class="form-row">
        <label for="place-of-birth">Place of Birth:</label>
        <input type="text" name="place_of_birth" value="<?php echo $row['place_of_birth']; ?>"><br><br>
      </div>
      <div class="form-row">
        <label for="father-name">Father's Name:</label>
        <input type="text" name="father_name" value="<?php echo $row['father_name']; ?>"><br><br>
      </div>
      <div class="form-row">
        <label for="permanent-address">Permanent Address:</label>
        <input type="text" name="permanent_address" value="<?php echo $row['permanent_address']; ?>"><br><br>
      </div>
      <div class="form-row">
        <label for="pin-code">Pin Code:</label>
        <input type="text" name="pin_code" value="<?php echo $row['pin_code']; ?>"><br><br>
      </div>
      <div class="form-row">
        <label for="email">Email ID:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
      </div>
      <div class="form-row">
        <label for="contact-number">Contact Number:</label>
        <input type="tel" name="contact_number" value="<?php echo $row['contact_number']; ?>"><br><br>
      </div>
      <div class="form-row">
        <label for="other-contact-number">Other Contact Number:</label>
        <input type="tel" name="other_contact_number" value="<?php echo $row['other_contact_number']; ?>"><br><br>
      </div>
      <div class="form-row">
        <label for="transportation">Transportation:</label>
        <input type="text" name="transportation" value="<?php echo $row['transportation']; ?>"><br><br>
      </div>
      <div class="form-submit">
        <input type="submit" class="button" name="submit" value="Update">
      </div>
    </form>
  </div>
  
</div>

</body>
</html>
<?php
} else {
    echo "Student record not found.";
}


$conn->close();
?>  

<script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.getElementById('preview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }

     
    </script>