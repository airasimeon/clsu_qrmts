<?php 
include('connection.php');
$username = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$course = $_POST['course'];
 
$sql = "INSERT INTO `users` (`username`,`email`,`mobile`,`course`) values ('$username', '$email', '$mobile', '$course' )";
$query= mysqli_query($con,$sql);
$lastId = mysqli_insert_id($con);
if($query ==true)
{
    $data = array(
        'status'=>'true',
    );
    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>'false',
    );
    echo json_encode($data);
} 
?>