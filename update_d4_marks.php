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
  
  
<h1 style="color:#000000" align="center">Update Marks</h1>
    
            <form name="frmreg" method="post" action="update_d4_marks_query.php" onsubmit ="return check();" >
	
	<?php	



$enroll_no = $_GET['id'];

$query = "SELECT subject_id FROM d4_details where enroll_no='$enroll_no'";
    $run_query = mysql_query($query);
    //Count total number of rows
	$count2 = mysql_num_rows($run_query);
	if($count2 > 0)
	{
            while($row = mysql_fetch_array($run_query))
			{
				$subject_id=$row['subject_id'];
				
            }
	
	}



$query1="SELECT enroll_no from d4_details where enroll_no=$enroll_no ";

$results1 = mysql_query($query1)

or die(mysql_error());

$row1= mysql_fetch_array($results1);

//if(mysql_num_rows($result1)<1)

if($row1<1)

{

	echo"<h5>Sorry, You are not Authenticate User.....</h5>";

}
else

{



$query="SELECT * from d4_details where enroll_no=$enroll_no and subject_id=$subject_id";

$results = mysql_query($query)

or die(mysql_error());

//$row= mysql_fetch_array($results);

while($row = mysql_fetch_array($results))

{
$roll_no = $row['roll_no'];
$enroll_no=$row["enroll_no"];
$stud_name=$row["stud_name"];
$class_id=$row["class_id"];
$subject_code=$row["subject_code"];
$subject_id=$row["subject_id"];

$marks_obt=$row["marks_obt"];

}
	
	//echo $class_id;
	
$query2="SELECT class_name from course_vs_cr_code where class_id=$class_id";
$results2 = mysql_query($query2)
or die(mysql_error());
while($row2 = mysql_fetch_array($results2))
{
$class_name = $row2['class_name'];
}

$query3="SELECT subject_name from subject where subject_id =$subject_id";
$results3 = mysql_query($query3)
or die(mysql_error());
//$row= mysql_fetch_array($results);
while($row3 = mysql_fetch_array($results3))
{
$subject_name = $row3['subject_name'];
}


?>

<b>  
<table align="center" border="" width="50%">
<tr><td><b>Roll No.</b></td><td><input type="text" name="roll_no" value="<?php echo $roll_no?>"  size="50" disabled="disabled"/></td></tr>  
<input type="hidden" name="roll_no" value="<?php echo $roll_no?>" />


<tr><td><b>Enrollment No.</b></td><td><input type="text" name="enroll_no" value="<?php echo $enroll_no?>" size="50" disabled="disabled"/></td></tr>
<input type="hidden" name="enroll_no" value="<?php echo $enroll_no?>" />


<tr><td><b>Student Name</b></td><td><input type="text" name="stud_name" value="<?php echo $stud_name?>" size="50" disabled="disabled"/>
<input type="hidden" name="stud_name" value="<?php echo $stud_name?>" />


</td></tr>

<tr><td><b>Subject</b></td><td><input type="text" name="subject_name" value="<?php echo $subject_name?>" size="50" disabled="disabled"/>
<input type="hidden" name="subject_id" value="<?php echo $subject_id?>" />
</td></tr>

<tr><td><b>Subject Code</b></td><td><input type="text" name="subject_code" value="<?php echo $subject_code?>" size="50" disabled="disabled"/>
<input type="hidden" name="subject_code" value="<?php echo $subject_code?>" />

</td></tr>


<tr><td><b>Marks Obtained</b></td>
<td><input type="text" name="marks_obt" value="<?php echo $marks_obt?>"  size="5"/></td>




</tr>  


</table>


<table align="center">

				<tr>

<td align="center"> 



<input type="submit" value="UPDATE" id="submit"></td>



</tr>

			



			

			

</table>	</form>		

			

<?php
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