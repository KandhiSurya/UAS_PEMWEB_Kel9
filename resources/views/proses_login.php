<?php
include 'koneksi.php';

$user = $_POST['username'];
$pass = md5($_POST['password']);
$sql = mysql_query($koneksi, "SELECT * FROM login WHERE username='$user' && password='$pass'");
$cek = mysqli_num_rows($sql);
if($cek > 0){
	$data = mysqli_fetch_assoc($sql);
	if($data['level']=="admin"){
 
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		header("resources/views/homepageAdmin.blade.php");
 
	}else if($data['level']=="user"){

		$_SESSION['username'] = $username;
		$_SESSION['level'] = "user";

		header("location:halaman_kasir.php");
	}else{

		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}