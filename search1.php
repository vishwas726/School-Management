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
      /* background: url('back1.jpg') repeat center top/cover; */
    }
    * {
     

      font-family: 'Bree Serif', serif;
    
    }

    .search-container {
      margin-top: 60px;
      margin-bottom: -24px;
    }

    .search-container input[type=text] {

    
      padding: 10px;
    width: 300px;
    width: 377px;
    font-size: 1.2rem;
    width: 513px;
    border: 1px solid #bfb9b9;
    border-radius: 6px;
    box-shadow: 0 0 5px #ccc;
    outline: none;
    padding: 12px;
    font-size: 1rem;
    word-spacing: 6px;
    border:none;
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
      border: 1px solid blue;
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
    margin-bottom: auto;
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
    border-radius: 4%;
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
    font-size: 1rem;
    cursor: pointer;
    transition:all 0.1s ease-in;
    padding: 12px 46px;
    background-color: blue;

   
    }
    .search-container input[type=submit]:hover {
      background: blue;
      /* transform:translatey(-2px); */
    }
   /* p{
    text-align: justify;
   }


   h2 {
      color: #333;
      margin-bottom: 20px;
    } */
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
      text-transform: capitalize;
    }
    .photo-container {
        width: 100%;
      margin-bottom: 20px;
    }
    .photo-container img {
      width: 170px;
      height: 170px;
      object-fit:cover;
    }
    .all{
display:flex;
flex-wrap:wrap;
justify-content: space-around;

    }
    h2{color: #6719ff;
      margin-top: 35px;
    margin-bottom: 1px;
    }
    .photo-container span{
      font-size: 1.5rem;
     
    font-size: 2.5rem; font-size: 1.8rem;
    width: 74%;
    word-spacing: 25px;
    color: #1965d6;
    text-transform: capitalize;
    text-align: center;
    }

.data{
  zoom:90%;
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
        <li class="nav-link  " ><a href="addmission.php">New Admission</a> <div class="underline"></div></li>
      <li class="nav-link active-link"><a href="search1.php">Search For Student</a> <div class="underline"></div></li>
      <li class="nav-link"><a href="fees.php">Manage Fees</a><div class="underline"></div></li>
      <li class="nav-link"><a href="changeclass.php">Change Class</a> <div class="underline"></div></li> 
     
      <li><a href="logout.php">Logout</a><div class="underline"></div></li> 
        </ul>
    </nav>
</header>
<div class="data">

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
          ?>
          <div class='student-card'>
            <div class='all'> <div class="photo-container admission-details">
            <!-- <label>Photo:</label> -->
            <img src="<?php echo $row['photo']; ?>" alt="Student Photo"> <span><h2><?php echo $row['name']; ?></h2></span>
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
       <?php    
     echo "<div class='actions'>";
     echo "<a href='update1.php?id=".$row['id']."'>Update</a>";
     // echo "<a href='print.php?id=".$row['id']."'>Print</a>";
     echo "<a href='print.php?id=".$row['id']."' class='print-button'>Print</a>";
     echo "<a href='delete.php?id=".$row['id']."'>Delete</a>";
    
     echo "</div>";
     echo "</div>";   
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

