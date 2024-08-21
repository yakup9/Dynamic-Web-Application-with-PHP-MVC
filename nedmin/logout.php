<?php
session_start();
unset($_SESSION['admin']);
setcookie("adminLogin",json_encode($admin),strtotime("-30 day"),"/");
header("Location:login.php");
exit;

 ?>
