<?php include 'connection.php';?><?php include 'auth.php';?>
<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Francois+One&display=swap" rel="stylesheet">
  <title>Student Data</title>
  <style>
    body{
      overflow:visible;
    }
    * {
     

      font-family: 'Bree Serif', serif;
      line-height: 30px;
      word-spacing: 6px;
    }

    .search-container {
      margin-top: 20px;
    }

    .search-container input[type=text] {

    
      padding: 10px;
      width: 300px;
      width: 377px;
    font-size: 1.2rem;
    width: 513px;  border: 1px solid #bfb9b9;
    border-radius: 6px;
    
    box-shadow: 0 0 5px #ccc;
    outline: none;
    padding: 12px;
    font-size: 1.3rem;
    
    }

   form{
    text-align:center;
   }
    .student-container {
      display: flex;
      flex-wrap: wrap;
    }

    .student-card {
      width: 300px;
      background-color: #f2f2f2;
      border-radius: 5px;
      margin: 10px;
      padding: 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      background-color: #ebf5ff;
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
    }

    .student-card:hover {
      transform: translateY(-10px);
    }

    .student-card p {
      margin: 10px 0;
    }

    .student-card img {
      width: 16%;
      height: auto;
      margin-bottom: 10px;
    }

    .actions {
      display: flex;
      justify-content: space-between;
    }
  
    .actions a {
      padding: 5px 10px;
    
      color: white;
      text-decoration: none;
      width: 120px;
    padding: 0.5rem;
    border: 2px solid #333;
    color: #333;
    text-align: center;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s ease;
    margin: 26px auto;
    }

    /* Additional Styles for Horizontal Display */
    .student-card .field-container {
      display: flex;
      flex-wrap: wrap;
    }

    .student-card .field-container p {
      flex: 1 1 50%; /* Two fields per row */
      
    font-size: 1.3rem;

    }

    .student-card h3,
    .student-card p {
      display: inline-block;
      width: 48%; /* Set the width for each field to occupy half of the student card width */
      margin-bottom: 10px;
    }
    
    .student-card {
    
      width: 80%;
      margin: 10px auto;
       margin: 34px auto;
       width: 92%;
   background-color:white;
       border-width: 1px;
    }

    .student-card h3,
    .student-card p {
      width: 100%;
      margin: 5px 0;
      width: auto;
    }

    .student-card p {
      line-height: 1.5;
    }
    .actions a:hover {
    background-color: #333;
    color: #fff;
}
strong{
  font-weight:100;

}
.student-card h3{
  margin-left:30px;
  width: 100%;
    text-align: center;
    font-size: 2.6rem;
    text-transform:capitalize;
}

.student-card img {
    width: 160px;
    height: 160px;
    border-radius: 60%;
    margin-bottom: 10px;
    object-fit: cover;
} 


    .search-container input[type=submit] {
            color: black;
            background-color: white;
            font-size: 1.3rem;
            margin: 20px;
            padding: 10px;
            border: 1px solid black;
            transition-property: all;
            transition-duration: 0.2s;
            transition-timing-function: ease-in-out;
            border-radius: 5px;
            cursor: pointer;
            background-color: blue;
        }

        .search-container input[type=submit]:hover {
            color: white;
            background-color: blue;

        }

        .search-container input[type=submit]:active {


            transform: scale(0.9);
        }
         .search-container input[type=submit] {
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
    font-size: 27px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    padding: 12px 46px;
    background-color: blue;

   
    }
   p{
    text-align: justify;
   }
  </style>
</head>
<body>
  <div class="search-container">
    <form method="GET" action="" autocomplete="off">
      <input type="text" placeholder="Search by name..." name="search"  value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
      <input type="submit" value="Search">
    </form>
  </div>

  <div class="student-container">
    <?php
      if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $query = "SELECT * FROM admissions WHERE name LIKE '%$search%'";
      } else {
        $query = "SELECT * FROM admissions";
      }

      $result = $conn->query($query);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { 
          
          echo "<div class='student-card'>";
          echo "<h3>".$row['name']."</h3>";
          echo "<img src='" .$row["photo"]. "' width='100'>";
         
          echo "<div class='field-container'>";
          foreach ($row as $key => $value) {
            if ($key != 'id' && $key != 'photo' && $key != 'name') {
              echo "<p><strong>".ucwords(str_replace('_', ' ', $key)).":</strong> ".$value."</p>";
            }
          }
          echo "</div>"; // Closing field-container
          echo "<div class='actions'>";
          echo "<a href='update1.php?id=".$row['id']."'>Update</a>";
          // echo "<a href='print.php?id=".$row['id']."'>Print</a>";
          echo "<a href='print.php?id=".$row['id']."' class='print-button'>Print</a>";
          echo "<a href='delete.php?id=".$row['id']."'>Delete</a>";
         
          echo "</div>";
          echo "</div>";
        }
      } else {
        echo "<p>No records found</p>";
      }

      $conn->close();
    ?>
  </div>

</body>
</html>

