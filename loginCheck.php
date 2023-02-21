<?php
 session_start();
		 include('config.php');
		
		 if(isset($_REQUEST["submit"]))
	     {
		 $username=$_REQUEST["username"];
		  $password=$_REQUEST["password"];
		 
		$sql = "SELECT * FROM admin WHERE username='{$username}' AND password='{$password}'";
        $query = mysqli_query($con,$sql) or die("Query failed");
        $rowcount=mysqli_num_rows($query);
		
		$sql = "SELECT * FROM login WHERE ucase(trim(username))=ucase('$username') AND ucase(trim(password))=ucase('$password')";
		$query = mysqli_query($con , $sql);
              $rowcount1=mysqli_num_rows($query);
			  
			  
		//echo $rowcount1;
        if($rowcount==true)
		{   
		    $_SESSION["user"]=$username;
			$_SESSION["pass"]=$password;
            header('Location: admin.php');
            exit();
        }
        else if($rowcount1==true)
		{
		        $_SESSION["user"]=$username;
				$_SESSION["pass"]=$password;
           			 header('Location: open.php');
					exit();
        		
          }
		  else{
			 echo" Username and password is incorrect....";
            }
         }
      
	  
?>