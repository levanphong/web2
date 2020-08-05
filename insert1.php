<?php  
require_once('listproduct.php');
session_start();
  $idproduct1= $_GET['id'];
 $newproduct1=array();
 foreach ($product1 as $val) {
 	$newproduct1[ $val['id']]=$val;

 	
 }
 echo"<pre>";

 
if(isset($_SESSION['cart']) && $_SESSION['cart']!=null){
	
	if(array_key_exists($idproduct1, $_SESSION['cart'])){
		$_SESSION['cart'][$idproduct1]['qty']+=1;
    }else{
    	$newproduct1[$idproduct1]['qty']=1;
    	$_SESSION['cart'][$idproduct1]=$newproduct1[$idproduct1];
		
	}


	
}else{
$newproduct1[$idproduct1]['qty']=1;
	$_SESSION['cart'][$idproduct1]=$newproduct1[$idproduct1];
}
header('location:details1.php');
	
	

 ?>
