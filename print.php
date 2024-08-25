<?php
include 'connection.php';
include 'auth.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $query = "SELECT * FROM admissions WHERE id = $id";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Francois+One&display=swap" rel="stylesheet">
  <title>Print Student Data</title>
  <style>
    
    body {
      font-family: 'Bree Serif', serif;
      line-height: 30px;
      word-spacing: 6px;
      padding: 20px;
    }

    .student-card {
      width: 300px;
      background-color: #f2f2f2;
      border-radius: 5px;
      margin: 10px;
      padding: 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      background-color: white;
      width: 24rem;
      margin-bottom: 2rem;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      transition: transform 0.3s ease;
      width: 80%; 
      margin: 10px auto;
      box-shadow: 0 0 10px #ccc;
    }

    .student-card h3 {
      color: #4CAF50;
      margin-top: 0;
      color: #5d00ee;
      font-size: 2rem;
      text-align: center;
      text-transform: capitalize;
    }

    .student-card p {
      margin: 10px 0;
    }

    .student-card img {
    
      margin-bottom: 10px;
      width: 160px;
    height: 160px;
    border-radius: 4%;
    margin-bottom: 10px;
    object-fit: cover;
    }

    .actions {
      text-align: center;
      margin-top: 20px;
    }

    .actions button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;

      padding: 20px 60px;
    background-color: #3399ff;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
    transition: all 0.6s ease-in-out;
    padding: 12px 46px;
    background-color: blue;
    }

  
    .actions button:active {
      background-color: #7272e7;

transform: scale(0.9);
}
h1{
  text-align:center;
  
   
    word-spacing: 20px;
    color: #1965d6;
    text-transform: capitalize;
    text-align: center;
}
.name{
  text-transform: capitalize;

}
  </style>
  <script>
    function printPage() {
      window.print();
    }
  </script>
</head>
<body>
<div class='student-card'>
            <div class='all'> <div class="photo-container admission-details">
            <h1>Ashlesha Primary School, Jalna</h1>
            <!-- <label>Photo:</label> -->
            <img src="<?php echo $row['photo']; ?>" alt="Student Photo"> <span>
          </div>
          <div class="admission-details">
            <label>Name:</label>
            <span class="name"><?php echo $row['name']; ?></span>
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
            <label>Contact Number 2:</label>
            <span><?php echo $row['other_contact_number']; ?></span>
          </div>
         <div class="admission-details">
            <label>Permanent Address:</label>
            <span><?php echo $row['permanent_address']; ?></span>
          </div>
        </div>

  <div class="actions">
    <button onclick="printPage()">Print</button>
  </div>

</body>
</html>

<?php
  } else {
    echo "<p>No records found</p>";
  }

  $conn->close();
} else {
  echo "<p>Invalid student ID</p>";
}
?>
