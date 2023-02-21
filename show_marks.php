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
	         <form method="get" id="search" action="#">
          <span>
          <input type="text" value="Search..." name="s" id="s" />
          <input name="searchsubmit" type="image" src="images/search.gif" value="Go" id="searchsubmit" class="btn"  />
          </span>
        </form>
        <div class="clr"></div>
      </div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="support.html">Courses</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact.html">Contact Us</a></li>
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
  
  <h2 align="center">List of Students</h2><br />
 
<table width="100%" border="1" bgcolor="#FFFFFF">

        <tr align="center"> 
<b>
          <td><b style="color:#FF0000">Roll No.</b></td>

          <td><b style="color:#FF0000">Student Name</b></td>

          <td><b style="color:#FF0000">Session</b></td>

          <td><b style="color:#FF0000">Operation</b></td></b>

          </tr>

<?php


		
include('config.php');
		
$c_id=$_POST['c_id']; 
$class_id=$_POST['class_id'];
$session=$_POST['session'];


$query="SELECT * from stud_reg where c_id=$c_id and class_id=$class_id and session='$session' order by stud_name";

$result = mysqli_query($conn, $query);  

while($row=mysqli_fetch_array($result))
{                                                
    $stud_id=$row['stud_id'];
    $roll_no=$row['roll_no'];

	$stud_name=$row['stud_name'];

	$c_id=$row['c_id'];

	$class_id=$row['class_id'];

	$session=$row['session'];

	$result1 = mysqli_query($conn, "SELECT * FROM classes WHERE class_id='$class_id'");
              while($row1=mysqli_fetch_array($result1))
		      {   
			    $class_name=$row1['class_name']; 
               }
	?>

	

	<tr align="center">

	<td><b style="color:#000000"><?php echo"$roll_no" ?></b></td>

	<td><b style="color:#000000"> <?php echo"$stud_name" ?> </b></td>

	<td><b style="color:#000000"><?php echo"$session" ?></b></td>

	

	<td><b style="color:#000000"><a href="update_stud.php?id=<?php echo $row['stud_id'];?>"><b>ADD MARKS</b></a></b></td>

	

	</tr>

	

	

	<?php

}



?>

</table>

  
 <a href="student_reg.php">Back...</a> 
  
	<p>&nbsp;</p><p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<div class="clr"></div>
  </div>
  <div class="fbg">
    <div class="clr"></div>
  </div>
</div>
<div class="footer">
  <div class="footer_resize">
    <p class="lf">Copyright &copy; 2010 <a href="#">SiteName</a> - All Rights Reserved</p>
    <p class="rf"><a href="http://all-free-download.com/free-website-templates/">Free CSS Templates</a> by <a href="http://www.rocketwebsitetemplates.com/">Rocket Website Templates</a></p>
    <div class="clr"></div>
  </div>
</div>
<!-- END PAGE SOURCE -->
<div align=center></div></body>
</html>