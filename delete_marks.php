<?php
    session_start();
	$username=$_SESSION["user"];
	$password=$_SESSION["pass"];
	//echo $_SESSION["user"];
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
  
  
<h1 style="color:#000000" align="center">Update Marks</h1>
    
            <form name="frmreg" method="post" action="update_marks_query.php" onsubmit ="return check();" >
	
	<?php	

 //session_start();
	//echo $_SESSION["user"];
	//echo $_SESSION["pass"];
//$username=$_SESSION["user"];
//$password=$_SESSION["pass"];

include('config.php');



$stud_id = $_GET['id'];

$order = "delete from studvsmarks WHERE stud_id='$stud_id'";

$delete= mysqli_query($con, $order);
if(! $delete )
{
  die('Could not delete data: ' .   mysqli_connect_error());
}
else
?>
<font face="Baskerville Old Face" color="red"><b>
<?php
echo "<h3>Record deleted successfully.....</h3>";
mysqli_close($con);
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