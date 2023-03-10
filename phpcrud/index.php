<?php
    include "db/dbconfig.php";

    $data = new myDB();
    $data-> select('tbl_students', '*', $where=NULL);
    $results = $data->res;
    

    if(isset($_GET['update']))
    {
        $id=$_GET['update'];
        $updState=1;
        //var_dump($id);
        $data-> select('tbl_students', '*', $id);
        $updResults = $data->res;
        //unset($_GET['update']); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <title>OOP CRUD</title>
</head>
<body class="bg-secondary"><br>
    <div class="container mb-3 ">
        <div class="row mb-auto">
            <div class="col-lg">
                <div class="card">
                    <div class="card-header">
                        <h1 style="text-align: center;">OOP CRUD</h1>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Course Year & Section</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($row = mysqli_fetch_assoc($results)): ?>
                                        <tr>
                                            <td><?php echo $row['full_name'];?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['cys'];?></td>
                                            <td>
                                                <a href="index.php?update=<?php echo $row['id']; ?>" class="btn btn-success">Update</a>
                                                <a href="function.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endwhile;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row m-auto">
            <div class="col-lg-6 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Input Form</h3>
                            <form action="function.php" method="POST">                     
                                <?php if(isset ($updState)&&$updState==1): ?>
                                    <?php while($row = mysqli_fetch_assoc($updResults))
                                        {   //Para magamit nung input fields sa baba pag mag uupdate   
                                            $full_name = $row['full_name'];
                                            $email = $row['email'];
                                            $cys = $row['cys']; 
                                        }?>

                                         <!--Para mapasa yung value nung id sa function.php-->
                                         <?php $id = $_GET['update']; //var_dump($id);?>
                                         <input type="hidden" name="id" value="<?php echo $id; ?>">
                                         
                                    <!--Name update field-->
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="name" value="<?php echo $full_name; ?>" required>
                                    </div>
                                <?php else: ?>
                                    <!--Name field-->
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="name" placeholder="Full name" required>
                                    </div>
                                <?php endif ?>
                                
                                <?php if(isset ($updState)&&$updState==1): ?>
                                    <!--Email update field-->
                                    <div class="mb-3">
                                        <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" required>
                                    </div>
                                <?php else: ?>
                                    <!--Email field-->
                                    <div class="mb-3">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                                    </div> 
                               <?php endif ?>
                            
                               <?php if(isset ($updState)&&$updState==1): ?>
                                    <!--CYS update field-->
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="cys" value="<?php echo $cys; ?>" required>
                                    </div>
                                <?php else: ?>
                                    <!--CYS field-->
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="cys" placeholder="Course Year & Section" required>
                                    </div>    
                                <?php endif ?>    
                        
                            <!--Action Buttons-->
                                <!--Update Button-->
                                <?php if(isset ($updState)&&$updState==1): ?>
                                    <div class="mb-3">
                                        <input type="submit" class="form-control btn btn-success" name="btnUpdate" value="UPDATE">
                                    </div>
                                    <div class="mb-3">
                                        <a href="index.php" class="form-control btn btn-warning">Cancel</a>
                                    </div>
                                <!--Add button-->
                                <?php else: ?>
                                    <div class="mb-3">
                                        <input type="submit" class="form-control btn btn-primary" name="btnAdd" value="ADD">
                                    </div>
                                <?php endif ?>
                            </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>  
</body>
</html>