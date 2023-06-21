<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful";
}
else{
    echo "No connection";
}

mysqli_select_db($con, 'booking');

$f = $_POST['f'];
$t = $_POST['t'];
$SEATING = $_POST['SEATING'];
$TRIPTYPE = $_POST['TRIPTYPE'];
$DATE = $_POST['DATE'];
$PEOPLE = $_POST['PEOPLE'];
$NUMBER = $_POST['NUMBER'];
$EMAIL = $_POST['EMAIL'];


$query = "insert into booking_tickets01 (f, t,  SEATING, TRIPTYPE, PEOPLE, NUMBER, EMAIL ) 
values ('$f', '$t',  '$SEATING', '$TRIPTYPE', '$PEOPLE', '$NUMBER', '$EMAIL' ); ";

mysqli_query($con, $query);

header('location:seating.php');
?>