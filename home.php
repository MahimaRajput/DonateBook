<?php
include_once "navbar.php";
session_start();
if(!isset($_SESSION['username']))
header("location:login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
 <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1></center>
    <a href="logout.php"><h3><center>Want to logout click here</center></h3></a>
 
    <?php 
    include "logindisplay.php";?>
</body>
</html>