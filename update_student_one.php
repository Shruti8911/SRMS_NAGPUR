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
  
  <h2 align="center" style="color:#000000"><b>Student Information</b></h2><br />
 
<form name="frmreg" method="post" action="update_student_query.php" onsubmit ="return check();" >
	
	<?php	

 session_start();
// $_SESSION['username']= $username; 
//  $_SESSION['password']= $username; 

$stud_id = $_GET['id'];
//echo $stud_id;

include('config.php');

$query1="SELECT stud_id from stud_reg where stud_id='$stud_id' ";

$results1 = mysqli_query($con, $query1) or die(mysqli_error());

$row1= mysqli_fetch_array($results1);

//if(mysqli_num_rows($result1)<1)

if($row1<1)

{
//echo"<h5>Sorry, You are not Authenticate User.....</h5>";
}
else
{
$query="SELECT * from stud_reg where stud_id=$stud_id";
$results = mysqli_query($con, $query)
or die(mysqli_error());
//$row= mysqli_fetch_array($results);
while($row = mysqli_fetch_array($results))
{
$stud_id=$row["stud_id"];
$stud_name=$row["stud_name"];
$roll_no=$row["roll_no"];
$c_id=$row["c_id"];
$class_id=$row["cr_cod"];
$session=$row["session"];

}
echo $c_id;
$query3="SELECT cr_name from courses where c_id=$c_id";
$results3 = mysqli_query($con, $query3)
or die(mysqli_error());
//$row= mysqli_fetch_array($results);
while($row3 = mysqli_fetch_array($results3))
{
$cr_name = $row3['cr_name'];
}
	
$query2="SELECT class_name from course_vs_cr_code where class_id=$class_id";
$results2 = mysqli_query($con, $query2) or die("Qery Failed !");

//$row= mysqli_fetch_array($results);
while($row2 = mysqli_fetch_array($results2))
{
$class_name = $row2['class_name'];
}


?>
<b>  
<table align="center">
<tr><td><b>Student Name</b></td><td><input type="text" name="stud_name" value="<?php echo $stud_name?>"  size="50"/></td></tr>  
<input type="hidden" name="stud_id" value="<?php echo $stud_id?>" />

<tr><td><b>Roll No.</b></td><td><input type="text" name="roll_no" value="<?php echo $roll_no;?>"  size="50"/></td></tr>  


<tr><td><label><b>Select Course</b> </label></td><td><select name="c_id" id="c_id">
        <option value=" <?php echo $c_id?>"><?php echo $cr_name?></option>
       
	   <?php
    //Include database configuration file
    include('config.php');
   
    //Get all country data
    $query = "SELECT * FROM courses ORDER BY cr_name ASC";
    $run_query = mysqli_query($query);
    //Count total number of rows
	$count = mysqli_num_rows($run_query);
    
    ?>
	
	   
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
    </select></td></tr>


<tr><td><label><b>Select Class</b> </label></td><td><select name="class_id" id="class_id">
        <option value=" <?php echo $class_id?>"><?php echo $class_name?></option>
       
	   <?php
 //Get all country data
    $query = "SELECT * FROM course_vs_cr_code where c_id=&c_id ORDER BY class_name ASC";
    $run_query = mysqli_query($query);
    //Count total number of rows
	$count = mysqli_num_rows($run_query);
    
    ?>
	
	   
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
    </select></td></tr>

<tr><td><b>Session</b></td><td><input type="text" name="session" value="<?php echo $session;?>"  size="50"/></td></tr>  


</table>


</b>
<table align="center">
<tr>

<td align="center"> 
<input type="submit" value="Update" id="submit"></td>
<td> <a href="update_student_scc.php">Back...</a> </td>
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