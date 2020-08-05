<?php  
require_once('listproduct.php');
session_start();
  $idproduct6= $_GET['id'];
 $newproduct6=array();
 foreach ($product6 as $val) {
 	$newproduct6[ $val['id']]=$val;

 	
 }
 echo"<pre>";

 
if(isset($_SESSION['cart']) && $_SESSION['cart']!=null){
	
	if(array_key_exists($idproduct6, $_SESSION['cart'])){
		$_SESSION['cart'][$idproduct6]['qty']+=1;
    }else{
    	$newproduct6[$idproduct6]['qty']=1;
    	$_SESSION['cart'][$idproduct6]=$newproduct6[$idproduct6];
		
	}


	
}else{
$newproduct6[$idproduct6]['qty']=1;
	$_SESSION['cart'][$idproduct6]=$newproduct6[$idproduct6];
}
header('location:details6.php');
	
	

 ?>
