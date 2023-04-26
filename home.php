<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
 if($_SESSION['username']){
?>
<body>
<?php
     if(isset($_GET['error'])):
    ?>
    <p  style="color: red;">
        <?php
        print $_GET['error'];
        ?>
    </p>
    <?php
    endif
    ?>

    <?php
        if(isset($_GET['success'])):
    ?>
    <p  style="color: green;">
        <?php
        print $_GET['success'];
        ?>
    </p>
    <?php
    endif
    ?>
    <h1>Welcome, <?php print $_SESSION['username'];?></h1>
    <p><a href="logout.php">logout</a></p>
</body>
<?php }else{ header('Location:index_email.php');}?>
</html>