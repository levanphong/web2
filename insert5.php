<?php  
require_once('listproduct.php');
session_start();
  $idproduct5= $_GET['id'];
 $newproduct5=array();
 foreach ($product5 as $val) {
 	$newproduct5[ $val['id']]=$val;

 	
 }
 echo"<pre>";

 
if(isset($_SESSION['cart']) && $_SESSION['cart']!=null){
	
	if(array_key_exists($idproduct5, $_SESSION['cart'])){
		$_SESSION['cart'][$idproduct5]['qty']+=1;
    }else{
    	$newproduct5[$idproduct5]['qty']=1;
    	$_SESSION['cart'][$idproduct5]=$newproduct5[$idproduct5];
		
	}


	
}else{
$newproduct5[$idproduct5]['qty']=1;
	$_SESSION['cart'][$idproduct5]=$newproduct5[$idproduct5];
}
header('location:details5.php');
	
	

 ?>
