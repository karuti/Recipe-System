<?php 
	
	include('dbconnect.php');
	
	$firstname=$_POST['f_name'];
	$nameofchef=$_POST['chef_name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$description=$_POST['Description'];
	
	

	if(empty($f_name) || empty($chef_name) || empty($email) ||  empty($mobile) || empty($Description)){
		echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Please fill all the fields!</div>";
		exit(0);
	}
	else{
		
					$sql="INSERT INTO chef (firstname, nameofchef, email,  mobile,description) VALUES ('$f_name','$chef_name','$email','$mobile','$Description')";
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