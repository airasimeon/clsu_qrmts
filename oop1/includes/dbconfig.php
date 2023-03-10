	<?php
	class DBConfig {

		public $db_host = "localhost";
		public $db_user = "root";
		public $db_pass = "";
		public $db_name = "oop";

		// method for database connections
		public function dbConn() {
		
			$conn = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

				if ($conn->connect_error) {
					echo "Cannot connect to database." . $conn->connect_error;
				} else {
					return $conn;
				}
		}

		public function addUser($full_name, $course_year_section, $email) {
			$conn = $this->dbConn();

			$sql = "INSERT INTO tbl_users VALUES
			(NULL, '$full_name', '$course_year_section', '$email')";
			$conn->query($sql);
		}
		public function updateUser($id, $full_name, $course_year_section, $email){

			$conn = $this->dbConn();

			$sql = "UPDATE tbl_users SET fullname='$fullname', course_year_section='$course_year_section', email='$email'
			WHERE id='$id'";
			$conn->query($sql);
		}
		
			public function deleteuser($delete){
			$conn = $this->dbConn();

			$sql = "DELETE FROM tbl_users WHERE id=".$delete;
			$res = $conn->query($sql);
		}

		public function displayAll() {
			$conn = $this->dbConn();

			$sql = "SELECT * FROM tbl_users";
			$res = $conn->query($sql);

			echo ' <form method="POST">
			<table class="table">
					<thead class="table-dark">
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Full Name</th>
							<th scope="col">Course Year & Section</th>
							<th scope="col">Email</th>
							<th scope="col">Actions</th>
						</tr>
					</thead>';

			if($res) {
				if($res->num_rows > 0) {
					while ($row = $res->fetch_assoc()) {
						echo '<tr>
								<td scope="row">'. $row['id'] .'</td>
								<td>'. $row['full_name'] .'</td>
								<td>'. $row['course_year_section'] .'</td>
								<td>'. $row['email'] .'</td>
								<td><button type="submit" name="delete" class="btn btn-outline-danger" value="'. $row['id'] .'">DELETE</button></td>
							  </tr>
							  
							  </form>';
					}
				} else {
					echo "No records found!";
				}
			} else {
				echo "Query error!";
			}	
		}}


  

?>