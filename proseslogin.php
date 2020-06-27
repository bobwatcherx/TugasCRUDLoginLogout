<?php
if(isset($_POST['login'])){
	include ("conn.php");
	$nama = $_POST['username'];
	$password = $_POST['password'];

	$query = "select * from users where username='$nama' and password='$password'";

	$jalan = mysqli_query($db,$query);
	if($jalan > 0 ){
		session_start();
		$_SESSION['username'] = '$username';
		$_SESSION['status'] = 'login';
		header("location:basic-table.php");
	}
	else{
		header("location:login.php");
	}
}
