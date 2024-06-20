<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Admin Loging Page</title>

	   <link rel="stylesheet" href="Style/admin.css">
</head>
<body>



<div class="filter">
	  <h1>Select The Catogory</h1><br>
    <div class="input-group",class="typeind">
            <form action="attendance_Mark.php" method="post">
            <br><br>
            <label for="Level"></label>
            <select name="Level"  class="typeind">
                <option value="1">1st Year</option>
                <option value="2">2nd Year</option>
                <option value="3">3rd Year</option>
                <option value="4">4th Year</option>
            </select>
            <br><br>
            <label for="Course"></label>
            <select name="Course" id="Course" class="typeind">
               <option value="it">IT</option>
				<option value="amc">AMC</option>
				<option value="bio">BIO</option>
                
            </select>
            <br><br>
             <input type="submit" value="Insert New" class="button"  name="insert" >
        </form>

       

    </div>
</div>






<div class="buttonCont">
<div class="logout"> <a class="logout_text" href="admin_dashboard.php" >Back</a></div>
<div class="button_right"> <a class="logout_text" href="add_Student.php" >Add Student</a></div>

</div>












</body>
</html> 