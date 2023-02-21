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
  
  <h2 align="center" style="color:#000000"><b>List of Subjects</b></h2><br />
 
<table width="100%" border="1" bgcolor="#FFFFFF">

        <tr align="center"> 
<b>
          <th><b style="color:#FF0000">Sr. No.</b></th>

		  <th><b style="color:#FF0000">Class Name</b></th>

          <th><b style="color:#FF0000">Subject Name</b></th>
      
	      <th><b style="color:#FF0000">Subject Short Name</b></th>

          <th><b style="color:#FF0000">Operation</b></th>

          </tr>

<?php

include('config.php');
		
$c_id = $_POST['c_id'];
$class_id = $_POST['class_id'];

$query="SELECT * from subject WHERE c_id='$c_id' and class_id='$class_id' order by subject_name ASC";

$result = mysqli_query($conn, $query);  
$i=0;
while($row=mysqli_fetch_array($result))
{        
     $i++;                                        
   
    $subject_id=$row['subject_id'];
	
	 $class_id=$row['class_id'];
	 
	$subject_name=$row['subject_name'];
	
	$subject_code=$row["subject_code"];


$result1 = mysqli_query($conn, "SELECT * FROM course_vs_cr_code WHERE class_id='$class_id'");
              while($row1=mysqli_fetch_array($result1))
		      {   
			    $class_name=$row1['class_name']; 
               }   			   
	?>

	

	<tr align="center">
    
	<td><b style="color:#000000"><?php echo"$i" ?></b></td>
	
	<td><b style="color:#000000"><?php echo"$class_name" ?></b></td>
	
	<td><b style="color:#000000"><?php echo"$subject_name" ?></b></td>

	<td><b style="color:#000000"><?php echo"$subject_code" ?></b></td>
	
	<td><b style="color:#000000"><a href="update_subject_one.php?id=<?php echo $row['subject_id'];?>"><b>Update</b></a></b></td>

	

	</tr>

	

	

	<?php

}



?>

</table>

  
  
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