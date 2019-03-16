<?php 
require_once 'connection.php';
if(isset($_POST['signup_submit'])){
			
			$name    = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$password2    = $_POST['password2'];
			// $query = "Select * from users where email = '".$email."'  AND password = '".md5($password)."' ";
			// $result = $conn->query($query);
			$query = "INSERT into users (role_id,name,email,password,created_at) values('2','".$name."','".$email."','".md5($password)."','".date('Y-m-d')."')";
			// if($result->num_rows > 0){
				
			// 	$user = $result->fetch_assoc();
			// 	session_start();
			// 	$_SESSION['user_id'] = $user['id'];
			// 	$_SESSION['role_id'] = $user['role_id'];
			// 	$_SESSION['name'] = $user['name'];
			// 	$_SESSION['email'] = $user['email'];
			// 	header('location:index.php');
				
			// }else{
			// 	if($conn->error){
			// 		echo $conn->error;
			// 	}else{
			// 		echo "Record Not Found";
			// 	}
			// }
			// $conn-> query($query);
			if($conn->query($query) === true){
			echo "record inserted successfully";

			}
			else{ 
				if ($conn->error) {
					echo $conn->error;
				}
				else{
					echo "something went wrong";
				}


			}
		}
?>