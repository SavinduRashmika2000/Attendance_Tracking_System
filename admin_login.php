<?php
  require_once('config.php');
  $loginErr="";
  if(isset($_POST['admin_login'])){
    $admin_name=$_POST['admin_name'];
    $admin_password=$_POST['admin_password'];
    $sql="select * from  admin where user_name =  '$admin_name' AND password = '$admin_password'";
   $result = mysqli_query($connection,$sql);

   if(mysqli_num_rows($result)==1){
    header("Location: admin_dashboard.php");
   }
   else{
    $loginErr="Invalid username or password";
   }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="Style/admin.css">
</head>
<body>



<div class="container">
  <h1>ADMIN LOGIN</h1>
  <p class="error">
  <?php echo $loginErr ?></p>
  <form class="form" action="admin_login.php" method="post">
   
    <div class="form-group">
      <h4>USERNAME:</h4>
      <input type="text" id="admin_name" name="admin_name" required>
  	</div>	

    
    <div class="form-group">
     <h4>PASSWORD:</h4>
      <input type="password" id="admin_password" name="admin_password" >
	  </div>
 

    <input type="submit" class="button" name="admin_login" value="LOGIN">
  
  </form>

<br><br>

<div class="logout"> <a class="logout_text" href="index.php" >Back</a></div>
</div>

</body>
</html>
