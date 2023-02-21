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
  
  <h2 align="center">List of Students</h2><br />
 <center>
<table width="90%" border="1" bgcolor="#FFFFFF">

        <tr align="center"> 
<b>
          <td><b style="color:#FF0000">Roll No.</b></td>

          <td><b style="color:#FF0000">Student Name</b></td>

          <td><b style="color:#FF0000">Session</b></td>

          <td><b style="color:#FF0000">Operation</b></td></b>

          </tr>

<?php

 //session_start();
//	echo $_SESSION["user"];
//echo $_SESSION["pass"];
		
include('config.php');
		
$c_id=$_POST['c_id']; 
$class_id=$_POST['class_id'];
$session=$_POST['session'];
$subject_id=$_POST['subject_id'];
$username=$_POST['username'];
$password=$_POST['password'];


$query="SELECT * from stud_reg where c_id=$c_id and cr_code=$class_id and session='$session' order by stud_name";

$result = mysqli_query($conn, $query);  

while($row=mysqli_fetch_array($result))
{                                                
    $stud_id=$row['stud_id'];
    $roll_no=$row['roll_no'];

	$stud_name=$row['stud_name'];

	$c_id=$row['c_id'];

	$class_id=$row['cr_code'];

	$session=$row['session'];

	$result1 = mysqli_query($conn, "SELECT * FROM course_vs_cr_code WHERE class_id='$class_id'");
              while($row1=mysqli_fetch_array($result1))
		      {   
			    $class_name=$row1['class_name']; 
               }
	?>

	

	<tr align="center">

	<td><b style="color:#000000"><?php echo"$roll_no" ?></b></td>

	<td><b style="color:#000000"> <?php echo"$stud_name" ?> </b></td>

	<td><b style="color:#000000"><?php echo"$session" ?></b></td>

	

	<td>
	<table border="1" align="center"><tr><td>
	<b style="color:#000000"><a href="update_stud.php?id=<?php echo $row['stud_id'];?>"><b>ADD MARKS</b></a></b></td>
	

	</tr></table></td>

	</tr>

	

	

	<?php

}



?>

</table>
</center>
  
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