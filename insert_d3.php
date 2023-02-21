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

		
$d3_id=0; 
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
$m1=$_POST['m1'];
$m2=$_POST['m2'];
$m3=$_POST['m3'];
$m4=$_POST['m4'];
$m5=$_POST['m5'];
$m6=$_POST['m6'];
$m7=$_POST['m7'];
$m8=$_POST['m8'];
$m9=$_POST['m9'];
$m10=$_POST['m10'];
$m11=$_POST['m11'];
$m12=$_POST['m12'];
$m13=$_POST['m13'];
$m14=$_POST['m14'];
$m15=$_POST['m15'];
$m16=$_POST['m16'];
$m17=$_POST['m17'];
$m18=$_POST['m18'];
$m19=$_POST['m19'];
$m20=$_POST['m20'];
$m21=$_POST['m21'];
$m22=$_POST['m22'];
$m23=$_POST['m23'];
$m24=$_POST['m24'];
$m25=$_POST['m25'];
$m26=$_POST['m26'];
$m27=$_POST['m27'];
$m28=$_POST['m28'];
$m29=$_POST['m29'];
$m30=$_POST['m30'];
$m31=$_POST['m31'];
$m32=$_POST['m32'];

$total_marks=$m1+$m2+$m3+$m4+$m5+$m6+$m7+$m8+$m9+$m10+$m11+$m12+$m13+$m14+$m15+$m16+$m17+$m18+$m19+$m20+$m21+$m22+$m23+$m24+$m25+$m26+$m27+$m28+$m29+$m30+$m31+$m32;
$PA_marks=($total_marks/320)*25;

$query="SELECT roll_no from d3_details where roll_no='$roll_no' and subject_id='$subject_id' ";
$result = mysqli_query($conn, $query)
or die(mysqli_error($conn));
$row= mysqli_fetch_array($result);	
if(mysqli_num_rows($result)>0)
	{
	echo"Sorry, This Record is  Alresdy Exist.....";
	}
else
{
$insert = "INSERT INTO d3_details VALUES  ('$d3_id','$academic_yr','$staff_name','$c_id','$class_id','$subject_id','$subject_code','$semister','$username','$password','$roll_no','$enroll_no','$exam_seat_no','$stud_name','$m1','$m2','$m3','$m4','$m5','$m6','$m7','$m8','$m9','$m10','$m11','$m12','$m13','$m14','$m15','$m16','$m17','$m18','$m19','$m20','$m21','$m22','$m23','$m24','$m25','$m26','$m27','$m28','$m29','$m30','$m31','$m32','$total_marks','$PA_marks')";

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