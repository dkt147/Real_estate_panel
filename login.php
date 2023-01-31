<?php
session_start();
include "conn.php";
if(isset($_POST['email']) && isset($_POST['password'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);

    if(empty($email)){
        header("Location: index.php?error=Email is required");
        exit();
    }else if(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();
    }else{
        $query = "SELECT * FROM admins WHERE email = '$email' AND password = '$pass'";
        $result = mysqli_query($con, $query);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if($row['email'] === $email && $row['password'] === $pass){
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['id'] = $row['id'];
                header("Location: home.php");
                exit();
            }else{
                header("Location: index.php?error=Incorrect email or password");
                exit();
                }
        }else{
            header("Location: index.php?error=Incorrect email or password");
            exit();
            }
    }

}else{
    header("Loaction: index.php");
    exit();
}

?>