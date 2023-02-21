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
  
  <h2 align="center" style="color:#000000"><b>Our Staff</b></h2><br />
 
<form name="frmreg" method="post" action="update_staff_query.php" onsubmit ="return check();" >
	
	<?php	

 session_start();
// $_SESSION['username']= $username; 
//  $_SESSION['password']= $username; 

$staff_id = $_GET['id'];
//echo $stud_id;

include('config.php');



$query1="SELECT staff_id from staff_reg where staff_id='$staff_id' ";

$results1 = mysql_query($query1)

or die(mysql_error());

$row1= mysql_fetch_array($results1);

//if(mysql_num_rows($result1)<1)

if($row1<1)

{
//echo"<h5>Sorry, You are not Authenticate User.....</h5>";
}
else
{
$query="SELECT * from staff_reg where staff_id=$staff_id";
$results = mysql_query($query)
or die(mysql_error());
//$row= mysql_fetch_array($results);
while($row = mysql_fetch_array($results))
{
$staff_id=$row["staff_id"];
$staff_name=$row["staff_name"];
$email=$row["email"];

$c_id=$row["c_id"];
$class_id=$row["class_id"];
$subject_id=$row["subject_id"];
$session=$row["session"];
$username=$row["username"];
$password=$row["password"];

}
//echo $class_id;
$query3="SELECT cr_name from courses where c_id=$c_id";
$results3 = mysql_query($query3)
or die(mysql_error());
//$row= mysql_fetch_array($results);
while($row3 = mysql_fetch_array($results3))
{
$cr_name = $row3['cr_name'];
}
	
$query2="SELECT class_name from course_vs_cr_code where class_id=$class_id";
$results2 = mysql_query($query2)

or die(mysql_error());

//$row= mysql_fetch_array($results);
while($row2 = mysql_fetch_array($results2))
{
$class_name = $row2['class_name'];
}


$result3 = mysql_query("SELECT * FROM subject WHERE subject_id='$subject_id'");
              while($row3=mysql_fetch_array($result3))
		      {   
			    $subject_name=$row3['subject_name']; 
               }			   			   

?>
<b>  
<table align="center">
<tr><td><b>Staff Name</b></td><td><input type="text" name="staff_name" value="<?php echo $staff_name?>"  size="50"/></td></tr>  
<input type="hidden" name="staff_id" value="<?php echo $staff_id?>" />

<tr><td><b>Email Id</b></td><td><input type="text" name="email" value="<?php echo $email?>"  size="50"/></td></tr>  

<?php
    
   include('config.php');
   
    //Get all country data

    $query = "SELECT * FROM courses  ORDER BY cr_name ASC";
    $run_query = mysql_query($query);
    //Count total number of rows
	$count = mysql_num_rows($run_query);
    
    ?>
<tr>
	<td >
	<b>Select Course</b>
	</td>
   <td><select name="c_id" id="c_id">
        <option value="">Select Course</option>
        <?php
        if($count > 0){
            while($row = mysql_fetch_array($run_query)){
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
	<td><b>
	Select Class</b>
</td>
<td>

    <select name="class_id" id="class_id">
        <option value="">Select course first</option>
    </select>
	</td></tr>
	
	
<tr><td><label><b>Select Subject</b> </label></td><td><select name="subject_id" id="subject_id">
        <option value="<?php echo $subject_id?>"><?php echo $subject_name?></option>
       
	   <?php
   
   include('config.php');
    

    //Get all subject data
    $query = "SELECT * FROM subject where class_id=$class_id";
    $run_query = mysql_query($query);
    //Count total number of rows
	$count = mysql_num_rows($run_query);
   
    ?>
	
	   
	    <?php
        if($count > 0)
		{
            while($row = mysql_fetch_array($run_query))
			{
				$subject_id=$row['subject_id'];
				$subject_name=$row['subject_name'];
                echo "<option value='$subject_id'>$subject_name</option>";
            }
        }else{
            echo '<option value="">Record not available</option>';
        }
        ?>
    </select></td></tr>

<tr><td><b>Session</b></td><td><input type="text" name="session" value="<?php echo $session;?>"  size="50"/></td></tr>  

<tr><td><b>Username</b></td><td><input type="text" name="username" value="<?php echo $username?>"  size="50"/></td></tr>  

<tr><td><b>Password</b></td><td><input type="text" name="password" value="<?php echo $password?>"  size="50"/></td></tr>  

</table>


</b>
<table align="center">
<tr>

<td align="center"> 
<input type="submit" value="Update" id="submit"></td>
<td> <a href="update_staff.php">Back...</a> </td>
</tr>
</table>


</form>
<?php
}
?>
  
  
  

  
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