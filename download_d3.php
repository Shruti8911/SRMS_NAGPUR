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

$query="SELECT * from d3_details where class_id='$class_id' and subject_id='$subject_id' and subject_code='$subject_code'";

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
	
	<table  border="1" >
<tr><th>Roll No.</th><th>Enrollment No.</th><th>Exam Seat No.</th><th>Name of Student</th><th>Experiment /Assignment /Sheet /Activity /No. (Marks out of 10 per experiment)</th><th>Total Marks out of ( 160 )</th><th>P A Marks of Practical Converted according to TE scheme. Max Marks ( 25 )</th></tr>

<tr><td></td><td></td><td></td><td></td>
<td>
<table border="1">
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
</td>
<td></td><td></td>

</tr>
   ';
   
   while($row = mysqli_fetch_array($results))
   {
   
     $output .='
	 <tr align="center">
	 <td>'.$row['roll_no'].'</td>
	 <td>'.$row['enroll_no'].'</td>
	 <td>'.$row['exam_seat_no'].'</td>
	 <td>'.$row['stud_name'].'</td>
	 
	 <td>
     <table border="1">
     <tr>
	 <td>'.$row['m1'].'</td>
	 <td>'.$row['m2'].'</td>
	 <td>'.$row['m3'].'</td>
	 <td>'.$row['m4'].'</td>
	 <td>'.$row['m5'].'</td>
	 <td>'.$row['m6'].'</td>
	 <td>'.$row['m7'].'</td>
	 <td>'.$row['m8'].'</td>
	 	 <td>'.$row['m9'].'</td>
	 <td>'.$row['m10'].'</td>
	 <td>'.$row['m11'].'</td>
	 <td>'.$row['m12'].'</td>
	 <td>'.$row['m13'].'</td>
	 <td>'.$row['m14'].'</td>
	 <td>'.$row['m15'].'</td>
	 <td>'.$row['m16'].'</td>
	 	 <td>'.$row['m17'].'</td>
	 <td>'.$row['m18'].'</td>
	 <td>'.$row['m19'].'</td>
	 <td>'.$row['m20'].'</td>
	 <td>'.$row['m21'].'</td>
	 <td>'.$row['m22'].'</td>
	 <td>'.$row['m23'].'</td>
	 <td>'.$row['m24'].'</td>
	 	 <td>'.$row['m25'].'</td>
	 <td>'.$row['m26'].'</td>
	 <td>'.$row['m27'].'</td>
	 <td>'.$row['m28'].'</td>
	 <td>'.$row['m29'].'</td>
	 <td>'.$row['m30'].'</td>
	 <td>'.$row['m31'].'</td>
	 <td>'.$row['m32'].'</td>
	 
	 </tr>
</table>
</td>

 
    <td>'.$row['total_marks'].'</td>
	<td>'.$row['PA_marks'].'</td>

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
