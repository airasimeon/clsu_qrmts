<?php
include_once 'includes/functions.php';

extract($_POST);

if(isset($btnSubmit)){
	$res= insert($conn,$fname,$mi,$lname);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>HTML and PHP Sample Exercise #1</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap/bootstrap.min.js"></script>
</head>
<body>
	<div class ="container mb-3 mt-3">
    	<div class="row m-auto">
        	<div class="col-lg-6 m-auto">
        		<div class="card">
	    			<div class="card-header">
	    				Form
	    			</div>
	    			<div class="card-body">
	    				<h4 class="card-title"> Personal Information </h4>
	    				<p class="card-text">Fill up the fields as required.</p>
	    				<form method="POST" action="">
	    					<div class="mb-3">
	    						<input type="text" class="form-control mr-2" name="fname" placeholder="First Name" required>
	    					</div>
	    					<div class="mb-3">
	    						<input type="text" class="form-control mr-2" name="mi" placeholder="M.I" required>
	    					</div>
	    					<div class="mb-3">
	    						<input type="text" class="form-control mr-2" name="lname" placeholder="Last Name" required>
	    					</div>
	    					<div class="mb-3">
	    						<input type="submit" class="btn btn-primary mr-2 w-100" name="btnSubmit" value="Submit">
	    					</div>
	    					<div class="mb-3">
	    						<a href="index.php" class="btn btn-warning w-100 text-white">Back</a>
	    					</div>
	    				</form>
					</div>
				</div>
			</div>
		</div>
	</div>


       					
</body>
</html>