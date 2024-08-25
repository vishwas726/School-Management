<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
       <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
  @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  margin: 0;
  padding: 0;
  background: url('back4.jpg') no-repeat center top/cover;
  height: 100vh;
  overflow: hidden;
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
}
.center h1{
  text-align: center;
  padding: 20px 0;
  border-bottom: 1px solid silver;
}
.center form{
  padding: 0 40px;
  box-sizing: border-box;
}
form .txt_field{
  position: relative;
  border-bottom: 2px solid #adadad;
  margin: 30px 0;
}
.txt_field input{
  width: 100%;
  padding: 0 5px;
  height: 40px;
  font-size: 16px;
  border: none;
  background: none;
  outline: none;
}
.txt_field label{
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
  transition: .5s;
}
.txt_field span::before{
  content: '';
  position: absolute;
  top: 40px;
  left: 0;
  width: 0%;
  height: 2px;
  background: #2691d9;
  transition: .5s;
}
.txt_field input:focus ~ label,
.txt_field input:valid ~ label {
  top: -5px;
  color: #2691d9;
}
.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
  width: 100%;
}
.pass{
  margin: -5px 0 20px 5px;
  color: #a6a6a6;
  cursor: pointer;
}
.pass:hover{
  text-decoration: underline;
}
input[type="submit"]{
  width: 100%;
  height: 50px;
  border: 1px solid;
  background: #2691d9;
  border-radius: 25px;
  font-size: 18px;
  color: #e9f4fb;
  font-weight: 700;
  cursor: pointer;
  outline: none;
  margin-bottom: 80px;
}
input[type="submit"]:hover{
  border-color: #2691d9;
  transition: .5s;
}

    </style>
</head>

<body>
<div class="center">
      <h1>Login</h1>
      <form method="post" autocomplete="none" >
        <div class="txt_field">
        <input type="text" id="email" name="email" required>
          <span></span>
          <label for="email">User Name:</label>
        </div>
        <div class="txt_field">
        <input type="password" id="password" name="password" required>
          <span></span>
          <label for="password">Password:</label>
        </div>
      
        <input type="submit" value="Login">
       
      </form>
    </div>
        </form>
    </div>
</body>


<scipt>
    
</scipt>
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = "localhost";
    $username = "bargajeg_vishwas";
    $password = "vishwas726";
    $dbname = "bargajeg_info";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
 
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM sig WHERE email = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['email'] = $email;
        $_SESSION['log']=true;
        $_SESSION['last_login_time'] = time();

        header("Location: search1.php");
        // header("Location: dashboard.php");
        exit();
    } else {
        header("Location: login.php?error=1");
        exit();
    }

    mysqli_close($conn);
} else {
    if (isset($_SESSION['email']) && isset( $_SESSION['log'])) {
        header("Location: dashboard.php");
        exit();
    }

    if (isset($_GET['error']) && $_GET['error'] == 1) {
        echo '<script>alert("Please enter correct email ID and password.");</script>';
    }
}
?>



</html>
