<?php
    include "db/dbconfig.php";

    if(isset($_POST['btnAdd']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $cys = $_POST['cys'];

        $addStudent = new myDB();
        $addStudent -> insert('tbl_students',['full_name'=>$name,'email'=>$email,'cys'=>$cys]);

        header("location: index.php");
    }


    if(isset($_POST['btnUpdate']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $cys = $_POST['cys'];

        

        $updateRecord = new myDB();
        $updateRecord -> update($name, $email, $cys, $id);

        
       header("location: index.php");

    }

    if(isset($_GET['delete']))
    {
        $id = $_GET['delete'];

        $deleteRecord = new myDB();
        $deleteRecord -> delete('tbl_students',$id);
        header('Location: index.php');        

    }
?>