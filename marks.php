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
  
  
<h1 style="color:#000000" align="center">Result</h1>
    
            <form name="frmreg" method="post" action="insert_marks.php" onsubmit ="return check();" >
	
	<?php	
 include('config.php');
 
 session_start();
// $_SESSION['username']= $username; 
//  $_SESSION['password']= $username; 

$roll_no = $_POST['roll_no'];
$c_id = $_POST['c_id'];
$class_id = $_POST['class_id'];
$exam_id = $_POST['exam_id'];
//echo $stud_id;



$query="SELECT * from studvsmarks where roll_no='$roll_no' and class_id=$class_id and exam_id=$exam_id";

$results = mysqli_query($conn, $query)

or die(mysqli_error($conn));

//$row= mysqli_fetch_array($results);

while($row = mysqli_fetch_array($results))

{
$stud_name=$row["stud_name"];
$marks_obt = $row['marks_obt'];
$marks_out_of=$row["marks_out_of"];
$class_id=$row["class_id"];
$exam_id=$row["exam_id"];

$class_id=$row["class_id"];

}
echo "$stud_name";
	
$query2="SELECT class_name from classes where class_id=$class_id";
$results2 = mysqli_query($conn, $query2)

or die(mysqli_error($conn));

//$row= mysqli_fetch_array($results);

while($row2 = mysqli_fetch_array($results2))
{
$class_name = $row2['class_name'];
}

$query3="SELECT exam_name from exam where exam_id=$exam_id";
$results3 = mysqli_query($conn, $query3)

or die(mysqli_error($conn));

//$row= mysqli_fetch_array($results);

while($row3 = mysqli_fetch_array($results3))
{
$exam_name = $row3['exam_name'];
}

?>


		 <b>  

<table align="center">





<tr><td><b>Roll No.</b></td><td><input type="text" name="roll_no" value="<?php echo $roll_no?>"  size="50"/></td></tr>  

<tr><td><b>Student Name</b></td><td><input type="text" name="stud_name" value="<?php echo $stud_name?>" size="50"/></td></tr>
<input type="hidden" name="stud_id" value="<?php echo $stud_id?>" />
<tr><td><b>Class</b></td><td><input type="text" name="class_name" value="<?php echo $class_name?>" size="50"/>
<input type="hidden" name="class_id" value="<?php echo $class_id?>" />
</td></tr>
<tr><td><b>Exam Name</b></td><td><input type="text" name="exam_name" value="<?php echo $exam_name?>" size="50"/>

	<tr><td><b>Marks Obtained</b></td><td><input type="text" name="marks_obt" value="<?php echo $marks_obt?>" size="50"/></td></tr>  
   <tr><td><b>Marks Out Of</b></td><td><input type="text" name="marks_out_of" value="<?php echo $marks_out_of?>" size="50"/></td></tr>  

</table>

<table align="center">

				<tr>

<td align="center"> 



<input type="submit" value="ADD" id="submit"></td>



</tr>

			



			

			

</table>	</form>		

			



  
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