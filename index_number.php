<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAT</title>
    <script src="https://kit.fontawesome.com/7fe216b15f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style2.css">
    <script src="./script.js" defer></script>
</head>
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
    <form action="login_number.php" method="post">
        <div class="heading">
            <div class="left-card">
                <p>9:41</p>
            </div>
            <div class="right-card">
                <img src="./images/network.png" alt="" height="15px" width="20px">
                <img src="./images/wifi.png" alt="" height="15px" width="20px">
                <img src="./images/664883.png" alt="" height="15px" width="25px">
            </div>
        </div>
        <div class="heading2">
            <div>
                <h2>Login Account <span><img src="./images/contacts.png" alt="" height="20px" width="25px"></span></h2>
                <p id="firstp">Hello, welcome back to our account!</p>
            </div>
            <div class="bulb">
            <img src="./images/bulb2.jpeg" alt="" height="30px" width="20px">  
            </div>
        </div>
        <div class="firstinput">
            <span class="link">
            <a href="index_email.php">Email</a>
            </span> 
            <span class="link2">
               <a href="#">Phone Number</a>
            </span>
        </div>
        <br><br>
       <input type="number" id="myInput" name="username" placeholder="Phone Number"> <br><br>
       <input type="password" id="myInput" name="password" placeholder="Password"><br>
        <a href="#"><p id="password">Forgot Password?</p></a>
        <button type="submit" id="btn">Login</button>
       <div class="success-message">
        <p>You have logged in <br> successfully</p>
         <button type="button2" id="btn2">OK</button>
       </div>
       <p id="secondp">__________Or sign up with__________</p>
       <div class="mag">
        <img src="./images/google-logo-696x392-1.jpg" alt="google image" height="45px" width="80px">
       </div>
       <p id="thirdp">Not register yet? <a href="register_number.php"><span style="font-weight: bold;">Create Account </span></a></p> 
    </form>
</body>
</html>