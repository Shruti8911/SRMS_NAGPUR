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
  <form action="insert_exam.php" method="post">
    <p>&nbsp;</p>
	
	<center><h2>Add Examination</h2><p>
	<b>
	 <table style="width: 350px" border="2">	
	
	<?php
    //Include database configuration file
    include('config.php');

    //Get all country data
    $query = "SELECT * FROM course_vs_cr_code  ORDER BY class_name ASC";
    $run_query = mysqli_query($con , $query);
    //Count total number of rows
	$count = mysqli_num_rows($run_query);
    
    ?>
	
	<tr><td><label><b style="color:#990000">Select Class</b> </label></td><td><select name="class_id" id="class">
        <option value="">Select Class</option>
        <?php
        if($count > 0){
            while($row = mysqli_fetch_array($run_query)){
				$class_id=$row['class_id'];
				$class_name=$row['class_name'];
                echo "<option value='$class_id'>$class_name</option>";
            }
        }else{
            echo '<option value="">Record not available</option>';
        }
        ?>
    </select></tr>
	<tr> 
	<td><b style="color:#990000">Enter Exam</b></td><td style="size:500"><input type="text" name="exam_name" width="500" /></td>
	</tr>
	<tr>
                    <td colspan="2" style="text-align: center">
                       <input type="submit" name="submit" value="ADD"/>
               
                   </td>
                </tr>
	</table></center>
	<p></p>
	
	</b></font></p></p></p></form>
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