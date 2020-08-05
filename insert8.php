<?php  
require_once('listproduct.php');
session_start();
  $idproduct8= $_GET['id'];
 $newproduct8=array();
 foreach ($product8 as $val) {
 	$newproduct8[ $val['id']]=$val;

 	
 }
 echo"<pre>";

 
if(isset($_SESSION['cart']) && $_SESSION['cart']!=null){
	
	if(array_key_exists($idproduct8, $_SESSION['cart'])){
		$_SESSION['cart'][$idproduct8]['qty']+=1;
    }else{
    	$newproduct8[$idproduct8]['qty']=1;
    	$_SESSION['cart'][$idproduct8]=$newproduct8[$idproduct8];
		
	}


	
}else{
$newproduct8[$idproduct8]['qty']=1;
	$_SESSION['cart'][$idproduct8]=$newproduct8[$idproduct8];
}
header('location:details8.php');
	
	

 ?>
