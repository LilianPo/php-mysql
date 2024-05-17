<?php

print_r(password_hash("admin123", PASSWORD_DEFAULT));

session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    die("Vale koht");
}
else{
    
}

?>
<h1>ERITI SALAJANE</h1>
<a href="logout.php">Logi välja</a>