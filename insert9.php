<?php  
require_once('listproduct.php');
session_start();
  $idproduct9= $_GET['id'];
 $newproduct9=array();
 foreach ($product9 as $val) {
 	$newproduct9[ $val['id']]=$val;

 	
 }
 echo"<pre>";

 
if(isset($_SESSION['cart']) && $_SESSION['cart']!=null){
	
	if(array_key_exists($idproduct9, $_SESSION['cart'])){
		$_SESSION['cart'][$idproduct9]['qty']+=1;
    }else{
    	$newproduct9[$idproduct9]['qty']=1;
    	$_SESSION['cart'][$idproduct9]=$newproduct9[$idproduct9];
		
	}


	
}else{
$newproduct9[$idproduct9]['qty']=1;
	$_SESSION['cart'][$idproduct9]=$newproduct9[$idproduct9];
}
header('location:details9.php');
	
	

 ?>
