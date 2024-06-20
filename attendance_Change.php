<?php
	require_once "config.php"; 
	session_start();
	$loginErr="";
	if(isset($_POST['submit'])){
		$number=$_POST['inputid'];
		
		$date=$_POST['Date'];
		
		
		$sql = "SELECT * FROM student_subjects WHERE stuID='$number' AND Date='$date'";
		
		$res=mysqli_query($connection,$sql);
		if(mysqli_num_rows($res)>0){
			$_SESSION['date']=$date;
			$_SESSION['index']=$number;
			$result2=$res;
		}
		else{
			 $loginErr="Not Found";
		}
		
	}
	
	if(isset($_POST['update'])){
		
		require_once "config.php";
		$time = $_POST['time'];
		$index = $_POST['index'];
		$subject = $_POST['subject'];
		$date= $_POST['date'];
		$value= $_POST['new_value'];
		
		$q = "UPDATE student_subjects SET Attendance='$value' WHERE stuID='$index' AND subCode='$subject' AND Date='$date' AND Time='$time'";
		$result=mysqli_query($connection, $q);
		if($result){
			 $loginErr="Update Successfull";
		}
	

	}
	
	
	

	


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Style/admin.css">
</head>
<body>



<div class="filter2">
 <p class="error"><?php echo $loginErr ?></p>
<form method='POST' action='attendance_Change.php'>
        <input class="typeind" name="inputid" type="text" placeholder="Enrollment number" <?php if(isset($_SESSION['index'])){echo 'value="' . $_SESSION['index'] . '"';}?> required><br><br>
        <label for="Date"></label>
        <input type="Date" name="Date" id="" class="typeind makeMargin" <?php if(isset($_SESSION['date'])){echo 'value="' . $_SESSION['date'] . '"';}?> required><br><br>
		<input type="submit" value="submit" name="submit" class='button' >
		
</form>
</div>
		
        <?php
              
               if(isset($result2)){
                echo "<div class='container2'>";
				echo "<table class='filetable2'>";
				echo "<tr><th class='th1'>Student</th>";
				echo "<th class='th1'>Subject</th>";
				echo "<th class='th1'>Date</th>";
				echo "<th class='th1'>Time</th>";
				echo "<th class='th1'>Old</th>";
				echo "<th class='th1'>New Attendance</th>";
				echo "<th ></th>";
				echo "</tr>";
                
               
           
                while($row=mysqli_fetch_row($result2)){
					echo "<form method='POST' action='attendance_Change.php'>";
                    echo "<input type=hidden name='index' value=$row[0]>";
					echo "<input type=hidden name='subject' value=$row[1]>";
					echo "<input type=hidden name='date' value=$row[2]>";
					echo "<input type=hidden name='time' value=$row[3]>";
					echo "<tr >";
                    echo "<td  class='filetabletd'>$row[0]</td> ";
					echo "<td  class='filetabletd'>$row[1]</td> ";
					echo "<td  class='filetabletd'>$row[2]</td> ";
					echo "<td  class='filetabletd'>$row[3]</td> ";
					echo "<td  class='filetabletd'>$row[4]</td> ";
                    echo "<td  class='filetabletd' style='width:10%'><input class='atdreport_text' type='text' name='new_value' placeholder='1 or 0' required></td>";
					echo "<td ><input type=submit name='update' value='Update' class='button2' ></td>";
					echo "</tr>";
					echo "</form>";
					
                }
			   echo"</table>";
		
			   echo "</div>";
               } 
                
                
           
        ?>
        

 





<div class="buttonCont">

<div class="logout"> <a class="logout_text" href="logout2.php" >Back</a></div>

</div>

</body>

</html>