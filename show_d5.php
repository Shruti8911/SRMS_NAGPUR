<?php
 include('config.php');
    session_start();
	$username=$_SESSION["user"];
	$password=$_SESSION["pass"];
	echo $username;
	//echo $_SESSION["pass"];
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
                url:'ajaxFile1.php',
                data:'class_id='+class_id,
                success:function(html){
                    $('#subject_id').html(html);
                }
            }); 
        }else{
            $('#subject_id').html('<option value="">Select class first</option>'); 
        }
    });
	
	$('#subject_id').on('change',function(){
        var subject_id = $(this).val();
        if(subject_id){
            $.ajax({
                type:'POST',
                url:'ajaxFile2.php',
                data:'subject_id='+subject_id,
                success:function(html){
                    $('#subject_code').html(html);
                }
            }); 
        }else{
            $('#subject_code').html('<option value="">Select class first</option>'); 
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
      <h1><a href="#">Student's <span>Assesment</span><small>System</small></a></h1>
    </div>
    <div class="clr"></div>
  </div>
  <div class="content">
  
    <p>&nbsp;</p>
	<form name="frm" method="post" action="show_d5_sheet.php">
	<center><h2>Show D5 Details</h2>
	
	 <table style="width: 850px" border="2">
	 
	<?php
  
    $query = "SELECT subject_id FROM staff_reg  where username='$username' AND password='$password' ";
    $run_query = mysqli_query($conn, $query);
    //Count total number of rows
	$count2 = mysqli_num_rows($run_query);
	if($count2 > 0)
	{
            while($row = mysqli_fetch_array($run_query))
			{
				$subject_id=$row['subject_id'];
				
            }
	
	}
	
    $query = "SELECT * FROM courses  ORDER BY cr_name ASC";
    $run_query = mysqli_query($conn, $query);
    //Count total number of rows
	$count = mysqli_num_rows($run_query);
    
    ?>
	
	<tr>
	<td >
	<b style="color:#990000">Enter Academic Year</b>
	</td>
	<td>
	
	<?php
  // Sets the top option to be the current year. (IE. the option that is chosen by default).
  $currently_selected = date('Y'); 
  // Year to start available options at
  $earliest_year = 1980; 
  // Set your latest year you want in the range, in this case we use PHP to just set it to the current year.
  $latest_year = date('Y'); 

  print '<select name="academic_yr">';
  // Loops over each int[year] from current year, back to the $earliest_year [1950]
  foreach ( range( $latest_year, $earliest_year ) as $i ) {
    // Prints the option with the next year in range.
    print '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
  }
  print '</select>';
  ?>
  
	</td>
	</tr>
	
	<tr>
	<td >
	<b style="color:#990000">Name of Faculty</b>
	</td>
	<td>
	<?php
	$query2 = "SELECT staff_name FROM staff_reg  where username='$username' ";
    $run_query2 = mysqli_query($conn, $query2);
    //Count total number of rows
	$count22 = mysqli_num_rows($run_query2);
	if($count22 > 0)
	{
            while($row2 = mysqli_fetch_array($run_query2)){
				$staff_name=$row2['staff_name'];
				
            }
	
	}
	?>
	<input type="text" name="staff_name" style="width:253px;" value="<?php echo $staff_name;?>" />
	</td>
	</tr>
	
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
	<b style="color:#990000">Subject Alloted</b>
	</td>	
	<td>
	 <select name="subject_id" id="subject_id">
        <option value="">Select Course Code first</option>
    </select>
	</td>
	
	
	</tr>
	<tr>
	
	<td>
	<b style="color:#990000">Subject Code</b>
	</td>	
	<td>
	 <select name="subject_code" id="subject_code">
        <option value="">Select Subject Code</option>
    </select>
	</td>
	
	
	</tr>
	
	<tr>
	
	<td>
	<b style="color:#990000">Select Semister</b>
	</td>	
	<td>
	 <select name="semister" id="semister">
	 <option value="">Select Sem</option>
        <option value="">SEM-I</option>
		<option value="">SEM-II</option>
		<option value="">SEM-III</option>
		<option value="">SEM-IV</option>
        <option value="">SEM-V</option>
		<option value="">SEM-VI</option>
    </select>
	
	<input type="hidden" name="subject_id" value="<?php echo $subject_id?>" />
	
	<input type="hidden" name="username" value="<?php echo $_SESSION["user"]?>" />
	
	<input type="hidden" name="password" value="<?php echo $_SESSION["pass"]?>" />
	</td>
	
	
	</tr>
	
	
	</table>
	<br />
	<input type="submit" value="PROCEED...." />
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