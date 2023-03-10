<?php 
include "db/dbconfig.php";

if(isset($_POST['addStudent'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$cys = $_POST['course_year_section'];

	$addStudent = new myDB();
	$res = $addStudent->insert('tbl_students',['full_name'=>$name,'email'=>$email,'course_year_section'=>$cys]);

	echo $res;
	header("location: index.php");
}

if(isset($_POST['getStudent'])){
	$data = new myDB();
	$data->select('tbl_students','*');
	$result = $data->res;
	$records = array();
	while($row = $result->fetch_assoc()) {
		array_push($records, $row);
	}
	echo json_encode($records);
}

if(isset($_POST['updateStudent'])){
	$id = $_POST["id"];
	$where = array("id"=>$id);
	$name = $_POST['name'];
	$email = $_POST['email'];
	$cys = $_POST['course_year_section'];

	$editStudent = new myDB();
	$res = $editStudent->update_record('tbl_students',$where,['full_name'=>$name,'email'=>$email,'course_year_section'=>$cys]);
}

if(isset($_POST['deleteStudent'])){
	if(isset($_POST["id"])){
		$id = $_POST['id'];
	}
	$where = array("id"=>$id);

	$delStudent = new myDB();
	$res = $delStudent->delete_record('tbl_students',$where);
}
?>