<?php include 'auth.php';?><?php include 'connection.php';?>

<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Francois+One&display=swap" rel="stylesheet">
  <title>New Admission Form</title>
  <style>
       * {
      font-family: 'Bree Serif', serif;
   
    }
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
      background: url(back1.jpg) no-repeat center top/cover;
      
    }

    .form-container {
     width: 500px;
      margin: 106px auto;
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
    input[type="tel"],textarea,
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
      text-transform: capitalize;
      
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
      width: 100%;
    }

    /* .button {
      padding: 20px 60px;
    background-color: #3399ff;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    font-size: 27px;
    cursor: pointer;
    transition: all 0.1s ease-in-out;
    }

    .button:hover {
      background-color: #0077ff;
    } */

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
    .form-row input[type="tel"],textarea,
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
    /* button {
  width: 150px;
  height: 60px;
  border: 3px solid #315cfd;
  border-radius: 45px;
  transition: all 0.3s;
  cursor: pointer;
  background: white;
  font-size: 1.2em;
  font-weight: 550;
  font-family: 'Montserrat', sans-serif;
}

button:hover {
  background: #315cfd;
  color: white;
  font-size: 1.5em;
} */
.button {
  position: relative;
  padding: 10px 22px;
  border-radius: 6px;
  border: none;
  color: #fff;
  cursor: pointer;
  background-color: #7d2ae8;
  transition: all 0.2s ease;


  padding: 20px 60px;
    

    font-size: 27px;
}

.button:active {
  transform: scale(0.96);
}

.button:hover {
      background-color: #0077ff;
    } 
.button:before,
.button:after {
  position: absolute;
  content: "";
  width: 150%;
  left: 50%;
  height: 100%;
  transform: translateX(-50%);
  z-index: -1000;
  background-repeat: no-repeat;
  z-index: 12;
}

