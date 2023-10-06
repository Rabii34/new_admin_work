<?php
include('includes/config.php');

$id = $_GET['id'];

$restore = "UPDATE  `users` SET status = '1' where id = '$id' ";
$result = mysqli_query($connection, $restore);
if($result){
    header('location:http://localhost/adminworknew/trash.php');
}else{
    echo "query failed";
}
?>
