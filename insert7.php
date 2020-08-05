<?php  
require_once('listproduct.php');
session_start();
  $idproduct7= $_GET['id'];
 $newproduct7=array();
 foreach ($product7 as $val) {
 	$newproduct7[ $val['id']]=$val;

 	
 }
 echo"<pre>";

 
if(isset($_SESSION['cart']) && $_SESSION['cart']!=null){
	
	if(array_key_exists($idproduct7, $_SESSION['cart'])){
		$_SESSION['cart'][$idproduct7]['qty']+=1;
    }else{
    	$newproduct7[$idproduct7]['qty']=1;
    	$_SESSION['cart'][$idproduct7]=$newproduct7[$idproduct7];
		
	}


	
}else{
$newproduct7[$idproduct7]['qty']=1;
	$_SESSION['cart'][$idproduct7]=$newproduct7[$idproduct7];
}
header('location:details7.php');
	
	

 ?>
