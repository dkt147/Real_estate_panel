<?php
include 'conn.php';
$description = $_POST['description'];
$roi = $_POST['roi'];
$yiel = $_POST['yiel'];
$return = $_POST['total_return'];
$month = $_POST['month'];
$status = $_POST['status'];
$year = $_POST['year'];
$type = $_POST['type'];
$branch = $_POST['branch'];
$sqft = $_POST['sqft'];
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
}

$query = "INSERT INTO `property`(`plan_image`,`address`,`location`,`type_id`, `user_id`, `started_at`, `ended_at`, `price`, `description`, `property_id`, `property_type`, `rooms`, `bath`, `year`, `bed`, `area`, `status`) 
        VALUES('$file_name',$address','$url',1,1,'$date','$date','$price','$description','$randomString','Apartment','$bed','$bath','$year','$bed','$sqft','$status')";
$result = mysqli_query($con, $query);

$query = "SELECT * FROM property order by id desc";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$id = $row['id'];

$query = "INSERT INTO `analysis`(`user_id`, `p_id`, `roi`, `investment`, `return_amount`, `yiels`, `month`)
        VALUES(1,$id,$roi,$price,$return,'$yiel','$month')";
$result = mysqli_query($con, $query);

//Upload Multiple Images

$targetDir = "images_uploads/";
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
            $query = "INSERT INTO `property_images`(`p_id`, `image`) VALUES ($id,'$targetFilePath')";
            $result = mysqli_query($con, $query);
        }

    }
}



//Upload Multiple Documents

$targetDir = "doc_uploads/";
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
            $query = "INSERT INTO `property_document`(`p_id`, `file`) VALUES ($id,'$targetFilePath')";
            $result = mysqli_query($con, $query);
        }

    }
}

header('Location: home.php');


?>