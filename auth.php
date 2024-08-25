<?php
    
    session_start();

if (!isset($_SESSION['email']) || empty($_SESSION['email']) ||  !isset($_SESSION['log'])) {
    header("Location: login.php");
    exit();
}

if (!isset($_SESSION['last_login_time']) || (time() - $_SESSION['last_login_time']) > 900) {
  
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

$_SESSION['last_login_time'] = time();
    
      

    ?>