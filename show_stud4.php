<?php
    session_start();
	$username=$_SESSION["user"];
	$password=$_SESSION["pass"];
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


<script src="jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
    $('#roll_no').on('change',function(){
        var roll_no = $(this).val();
        if(roll_no){
            $.ajax({
                type:'POST',
                url:'ajaxFilenew.php',
                data:'roll_no='+roll_no,
                success:function(html)
				{
                    $('#enroll_no').html(html);
					 
                }
            }); 
        }else
		{
            $('#enroll_no').html('<option value="">Select Roll No. first</option>');
			  
        }
    });
	
});



$(document).ready(function(){
    $('#enroll_no').on('change',function(){
        var enroll_no = $(this).val();
        if(enroll_no){
            $.ajax({
                type:'POST',
                url:'ajaxFilenew.php',
                data:'enroll_no='+enroll_no,
                success:function(html)
				{
                    $('#exam_seat_no').html(html);
					 
                }
            }); 
        }else
		{
            $('#exam_seat_no').html('<option value="">Select Enroll No. first</option>');
			  
        }
    });
	
});


$(document).ready(function(){
    $('#exam_seat_no').on('change',function(){
        var exam_seat_no = $(this).val();
        if(exam_seat_no){
            $.ajax({
                type:'POST',
                url:'ajaxFilenew.php',
                data:'exam_seat_no='+exam_seat_no,
                success:function(html)
				{
                    $('#stud_name').html(html);
					 
                }
            }); 
        }else
		{
            $('#stud_name').html('<option value="">Select Exam Seat No. first</option>');
			  
        }
    });
	
});

</script>
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
$roll_no=$_POST['roll_no'];
$stud_name=$_POST['stud_name'];
$enroll_no=$_POST['enroll_no'];
$exam_seat_no=$_POST['exam_seat_no'];

$a=0;
$b=0;

?>


<form name="frm" method="post" action="insert_d5.php">
<center>
 <h2 align="center">Add D5 Details</h2><br />
 
<table width="52%" border="1" bgcolor="#FFFFFF">



   <?php     


$query="SELECT * from stud_reg where c_id=$c_id and cr_code=$class_id order by stud_name";

$run_query1 = mysqli_query($conn, $query);  

while($row=mysqli_fetch_array($run_query1))
{                                                
    $stud_id=$row['stud_id'];
    $roll_no=$row['roll_no'];
	$stud_name=$row['stud_name'];
	$c_id=$row['c_id'];
	$class_id=$row['cr_code'];
}
	
?>
<input type="hidden" name="academic_yr" value="<?php echo $academic_yr?>" />
<input type="hidden" name="staff_name" value="<?php echo $staff_name?>" />
<input type="hidden" name="c_id" value="<?php echo $c_id?>" />
<input type="hidden" name="class_id" value="<?php echo $class_id?>" />
<input type="hidden" name="subject_id" value="<?php echo $subject_id?>" />
<input type="hidden" name="subject_code" value="<?php echo $subject_code?>" />
<input type="hidden" name="semister" value="<?php echo $semister?>" />
<input type="hidden" name="username" value="<?php echo $username?>" />
<input type="hidden" name="password" value="<?php echo $password?>" />
<input type="hidden" name="roll_no" value="<?php echo $roll_no?>" />
<input type="hidden" name="stud_name" value="<?php echo $stud_name?>" />
<input type="hidden" name="enroll_no" value="<?php echo $enroll_no?>" />
<input type="hidden" name="exam_seat_no" value="<?php echo $exam_seat_no?>" />


	</tr>
	 <?php
	$query2 = "SELECT marks_obt FROM studvsmarks where roll_no='$roll_no' and exam_id='21'";
    $run_query2 = mysqli_query($conn, $query2);
	$count2 = mysqli_num_rows($run_query2);
		 if($count2 > 0){
            while($row2 = mysqli_fetch_array($run_query2))
			{
				$marks_obt=$row2['marks_obt'];			
            }
			$a=$marks_obt;
        }
		?>
	<tr>
	<td >
	<b style="color:#990000">TS1</b>
	</td>
	<td>
	
	 <input type="text" name="TS1" value="<?php echo $a; ?>" size="5" />
	
	</td>
	</tr>
	
	 <?php
	$query21 = "SELECT marks_obt FROM studvsmarks where roll_no='$roll_no' and exam_id='22'";
    $run_query21 = mysqli_query($conn, $query21);
	$count21 = mysqli_num_rows($run_query21);
		 if($count21 > 0){
            while($row21 = mysqli_fetch_array($run_query21))
			{
				$marks_obt=$row21['marks_obt'];			
            }
			$b=$marks_obt;
        }
		?>
	
	<tr>
	<td >
	<b style="color:#990000">TS2</b>
	</td>
	<td>
	
	 <input type="text" name="TS2" value="<?php echo $b; ?>" size="5" />
	
	</td>
	</tr>
   
   <?php 
   
   $avg=($a+$b)/2;
    //echo $avg;
   ?>
   
  
     <tr>
	<td >
	<b style="color:#990000">Average of 5 & 6</b>
	</td>
	<td>
	
	 <input type="text" name="avg_marks" value="<?php echo $avg; ?>" size="10" />
	</td>
	</tr>
	
	 <tr>
	<td >
	<b style="color:#990000">Performance in Group Activity(Out of 6)</b>
	</td>
	<td>
	
	 <input type="text" name="perform" value="" size="10" />
	</td>
	</tr>
	
	 <tr>
	<td >
	<b style="color:#990000">Individual Performance in Oral / Presentation (Out of 4)</b>
	</td>
	<td>
	
	 <input type="text" name="indivi_perform" value="" size="10" />
	</td>
	</tr>
	
	
</table>
<br />
	<input type="submit" value="Submit" />
	</center>
	</form>
  
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