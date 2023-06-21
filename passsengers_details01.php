<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful";
}
else{
    echo "No connection";
}
mysqli_select_db($con, 'passengers_details');
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$exp_date = $_POST['exp_date'];
$cvv = $_POST['cvv'];

$query = "insert into passengers01 (name,  age, gender ) 
values ('$name', '$age', '$gender'); ";

mysqli_query($con,$query);
header('location:payment.php');  

?>