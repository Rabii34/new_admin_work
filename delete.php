<?php
include('includes/config.php');

$id = $_GET['id'];

$delete = "UPDATE `users` SET status = '0'  where id = '$id'";

$result = mysqli_query($connection, $delete);
if(!$result){
  echo("query failed");
}
header('location:http://localhost/adminworknew/registeredusers.php');

?>