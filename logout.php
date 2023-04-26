<?php
session_start();
unset($_SESSION['username']);
$msg = 'You have logged out successfully';

header("Location:index.php?success=$msg");

?>