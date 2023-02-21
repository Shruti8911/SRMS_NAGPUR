<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Result</title>
</head>

<body bgcolor="#CCFF66">

<?php	

 //session_start();
// $_SESSION['username']= $username; 
//  $_SESSION['password']= $username; 

include('config.php');

$roll_no = $_POST['roll_no'];
$c_id = $_POST['c_id'];
$class_id = $_POST['class_id'];
$exam_id = $_POST['exam_id'];
$session = $_POST['session'];



$query="SELECT * from studvsmarks where roll_no='$roll_no' and class_id='$class_id' and exam_id='$exam_id'";

$results = mysqli_query($con, $query)

or die(mysqli_error($con));
if(mysqli_num_rows($results)>0)
{
//$row= mysqli_fetch_array($results);

while($row = mysqli_fetch_array($results))
{

$stud_name=$row['stud_name'];
$marks_obt = $row['marks_obt'];
$marks_out_of=$row['marks_out_of'];
$class_id=$row['class_id'];
$exam_id=$row["exam_id"];

$class_id=$row['class_id'];

}

$query2="SELECT cr_name from courses where c_id=$c_id";
$results2 = mysqli_query($con, $query2)
or die(mysqli_error($con));
while($row2 = mysqli_fetch_array($results2))
{
$cr_name = $row2['cr_name'];
}


	
$query2="SELECT class_name from course_vs_cr_code where class_id=$class_id";
$results2 = mysqli_query($con, $query2)

or die(mysqli_error($con));

while($row2 = mysqli_fetch_array($results2))
{
$class_name = $row2['class_name'];
}

$query3="SELECT exam_name from exam where exam_id=$exam_id";
$results3 = mysqli_query($con, $query3)

or die(mysqli_error($con));

//$row= mysqli_fetch_array($results);

while($row3 = mysqli_fetch_array($results3))
{
$exam_name = $row3['exam_name'];
}

?>
<p><p><br />
<center>

<table width="70%" bordercolor="#000000" style="border-style:inset" bgcolor="#FFFFFF">
<tr><td ><h1 align="center" style="color:#990000">Cummins College of Engineering for Women, Nagpur</h1></td></tr>
<tr><td><hr />

<table width="100%">
<tr align="justify"><td><b style="color:#990066">Student Name:</b> <?php echo $stud_name?> </td><td><b style="color:#990066">Roll No.:</b> <?php echo $roll_no?> </td><td><b>Session:</b> <?php echo $session?> </td></tr>

<tr align="justify"><td><b style="color:#990066">Course: </b> <?php echo $cr_name?> </td><td><b style="color:#990066">Class:</b> <?php echo $class_name?> </td><td><b style="color:#990066">Exam:</b> <?php echo $exam_name?> </td></tr>

</table>
</td></tr>
<tr><td>
<table bordercolorlight="#000066" width="100%" border="" style="border-left-width:thin">
<tr><th style="color:#990066">Subject Name</th><th style="color:#990066">Maximum Marks</th><th style="color:#990066">Marks Obtained</th></tr>
<?php

$query="SELECT * from studvsmarks where roll_no='$roll_no' and class_id='$class_id' and exam_id='$exam_id'";

$result = mysqli_query($con, $query);  
$sum1=0;$sum2=0;
while($row=mysqli_fetch_array($result))
{                                                
    $subject_id=$row['subject_id'];
    $marks_out_of=$row['marks_out_of'];

	$marks_obt=$row['marks_obt'];

	$a=(35*(int)$marks_out_of)/100;
if($marks_obt<$a)
$result11="FAIL";
else if($marks_obt>=$a)
$result11="PASS";

	$result1 = mysqli_query($con, "SELECT * FROM subject WHERE subject_id='$subject_id'");
              while($row1=mysqli_fetch_array($result1))
		      {   
			    $subject_name=$row1['subject_name']; 
               }
	?>


<tr align="center">

	<td align="left"><b style="color:#000000"><?php echo"$subject_name" ?></b></td>

	<td><b style="color:#000000"> <?php echo"$marks_out_of" ?> </b></td>
	<?php
	
	$sum1=$sum1+$marks_out_of;
	?>

	<td><b style="color:#000000"><?php echo"$marks_obt" ?></b></td>
	<?php
	$sum2=$sum2+$marks_obt;
	?>
</tr>

<?php 

}
?>
<tr>
<td><b style="color:#000000">Total</b></td><td align="center"><b style="color:#000000"><?php echo"$sum1" ?></td></td><td align="center"><b style="color:#000000"><?php echo"$sum2" ?></b></td>
</tr>
</table>
</td></tr>
<tr><td>

<?php 

?>


<table width="100%" >
<tr><td> <b>Result: </b><?php echo"$result11" ?></td></tr>
</table>
</td>
</tr>
</table></center>
<?php
}
else
echo"Sorry, this record dooes not exist...";
?>
</body>
</html>
