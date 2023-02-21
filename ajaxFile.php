<?php
    //Include database configuration file
   include('config.php');
   // $con = mysql_connect("localhost","root","");
	//if(!$con)
	//{
	//die('Could not connect:'.mysql_error());
	//}
	//mysql_select_db("srms");

    //Get all country data
    $query = "SELECT * FROM courses  ORDER BY cr_name ASC";
    $run_query = mysqli_query($con, $query);
    //Count total number of rows
	$count = mysqli_num_rows($run_query);
    
    ?>

<?php
//Include database configuration file
//include('config.php');

if(isset($_POST["c_id"])){
    //Get all state data
	$c_id= $_POST['c_id'];
    $query = "SELECT * FROM course_vs_cr_code WHERE c_id = '$c_id' 
	ORDER BY class_name ASC";
	$run_query = mysqli_query($con, $query);
    
    //Count total number of rows
    $count = mysqli_num_rows($run_query);
    
    //Display states list
    if($count > 0){
        echo '<option value="">Select Course Code</option>';
        while($row = mysqli_fetch_array($run_query)){
		$class_id=$row['class_id'];
		$class_name=$row['class_name'];
        echo "<option value='$class_id'>$class_name</option>";
        }
    }else{
        echo '<option value="">Class not available</option>';
    }
}

if(isset($_POST["class_id"])){
	$class_id= $_POST['class_id'];
    //Get all city data
    $query = "SELECT * FROM exam WHERE class_id = '$class_id' 
	ORDER BY exam_name ASC";
    $run_query = mysqli_query($con, $query);
    //Count total number of rows
    $count = mysqli_num_rows($run_query);
    
    //Display cities list
    if($count > 0){
        echo '<option value="">Select Exam</option>';
        while($row = mysqli_fetch_array($run_query)){
		$exam_id=$row['exam_id'];
		$exam_name=$row['exam_name']; 
        echo "<option value='$exam_id'>$exam_name</option>";
        }
    }else{
        echo '<option value="">Exams not available</option>';
    }
}
?>