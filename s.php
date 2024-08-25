<?php
include 'connection.php';

// Retrieve the data from the database
$query = "SELECT * FROM admissions ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admission Details</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    h2 {
      color: #333;
      margin-bottom: 20px;
    }
    .admission-details {
      display: flex;
      /* flex-direction: column; */
      align-items: flex-start;
      margin-bottom: 10px;
    }
    .admission-details label {
      font-weight: bold;
      width: 150px;
    }
    .admission-details span {
      width: 200px;
    }
    .photo-container {
      margin-bottom: 20px;
    }
    .photo-container img {
      max-width: 200px;
      max-height: 200px;
    }
    .all{
display:flex;
flex-wrap:wrap;
    }
  </style>
</head>
<body>
  <h2>Admission Details</h2>
  <div class='all'> <div class="photo-container">
    <label>Photo:</label>
    <img src="<?php echo $row['photo']; ?>" alt="Student Photo">
  </div>
  <div class="admission-details">
    <label>Name:</label>
    <span><?php echo $row['name']; ?></span>
  </div>
  <div class="admission-details">
    <label>Student School ID:</label>
    <span><?php echo $row['student_id']; ?></span>
  </div>
  <div class="admission-details">
    <label>GR ID:</label>
    <span><?php echo $row['gr_id']; ?></span>
  </div>
  <div class="admission-details">
    <label>Date of Birth:</label>
    <span><?php echo $row['dob']; ?></span>
  </div>
  <div class="admission-details">
    <label>Religion:</label>
    <span><?php echo $row['religion']; ?></span>
  </div>
  <div class="admission-details">
    <label>Cast:</label>
    <span><?php echo $row['cast']; ?></span>
  </div>
  <div class="admission-details">
    <label>Subcast:</label>
    <span><?php echo $row['subcast']; ?></span>
  </div>
  <div class="admission-details">
    <label>Age:</label>
    <span><?php echo $row['age']; ?></span>
  </div>
  <div class="admission-details">
    <label>Place of Birth:</label>
    <span><?php echo $row['place_of_birth']; ?></span>
  </div>
  <div class="admission-details">
    <label>Father's Name:</label>
    <span><?php echo $row['father_name']; ?></span>
  </div>
  <div class="admission-details">
    <label>Permanent Address:</label>
    <span><?php echo $row['permanent_address']; ?></span>
  </div>
  <div class="admission-details">
    <label>Pin Code:</label>
    <span><?php echo $row['pin_code']; ?></span>
  </div>
  <div class="admission-details">
    <label>Email ID:</label>
    <span><?php echo $row['email']; ?></span>
  </div>
  <div class="admission-details">
    <label>Contact Number:</label>
    <span><?php echo $row['contact_number']; ?></span>
  </div>
  <div class="admission-details">
    <label>Other Contact Number:</label>
    <span><?php echo $row['other_contact_number']; ?></span>
  </div>
 
</div>
</body>
</html>