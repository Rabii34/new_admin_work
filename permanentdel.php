<?php
include('includes/config.php');

$id = $_GET['id'];

$per_del = "DELETE from `users` where id = '$id' ";

$result = mysqli_query($connection, $per_del);
if(!$result){
    echo "query failed";
}else{
    header('location:http://localhost/adminworknew/trash.php');
}

?>