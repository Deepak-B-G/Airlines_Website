<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful";
}
else{
    echo "No connection";
}
mysqli_select_db($con, 'Payment');
$name = $_POST['name'];
$card_number = $_POST['card_number'];
$card_type = $_POST['card_type'];
$exp_date = $_POST['exp_date'];
$cvv = $_POST['cvv'];

$query = "insert into payment01 (name, card_number, card_type, exp_date, cvv ) 
values ('$name', '$card_number', '$card_type', '$exp_date', '$cvv'); ";

mysqli_query($con,$query);
header('location:successful.html');  

?>