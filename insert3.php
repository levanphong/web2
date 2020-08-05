<?php  
require_once('listproduct.php');
session_start();
  $idproduct3= $_GET['id'];
 $newproduct3=array();
 foreach ($product3 as $val) {
 	$newproduct3[ $val['id']]=$val;

 	
 }
 echo"<pre>";

 
if(isset($_SESSION['cart']) && $_SESSION['cart']!=null){
	
	if(array_key_exists($idproduct3, $_SESSION['cart'])){
		$_SESSION['cart'][$idproduct3]['qty']+=1;
    }else{
    	$newproduct3[$idproduct3]['qty']=1;
    	$_SESSION['cart'][$idproduct3]=$newproduct3[$idproduct3];
		
	}


	
}else{
$newproduct3[$idproduct3]['qty']=1;
	$_SESSION['cart'][$idproduct3]=$newproduct3[$idproduct3];
}
header('location:details3.php');
	
	

 ?>
