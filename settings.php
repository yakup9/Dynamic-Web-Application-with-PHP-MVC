<?php 

ob_start();
session_start();
require_once 'nedmin/netting/classcrud.php';
$db=new crud();

//1.kullanım
//$sql=$db->read("settings");
//$row=$sql->fetchAll(PDO::FETCH_ASSOC);


//2. özel kullanım
$sql=$db->qSql("SELECT * FROM settings");

$row=$sql->fetchAll(PDO::FETCH_ASSOC);


foreach ($row as $key) {
	$settings[$key['settings_key']]=$key['settings_value'];

	//echo $key['settings_key'];
}


 ?>