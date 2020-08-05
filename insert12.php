<?php  
require_once('listproduct.php');
session_start();
  $idproduct12= $_GET['id'];
 $newproduct12=array();
 foreach ($product12 as $val) {
 	$newproduct12[ $val['id']]=$val;

 	
 }
 echo"<pre>";

 
if(isset($_SESSION['cart']) && $_SESSION['cart']!=null){
	
	if(array_key_exists($idproduct12, $_SESSION['cart'])){
		$_SESSION['cart'][$idproduct12]['qty']+=1;
    }else{
    	$newproduct12[$idproduct12]['qty']=1;
    	$_SESSION['cart'][$idproduct12]=$newproduct12[$idproduct12];
		
	}


	
}else{
$newproduct12[$idproduct12]['qty']=1;
	$_SESSION['cart'][$idproduct12]=$newproduct12[$idproduct12];
}
header('location:details12.php');
	
	

 ?>
