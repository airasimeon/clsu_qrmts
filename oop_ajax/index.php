<?php
include "db/dbconfig.php";

$data = new myDB();
?>
<!DOCTYPE html>
<html>
<head>
	<title>OOP CRUD</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#myInput").on("keyup",function(){
				var value = $(this).val().toLowerCase();
				$("#tableBody tr").filter(function(){
					$(this).toggle($(this).text().toLowerCase().indexOf(value)>-1)
				});
			});
		});
	</script>
</head>
<body> <br>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h4 class="text-center text danger">Form</h4>
			</div>
			<div class="card-body">
				<h4 class="card-title">Personal Information</h4>
    			<p class="card-text">Fill up the fields as required</p>
				<?php
					if(isset($_GET["update"])){
						if(isset($_GET["id"])){
							$id = $_GET['id'];
						}
						$where = array("id"=>$id);
						$row = $data->select_record('tbl_students',$where);
					?>
						<form method="POST" action="index.php" id="updateTable">
							<div class="form-group">
								<input type="hidden" name="id" id="id" value="<?php echo $id; ?>"class="form-control">
							</div>
							<div class="form-group">
								<label>Name</label>
								<input type="text" name="name" id="name" value="<?php echo $row['full_name']; ?>" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" name="email" id="email" value="<?php echo $row['email']; ?>" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Course Year and Section</label>
								<input type="text" name="course_year_section" id="course_year_section" value="<?php echo $row['course_year_section']; ?>"class="form-control" required>
							</div>
							<div class="form-group">
								<button id="update" onclick="updateStudent()" class="btn btn-primary">Update</button>
							</div>
						</form>
						<?php
					}else{
						?>
						<form method="POST" action="index.php">
							<div class="form-group">
								<label>Name</label>
								<input type="text" name="name" id="name" placeholder="Full Name" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" name="email" id="email" placeholder="Email" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Course Year and Section</label>
								<input type="text" name="course_year_section" id="course_year_section" placeholder="Course Year & Section" class="form-control" required>
							</div>
							<div class="form-group">
								<button id="add" onclick="addStudent()" class="btn btn-outline-primary">Add</button>
							</div>
						</form>
						<?php
					}
				?>
			</div>
		</div>
	</div> <br>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h4 class="text-center text danger">Display Records</h4>
			</div>
			<div class="form-group">
				<input type="text" id="myInput" placeholder="Search..." class="form-control">
			</div>
			<table class="table table-bordered">
				<thead>
					<tr class="bg-info text-center">
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Course Year & Section</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody class="text-center" id="tableBody"></tbody>
			</table>
		</div>
	</div>
</body>
<script type="text/javascript" src="ajax/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		loadStudents();
	});
	function loadStudents(){
		$.ajax({
			url:"ajax.php",
			method:"post",
			data:{
				"getStudent":true,
			},
			success:function(res){
				var tableData = '';
				console.log(res);
				var result = JSON.parse(res);

				result.forEach(function(data){
					tableData +=`<tr>`;
					tableData +=`<td>`+data['id']+`</td>`;
					tableData +=`<td>`+data['full_name']+`</td>`;
					tableData +=`<td>`+data['email']+`</td>`;
					tableData +=`<td>`+data['course_year_section']+`</td>`;
					tableData +=`<td>					
						<a href="index.php?update=1&id=`+data['id']+`" class="btn btn-warning">Update</a> 
						&nbsp; 
						<button id="delete" onclick="deleteStudent(`+data['id']+`)" class="btn btn-danger">Delete</button></td>`;
					tableData +=`</tr>`;
				})

				$('#tableBody').html(tableData);
			
			},
			error:function(error){
				console.log(error);
			}
		})
	}
	function addStudent(){
		var name = document.getElementById('name').value;
		var email = document.getElementById('email').value;
		var cys = document.getElementById('course_year_section').value;
			$.ajax({
				url:"ajax.php",
				method:"post",
				data:{
					"addStudent":true,
					name:name,
					email:email,
					course_year_section:cys,

				},
				success:function(res){
					alert("Student Record Added!");
					loadStudents();
				},
				error:function(error){
					console.log(error);
				}

			})
	}
	function updateStudent(){
		var id = document.getElementById('id').value;
		var name = document.getElementById('name').value;
		var email = document.getElementById('email').value;
		var cys = document.getElementById('course_year_section').value;
			$.ajax({
				url:"ajax.php",
				method:"post",
				data:{
					"updateStudent":true,
					id:id,
					name:name,
					email:email,
					course_year_section:cys,

				},
				success:function(res){
					alert("Student Record Updated!");
					loadStudents();
				},
				error:function(error){
					console.log(error);
				}

			})
	}
	function deleteStudent(id){
			$.ajax({
				url:"ajax.php",
				method:"post",
				data:{
					"deleteStudent":true,
					id:id,

				},
				success:function(res){
					alert("Student Record Deleted!");
					loadStudents();
				},
				error:function(error){
					console.log(error);
				}

			})
	}
</script>
</html>

