<?php  
require_once('listproduct.php');
session_start();
  $idproduct11= $_GET['id'];
 $newproduct11=array();
 foreach ($product11 as $val) {
 	$newproduct11[ $val['id']]=$val;

 	
 }
 echo"<pre>";

 
if(isset($_SESSION['cart']) && $_SESSION['cart']!=null){
	
	if(array_key_exists($idproduct11, $_SESSION['cart'])){
		$_SESSION['cart'][$idproduct11]['qty']+=1;
    }else{
    	$newproduct11[$idproduct11]['qty']=1;
    	$_SESSION['cart'][$idproduct11]=$newproduct11[$idproduct11];
		
	}


	
}else{
$newproduct11[$idproduct11]['qty']=1;
	$_SESSION['cart'][$idproduct11]=$newproduct11[$idproduct11];
}
header('location:details11.php');
	
	

 ?>
