<?php
$con  = mysqli_connect('localhost','root','','testingdb');
if(mysqli_connect_errno())
{
    echo 'Database Connection Error';
}