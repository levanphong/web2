<?php  
require_once('listproduct.php');
session_start();
  $idproduct14= $_GET['id'];
 $newproduct14=array();
 foreach ($product14 as $val) {
 	$newproduct14[ $val['id']]=$val;

 	
 }
 echo"<pre>";

 
if(isset($_SESSION['cart']) && $_SESSION['cart']!=null){
	
	if(array_key_exists($idproduct14, $_SESSION['cart'])){
		$_SESSION['cart'][$idproduct14]['qty']+=1;
    }else{
    	$newproduct14[$idproduct14]['qty']=1;
    	$_SESSION['cart'][$idproduct14]=$newproduct14[$idproduct14];
		
	}


	
}else{
$newproduct14[$idproduct14]['qty']=1;
	$_SESSION['cart'][$idproduct14]=$newproduct14[$idproduct14];
}
header('location:details14.php');
	
	

 ?>
