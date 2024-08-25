

<!DOCTYPE html>
<html>
<head>
  <title>School Management System</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      
    }
    
    .container {
       
      max-width: 800px;
      margin: 0 auto; margin-top:150px;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      height: 300px;
      display: flex;
      flex-direction:Column;
      align-items:center;
      justify-content: center;
    }
    
    h1 {
      text-align: center;
      color: #333;
      margin-bottom:20px;
    }
    
    .menu {
      list-style-type: none;
      padding: 0;
      margin: 20px 0;
      text-align: center;
    }
    
    .menu li {
      display: inline-block;
      margin-right: 10px;
    }
    
    .menu li a {
      display: inline-block;
      padding: 10px 20px;
      text-decoration: none;
      color: #333;
      background-color: #f2f2f2;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }
    
    .menu li a:hover {
      background-color: #333;
      color: #fff;
    }
  </style>
</head>
<?php include 'auth.php';?>
<body>
  <div class="container">
    <h1>Ashlesha Primary School, Jalna</h1>
    <ul class="menu">
      <li><a href="addmission.php">New Admission</a></li>
      <li><a href="search1.php">Search for Student</a></li>
      <li><a href="fees.php">Manage Fees</a></li>
      <li><a href="changeclass.php">Change Class</a></li> 
     
      <li><a href="logout.php">Logout</a></li> 
    </ul>
    
  </div>
 
</body>
</html>
