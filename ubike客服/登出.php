<?php
session_start();
session_destroy();
// echo $_SESSION['user'];
header('location:登入.php');
?>