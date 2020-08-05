<?php  
require_once('listproduct.php');
session_start();
  $idproduct4= $_GET['id'];
 $newproduct4=array();
 foreach ($product4 as $val) {
 	$newproduct4[ $val['id']]=$val;

 	
 }
 echo"<pre>";

 
if(isset($_SESSION['cart']) && $_SESSION['cart']!=null){
	
	if(array_key_exists($idproduct4, $_SESSION['cart'])){
		$_SESSION['cart'][$idproduct4]['qty']+=1;
    }else{
    	$newproduct4[$idproduct4]['qty']=1;
    	$_SESSION['cart'][$idproduct4]=$newproduct4[$idproduct4];
		
	}


	
}else{
$newproduct4[$idproduct4]['qty']=1;
	$_SESSION['cart'][$idproduct4]=$newproduct4[$idproduct4];
}
header('location:details4.php');
	
	

 ?>
