<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Student's Result Management System</title>
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
      <h1><a href="#">Student's <span>Result</span><small>Management System</small></a></h1>
    </div>
    <div class="clr"></div>
  </div>
  <div class="content">
  
  <h2 align="center" style="color:#000000"><b>Our Staff</b></h2><br />
 



 <?php	

include('config.php');
		
$staff_id = $_POST['staff_id'];
$staff_name = $_POST['staff_name'];
$c_id=$_POST['c_id'];;	  
$class_id = $_POST['class_id'];
$subject_id= $_POST['subject_id'];
$session = $_POST['session'];
$username = $_POST['username'];
$password = $_POST['password'];

//echo "$staff_name";

$order1 = "UPDATE login SET username='$username',password='$password' WHERE username='$username' ";

$update1= mysql_query($order1,$con);
if(! $update1 )
{
  die('Could not update data: ' . mysql_error());
}

$order = "UPDATE staff_reg SET staff_name='$staff_name',c_id='$c_id',class_id='$class_id',subject_id='$subject_id',session='$session',username='$username',password='$password' WHERE staff_id='$staff_id'";

$update= mysql_query($order,$con);
if(! $update )
{
  die('Could not update data: ' . mysql_error());
}
else
?>
<font face="Baskerville Old Face" color="red"><b>
<?php
echo "<h3>Record updated successfully.....</h3>";
mysql_close($con);
?>




  
 <a href="update_staff.php">Back...</a> 
  
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