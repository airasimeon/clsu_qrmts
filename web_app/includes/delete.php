<?php
include_once "dbconfig.php";
include "functions.php";


// function del($conn,$delete){
	//extract($_GET);
	if(isset($_GET['userID'])){
	$delete = $_GET['userID'];}

	// extract($_POST);
// 	// if(isset($delete)){
// 	// $res = del($conn,$delete);
// 	// }

	$sql = "DELETE FROM tbl_users WHERE userID='$delete'";
	try{
		$res = $conn-> query($sql);
		header("location: ../index.php");
	}
	catch(Exception $e) {
		echo '<div class="alert alert-warning alert-dismissible fade show m-5" role="alert">
			<strong>Error:</strong>'.$e.'<button type="button" class="close” data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		 </div>';
	}
// }

// extract($_POST);
// 	if(isset($delete)){
// 	$res = del($conn,$delete);
// 	}

?>