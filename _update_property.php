<?php
include 'conn.php';

//print_r();

$property_id = $_POST['property_id'];
$description = $_POST['description'];
$year = $_POST['year'];
$branch = $_POST['branch'];
$userid = 1;
$price = $_POST['price'];
$bed = $_POST['bedrooms'];
$bath = $_POST['bathroom'];
$address = $_POST['address'];
$url = $_POST['url'];
$bath = $_POST['bathroom'];
$date = date("Y-m-d");


$n = 10;
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$randomString = '';

for ($i = 0; $i < $n; $i++) {
    $index = rand(0, strlen($characters) - 1);
    $randomString .= $characters[$index];
}

//If Plane Image is set...
if(isset($_FILES['plan_image']) && $_FILES['plan_image'] != '') {

    $file_name = $_FILES['plan_image']['name'];
    $extention = pathinfo($file_name, PATHINFO_EXTENSION);
    $newname = rand() . '.' . $extention;
    $path = "uploads/" . $newname;
    move_uploaded_file($_FILES['plan_image']['tmp_name'], $path);

    $file_name = "http://zelektra.com/api/uploads/".$file_name;
    echo $query = "UPDATE `property` SET `branch` = '$branch',`plan_image` = '$file_name',`address` = '$address',`location` = '$url', `user_id` = 1, `started_at` = '$date', `ended_at` = '$date', `price` = '$price', `description` = '$description', `property_id` = '$randomString', `property_type` = 'Apartment', `rooms` = '$bed', `bath` = '$bath', `year` = '$year', `bed` = '$bed'
        WHERE id = $property_id ";
    $result = mysqli_query($con, $query);

}else{

    $query = "UPDATE `property` SET `branch` = '$branch',`address` = '$address',`location` = '$url', `user_id` = 1, `started_at` = '$date', `ended_at` = '$date', `price` = '$price', `description` = '$description', `property_id` = '$randomString', `property_type` = 'Apartment', `rooms` = '$bed', `bath` = '$bath', `year` = '$year', `bed` = '$bed'
        WHERE id = $property_id ";
    $result = mysqli_query($con, $query);

}

//Upload Multiple Images

$targetDir = "http://zelektra.com/api/images_uploads/";
$fileNames = array_filter($_FILES['images']['name']);
if(!empty($fileNames)) {

    foreach ($_FILES['images']['name'] as $key => $val) {
        // File upload path
        $fileName = basename($_FILES['images']['name'][$key]);
        $targetFilePath = $targetDir . $fileName;

        // Check whether file type is valid
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Upload file to server
        if (move_uploaded_file($_FILES["images"]["tmp_name"][$key], $targetFilePath)) {

            $targetFilePath = $targetFilePath;
            $query = "INSERT INTO `property_images`(`p_id`, `image`) VALUES ($property_id,'$targetFilePath')";
            $result = mysqli_query($con, $query);
        }

    }
}



//Upload Multiple Documents

$targetDir = "http://zelektra.com/api/doc_uploads/";
$fileNames = array_filter($_FILES['docs']['name']);
if(!empty($fileNames)) {

    foreach ($_FILES['docs']['name'] as $key => $val) {
        // File upload path
        $fileName = basename($_FILES['docs']['name'][$key]);
        $targetFilePath = $targetDir . $fileName;

        // Check whether file type is valid
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Upload file to server
        if (move_uploaded_file($_FILES["docs"]["tmp_name"][$key], $targetFilePath)) {


            $targetFilePath = $targetFilePath;

            $query = "INSERT INTO `property_document`(`p_id`, `file`) VALUES ($property_id,'$targetFilePath')";
            $result = mysqli_query($con, $query);
        }

    }
}

header('Location: home.php');


?>