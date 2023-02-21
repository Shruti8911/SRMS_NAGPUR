<?php
    session_start();
	$username=$_SESSION["user"];
	$password=$_SESSION["pass"];
	echo $_SESSION["user"];
	echo $_SESSION["pass"];
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
  <h1 style="color:#000000" align="center"><b>Welcome Admin</b></h1>
   
	<font face="Times New Roman, Times, serif" color="#000000" size="3">
	<table align="center" bgcolor="#99FF99" border="" width="90%">
	<tr bgcolor="#FFFFCC"><th>Staff</th><th>Student</th><th>Courses</th><th>Course Code</th><th>Exam</th><th>Subject</th></tr>
	<tr>
	<td><a href="staff_reg.php" style="color:#000000"><b>Staff Registration</b></a></td>
	<td><a href="student_reg.php" style="color:#000000"><b>Student Registration</b></td>
	<td><a href="add_courses.php" style="color:#000000"><b>Add Courses</b></td>
	<td><a href="add_course_code.php" style="color:#000000"><b>Add Course Code</b></a></td>
	<td><a href="add_exam.php" style="color:#000000"><b>Add Exam</b></a></td>
	<td><a href="add_subject.php" style="color:#000000"><b>Add Subject</b></a></td>
	</tr>
	
	<tr>
	<td><a href="update_staff.php" style="color:#000000"><b>Update Staff</b></a></td>
	<td><a href="update_student.php" style="color:#000000"><b>Update Student</b></td>
	<td><a href="update_courses.php" style="color:#000000"><b>Update Courses</b></td>
	<td><a href="update_class.php" style="color:#000000"><b>Update Course Code</b></a></td>
	<td><a href="update_exam.php" style="color:#000000"><b>Update Exam</b></a></td>
	<td><a href="select_subject.php" style="color:#000000"><b>Update Subject</b></a></td>
	</tr>
	
	<tr>
	<td><a href="delete_staff.php" style="color:#000000"><b>Delete Staff</b></a></td>
	<td><a href="delete_student.php" style="color:#000000"><b>Delete Student</b></td>
	<td><a href="delete_courses.php" style="color:#000000"><b>Delete Courses</b></td>
	<td><a href="delete_class.php" style="color:#000000"><b>Delete Course Code</b></a></td>
	<td><a href="delete_exam.php" style="color:#000000"><b>Delete Exam</b></a></td>
	<td><a href="select_subject_del.php" style="color:#000000"><b>Delete Subject</b></a></td>
	</tr>
		
	</table>
	<BR />
	<br />
<BR />
	
	</font>
	
	
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