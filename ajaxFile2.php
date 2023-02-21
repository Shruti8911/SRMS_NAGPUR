
<?php
//Include database configuration file
include('config.php');


if(isset($_POST["subject_id"])){
	$subject_id= $_POST['subject_id'];
    //Get all city data
    $query = "SELECT * FROM subject WHERE subject_id = '$subject_id' 
	ORDER BY subject_name ASC";
    $run_query = mysqli_query($con, $query);
    //Count total number of rows
    $count = mysqli_num_rows($run_query);
    
    //Display cities list
    if($count > 0){
        echo '<option value="">Select Subject Code</option>';
        while($row = mysqli_fetch_array($run_query)){
		$subject_id=$row['subject_id'];
		$subject_name=$row['subject_name']; 
		$subject_code=$row['subject_code']; 
        echo "<option value='$subject_code'>$subject_code</option>";
        }
    }else{
        echo '<option value="">Exams not available</option>';
    }
}


?>