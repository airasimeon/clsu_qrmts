<?php 
include_once "dbconfig.php";
include 'functions.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>HTML and PHP Sample Exercise #1</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.min.css">
	<script src="../js/jquery-3.5.1.min.js"></script>
	<script src="../js/bootstrap/bootstrap.min.js"></script>
</head>
<body>
	<div class ="container mb-3 mt-3">
    	<div class="row m-auto">
        	<div class="col-lg-6 m-auto">
        		<div class="card">
	    			<div class="card-header">
	    				Update Form
	    			</div>
	    			<div class="card-body">
	    				<h4 class="card-title"> Personal Information </h4>
	    				<p class="card-text">Update the fields.</p> 
	    				<form method="POST">
	    					<div class="mb-3">
	    						<input type="text" class="form-control mr-2" name="user" placeholder="User ID" required>
	    					</div>
	    					<div class="mb-3">
	    						<input type="text" class="form-control mr-2" name="newfn" placeholder="First Name" required>
	    					</div>
	    					<div class="mb-3">
	    						<input type="text" class="form-control mr-2" name="newmi" placeholder="M.I" required>
	    					</div>
	    					<div class="mb-3">
	    						<input type="text" class="form-control mr-2" name="newln" placeholder="Last Name" required>
	    					</div>
	    					<div class="mb-3">
	    						<input type="submit" class="btn btn-primary mr-2 w-100" name="update" value="Update">
	    					</div>
	    					<div class="mb-3">
	    						<a href="../index.php" class="btn btn-warning w-100 text-white">Back</a>
	    					</div>
	    				</form> 
					</div>
				</div>
			</div>
		</div>
	</div>
       					
</body>
</html>