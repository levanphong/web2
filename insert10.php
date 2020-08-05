<?php  
require_once('listproduct.php');
session_start();
  $idproduct10= $_GET['id'];
 $newproduct10=array();
 foreach ($product10 as $val) {
 	$newproduct10[ $val['id']]=$val;

 	
 }
 echo"<pre>";

 
if(isset($_SESSION['cart']) && $_SESSION['cart']!=null){
	
	if(array_key_exists($idproduct10, $_SESSION['cart'])){
		$_SESSION['cart'][$idproduct10]['qty']+=1;
    }else{
    	$newproduct10[$idproduct10]['qty']=1;
    	$_SESSION['cart'][$idproduct10]=$newproduct10[$idproduct10];
		
	}


	
}else{
$newproduct10[$idproduct10]['qty']=1;
	$_SESSION['cart'][$idproduct10]=$newproduct10[$idproduct10];
}
header('location:details10.php');
	
	

 ?>
