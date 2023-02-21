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
  
  <h2 align="center" style="color:#000000"><b>Update Exam</b></h2><br />
 
<form name="frmreg" method="post" action="update_exam_query.php" onsubmit ="return check();" >
	
	<?php	

 session_start();
// $_SESSION['username']= $username; 
//  $_SESSION['password']= $username; 
include('config.php');


$exam_id = $_GET['id'];

$query="SELECT * from exam where exam_id=$exam_id";
$results = mysql_query($query)
or die(mysql_error());
//$row= mysql_fetch_array($results);
while($row = mysql_fetch_array($results))
{
$exam_id=$row["exam_id"];
$class_id=$row["class_id"];
$exam_name=$row["exam_name"];
$result1 = mysql_query("SELECT * FROM course_vs_cr_code WHERE class_id='$class_id'");
              while($row1=mysql_fetch_array($result1))
		      {   
			    $class_name=$row1['class_name']; 
               }   			   

}

?>
<b>  
<table align="center">
<tr><td><b>Class Name</b></td><td><input type="text" name="class_name" disabled="disabled" value="<?php echo $class_name?>"  size="20"/></td></tr>  
<input type="hidden" name="class_id" value="<?php echo $class_id?>" />

<tr><td><b>Exam Name</b></td><td><input type="text" name="exam_name"  value="<?php echo $exam_name?>"  size="20"/></td></tr>  
<input type="hidden" name="exam_id" value="<?php echo $exam_id?>" />

</table>


</b>
<table align="center">
<tr>

<td align="center"> 
<input type="submit" value="Update" id="submit"></td>
</tr>
</table>


</form>
  
  
  

  
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