<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful";
}
else{
    echo "No connection";
}

mysqli_select_db($con, 'signup');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$number = $_POST['number'];
$email = $_POST['email'];
$password = $_POST['password'];


$query = "insert into signup011 (firstname, lastname, number, email, password) 
values ('$firstname','$lastname','$number','$email','$password'); ";

mysqli_query($con,$query);

header('location:airlines.php');
?>