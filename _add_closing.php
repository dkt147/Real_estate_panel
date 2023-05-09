<?php
include 'conn.php';

$is_pwd_open = $_POST['is_pwd_open'];
$show_note = $_POST['show_note'];
$note = $_POST['note'];
$p_id = $_POST['p_id'];


$query = "SELECT * FROM  closing where p_id = $p_id";
$result = mysqli_query($con, $query);


if(mysqli_num_rows($result) > 0 ){

    //If Plane Image is set...
    if(isset($_FILES['file']) && $_FILES['file'] != '') {
        $file_name = $_FILES['file']['name'];
        $extention = pathinfo($file_name, PATHINFO_EXTENSION);
        $newname = rand() . '.' . $extention;
        $path = "uploads/" . $newname;
        move_uploaded_file($_FILES['file']['tmp_name'], $path);

        $file_name = "http://zelektra.com/api/uploads/".$file_name;
    }

    $query1 = "UPDATE `closing` SET `is_pwd_open`='$is_pwd_open',`show_note`='$show_note',`note`='$note',`document`='$file_name' WHERE p_id = $p_id";
    $result1 = mysqli_query($con, $query1);

}else{

    //If Plane Image is set...
    if(isset($_FILES['file']) && $_FILES['file'] != '') {
        $file_name = $_FILES['file']['name'];
        $extention = pathinfo($file_name, PATHINFO_EXTENSION);
        $newname = rand() . '.' . $extention;
        $path = "uploads/" . $newname;
        move_uploaded_file($_FILES['file']['tmp_name'], $path);

        $file_name = "http://zelektra.com/api/uploads/".$file_name;
    }

    echo $query1 = "INSERT INTO `closing`(`p_id`, `is_pwd_open`, `show_note`, `note`,`document`) 
               VALUES ('$p_id','$is_pwd_open','$show_note','$note','$file_name')";
    $result1 = mysqli_query($con, $query1);
}
if($result1){
    header('Location: closing.php?id='.$p_id);
}

?>