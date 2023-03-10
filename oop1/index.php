<?php
include "includes/dbconfig.php";

$obj = new DBConfig;

extract($_POST);

if (isset($btnSubmit)) {
  $obj->addUser($txtFname, $txtCourse_Year_Section, $txtEmail);
}
if (isset($delete)) {
  $obj->deleteuser($delete);
}
if (ISSET($_POST['btnUpdate'])) {
  $obj->updateUser($txtFname, $txtCourse_Year_Section, $txtEmail);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Activity 2</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/jquery-3.5.1.min.js"></script>
</head>
<body >
<br><br>
<div class="d-flex  align-items-center justify-content-center">
<div class="w-75 rounded border ">
<div class="d-flex p-2 border bg-light">Activity 2</div>
<div class="container">
 <form method="POST">
	<h3>Personal Information</h3>
<div class="row g-3">
    <div class="col-md-5">
    <input type="text" class="form-control " id="change2" placeholder="Full Name" name="txtFname"  required>
  </div>

  <div class="row g-3">
    <div class="col-md-5">
    <input type="text" class="form-control " id="change2" placeholder="Course Year & Section" name="txtCourse_Year_Section"  required>
  </div>

</div><br>
<div class="row g-3">
  <div class="col-md-4">
    <input type="text" class="form-control" id="change4" placeholder="Email" min="0" name="txtEmail" required>
  </div>
  
    
</div><br>
<div class="d-grid gap-2 d-md-block">
	<button type="submit" class="btn btn-primary" name="btnSubmit">ADD</button>
</form>
	<button type="button" class="btn btn-danger" onclick="ClearFields()">Clear Values</button>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal">Update</button>
</div>
</div><br>
<div class="container ">
  
            <?php
              
              $obj->displayAll();
            ?>

</div>	
<br><br>
</div>
</div>
</div>
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateLabel">Update User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
  <form method="POST">
  <h3>Personal Information</h3>
  <div class="row g-3">
    <div class="col-md-2">
    <input type="text" class="form-control " id="txtid" placeholder="ID" name="txtid"  required>
  </div>
  </div><br>
<div class="row g-3">
    <div class="col-md-5">
    <input type="text" class="form-control " id="txtFname" placeholder="First Name" name="txtFname"  required>
  </div>
  <div class="col-md-2">
    <input type="text" class="form-control " id="txtMI" placeholder="M.I" name="txtMI"  required>
  </div>
   <div class="col-md-5">
    <input type="text" class="form-control " id="txtLname" placeholder="Last name" name="txtLname"  required>
  </div>
</div><br>
<div class="row g-3">
  <div class="col-md-4">
    <input type="number" class="form-control" id="txtAge" placeholder="Age" min="0" name="txtAge" required>
  </div>
  <div class="col-md-4">
    <input type="date" class="form-control" id="txtBirthday" placeholder="birthday" name="txtBirthday"  required>
  </div>
   
</div><br>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="btnUpdate" name="btnUpdate">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
	function ClearFields() {
     document.getElementById("change1").value = "";
     document.getElementById("change2").value = "";
     document.getElementById("change3").value = "";
     document.getElementById("change4").value = "";
     document.getElementById("change5").value = "";
     document.getElementById("change6").value = "";

      
}
function changeinput1() {
    var inputVal = document.getElementById("change1");
    if (inputVal.value < 1) {
        inputVal.style.backgroundColor = "#E9F0FF";
    }
    else{
        inputVal.style.backgroundColor = "";
    }
}

</script>
</body>
</html>