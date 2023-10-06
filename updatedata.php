<?php
include('includes/config.php');

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];



$updatequery = "UPDATE `users` set id = '$id',  name = '$name', email = '$email', phone = '$phone' where id = '$id'";

$result = mysqli_query($connection, $updatequery);
if(!$result){
    echo("query failed");
}

header('location:http://localhost/adminworknew/registeredusers.php');


?>