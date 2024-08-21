<?php 
require_once 'classcrud.php';
$db=new crud();
 
if (isset($_GET['blog_order'])) {
	
	$sonuc=$db->orderUpdate("blog",$_POST['item'],"blog_order","blog_id");
 
	// $returnMsg=array();
	$returnMsg= ['islemSonuc' => true, 'islemMsj' => $sonuc['status']];
	echo json_encode($returnMsg);
}
 
if (isset($_GET['admin_order'])) {
	
	$sonuc=$db->orderUpdate("admin",$_POST['item'],"admin_order","admin_id");
 
	// $returnMsg=array();
	$returnMsg= ['islemSonuc' => true, 'islemMsj' => $sonuc['status']];
	echo json_encode($returnMsg);
}
if (isset($_GET['user_order'])) {
	
	$sonuc=$db->orderUpdate("user",$_POST['item'],"user_order","user_id");
 
	// $returnMsg=array();
	$returnMsg= ['islemSonuc' => true, 'islemMsj' => $sonuc['status']];
	echo json_encode($returnMsg);
}
if (isset($_GET['settings_order'])) {
	
	$sonuc=$db->orderUpdate("settings",$_POST['item'],"settings_order","settings_id");
 
	// $returnMsg=array();
	$returnMsg= ['islemSonuc' => true, 'islemMsj' => $sonuc['status']];
	echo json_encode($returnMsg);
}
if (isset($_GET['slider_order'])) {
	
	$sonuc=$db->orderUpdate("slider",$_POST['item'],"slider_order","slider_id");
 
	// $returnMsg=array();
	$returnMsg= ['islemSonuc' => true, 'islemMsj' => $sonuc['status']];
	echo json_encode($returnMsg);
}
if (isset($_GET['about_order'])) {
	
	$sonuc=$db->orderUpdate("about",$_POST['item'],"about_order","about_id");
 
	// $returnMsg=array();
	$returnMsg= ['islemSonuc' => true, 'islemMsj' => $sonuc['status']];
	echo json_encode($returnMsg);
}
 ?>