<?php  
require_once('listproduct.php');
session_start();
  $idproduct16= $_GET['id'];
 $newproduct16=array();
 foreach ($product16 as $val) {
 	$newproduct16[ $val['id']]=$val;

 	
 }
 echo"<pre>";

 
if(isset($_SESSION['cart']) && $_SESSION['cart']!=null){
	
	if(array_key_exists($idproduct16, $_SESSION['cart'])){
		$_SESSION['cart'][$idproduct16]['qty']+=1;
    }else{
    	$newproduct16[$idproduct16]['qty']=1;
    	$_SESSION['cart'][$idproduct16]=$newproduct16[$idproduct16];
		
	}


	
}else{
$newproduct16[$idproduct16]['qty']=1;
	$_SESSION['cart'][$idproduct16]=$newproduct16[$idproduct16];
}
header('location:details16.php');
	
	

 ?>
