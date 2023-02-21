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
  
  <h2 align="center" style="color:#000000"><b>List of Courses</b></h2><br />
 
<table width="100%" border="1" bgcolor="#FFFFFF">

        <tr align="center"> 
<b>
          <th><b style="color:#FF0000">Sr. No.</b></th>

          <th><b style="color:#FF0000">Course Name</b></th>

            <th><b style="color:#FF0000">Course Duration</b></th>
			

          <th><b style="color:#FF0000">Operation</b></th>

          </tr>

<?php


include('config.php');
		

$query="SELECT * from courses order by cr_name ASC";

$result = mysql_query($query);  
$i=0;
while($row=mysql_fetch_array($result))
{        
     $i++;                                        
   
    $c_id=$row['c_id'];
   
	$cr_name=$row['cr_name'];
	
	$cr_duration=$row['cr_duration'];


	   			   
	?>

	

	<tr align="center">
    
	<td><b style="color:#000000"><?php echo"$i" ?></b></td>
	
	<td><b style="color:#000000"><?php echo"$cr_name" ?></b></td>

	<td><b style="color:#000000"> <?php echo"$cr_duration" ?> </b></td>


	
	<td><b style="color:#000000"><a href="update_course_one.php?id=<?php echo $row['c_id'];?>"><b>Update</b></a></b></td>

	

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