
<!DOCTYPE html>
<html lang="en">
<head>
    

    
	   <link rel="stylesheet" href="Style/admin.css">
</head>
<body>



<div class="filter">

<form methode='GET' action='attendance_Insert.php'>
        <label for="Subject"></label>
        <select name="Subject" id="" class="typeind2">
            <?php
				$loginErr ="";
                require_once "config.php"; 
                session_start();
				if(isset($_POST['Course'])){
					 $level=$_POST['Level'];
					 $course=$_POST['Course'];
				}
				else{
					
					$course=$_SESSION['Course'];
					$level=$_SESSION['Level'];
					
				}
				if(isset($_SESSION['complete'])){
					$loginErr="Attendance Update Sucsessfull";
				}
                
                $sql="SELECT subCode FROM subjects WHERE year='$level' AND department ='$course'";
                $result=mysqli_query($connection,$sql);
                while($row=mysqli_fetch_row($result)){
                      echo "<option value='$row[0]''>$row[0]</option>";

                }
            
            ?>
            
        </select><br><br>

        <label for="Date"></label>
        <input type="Date" name="Date" id="" class="typeind2" required><br><br>

        <label for="Time"></label>
        <input type="Time" name="Time" id="" class="typeind2" required><br><br>
		
		<input type=submit value='Mark Attendance' class='button' >
</div>
<div class='container'>
 <p class="error"><?php echo $loginErr ?></p><br>
<table class='filetable'>
  
        <?php
               
                if(isset($_POST['Course'])){
					$course=$_POST['Course'];
					$lev=$_POST['Level'];
				}
				else{
					
					$course=$_SESSION['Course'];
					$lev=$_SESSION['Level'];
				}
                
                $q="SELECT * FROM student WHERE Level = '$lev' AND department ='$course'";
               
                $result1=mysqli_query($connection,$q);
                echo "<input type=hidden name='course' value=$course>";
                echo "<input type=hidden name='leval' value=$lev>";
				echo "<th class='th1'>Enrolled Number</th>";
				echo "<th class='th1'>Attendance</th>";
                while($row=mysqli_fetch_row($result1)){
                    echo "<tr >";
                    echo "<td  class='filetabletd'>$row[0]</td> ";
                    echo "<td  class='filetabletd' style='width:10%'><input class='atdreport_text' type='text' name=$row[0]   placeholder='0 or 1' required></td>";
                    echo "</tr>";
                }
                
                
                
           
        ?>
        

    </table>
</div>

</form>


<div class="buttonCont">

<div class="logout"> <a class="logout_text" href="logout3.php" >Back</a></div>

</div>

</body>

</html>