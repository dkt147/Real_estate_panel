<?php
include 'conn.php';

$message = $_POST['message'];
$user_id = $_POST['user_id'];
$to_user = $_POST['to_user'];

$query1 = "INSERT INTO `thread_message`(`message`,`user_id`,`to_user`) VALUES('$message','$user_id','$to_user')";
$result1 = mysqli_query($con, $query1);

if($result1){
    echo 1;
}

?>