<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>




<?php  
include('config.php');

$output='';
if(isset($_POST["export_excel"]))
{
$subject_id=$_POST['subject_id'];    
$subject_code=$_POST['subject_code'];
$class_id=$_POST['class_id'];

$query="SELECT * from d4_details where class_id='$class_id' and subject_id='$subject_id' and subject_code='$subject_code'";

$results = mysqli_query($conn, $query);

 if(mysqli_num_rows($results)>0)
 {
   $output .='
   <table border="">
   <tr><th><h3 align="center">TULSIRAMJI GAIKWAD-PATIL, College of Engineering & Technology, Nagpur</h3></th></tr>
   <tr><th><h3 align="center">Second Shift Polytechnic</h3></th></tr>
	<tr><th><h3 align="left">For AICTE Diploma Courses</h3></th><th><h3 align="right">With Effect from 2017-18 </h3></th></tr>  
    <tr><th><h3 align="center">Maharashtra State Board of Technical Education</h3></th></tr>
	<tr><th><h3 align="center">PROGRESSIVE ASSESSMENT OF PRACTICAL</h3></th></tr>
	 
	</table>
	
	<table border="1"> 
   <tr>
   <th>Roll No.</th>
   <th>Enroll No.</th>
   <th>Exam Seat No.</th>
   <th>Student Name</th>
   <th>Marks Obt.</th>
   </tr>
   ';
   
   while($row = mysqli_fetch_array($results))
   {
   
     $output .='
	 <tr>
	 <td>'.$row['roll_no'].'</td>
	 <td>'.$row['enroll_no'].'</td>
	 <td>'.$row['exam_seat_no'].'</td>
	 <td>'.$row['stud_name'].'</td>
	 <td>'.$row['marks_obt'].'</td>
	 ';
   
   }   
   $output .='</table>';
   header("Content-Type: application/xls");
   header("Content-Disposition:attachment; filename=download.xls");
   echo $output;

 }

}
 

?>
 
</body>
</html>
