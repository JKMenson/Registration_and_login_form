<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "project_cat");
if(!$con){
    print mysqli_error($con);
}
else{
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $selectquery = "SELECT * FROM `account` WHERE `email`= '".$username."' AND `password`= '".$password."' ;";
    
    $result = mysqli_query($con, $selectquery);
    $result_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    if($result->num_rows > 0){
        $_SESSION['username'] = $result_data[0]['email'];
        $success = "You have logged in successfully";
        header("Location:home.php?success=$success");
    }
    else{
        $error = "This account is not created";
        header("Location:index_email.php?error=$error");

    }
    
}
?>