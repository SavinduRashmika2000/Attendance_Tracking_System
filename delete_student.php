<?php

require_once "config.php";

$indexNum = $_GET['stuID'];

$q = "DELETE FROM student WHERE stuID='$indexNum'";

mysqli_query($connection,$q); 
session_destroy();
session_start();
$_SESSION['complete']="complete";
header('Location: manage_Student.php');

?>