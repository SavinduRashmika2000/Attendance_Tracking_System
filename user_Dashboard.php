<?php 
require_once "config.php";
$loginErr="";
if(isset($_POST['submit'])){
	$index = $_POST['inputid'];
	
	
		$sql="select * from  student where stuId =  '$index' ";
		$result1 = mysqli_query($connection,$sql);

		if(mysqli_num_rows($result1)==1){
			$q = "SELECT 
					subCode, 
					SUM(Attendance), 
					COUNT(Attendance),
					(SUM(Attendance) / COUNT(Attendance)) * 100 
				 FROM student_subjects
				 WHERE stuID = '$index'
				 GROUP BY subCode";

			$result = mysqli_query($connection, $q);
		}
		else{
			$loginErr="Student Not Found";
		}
		
		
}

?>









<HTML>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">



<head>  
<link rel="stylesheet" href="Style/admin.css">
</head>

<body>
	 <header class="header">
        <div class="logo-container">
            <img src="./Resources/uov.png" alt="University of Vavuniya Logo">
            <div>
                <h1>University of Vavuniya</h1>
                <h2>Attendance Tracking System</h2>
            </div>
        </div>
		 <div class="wave"></div>
    </header>



<div class="filter">
 <h1>CHECK YOUR ATTENDANCE HERE</h1>

 <p class="error"><?php echo $loginErr ?></p>
 <br>
           
                        <form action="user_Dashboard.php" method='post'>
                            <input class="typeind" name="inputid" type="text" placeholder="Enrollment number" required>
                              <br><br>
                            <input type="submit" value="Search" name="submit" class="user_button">

                        </form>
           
</div>
	
		<?php
            if(isset($result)){
				echo "<div class='container'>";
				echo "<table class='filetable'>";
				echo"<tr>";
				echo "<th class='th1'>Subject Code</th>";
				echo "<th class='th1'>Attendance</th>";
				echo"</tr>";
				while($row=mysqli_fetch_row($result)){
                        echo "<tr>";
                        echo "<td class='filetabletd'>$row[0]</td>";
                        echo "<td class='filetabletd' width=20%><strong>" . number_format($row[3], 2) . "%</strong></td>";
                        echo "</tr>";
                }
			echo "</table>";
			}
			echo "</div>";
			
        ?>
		

		<div class="buttonCont">
		<div class="logout"> <a class="logout_text" href="index.php" >Back</a></div>
		</div>		

</body>




</HTML>