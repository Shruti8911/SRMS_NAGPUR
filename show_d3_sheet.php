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



$query="SELECT * from d3_details where class_id='$class_id' and subject_id='$subject_id' and subject_code='$subject_code' ORDER BY roll_no ASC";

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
$password=$row['password'];
$roll_no=$row['roll_no'];
$enroll_no=$row['enroll_no'];
$exam_seat_no=$row['exam_seat_no'];
$stud_name=$row['stud_name'];
$m1=$row['m1'];
$m2=$row['m2'];
$m3=$row['m3'];
$m4=$row['m4'];
$m5=$row['m5'];
$m6=$row['m6'];
$m7=$row['m7'];
$m8=$row['m8'];
$m9=$row['m9'];
$m10=$row['m10'];
$m11=$row['m11'];
$m12=$row['m12'];
$m13=$row['m13'];
$m14=$row['m14'];
$m15=$row['m15'];
$m16=$row['m16'];
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

$total_marks=$row['total_marks'];
$PA_marks=$row['PA_marks'];

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

$query3="SELECT * from subject where subject_id=$subject_id";
$results3 = mysqli_query($conn, $query3)
or die(mysqli_error($conn));
//$row= mysqli_fetch_array($results);
while($row3 = mysqli_fetch_array($results3))
{
$subject_name = $row3['subject_name'];
$subject_code = $row3['subject_code'];

}




?>
<p><p><br />
<center>

<h3 align="center" style="color:#990000">Cummins College of Engineering for Women, Nagpur</h3>

<h4 align="center" style="color:#990000">Becholer of Engineering</h4>
<h4 align="left" style="color:#990000">For AICTE BE Courses</h4><h4 align="right" style="color:#990000">With Effect from 2017-18          </h4>

<h3 align="center" style="color:#990000">Rashtrasant Tukadoji Maharaj Nagpur University</h3>
<h3 align="center" style="color:#990000">PROGRESSIVE ASSESSMENT OF PRACTICAL</h3>

<table bordercolorlight="#000000" width="100%" style="border-left-width:thin" bgcolor="#FFFFFF">

<tr>
<td><h4 align="left" style="color:#990000">Academic Year : <?php echo"$academic_yr" ?></h4></td>
<td><h4 align="left" style="color:#990000">Name of Faculty : <?php echo"$staff_name" ?></h4></td>
<td></td>
</tr>

<tr>
<td><h4 align="left" style="color:#990000">Course & Code : <?php echo"$cr_name" ?><?php echo"$class_name" ?></h4></td>
<td><h4 align="left" style="color:#990000">Subject & Code : <?php echo"$subject_name" ?><?php echo"     "; ?><?php echo"$subject_code" ?></h4></td>
<td><h4 align="left" style="color:#990000"> Semister : <?php echo"$semister" ?></h4></td>
</tr>


</table>




<table bordercolorlight="#000000" width="100%" border="" style="border-left-width:thin" bgcolor="#FFFFFF">
<tr><th style="color:#000000">Roll No.</th><th style="color:#000000">Enrollment No.</th><th style="color:#000000">Exam Seat No.</th><th style="color:#000000">Name of Student</th><th style="color:#000000">Experiment /Assignment /Sheet /Activity /No. (Marks out of 10 per experiment)</th><th style="color:#000000">Total Marks out of ( 160 )</th><th style="color:#000000">P A Marks of Practical Converted according to TE scheme. Max Marks ( 25 )</th></tr>


<tr><th style="color:#000000">1</th><th style="color:#000000">2</th>
<th style="color:#000000">3</th><th style="color:#000000">4</th>
<th style="color:#000000">
<table border="1" width="100%">
<tr>
<td align="center">5</td>
</tr>
</table>
<table border="1" width=100%">
<tr>
<td>1</td>
<td>2</td>
<td>3</td>
<td>4</td>
<td>5</td>
<td>6</td>
<td>7</td>
<td>8</td>
<td>9</td>
<td>10</td>
<td>11</td>
<td>12</td>
<td>13</td>
<td>14</td>
<td>15</td>
<td>16</td>
<td>17</td>
<td>18</td>
<td>19</td>
<td>20</td>
<td>21</td>
<td>22</td>
<td>23</td>
<td>24</td>
<td>25</td>
<td>26</td>
<td>27</td>
<td>28</td>
<td>29</td>
<td>30</td>
<td>31</td>
<td>32</td>

