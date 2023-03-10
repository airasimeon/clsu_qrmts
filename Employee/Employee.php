<!--SIMEON, Aira Marie S.-->
<!-- BSIT 4-2-->


<!DOCTYPE html>

<html lang="en">

<head>

<title>Employee Pay</title>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

<?php

class Employee{

public $the_name_of_employee;
public $number_of_hours_work;
public $employees_rate;

function __construct($name,$hours_work,$rate){
    
$this->the_name_of_employee = $name;
$this->number_of_hours_work=$hours_work;
$this->employees_rate=$rate;
}

function getName(){
    return $this->the_name_of_employee;
}

function getHour()
{return $this->number_of_hours_work;}

function getRate()
{return $this->employees_rate;}
    
function getInfo(){ 
return $this->the_name_of_employee.", ". $this->number_of_hours_work.", ". $this->employees_rate ;

}

function computeSalary(){
return $this->number_of_hours_work* $this->employees_rate;
}

}

$firstEmp=new Employee("Marie Simeon",50,70);


$secondEmp=new Employee("Jowie Bautista",30,55);

$thirdEmp=new Employee("Joy Anne Remoyan",70,60);

$fourthEmp=new Employee("Aeron Noah Reyes",55,80);


$fifthEmp=new Employee("Altea Faye Grospe",45,75);

?>
<style>
.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: center;
  font-weight: bold;
}

.content-table th,
.content-table td{
  padding: 12px 15px;
  text-align: center;
}

.content-table tbody tr{
  border-bottom: 1px solid #dddddd;
}
 
.content-table tbody tr:nth-of-type(even){
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type{ 
  border-bottom: 2px solid #009879;
}
</style>

<table class="content-table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Work Hours</th>
      <th>Rate</th>
      <th>Salary</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td><?php echo $firstEmp->getName() ?></td>
      <td><?php echo $firstEmp->getHour() ?></td>
      <td><?php echo $firstEmp->getRate() ?></td>
      <td><?php echo $firstEmp->computeSalary() ?></td>
    </tr>
  <tr>
  <td><?php echo $secondEmp->getName() ?></td>
    <td><?php echo $secondEmp->getHour() ?></td>
    <td><?php echo $secondEmp->getRate() ?></td>
    <td><?php echo $secondEmp->computeSalary() ?></td>
  </tr>
  <tr>
  <td><?php echo $thirdEmp->getName() ?></td>
    <td><?php echo $thirdEmp->getHour() ?></td>
    <td><?php echo $thirdEmp->getRate() ?></td>
    <td><?php echo $thirdEmp->computeSalary() ?></td>
  </tr>
  <tr>
  <td><?php echo $fourthEmp->getName() ?></td>
    <td><?php echo $fourthEmp->getHour() ?></td>
    <td><?php echo $fourthEmp->getRate() ?></td>
    <td><?php echo $fourthEmp->computeSalary() ?></td>
  </tr>
  <tr>
  <td><?php echo $fifthEmp->getName() ?></td>
    <td><?php echo $fifthEmp->getHour() ?></td>
    <td><?php echo $fifthEmp->getRate() ?></td>
    <td><?php echo $fifthEmp->computeSalary() ?></td>
  </tr>
</tbody>
</table>


</body>
</html>
