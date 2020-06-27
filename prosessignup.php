<?php 
if(isset($_POST['daftar'])){
	include ("conn.php");
$username = $_POST['nama'];
$password = $_POST['password'];
$query = "INSERT INTO `users` (id,username,password)VALUES(NULL,'$username',md5('$password'))";
$jalan = mysqli_query($db,$query);

if($jalan){
 ?><h1>Akun telah di buat</h1>
	<a href="login.php">login sekarang</a>
 <?php
}
else{
  echo "error";
}
}
?>