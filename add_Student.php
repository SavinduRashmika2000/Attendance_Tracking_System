<?php

require_once "config.php";
 $loginErr="";
 if(isset($_POST['add'])){
	$stuId =  $_POST['stuID'];
	$name =  $_POST['stuName'];
	$level =  $_POST['Level'];
	$department=$_POST['department'];
	
	$sql="select * from  student where stuId =  '$stuId' ";
	$result = mysqli_query($connection,$sql);

   if(mysqli_num_rows($result)==1){
     $loginErr="Student Already Exist";
   }
   else{
    $loginErr="Invalid username or password";
	$sql = "INSERT INTO student VALUES('$stuId','$name','$level','$department')";

	mysqli_query($connection,$sql);

	$loginErr="Student added Sucsessfully";
   }

	
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="Style/admin.css">
</head>
<body>



<div class="container">
           <h1>Add Student</h1>
		   <p class="error"><?php echo $loginErr ?></p>
        <form class="form" action = "add_Student.php" method = "POST">
			
            <div class="form-group">
            <input class="typeind" type="text" name="stuID" placeholder="Enrolled Number=>(2020/ICT/1XX)" required>
            </div>
		    <div class="form-group">
            <input class="typeind" type="text" name="stuName" placeholder="Name" required>
			</div>
		    <div class="form-group">
            <input class="typeind" type="text" name="Level" placeholder="Level" required>
            </div>
		    <div class="form-group">
            <input class="typeind" type="text" name="department" placeholder="Department => (it,amc,bio)" required>
            </div>
		    <div class="form-group">
            <input type="submit" value="ADD STUDENT" name="add" class="button">
			</div>
        </form>
       <div class="logout"> <a class="logout_text" href="logout2.php" >Back</a></div>
  
</div>



</body>
</html>