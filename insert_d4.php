<?php
 include('config.php');
    session_start();
	$username=$_SESSION["user"];
	$password=$_SESSION["pass"];
	echo $username;
	//echo $_SESSION["pass"];
	if($_SESSION["user"]==true)
	{
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Student's Assesment System</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
</head>
<body>
<!-- START PAGE SOURCE -->
<div class="main">
  <div class="header_block">
    <div class="header_resize">
      
	  <div class="search">
	         Phone No. 9896454541, 8569674124
        <div class="clr"></div>
      </div>
      <div class="menu_nav">
        <ul>
          <li class="active"><b><a href="index.php">Home</a></b></li>
          <li><b><a href="courses.php">Courses</a></b></li>
		  <li><b><a href="staff.php">Staff</a></b></li>
          <li><b><a href="about.html">About Us</a></b></li>
          <li><b><a href="contact.html">Contact Us</a></b></li>
		  <li><b><a href="logout.php">Logout</a></b></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="clr"></div>
  <div class="header">
    <div class="logo">
      <h1><a href="#">Student's <span>Assesment</span><small> System</small></a></h1>
    </div>
    <div class="clr"></div>
  </div>
  <div class="content">
  
  
 
   <?php	
include("config.php");

		
$d4_id=0; 
$academic_yr=$_POST['academic_yr'];
$staff_name=$_POST['staff_name'];
$c_id=$_POST['c_id'];
$class_id=$_POST['class_id'];
$subject_id=$_POST['subject_id'];    
$subject_code=$_POST['subject_code'];
$semister=$_POST['semister'];
$username=$_POST['username'];
$password=$_POST['password'];
$roll_no=$_POST['roll_no'];
$enroll_no=$_POST['enroll_no'];
$exam_seat_no=$_POST['exam_seat_no'];
$stud_name=$_POST['stud_name'];
$marks_obt=$_POST['marks_obt'];


$query="SELECT roll_no from d4_details where roll_no=$roll_no";
$result = mysqli_query($conn, $query)
or die(mysqli_error($conn));
$row= mysqli_fetch_array($result);	
if(mysqli_num_rows($result)>0)
	{
	echo"Sorry, This Record is  Alresdy Exist.....";
	}
else
{
$insert = "INSERT INTO d4_details VALUES  ('$43_id','$academic_yr','$staff_name','$c_id','$class_id','$subject_id','$subject_code','$semister','$username','$roll_no','$enroll_no','$exam_seat_no','$stud_name','$marks_obt')";

$results = mysqli_query($conn, $insert)

or die(mysqli_error($conn));

echo "<h5>Record inserted successfully.....</h5>";
}
?>
  
  
  
	<p>&nbsp;</p><p>&nbsp;</p>
    <div class="clr"></div>
  </div>
  <div class="fbg">
    All the rights are reserved to the college....Email us at: sadgjg@gmail.com
  
    <div class="clr"></div>
  </div>
</div>
<div class="footer">
  <div class="footer_resize">
    
    <div class="clr"></div>
  </div>
</div>
<!-- END PAGE SOURCE -->
<div align=center></div></body>
</html>

<?php
}
else
{
header('Location: index.php');
}
?>