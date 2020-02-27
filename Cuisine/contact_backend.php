<?php 
	
	include('dbconnect.php');
	
	$name=$_POST['f_name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$message=$_POST['message'];
	
	

	if(empty($f_name) ||empty($email) ||  empty($mobile) || empty($message)){
		echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Please fill all the fields!</div>";
		exit(0);
	}
	else{
		
					$sql="INSERT INTO chef (name,  email,  mobile,message) VALUES ('$f_name','$email','$mobile','$message')";
					$run_query=mysqli_query($conn,$sql);
					if($run_query){
						echo "
								<div class='alert alert-success'>
									<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
									Click <b><a href='index.php'>here</a></b> to login.
								</div>
						";
					}
			}
		}
	

	

	
 ?>