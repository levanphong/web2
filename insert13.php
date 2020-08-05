<?php  
require_once('listproduct.php');
session_start();
  $idproduct13= $_GET['id'];
 $newproduct13=array();
 foreach ($product13 as $val) {
 	$newproduct13[ $val['id']]=$val;

 	
 }
 echo"<pre>";

 
if(isset($_SESSION['cart']) && $_SESSION['cart']!=null){
	
	if(array_key_exists($idproduct13, $_SESSION['cart'])){
		$_SESSION['cart'][$idproduct13]['qty']+=1;
    }else{
    	$newproduct13[$idproduct13]['qty']=1;
    	$_SESSION['cart'][$idproduct13]=$newproduct13[$idproduct13];
		
	}


	
}else{
$newproduct13[$idproduct13]['qty']=1;
	$_SESSION['cart'][$idproduct13]=$newproduct13[$idproduct13];
}
header('location:details13.php');
	
	

 ?>
