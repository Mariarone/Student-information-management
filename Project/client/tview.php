<?php 

session_start();{
if(isset($_SESSION['sname'])){

    $id=$_SESSION['t'];
}	



else{
	
	 header('Location:stafflogin.php');
	 exit;
}
	
}	
?>











		   
<html>
<head>
<title>St harrish school</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/style.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/framework.css" rel="stylesheet" type="text/css" media="all">


</head>
<body id="top">




<!-- ################################################################################################ --> 

<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left"><br><br>
      <font size="20px"><strong><b size="30px" style="color:white">&nbsp;St.harrish school</b> </strong></font>
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <!--<p>Free Website Template</p>-->
  
    </div>
    
    <!-- ################################################################################################ --> 
  </header>
  <br>
</div>
<!-- ################################################################################################ --> 

<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
       <li><a href="teachhome.php">Home</a></li>
    <!--    <li><a class="drop" href="#"></a>-->
          
        
        <li><a href="tprofile.php"> Profile</a>
          
        </li>
		
		
        
		  <li><a href="timetable.php"> Timetable</a> </li>
		
		
        
		
		<li><a  href="#">Attendance</a>
		<ul>
		   <li><a href="tattend.php">Attendance View </a></li>
		   <li><a href="tattend1.php">Attendance Edit</a></li>
		
		</ul>
		</li>
		
		
		
		
		
		
		
		
		<li><a  href="#">Exam</a>
		
		<ul>
		   <li><a href="texam.php">Exam View </a></li>
		   <li><a href="teditexam.php">Exam Add</a></li>
		
		</ul>
			
		</li>
		
		<li><a  href="#">Assignment</a>
		<ul>
		   <li><a href="tassign.php">Assignment View </a></li>
		   <li><a href="teditassign.php">Assignment Add</a></li>
		
		</ul>
			
			
		</li>
		
		
        
		
        <li><a href="logout.php">Logout</a></li>
     
	  
      <!-- ################################################################################################ --> 
    </nav>
  </div>
</div>

<br><br><br>




<center><h2>ATTENDANCE DETAILS</h2></center>



<?php
$conn=mysqli_connect("localhost","root","","school");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


if(isset ($_REQUEST['class']) && ($_REQUEST['section'])){



$class=$_REQUEST["class"];
$sec=$_REQUEST["section"];
$result = mysqli_query($conn,"SELECT * FROM tbl_attendance WHERE class='$class' and sec='$sec'");

echo "<table border='1'style='width:80%; align:center; margin: 0 auto;'>
<tr>
<th>Student id</th>
<th>Name</th>
<th>Attendance</th>
<th>Class </th>
<th>Section</th>
<th><strong>Edit</strong></th>


</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td style='text-align:center;'>" . $row['s_id'] . "</td>";
$aid=$row['s_id'];
echo "<td>" . $row['f_Name'] ." ".$row['l_Name']. "</td>";
echo "<td>" . $row['attendance'] . "</td>";
echo "<td>" . $row['class'] . "</td>";
echo "<td>" . $row['sec'] . "</td>";

echo "<td>".'<a href="teditattend.php?id=' . $aid . '">Edit</a>'. "</td>";



	
	
}
echo "</table>";
}

else{
	
	   
		$class=$_SESSION['class'];
		$sec=$_SESSION['sec'];
					
	
	
	//echo $class;
	$result = mysqli_query($conn,"SELECT * FROM tbl_attendance WHERE class='$class' and sec='$sec'");

echo "<table border='1'style='width:80%; align:center; margin: 0 auto;'>
<tr>
<th>Student id</th>
<th>Name</th>
<th>Attendance</th>
<th>Class </th>
<th>Section</th>
<th><strong>Edit</strong></th>


</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td style='text-align:center;'>" . $row['s_id'] . "</td>";
$aid=$row['s_id'];
echo "<td>" . $row['f_Name'] ." ".$row['l_Name']. "</td>";
echo "<td>" . $row['attendance'] . "</td>";
echo "<td>" . $row['class'] . "</td>";
echo "<td>" . $row['sec'] . "</td>";

echo "<td>".'<a href="teditattend.php?id=' . $aid . '">Edit</a>'. "</td>";


	
}
echo "</table>";

	

	
}


mysqli_close($conn);
?>

<br><br><br>
<center><a href="tattend1.php"><h1>Back</h1></a></center>

<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>

</body>
</html>