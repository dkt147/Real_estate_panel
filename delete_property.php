<?php
include 'conn.php';

$id = $_POST['id'];

$query3 = "DELETE from property where id = $id";
$result3 = mysqli_query($con, $query3);

if($result3){
    echo 1;
}

?>