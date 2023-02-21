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
  
  
 
   <?php	


 include('config.php');
 		
$id=0;		
$staff_id=0;	
$staff_name = $_POST['staff_name'];
$email = $_POST['email'];
$c_id=$_POST['c_id'];;	  
$class_id = $_POST['class_id'];
$subject_id = $_POST['subject_id'];
$subject_code = $_POST['subject_code'];

$session = $_POST['session'];
$about = $_POST['about'];

$username = "$email"; 
//echo "$username";

$status='staff';
//echo "$password";

$query="SELECT email from staff_reg where email='$email'";
$result = mysqli_query($conn, $query)
or die(mysqli_error($conn));
$row= mysqli_fetch_array($result);	
if(mysqli_num_rows($result)>0)
	{
	echo"Sorry, This Record is  Alresdy Exist.....";
	}
else
{


$query="SELECT max(staff_id)as max from staff_reg";
$result = mysqli_query($conn, $query)
or die(mysqli_error($conn));
$row= mysqli_fetch_array($result);
$ln = $row['max'];
$ln++;

$password='956@@544'.$c_id.$class_id.$ln;



$insert = "INSERT INTO staff_reg VALUES('$staff_id','$staff_name','$email','$c_id','$class_id','$subject_id','$subject_code','$session','$username','$password','$about')";

$results = mysqli_query($conn, $insert)

or die(mysqli_error($conn));

echo "<h3>Record inserted successfully.....</h3>";




$ins = "INSERT INTO login VALUES  ('$id','$username','$password','$status')";

$res = mysqli_query($conn, $ins)

or die(mysqli_error($conn));

echo "<h3>Staff Username is $username and password is $password..</h3>";

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