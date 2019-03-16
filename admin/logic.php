<?php
		require_once '../connection.php';

		if(isset($_POST['login_submit'])){
			$email    = $_POST['email'];
			$password = $_POST['password'];
			$query = "Select * from users where email = '".$email."'  AND password = '".md5($password)."' ";
			$result = $conn->query($query);
			if($result->num_rows > 0){
				echo "<pre>";
				$user = $result->fetch_assoc();
				// print_r($user);die();
				session_start();
				$_SESSION['user_id'] = $user['id'];
				$_SESSION['role_id'] = $user['role_id'];
				$_SESSION['name'] = $user['name'];
				$_SESSION['email'] = $user['email'];
				header('location:index.php');
				
			}
			if($conn->error){
					echo $conn->error;
				}
				else{
					echo "Record Not Found";
				}
			}
		else{
			echo "button id not  submitted";
		}

?>