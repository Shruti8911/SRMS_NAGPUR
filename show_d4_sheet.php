<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Result</title>
</head>

<body bgcolor="#FFFFFF">

<?php	


include('config.php');
		
$d3_id=0; 
$academic_yr=$_POST['academic_yr'];
$staff_name=$_POST['staff_name'];
$c_id=$_POST['c_id'];
$class_id=$_POST['class_id'];
$subject_id=$_POST['subject_id'];    
$subject_code=$_POST['subject_code'];
$semister=$_POST['semister'];
$username=$_POST['username'];
$password=$_POST['password'];



$query="SELECT * from d4_details where class_id='$class_id' and subject_id='$subject_id' and subject_code='$subject_code'";

$results = mysqli_query($conn, $query)

or die(mysqli_error($conn));
if(mysqli_num_rows($results)>0)
{
//$row= mysqli_fetch_array($results);

while($row = mysqli_fetch_array($results))
{
$academic_yr=$row['academic_yr'];
$staff_name = $row['staff_name'];
$c_id=$row['c_id'];
$class_id=$row['class_id'];
$subject_id=$row["subject_id"];
$subject_code=$row['subject_code'];
$semister=$row['semister'];
$username=$row['username'];
//$password=$row['password'];
$roll_no=$row['roll_no'];
$enroll_no=$row['enroll_no'];
$exam_seat_no=$row['exam_seat_no'];
$stud_name=$row['stud_name'];

}

$query2="SELECT cr_name from courses where c_id=$c_id";
$results2 = mysqli_query($conn, $query2)
or die(mysqli_error($conn));
while($row2 = mysqli_fetch_array($results2))
{
$cr_name = $row2['cr_name'];
}


	
$query2="SELECT class_name from course_vs_cr_code where class_id=$class_id";
$results2 = mysqli_query($conn, $query2)

or die(mysqli_error($conn));

while($row2 = mysqli_fetch_array($results2))
{
$class_name = $row2['class_name'];
}

$query3="SELECT subject_name from subject where subject_id=$subject_id";
$results3 = mysqli_query($conn, $query3)
or die(mysqli_error($conn));
//$row= mysqli_fetch_array($results);
while($row3 = mysqli_fetch_array($results3))
{
$subject_name = $row3['subject_name'];
}




?>



<p><p><br />
<center>

<h3 align="center" style="color:#990000">Cummins College of Engineering for Women, Nagpur</h3>

<h4 align="center" style="color:#990000">bachelor of Engineering</h4>
<h4 align="left" style="color:#990000">For AICTE BE Cources </h4><h4 align="right" style="color:#990000">With Effect from 2017-18          </h4>

<h3 align="center" style="color:#990000">Rashtrasant Tukadoji Maharaj Nagpur University</h3>
<h3 align="center" style="color:#990000">PROGRESSIVE ASSESSMENT OF PRACTICAL</h3>

<table bordercolorlight="#000000" width="100%" style="border-left-width:thin" bgcolor="#FFFFFF">
<tr>
<td><h4 align="left" style="color:#990000">Academic Year :<?php echo"$academic_yr" ?></h4></td>
<td><h4 align="left" style="color:#990000">Name of Faculty : <?php echo"$staff_name" ?></h4></td>
<td></td>
</tr>

<tr>
<td><h4 align="left" style="color:#990000">Course & Code : <?php echo"$cr_name" ?><?php echo"     "; ?><?php echo "("."$class_name".")" ?></h4></td>
<td><h4 align="left" style="color:#990000">Subject & Code :<?php echo"$subject_code" ?></h4></td>
<td><h4 align="left" style="color:#990000"> Semister : <?php echo"$semister" ?></h4></td></tr>
</table>




<table bordercolorlight="#000000" width="100%" border="" style="border-left-width:thin" bgcolor="#FFFFFF">
<tr><th style="color:#000000">Roll No.</th><th style="color:#000000">Enrollment No.</th><th style="color:#000000">Exam Seat No.</th><th style="color:#000000">Name of Student</th><th style="color:#000000">Marks Obtained in Oral / Practical Exam as per TE Scheme. Max Marks( 20  )</th></tr>




<?php

$query="SELECT * from d4_details where class_id='$class_id' and subject_id='$subject_id' and subject_code='$subject_code'";
$results = mysqli_query($conn, $query);


while($row = mysqli_fetch_array($results))
{
$academic_yr=$row['academic_yr'];
$staff_name = $row['staff_name'];
$c_id=$row['c_id'];
$class_id=$row['class_id'];
$subject_id=$row["subject_id"];
$subject_code=$row['subject_code'];
$semister=$row['semister'];
$username=$row['username'];
$roll_no=$row['roll_no'];
$enroll_no=$row['enroll_no'];
$exam_seat_no=$row['exam_seat_no'];
$stud_name=$row['stud_name'];

$marks_obt=$row['marks_obt'];


	?>
   <tr align="center">
   <td align="center"><b style="color:#000000"><?php echo"$roll_no" ?></b></td>
   <td><b style="color:#000000"> <?php echo"$enroll_no" ?> </b></td>
   <td><b style="color:#000000"><?php echo"$exam_seat_no" ?></b></td>
   <td><b style="color:#000000"><?php echo"$stud_name" ?></b></td>
   <td><b style="color:#000000"><?php echo"$marks_obt" ?></b></td>
   
	
</tr>

<?php 

}
?>

</table>

</center>
<form method="post" action="download_d4.php" >

	<input type="hidden" name="subject_id" value="<?php echo $subject_id?>" />
	<input type="hidden" name="subject_code" value="<?php echo $subject_code?>" />
<input type="hidden" name="class_id" value="<?php echo $class_id?>" />

<input type="submit" name="export_excel" value="Export to Excel" />
</form>



<?php
}
else
echo"Sorry, this record dooes not exist...";
?>
</body>
</html>
