<?php
require_once "config.php";
$subject = array_shift($_GET);
$date = array_shift($_GET);
$time = array_shift($_GET);
$course = array_shift($_GET);
$level = array_shift($_GET);

print_r($_GET);

foreach($_GET as $key => $value){
    $q = "INSERT INTO student_subjects VALUES('$key','$subject','$date','$time','$value')";
    mysqli_query($connection,$q);
}
session_destroy();
session_start();
$_SESSION['Course']=$course;
$_SESSION['Level']=$level;
$_SESSION['complete']="complete";

header("Location: attendance_Mark.php");

?>