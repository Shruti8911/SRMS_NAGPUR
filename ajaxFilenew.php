<?php

include('config.php');

if(isset($_POST["roll_no"]))
{
    //Get all state data
	$roll_no= $_POST['roll_no'];
    $query = "SELECT * FROM stud_reg WHERE roll_no = '$roll_no' 
	ORDER BY roll_no ASC";
	$run_query = mysqli_query($con, $query);
    
    //Count total number of rows
    $count = mysqli_num_rows($run_query);
    
    //Display states list
    if($count > 0)
	{
        echo '<option value="">Select Enrollment No</option>';
        while($row = mysqli_fetch_array($run_query)){
		$enroll_no=$row['enroll_no'];
		//$stud_name=$row['stud_name'];
        echo "<option value='$enroll_no'>$enroll_no</option>";
	}
    }else{
        echo '<option value="">Enrollment No. not available</option>';
		
    }
}

if(isset($_POST["enroll_no"]))
{
    //Get all state data
	$enroll_no= $_POST['enroll_no'];
    $query = "SELECT * FROM stud_reg WHERE enroll_no = '$enroll_no' 
	ORDER BY enroll_no ASC";
	$run_query = mysqli_query($con, $query);
    
    //Count total number of rows
    $count = mysqli_num_rows($run_query);
    
    //Display states list
    if($count > 0)
	{
        echo '<option value="">Select Exam Seat No</option>';
        while($row = mysqli_fetch_array($run_query)){
		$exam_seat_no=$row['exam_seat_no'];
		//$stud_name=$row['stud_name'];
        echo "<option value='$exam_seat_no'>$exam_seat_no</option>";
	}
    }else{
        echo '<option value="">Exam Seat No. not available</option>';
		
    }
}


if(isset($_POST["exam_seat_no"]))
{
    //Get all state data
	$exam_seat_no= $_POST['exam_seat_no'];
    $query = "SELECT * FROM stud_reg WHERE exam_seat_no = '$exam_seat_no' 
	ORDER BY exam_seat_no ASC";
	$run_query = mysqli_query($con, $query);
    
    //Count total number of rows
    $count = mysqli_num_rows($run_query);
    
    //Display states list
    if($count > 0)
	{
        echo '<option value="">Select Student Name</option>';
        while($row = mysqli_fetch_array($run_query)){
		$stud_name=$row['stud_name'];
        echo "<option value='$stud_name'>$stud_name</option>";
	}
    }else{
        echo '<option value="">Student Name not available</option>';
		
    }
}


?>