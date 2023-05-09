<?php
include 'conn.php';

$number = $_POST['number'];
$wo_number = $_POST['wo_number'];
$date = $_POST['date'];
$status = $_POST['status'];
$p_id = $_POST['p_id'];

//If Plane Image is set...
if(isset($_FILES['file']) && $_FILES['file'] != '') {
    $file_name = $_FILES['file']['name'];
    $extention = pathinfo($file_name, PATHINFO_EXTENSION);
    $newname = rand() . '.' . $extention;
    $path = "uploads/" . $newname;
    move_uploaded_file($_FILES['file']['tmp_name'], $path);

    $file_name = "http://zelektra.com/api/uploads/".$file_name;
}

$query = "INSERT INTO `maintenance`(`p_id`, `number`, `date`, `wo_number`, `status`, `document`) 
          VALUES ('$p_id','$number','$date','$wo_number','$status','$file_name')";
$result = mysqli_query($con, $query);

if($result){
    echo 1;
}

?>