<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAT</title>
    <script src="https://kit.fontawesome.com/7fe216b15f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style3.css">
    <script src="./script.js" defer></script>
</head>
<body>
    <form action="connect_email.php" method="post">
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
                <h2>Sign Up<span><img src="./images/contacts.png" alt="" height="20px" width="25px"></span></h2>
            </div>
            <div class="log">
                <a href="index_email.php">Login</a>
            </div>
        </div>
        
        <div class="firstinput">
            <span class="link">
            <a href="">Email</a>
            </span> 
            <span class="link2">
               <a href="register_number.php">Phone Number</a>
            </span>
        </div>
        <br><br>
       <input type="email" id="myInput" name="username" placeholder="Email address" required> <br><br>
       <input type="password" id="myInput" name="password" placeholder="Password" required><br> <br>
        <button type="submit" id="btn">Register</button>
       <p id="secondp">__________Or sign up with__________</p>
       <div class="mag">
        <a href="google.html"><img src="./images/google-logo-696x392-1.jpg" alt="google image" height="45px" width="80px"></a> 
       </div>
    </form>
</body>
</html>