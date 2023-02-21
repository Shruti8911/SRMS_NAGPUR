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
  
  
<h1 style="color:#000000" align="center">Add Marks</h1>
    
            <form name="frmreg" method="post" action="insert_marks.php" onsubmit ="return check();" >
	
	<?php	
include('config.php');

$stud_id = $_GET['id'];
//echo $stud_id;

$query1="SELECT stud_id from stud_reg where stud_id='$stud_id' ";

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



$query="SELECT * from stud_reg where stud_id=$stud_id";

$results = mysql_query($query)

or die(mysql_error());

//$row= mysql_fetch_array($results);

while($row = mysql_fetch_array($results))

{

$roll_no = $row['roll_no'];
$stud_id=$row["stud_id"];
$stud_name=$row["stud_name"];
$cr_code=$row["cr_code"];

}


$query="SELECT * from subject where subject_id=(select subject_id from staff_reg where username='$username')";

$results = mysql_query($query)

or die(mysql_error());

//$row= mysql_fetch_array($results);

while($row = mysql_fetch_array($results))

{

$subject_id = $row['subject_id'];
$subject_name=$row["subject_name"];

}
	
$query2="SELECT * from course_vs_cr_code where class_id=$cr_code";
$results2 = mysql_query($query2)

or die(mysql_error());

//$row= mysql_fetch_array($results);

while($row2 = mysql_fetch_array($results2))

{

$class_name = $row2['class_name'];

$class_id = $row2['class_id'];
}

?>


		 <b>  

<table align="center">





<tr><td><b>Roll No.</b></td><td><input type="text" name="roll_no" value="<?php echo $roll_no?>"  size="50"/></td></tr>  

<tr><td><b>Student Name</b></td><td><input type="text" name="stud_name" value="<?php echo $stud_name?>" size="50"/></td></tr>
<input type="hidden" name="stud_id" value="<?php echo $stud_id?>" />
<tr><td><b>Class</b></td><td><input type="text" name="class_name" value="<?php echo $class_name?>" size="50"/>
<input type="hidden" name="class_id" value="<?php echo $class_id; ?>" />

</td></tr>

<tr><td><label><b>Subject</b> </label></td>
<td>

<input type="text" name="subject_name" value="<?php echo $subject_name?>" size="50"/>
<input type="hidden" name="subject_id" value="<?php echo $subject_id; ?>" />


</td></tr>

<tr><td><label><b>Select Exam</b> </label></td><td><select name="exam_id" id="exam_id">
        <option value="">Select Exam</option>
       
	   <?php
    //Include database configuration file
    include('config.php');
   

    //Get all country data
    $query = "SELECT * FROM exam where class_id=$cr_code ORDER BY exam_name ASC";
    $run_query = mysql_query($query);
    //Count total number of rows
	$count = mysql_num_rows($run_query);
    
    ?>
	
	   
	    <?php
        if($count > 0){
            while($row = mysql_fetch_array($run_query)){
				$exam_id=$row['exam_id'];
				$exam_name=$row['exam_name'];
                echo "<option value='$exam_id'>$exam_name</option>";
            }
        }else{
            echo '<option value="">Record not available</option>';
        }
        ?>
    </select></td></tr>
	<tr><td><b>Marks Obtained</b></td><td><input type="text" name="marks_obt" size="50"/></td></tr>  
   <tr><td><b>Marks Out Of</b></td><td><input type="text" name="marks_out_of" value="25" size="50" /></td></tr>  

</table>

<table align="center">

				<tr>

<td align="center"> 



<input type="submit" value="ADD" id="submit"></td>



</tr>

			



			

			

</table>	</form>		

			

<?php

}



?>			
	

  
 <a href="student_reg.php">Back...</a> 
  
	<p>&nbsp;</p><p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
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