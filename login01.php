<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful";
}
else{
    echo "No connection";
}

mysqli_select_db($con, 'login');

$email = $_POST['email'];
$password = $_POST['password'];
$repeatPassword =$_POST['repeatPassword'];

$query = "insert into login011 (email, password, repeatPassword) 
values ('$email','$password','$repeatPassword'); ";

mysqli_query($con,$query);


?>