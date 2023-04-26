<?php
$con = mysqli_connect("localhost", "root", "", "project_cat");
if(!$con){
    print mysqli_error($con);
}
else{
    $username = $_POST['username'];
    $password = md5($_POST['password']);
   
    $insertquery = "INSERT INTO `account2`(`number`, `password`)
    VALUES ('$username','$password')";

    if(mysqli_query($con, $insertquery)){
        $success = "You Account has been created!";
        header("Location:index_number.php?success=$success");
    }
    else{
        $error = mysqli_error($con);
        header("Location:index_number.php?error=$error");

    }
    
}
?>