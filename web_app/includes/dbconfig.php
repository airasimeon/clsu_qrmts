<?php 
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "php_db";
$db_port = "3306";

try{

	$conn = new mysqli($db_host,$db_user,$db_password, $db_name,$db_port);
}
catch(Exception $e){

	echo '<div class="alert alert-warning alert-dismissible fade show m-5" role="alert">
			<strong>Error:</strong>'.$e.'<button type="button" class="close” data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		 </div>';
}

?>