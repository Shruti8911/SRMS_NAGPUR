<?php

include('config.php');

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
  
  <h2 align="center">D3 List</h2><br />
 <center>
<table width="90%" border="1" bgcolor="#FFFFFF">

        <tr align="center"> 
<b>
          <td><b style="color:#FF0000">Roll No.</b></td>
		  
		  <td><b style="color:#FF0000">Enrollment No.</b></td>

          <td><b style="color:#FF0000">Student Name</b></td>

          <td><b style="color:#FF0000">Subject Code</b></td>
		  
		   <td><b style="color:#FF0000">Total Marks</b></td>

          <td><b style="color:#FF0000">PA Marks</b></td>

          <td><b style="color:#FF0000">Update / Delete Marks</b></td></b>

          </tr>

<?php

		
$c_id=$_POST['c_id']; 
$class_id=$_POST['class_id'];
$subject_id=$_POST['subject_id'];
$subject_code=$_POST['subject_code'];

$username=$_POST['username'];
$password=$_POST['password'];


$query="SELECT * from d3_details where c_id=$c_id and class_id=$class_id and subject_id='$subject_id' and subject_code='$subject_code' order by roll_no";

$result = mysqli_query($conn, $query);  

while($row=mysqli_fetch_array($result))
{                                                
    $roll_no=$row['roll_no'];
	$enroll_no=$row['enroll_no'];
	$c_id=$row['c_id'];
	$subject_code=$row['subject_code'];
	$stud_name=$row['stud_name'];
    $total_marks=$row['total_marks'];
	$PA_marks=$row['PA_marks'];
	
	$result1 = mysqli_query($conn, "SELECT * FROM course_vs_cr_code WHERE class_id='$class_id'");
              while($row1=mysqli_fetch_array($result1))
		      {   
			    $class_name=$row1['class_name']; 
               }
	?>

	

	<tr align="center">

	<td><b style="color:#000000"><?php echo"$roll_no" ?></b></td>

	<td><b style="color:#000000"><?php echo"$enroll_no" ?></b></td>
	
	<td><b style="color:#000000"> <?php echo"$stud_name" ?> </b></td>
	
	<td><b style="color:#000000"> <?php echo"$subject_code" ?> </b></td>
	
	<td><b style="color:#000000"> <?php echo"$total_marks" ?> </b></td>
	
	<td><b style="color:#000000"> <?php echo"$PA_marks" ?> </b></td>
	
	


	

	<td>
	<table border="1" align="center"><tr><td>
	<b style="color:#000000"><a href="update_d3_marks.php?id=<?php echo $row['enroll_no'];?>"><b>UPDATE</b></a></b></td>
	<td>
	<b style="color:#000000"><a href="delete_d3_marks.php?id=<?php echo $row['enroll_no'];?>"><b>DELETE</b></a></b>
	</td>

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