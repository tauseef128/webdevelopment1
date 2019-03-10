<?php 
session_start();
// session_destroy();
// $_SESSION['user_id'] = 2;
	// print_r($_SESSION);die();
if( !isset($_SESSION['user_id']) || !isset($_SESSION['role_id']) || $_SESSION['role_id'] != 1) {
	header('location:login.php');
}else{

}

?>