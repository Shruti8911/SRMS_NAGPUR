<?php
    session_start();
	$username=$_SESSION["user"];
	$password=$_SESSION["pass"];
	echo $_SESSION["user"];
	echo $_SESSION["pass"];
	if($_SESSION["user"]==true)
	{
	
?>


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
      <h1><a href="#">Student's <span>Result</span><small>Management System</small></a></h1>
    </div>
    <div class="clr"></div>
  </div>
  <div class="content">
  
    <p>&nbsp;</p>
	
	<h2>Sessional Marks</h2>
	
	<table border="" width="20%" align="left">
	<tr>
	<td>
	<a href="student.php">Add Marks</a>
	</td></tr>
	<tr>
	<td>
	<a href="student1.php">Update Marks</a>
	</td>
	</tr>
	<tr>
	<td>
	<a href="student2.php">Delete Marks</a>
	</td>
	</tr>

	</table><br /><br /><br /><br /><br /><br />
	
	
	<h2>D3,D4 & D5 Marks</h2>
	<table border="" width="80%" align="left">
	<tr>
	<td>
    <a href="d3_add.php">ADD D3 Details</a>
	</td>
	<td>
    <a href="update_d3.php">Update/Delete D3</a>
	</td>
	
	<td>
    <a href="show_d3.php">Show D3 Details</a>
	</td>
	</tr>
	<tr>
	<td><a href="d4_add.php">ADD D4 Details</a></td>
	<td>
    <a href="update_d4.php">Update/Delete D4</a>
	</td>
	
	<td>
    <a href="show_d4.php">Show D4 Details</a>
	</td>
	</tr>
	<tr>
	<td><a href="d5_add.php">ADD D5 Details</a></td>
	
	<td>
    <a href="update_d5.php">Update/Delete D5 </a>
	</td>
	
	<td>
    <a href="show_d5.php">Show D5 Details</a>
	</td>
	</tr>
	</table>	
	
	<br /><br /><br /><br /><br /><br /><br />
	
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