.button:hover:before {
  top: -70%;
  background-image: radial-gradient(circle, #7d2ae8 20%, transparent 20%),
    radial-gradient(circle, transparent 20%, #7d2ae8 20%, transparent 30%),
    radial-gradient(circle, #7d2ae8 20%, transparent 20%),
    radial-gradient(circle, #7d2ae8 20%, transparent 20%),
    radial-gradient(circle, transparent 10%, #7d2ae8 15%, transparent 20%),
    radial-gradient(circle, #7d2ae8 20%, transparent 20%),
    radial-gradient(circle, #7d2ae8 20%, transparent 20%),
    radial-gradient(circle, #7d2ae8 20%, transparent 20%),
    radial-gradient(circle, #7d2ae8 20%, transparent 20%);
  background-size: 10% 10%, 20% 20%, 15% 15%, 20% 20%, 18% 18%, 10% 10%, 15% 15%,
    10% 10%, 18% 18%;
  background-position: 50% 120%;
  animation: greentopBubbles 0.6s ease;
}

@keyframes greentopBubbles {
  0% {
    background-position: 5% 90%, 10% 90%, 10% 90%, 15% 90%, 25% 90%, 25% 90%,
      40% 90%, 55% 90%, 70% 90%;
  }

  50% {
    background-position: 0% 80%, 0% 20%, 10% 40%, 20% 0%, 30% 30%, 22% 50%,
      50% 50%, 65% 20%, 90% 30%;
  }

  100% {
    background-position: 0% 70%, 0% 10%, 10% 30%, 20% -10%, 30% 20%, 22% 40%,
      50% 40%, 65% 10%, 90% 20%;
    background-size: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;
  }
}

.button:hover::after {
  bottom: -70%;
  background-image: radial-gradient(circle, #7d2ae8 20%, transparent 20%),
    radial-gradient(circle, #7d2ae8 20%, transparent 20%),
    radial-gradient(circle, transparent 10%, #7d2ae8 15%, transparent 20%),
    radial-gradient(circle, #7d2ae8 20%, transparent 20%),
    radial-gradient(circle, #7d2ae8 20%, transparent 20%),
    radial-gradient(circle, #7d2ae8 20%, transparent 20%),
    radial-gradient(circle, #7d2ae8 20%, transparent 20%);
  background-size: 15% 15%, 20% 20%, 18% 18%, 20% 20%, 15% 15%, 20% 20%, 18% 18%;
  background-position: 50% 0%;
  animation: greenbottomBubbles 0.6s ease;
}

@keyframes greenbottomBubbles {
  0% {
    background-position: 10% -10%, 30% 10%, 55% -10%, 70% -10%, 85% -10%,
      70% -10%, 70% 0%;
  }

  50% {
    background-position: 0% 80%, 20% 80%, 45% 60%, 60% 100%, 75% 70%, 95% 60%,
      105% 0%;
  }

  100% {
    background-position: 0% 90%, 20% 90%, 45% 70%, 60% 110%, 75% 80%, 95% 70%,
      110% 10%;
    background-size: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;
  }
}
    
.data{zoom:90%;   line-height: 30px;
      word-spacing: 6px;}

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




a {
	outline: none;
}

.navbar-container {
	

}

.navbar-container ul {
  margin: 6px 0px;
	/* margin: 0;
	padding: 0;
	text-align: right; */
	/* display: inline-block;
	vertical-align: middle; */
}

.navbar-container ul li {
	/* display: inline-block; */
	/* font-size: 16px; */
}

.navbar-container ul li a {
	
	text-decoration: none;
	display: inline-block;	
	
	transition: color 0.5s;
}

.navbar-container ul li .underline {
	height: 3px;
	background-color: transparent;
	width: 0%;
	transition: width 0.2s, background-color 0.5s;
	margin: 0 auto;
}

.navbar-container ul li.active-link .underline {
	width: 100%;
	background-color: blue;
}

.navbar-container ul li:hover .underline {
	background-color: blue;
	width: 100%;
}

.navbar-container ul li:hover a {
}

.navbar-container ul li:active a {
	transition: none;
	color: blue;
}

.navbar-container ul li:active .underline {
	transition: none;
	background-color: #007bff;
}
  </style>
 
</head> <script>
    $('.nav-link').on('click', function() {
	$('.active-link').removeClass('active-link');
	$(this).addClass('active-link');
});
    </script>
<body>
<header class="navbar-container">
    <nav >
        <ul>
        <li class="nav-link active-link " ><a href="addmission.php">New Admission</a> <div class="underline"></div></li>
      <li class="nav-link "><a href="search1.php">Search For Student</a> <div class="underline"></div></li>
      <li class="nav-link"><a href="fees.php">Manage Fees</a><div class="underline"></div></li>
      <li class="nav-link"><a href="changeclass.php">Change Class</a> <div class="underline"></div></li> 
     
      <li><a href="logout.php">Logout</a><div class="underline"></div></li> 
        </ul>
    </nav>
</header>
<div class="data">

  <div class="form-container">
    <h2 class="form-title">New Admission Form</h2><div class="img-preview">
            <div class="imgsize preview-image"> <img id="preview" src="user.jpg" alt="Photo Preview"></div>
        </div>
    <form method="POST" enctype="multipart/form-data">
  
      


      <div class="form-row">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required style="text-transform: capitalize";>
      
      </div>
      <div class="form-row">
       
        <label for="image">Image:</label>
        <input type="file" id="photo" name="photo" accept="image/*" onchange="previewImage(event)" required>
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
        <input type="text" id="religion" name="religion" required style="text-transform: capitalize";>
      </div>
      <div class="form-row">
        <label for="cast">Cast:</label>
        <input type="text" id="cast" name="cast" required style="text-transform: capitalize";>
      </div>
      <div class="form-row">
        <label for="subcast">Subcast:</label>
        <input type="text" id="subcast" name="subcast" required style="text-transform: capitalize";>
      </div>
      <div class="form-row">
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
      </div>
      <div class="form-row">
        <label for="place-of-birth">Place of Birth:</label>
        <input type="text" id="place-of-birth" name="place-of-birth" required style="text-transform: capitalize";>
      </div>
      <div class="form-row">
        <label for="father-name">Father's Name:</label>
        <input type="text" id="father-name" name="father-name" required>
      </div>
      <div class="form-row">
        <label for="permanent-address">Permanent Address:</label>
        <textarea type="text" id="permanent-address" name="permanent-address" required="" style="width: 141px; height: 54px;"></textarea>
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
       <button class="button" type="submit" class="button " value="Submit">Submit</button>
      </div>
    </form>
  </div>
</div>  
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
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Existing code for handling other form fields
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
  $class = $_POST['class'];
  $photoName = $_FILES['photo']['name'];
  $photoTmpName = $_FILES['photo']['tmp_name'];
  $photoError = $_FILES['photo']['error'];

 
    // Set the upload directory and move the uploaded file
    $uploadDirectory = 'uploads/'; // Set the directory where you want to store the uploaded photos
    $uploadedFilePath = $uploadDirectory . $photoName;
    move_uploaded_file($photoTmpName, $uploadedFilePath);
   
      // Insert the file path into the database
      $query = "INSERT INTO admissions (name, student_id, gr_id, dob, religion, cast, subcast, age, place_of_birth, father_name, permanent_address, pin_code, email, contact_number, other_contact_number, transportation, class, photo)
                VALUES ('$name', '$studentId', '$grId', '$dob', '$religion', '$cast', '$subcast', '$age', '$placeOfBirth', '$fatherName', '$permanentAddress', '$pinCode', '$email', '$contactNumber', '$otherContactNumber', '$transportation', '$class', '$uploadedFilePath')";

      if (mysqli_query($conn, $query)) {
        echo "<script>  alert('Adnission successfull')</script>";
        header('Location: dashboard.php');
        exit;
      } else {
        echo "Error: " . mysqli_error($conn);
      }
  

  mysqli_close($conn);
}
?>
</body>
</html>
