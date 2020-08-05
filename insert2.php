<?php  
require_once('listproduct.php');
session_start();
  $idproduct2= $_GET['id'];
 $newproduct2=array();
 foreach ($product2 as $val) {
 	$newproduct2[ $val['id']]=$val;

 	
 }
 echo"<pre>";

 
if(isset($_SESSION['cart']) && $_SESSION['cart']!=null){
	
	if(array_key_exists($idproduct2, $_SESSION['cart'])){
		$_SESSION['cart'][$idproduct2]['qty']+=1;
    }else{
    	$newproduct2[$idproduct2]['qty']=1;
    	$_SESSION['cart'][$idproduct2]=$newproduct2[$idproduct2];
		
	}


	
}else{
$newproduct2[$idproduct2]['qty']=1;
	$_SESSION['cart'][$idproduct2]=$newproduct2[$idproduct2];
}
header('location:details2.php');
	
	

 ?>
