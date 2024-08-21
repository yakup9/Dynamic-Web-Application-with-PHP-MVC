<?php
require_once 'netting/classcrud.php';
  $db=new crud();

if (!isset($_SESSION['admin']) && isset($_COOKIE['adminLogin'])) {
    $adminLogin=json_decode($_COOKIE['adminLogin']);

    $sonuc=$db->adminLogin($adminLogin->admin_username,$adminLogin->admin_pass,TRUE);

    if($sonuc['status']){
        header("Location:index.php");
        exit;
    }
}

if (!isset($_SESSION['admin']) && !isset($_COOKIE['adminLogin'])) {
 header("Location:login.php");
 exit;
}

 ?>
