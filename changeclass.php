<?php include 'connection.php';?>
<?php


if (isset($_POST['submit'])) {
    $oldClass = $_POST['old_class'];
    $newClass = $_POST['new_class'];


    $query = "UPDATE admissions SET class='$newClass' WHERE class='$oldClass'";
    $result = $conn->query($query);

    if ($result) {
        echo "<script>  alert('Class updated successfully for students with old class')</script>";
        // echo "Class updated successfully for students with old class: $oldClass";
    } else {
        echo "Error updating class for students: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Francois+One&display=swap" rel="stylesheet">
    <title>Update Class for Students</title>
    <style>
         * {
     

     font-family: 'Bree Serif', serif;
    
   }
        body {
            font-family: Arial, sans-serif;
            background:url("back6.png") ;
            background: url(back6.png) 52% 54%;
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
            font-size: 1.5rem;
        }

        input[type="text"] {
      
            width: 250px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 30%;
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
    width: 97%;
        }

        button {
            padding: 20px 60px;
    background-color: #3399ff;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    font-size: 27px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    border-radius: 5px;
    font-size: 27px;
    cursor: pointer;
    transition: 0.3s ease;
    padding: 12px 46px;
    background-color: blue;
}
        

        button:active {
           
    transform:scale(0.9);
    
        }
       .center{
        position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    background: white;
    border-radius: 10px;
    box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
    width: 564px;
    border:1px solid blue;
    
       }
body{
    margin: 0;
  padding: 0;
 
  height: 100vh;
  overflow: hidden;
}
h2{
    text-align: center;
  padding: 20px 0;
  border-bottom: 1px solid silver;
  margin-bottom: 42px;
}
form{
    padding: 0 40px;
  box-sizing: border-box;
}
.submit{
    margin-top:30px;
    margin-bottom:40px;
    width:97%;
    text-align:center;
    display:flex;
    justify-content: center;
}
label{
    margin-top:20px;
}

.data{
    zoom:80%;
    line-height: 30px;
     word-spacing: 6px;
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
      <li class="nav-link"><a href="search1.php">Search For Student</a> <div class="underline"></div></li>
      <li class="nav-link"><a href="fees.php">Manage Fees</a><div class="underline"></div></li>
      <li class="nav-link active-link"><a href="changeclass.php">Change Class</a> <div class="underline"></div></li> 
     
      <li><a href="logout.php">Logout</a><div class="underline"></div></li> 
        </ul>
    </nav>
</header>
<div class="data">
    <div class="center">
    <h2>Update Class for Students</h2>
    <form method="POST" action="">
        <label for="old_class">Old Class:</label>
        <input type="text" name="old_class" placeholder="Enter the old class" required><br><br>
        <label for="new_class">New Class:</label>
        <input type="text" name="new_class" placeholder="Enter the new class" required><br><br>
        <div class="submit">
        <button type="submit" name="submit">Update Class</button></div>
    </form></div></div>
</body>
</html>

<?php

$conn->close();
?>

