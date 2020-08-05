<?php  
require_once('listproduct.php');
session_start();
  $idproduct= $_GET['id'];
 $newProduct=array();
 foreach ($product as $val) {
 	$newProduct[ $val['id']]=$val;

 	
 }
 echo"<pre>";

 
if(isset($_SESSION['cart']) && $_SESSION['cart']!=null){
	
	if(array_key_exists($idproduct, $_SESSION['cart'])){
		$_SESSION['cart'][$idproduct]['qty']+=1;
    }else{
    	$newProduct[$idproduct]['qty']=1;
    	$_SESSION['cart'][$idproduct]=$newProduct[$idproduct];
		
	}


	
}else{
$newProduct[$idproduct]['qty']=1;
	$_SESSION['cart'][$idproduct]=$newProduct[$idproduct];
}
header('location:handbags.php');
	
	

 ?>
