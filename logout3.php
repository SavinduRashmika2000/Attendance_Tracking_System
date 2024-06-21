<?php
    session_start();
    session_destroy();
    header("Location:attendance_Update.php");
    exit();
?>