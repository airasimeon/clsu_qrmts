<?php
include 'includes/functions.php';
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
        	<div class="col-lg">
        		<div class="card">
	    			<div class="card-header">
	    				Dashboard
	       		 		<a href="form.php" class="btn btn-success float-right"> + </a>
	    			</div>
	    			<div class="card-body">
	    				<h4 class="card-title"> Users </h4 >
	    				<table class="table table-bordered">
	    					<thead class="bg-dark text-white">
	        					<tr>
									<th> ID </th>
									<th> Firstname </th>
									<th> M.I. </th>
									<th> Lastname </th>
									<th> Actions </th>
								</tr>
							</thead>
							<tbody>
								<?php 
								displayAll($conn); 
								?>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>


       					
</body>
</html>