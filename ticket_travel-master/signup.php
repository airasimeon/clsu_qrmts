<!DOCTYPE html>
<html>
<head>
	<title>assaa</title>
</head>
<body>
<?php

$cn = new mysqli('localhost','root','','ukk');

if (isset($_POST['submit'])){
	$nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
 	$phone = $_POST['phone'];
 	$email = $_POST['email'];
 	$pass = $_POST['pass'];

	$cn->query("INSERT INTO `costumer`(nama,alamat,phone,email,pass) VALUES ('$nama','$alamat','$phone','$email','$pass') ");
}

?>
<form method="POST">
	<h3>Create your account </h3>
	<input type="text" placeholder="Nama" name="nama">
	<input type="text" placeholder="Mobile Number" name="alamat">
	<input type="text" placeholder="Email" name="phone">	
	<input type="text" placeholder="Alamat" name="email">
	<input type="password" placeholder="Password" name="pass">	
	<input type="submit" class="btn btn-primary" name="submit" value="Input">
</form>
</body>
</html>