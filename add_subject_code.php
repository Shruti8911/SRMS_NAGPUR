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


</script>
<script src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#c_id').on('change',function(){
        var c_id = $(this).val();
        if(c_id){
            $.ajax({
                type:'POST',
                url:'ajaxFile.php',
                data:'c_id='+c_id,
                success:function(html){
                    $('#class_id').html(html);
                    $('#exam_id').html('<option value="">Select class first</option>'); 
                }
            }); 
        }else{
            $('#class_id').html('<option value="">Select course first</option>');
            $('#exam_id').html('<option value="">Select class first</option>'); 
        }
    });
    
    $('#class_id').on('change',function(){
        var class_id = $(this).val();
        if(class_id){
            $.ajax({
                type:'POST',
                url:'ajaxFile.php',
                data:'class_id='+class_id,
                success:function(html){
                    $('#exam_id').html(html);
                }
            }); 
        }else{
            $('#exam_id').html('<option value="">Select class first</option>'); 
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
      <h1><a href="#">Student's <span>Assesment</span><small> System</small></a></h1>
    </div>
    <div class="clr"></div>
  </div>
  <div class="content">
  
    <p>&nbsp;</p>
	<form name="frm" method="post" action="insert_subject.php">
	<center><h2>Add Subject </h2>
	 <table style="width: 450px" border="2">
	
	
	<?php
    //Include database configuration file
   include('config.php');
    

    //Get all country data
    $query = "SELECT * FROM courses  ORDER BY cr_name ASC";
    $run_query = mysqli_query($con, $query);
    //Count total number of rows
	$count = mysqli_num_rows($run_query);
    
    ?>
	
	
	<tr>
	<td >
	<b style="color:#990000">Select Course</b>
	</td>
   <td><select name="c_id" id="c_id">
        <option value="">Select Course</option>
        <?php
        if($count > 0){
            while($row = mysqli_fetch_array($run_query)){
				$c_id=$row['c_id'];
				$cr_name=$row['cr_name'];
                echo "<option value='$c_id'>$cr_name</option>";
            }
        }else{
            echo '<option value="">Record not available</option>';
        }
        ?>
    </select></td>
    </tr>
	<tr>
	<td><b style="color:#990000">
	Select Course Code</b>
</td>
<td>

    <select name="class_id" id="class_id">
        <option value="">Select course first</option>
    </select>
	</td></tr>
	
	
	<tr>
	<td>
	<b style="color:#990000">Subject Name</b>
	</td>	
	<td>
	<input type="text" name="subject_name" style="width:253px;" />
	</td>
	</tr>
	<tr>
	<td>
	<b style="color:#990000">Subject Code</b>
	</td>	
	<td>
	<input type="text" name="sub_short_name" style="width:253px;" />
	</td>
	</tr>
	
	</table>
	<input type="submit" value="Submit" /><input type="button" value="Cancel" /><a href="admin.php">Back....</a>
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
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>