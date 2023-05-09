<?php
include 'conn.php';

$is_ready_for_rent_1 = $_POST['is_ready_for_rent_1'];
$start_date = $_POST['start_date'];
$move_in_date = $_POST['move_in_date'];
$rent_date = $_POST['rent_date'];
$show_note = $_POST['show_note'];
$lease = $_POST['lease'];
$is_listing_on_facebook_1 = $_POST['is_listing_on_facebook_1'];
$is_listing_on_craigslist_1 = $_POST['is_listing_on_craigslist_1'];
$is_listing_on_craigslist_1 = $_POST['is_listing_on_craigslist_1'];
$application = $_POST['application'];
$note = $_POST['note'];
$p_id = $_POST['p_id'];



$query = "SELECT * FROM  leasing where p_id = $p_id";
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

    $query1 = "UPDATE `leasing` SET `is_ready_for_rent`='$is_ready_for_rent_1',`start_date`='$start_date',`move_in_date`='$move_in_date',`rent_date`='$rent_date',`show_note`='$show_note',`lease`='$lease',`is_listing_on_facebook`='$is_listing_on_facebook_1',`is_listing_on_craigslist`='$is_listing_on_craigslist_1',`application`='$application',`note`='$note',`document`='$file_name' WHERE p_id = $p_id";
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

    echo $query1 = "INSERT INTO `leasing`(`p_id`, `is_ready_for_rent`, `start_date`, `move_in_date`, `rent_date`, `show_note`, `lease`, `is_listing_on_facebook`, `is_listing_on_craigslist`, `application`, `note`, `document`) 
               VALUES ('$p_id','$is_ready_for_rent_1','$start_date','$move_in_date','$rent_date','$show_note','$lease','$is_listing_on_facebook_1','$is_listing_on_craigslist_1','$application','$note','$file_name')";
    $result1 = mysqli_query($con, $query1);
}
if($result1){
    header('Location: leasing.php?id='.$p_id);
}

?>