</tr>
</table>

 </th>
<th style="color:#000000">
6
</th>

<th style="color:#000000">7</th></tr>


<?php

$query="SELECT * from d3_details where class_id='$class_id' and subject_id='$subject_id' and subject_code='$subject_code'";
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
$password=$row['password'];
$roll_no=$row['roll_no'];
$enroll_no=$row['enroll_no'];
$exam_seat_no=$row['exam_seat_no'];
$stud_name=$row['stud_name'];
$m1=$row['m1'];
$m2=$row['m2'];
$m3=$row['m3'];
$m4=$row['m4'];
$m5=$row['m5'];
$m6=$row['m6'];
$m7=$row['m7'];
$m8=$row['m8'];
$m9=$row['m9'];
$m10=$row['m10'];
$m11=$row['m11'];
$m12=$row['m12'];
$m13=$row['m13'];
$m14=$row['m14'];
$m15=$row['m15'];
$m16=$row['m16'];
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

$total_marks=$row['total_marks'];
$PA_marks=$row['PA_marks'];

$total=$m1+$m2+$m3+$m4+$m5+$m6+$m7+$m8+$m9+$m10+$m11+$m12+$m13+$m14+$m15+$m16;

	?>
   <tr align="center">
   <td align="center"><b style="color:#000000"><?php echo"$roll_no" ?></b></td>
   <td><b style="color:#000000"> <?php echo"$enroll_no" ?> </b></td>
   <td><b style="color:#000000"><?php echo"$exam_seat_no" ?></b></td>
   <td><b style="color:#000000"><?php echo"$stud_name" ?></b></td>
   
   
   <td>
   
   <table border="1" width="100%">
<tr>
<td><b style="color:#000000"><?php echo"$m1" ?></b></td>
<td><b style="color:#000000"><?php echo"$m2" ?></b></td>
<td><b style="color:#000000"><?php echo"$m3" ?></b></td>
<td><b style="color:#000000"><?php echo"$m4" ?></b></td>
<td><b style="color:#000000"><?php echo"$m5" ?></b></td>
<td><b style="color:#000000"><?php echo"$m6" ?></b></td>
<td><b style="color:#000000"><?php echo"$m7" ?></b></td>
<td><b style="color:#000000"><?php echo"$m8" ?></b></td>
<td><b style="color:#000000"><?php echo"$m9" ?></b></td>
<td><b style="color:#000000"><?php echo"$m10" ?></b></td>
<td><b style="color:#000000"><?php echo"$m11" ?></b></td>
<td><b style="color:#000000"><?php echo"$m12" ?></b></td>
<td><b style="color:#000000"><?php echo"$m13" ?></b></td>
<td><b style="color:#000000"><?php echo"$m14" ?></b></td>
<td><b style="color:#000000"><?php echo"$m15" ?></b></td>
<td><b style="color:#000000"><?php echo"$m16" ?></b></td>
<td><b style="color:#000000"><?php echo"$m17" ?></b></td>
<td><b style="color:#000000"><?php echo"$m18" ?></b></td>
<td><b style="color:#000000"><?php echo"$m19" ?></b></td>
<td><b style="color:#000000"><?php echo"$m20" ?></b></td>
<td><b style="color:#000000"><?php echo"$m21" ?></b></td>
<td><b style="color:#000000"><?php echo"$m22" ?></b></td>
<td><b style="color:#000000"><?php echo"$m23" ?></b></td>
<td><b style="color:#000000"><?php echo"$m24" ?></b></td>
<td><b style="color:#000000"><?php echo"$m25" ?></b></td>
<td><b style="color:#000000"><?php echo"$m26" ?></b></td>
<td><b style="color:#000000"><?php echo"$m27" ?></b></td>
<td><b style="color:#000000"><?php echo"$m28" ?></b></td>
<td><b style="color:#000000"><?php echo"$m29" ?></b></td>
<td><b style="color:#000000"><?php echo"$m30" ?></b></td>
<td><b style="color:#000000"><?php echo"$m31" ?></b></td>
<td><b style="color:#000000"><?php echo"$m32" ?></b></td>

</tr>
</table>
</td>
   
   <td><b style="color:#000000"><?php echo"$total" ?></b></td>
   <td><b style="color:#000000"><?php echo"$PA_marks" ?></b></td>

	
</tr>

<?php 

}
?>

</table>

</center>

<form method="post" action="download_d3.php" >

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
