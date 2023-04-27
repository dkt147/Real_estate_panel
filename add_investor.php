<?php
include 'conn.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

    $query1 = "INSERT INTO `users`(`name`,`email`) VALUES('$name','$email')";
    $result1 = mysqli_query($con, $query1);

    $query2 = "SELECT * FROM users order by id desc";
    $result2 = mysqli_query($con, $query2);
    $row2 = mysqli_fetch_assoc($result2);
    $id2 = $row2['id'];

    $query3 = "INSERT INTO `agent`(`user_id`,`p_id`) VALUES('$id2','$id')";
    $result3 = mysqli_query($con, $query3);

    if($result3){
       header('Location: property.php?id='.$id);
    }

?>