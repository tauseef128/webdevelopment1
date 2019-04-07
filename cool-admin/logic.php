<?php

		require_once '../connection.php';
		session_start();
		if(isset($_POST['login_submit'])){
			$email    = $_POST['email'];
			$password = $_POST['password'];
			$query = "SELECT * from users where email = '".$email."'  AND password = '".md5($password)."' ";
			$result = $conn->query($query);
			if($result->num_rows > 0){
				
				$user = $result->fetch_assoc();
				
				$_SESSION['user_id'] = $user['id'];
				$_SESSION['role_id'] = $user['role_id'];
				$_SESSION['name'] = $user['name'];
				$_SESSION['email'] = $user['email'];
				header('location:index.php');
				
			}else{
				$_SESSION['error'] = true;
				if($conn->error){
					$_SESSION['message'] = $conn->error;
				}else{
					$_SESSION['message'] =   "Invalid email or password";
				}
				header('location:login.php');
			}
		}

		if(isset($_POST['category_submit'])){	
		$name    = $_POST['name'];
		$description = $_POST['description'];
			
		$query = "INSERT into  category (name,description,created_at) values('".$name."', '".$description."','".date('Y-m-d')."')";
		if($conn->query($query) === true){
			$_SESSION['success'] = true;
			$_SESSION['error'] = false;
			$_SESSION['message'] = "Record inserted successfully";

			
		}else{
			$_SESSION['success'] = false;
			$_SESSION['error'] = true;
			if($conn->error){
				$_SESSION['message'] = $conn->error;
			}else{
				$_SESSION['message'] =  "something went wrong";
			}
		}
		header('location: category-add.php');
	}


?>