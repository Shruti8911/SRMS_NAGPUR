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
	         <form method="get" id="search" action="#">
          <span>
          <input type="text" value="Search..." name="s" id="s" />
          <input name="searchsubmit" type="image" src="images/search.gif" value="Go" id="searchsubmit" class="btn"  />
          </span>
        </form>
        <div class="clr"></div>
      </div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="support.html">Courses</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact.html">Contact Us</a></li>
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
	<center><h2>Staff Registration </h2>
	 <table style="width: 450px" border="2">
	<tr>
	<td>
	<b style="color:#990000">Staff Name</b>
	</td>	
	<td>
	<input type="text" style="width:253px;" />
	</td>
	</tr>
	
	
	
	<?php
    //Include database configuration file
 include('config.php');
 
    //Get all country data
    $query = "SELECT * FROM courses  ORDER BY cr_name ASC";
    $run_query = mysqli_query($conn, $query);
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
	<td>
	Select Class
</td>
<td>

    <select name="class_id" id="class_id">
        <option value="">Select course first</option>
    </select>
	</td></tr>
	<tr><td>Select Exam</td><td>
    
    <select name="exam_id" id="exam_id">
        <option value="">Select class first</option>
    </select>


</td></tr>
	</table>
	</center>
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