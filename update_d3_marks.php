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
    
            <form name="frmreg" method="post" action="update_d3_marks_query.php" onsubmit ="return check();" >
	
	<?php	



$enroll_no = $_GET['id'];

$query = "SELECT subject_id FROM d3_details where enroll_no='$enroll_no'";
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



$query1="SELECT enroll_no from d3_details where enroll_no=$enroll_no ";

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



$query="SELECT * from d3_details where enroll_no=$enroll_no and subject_id=$subject_id";

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

$m1=$row["m1"];
$m2=$row["m2"];
$m3=$row["m3"];
$m4=$row["m4"];
$m5=$row["m5"];
$m6=$row["m6"];
$m7=$row["m7"];
$m8=$row["m8"];
$m9=$row["m9"];
$m10=$row["m10"];
$m11=$row["m11"];
$m12=$row["m12"];
$m13=$row["m13"];
$m14=$row["m14"];
$m15=$row["m15"];
$m16=$row["m16"];
$m17=$row["m17"];
$m18=$row["m18"];
$m19=$row["m19"];
$m20=$row["m20"];
$m21=$row["m21"];
$m22=$row["m22"];
$m23=$row["m23"];
$m24=$row["m24"];
$m25=$row["m25"];
$m26=$row["m26"];
$m27=$row["m27"];
$m28=$row["m28"];
$m29=$row["m29"];
$m30=$row["m30"];
$m31=$row["m31"];
$m32=$row["m32"];
$total_marks=$row["total_marks"];
$PA_marks=$row["PA_marks"];

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
<td><input type="text" name="m1" value="<?php echo $m1?>"  size="5"/>
<input type="text" name="m2" value="<?php echo $m2?>"  size="5"/>
<input type="text" name="m3" value="<?php echo $m3?>"  size="5"/>
<input type="text" name="m4" value="<?php echo $m4?>"  size="5"/>
<input type="text" name="m5" value="<?php echo $m5?>"  size="5"/>
<input type="text" name="m6" value="<?php echo $m6?>"  size="5"/>
<input type="text" name="m7" value="<?php echo $m7?>"  size="5"/>
<input type="text" name="m8" value="<?php echo $m8?>"  size="5"/>
<input type="text" name="m9" value="<?php echo $m9?>"  size="5"/>
<input type="text" name="m10" value="<?php echo $m10?>"  size="5"/>
<input type="text" name="m11" value="<?php echo $m11?>"  size="5"/>
<input type="text" name="m12" value="<?php echo $m12?>"  size="5"/>
<input type="text" name="m13" value="<?php echo $m13?>"  size="5"/>
<input type="text" name="m14" value="<?php echo $m14?>"  size="5"/>
<input type="text" name="m15" value="<?php echo $m15?>"  size="5"/>
<input type="text" name="m16" value="<?php echo $m16?>"  size="5"/>
<input type="text" name="m17" value="<?php echo $m17?>"  size="5"/>
<input type="text" name="m18" value="<?php echo $m18?>"  size="5"/>
<input type="text" name="m19" value="<?php echo $m19?>"  size="5"/>
<input type="text" name="m20" value="<?php echo $m20?>"  size="5"/>
<input type="text" name="m21" value="<?php echo $m21?>"  size="5"/>
<input type="text" name="m22" value="<?php echo $m22?>"  size="5"/>
<input type="text" name="m23" value="<?php echo $m23?>"  size="5"/>
<input type="text" name="m24" value="<?php echo $m24?>"  size="5"/>
<input type="text" name="m25" value="<?php echo $m25?>"  size="5"/>
<input type="text" name="m26" value="<?php echo $m26?>"  size="5"/>
<input type="text" name="m27" value="<?php echo $m27?>"  size="5"/>
<input type="text" name="m28" value="<?php echo $m28?>"  size="5"/>
<input type="text" name="m29" value="<?php echo $m29?>"  size="5"/>
<input type="text" name="m30" value="<?php echo $m30?>"  size="5"/>
<input type="text" name="m31" value="<?php echo $m31?>"  size="5"/>
<input type="text" name="m32" value="<?php echo $m32?>"  size="5"/>

</td>




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