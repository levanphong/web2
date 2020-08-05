<?php  
require_once('listproduct.php');
session_start();
  $idproduct17= $_GET['id'];
 $newproduct17=array();
 foreach ($product17 as $val) {
 	$newproduct17[ $val['id']]=$val;

 	
 }
 echo"<pre>";

 
if(isset($_SESSION['cart']) && $_SESSION['cart']!=null){
	
	if(array_key_exists($idproduct17, $_SESSION['cart'])){
		$_SESSION['cart'][$idproduct17]['qty']+=1;
    }else{
    	$newproduct17[$idproduct17]['qty']=1;
    	$_SESSION['cart'][$idproduct17]=$newproduct17[$idproduct17];
		
	}


	
}else{
$newproduct17[$idproduct17]['qty']=1;
	$_SESSION['cart'][$idproduct17]=$newproduct17[$idproduct17];
}
header('location:details17.php');
	
	

 ?>
