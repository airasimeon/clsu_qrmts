<?php
include_once "dbconfig.php";

function displayAll($conn){
	$sql = "SELECT * FROM tbl_users";
	$data = "";

	try{
		$res = $conn -> query($sql);
			if ($res->num_rows>0){
				while($row = $res-> fetch_assoc()){

        			if(isset($_POST['delete'])) {
            			$delete = $_POST['delete'];
            			$res = del($conn,$delete);
            		}

					$data.= '<tr>
								<td>'.$row['userID'].'</td>
								<td>'.$row['userFname'].'</td>
								<td>'.$row['userMI'].'</td>
								<td>'.$row['userLname'].'</td>
								<td style="text-align:center;">
									<form method="POST">
									<a href="includes/update.php?userID='.$row['userID'].'" class="btn btn-warning name="update">Update</a> &nbsp;&nbsp;
									<a href="includes/delete.php?userID='.$row['userID'].'" class="btn btn-danger">Delete</a>
									</form>
								</td>
							 </tr>';
				}
			}else{
				$data = "<tr>
							<td colspan='4'>No Records!</td>
						</tr>";
			}

	}catch (Exception $e){
		$data = "<tr>
					<td colspan='4'>Internal Error.<br> Error:" .$e."</td>
				</tr>";
	}
	echo $data;
}

function insert($conn,$fname,$mi,$lname){
	$sql = "INSERT into tbl_users VALUES (NULL, '$fname', '$mi', '$lname')";
	try{
		$res = $conn-> query($sql);
		header("location: index.php");
	}
	catch(Exception $e) {
		echo '<div class="alert alert-warning alert-dismissible fade show m-5" role="alert">
			<strong>Error:</strong>'.$e.'<button type="button" class="close” data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		 </div>';
	}
}

function update($conn,$user,$newfn,$newmi,$newln){
	
	$sql = "UPDATE tbl_users SET userFname='$newfn',userMI='$newmi',userLname='$newln' WHERE userID='$user'";

	try{
		$res = $conn -> query($sql);
		header("location: ../index.php");
	}
	catch(Exception $e) {
		echo '<div class="alert alert-warning alert-dismissible fade show m-5" role="alert">
			<strong>Error:</strong>'.$e.'<button type="button" class="close” data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		 </div>';
	}
}

// function del($conn,$delete){
// 	if(isset($_POST['delete'])){
// 		$delete = $_POST['delete'];
// 	}

// 	$sql = "DELETE FROM tbl_users WHERE userID='$delete';";
// 	try{
// 		$res = $conn -> query($sql);
// 		header("location: ./index.php");
// 	}
// 	catch(Exception $e) {
// 		echo '<div class="alert alert-warning alert-dismissible fade show m-5" role="alert">
// 			<strong>Error:</strong>'.$e.'<button type="button" class="close” data-dismiss="alert" aria-label="Close">
// 			<span aria-hidden="true">&times;</span>
// 			</button>
// 		 </div>';
// 	}

// }

extract($_POST);
if(isset($update)){
	$res = update($conn,$user,$newfn,$newmi,$newln);
}

?>
