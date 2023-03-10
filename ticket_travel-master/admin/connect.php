<?php
 $server = "localhost";
 $user = "root";
 $pass = "";
 $data = "ukk";

 $konek = new mysqli($server, $user, $pass, $data);

 if(mysql_error()){
 	echo "Gagal Konek Database".mysqli_connect_error();
 }
?>