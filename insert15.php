<?php  
require_once('listproduct.php');
session_start();
  $idproduct15= $_GET['id'];
 $newproduct15=array();
 foreach ($product15 as $val) {
 	$newproduct15[ $val['id']]=$val;

 	
 }
 echo"<pre>";

 
if(isset($_SESSION['cart']) && $_SESSION['cart']!=null){
	
	if(array_key_exists($idproduct15, $_SESSION['cart'])){
		$_SESSION['cart'][$idproduct15]['qty']+=1;
    }else{
    	$newproduct15[$idproduct15]['qty']=1;
    	$_SESSION['cart'][$idproduct15]=$newproduct15[$idproduct15];
		
	}


	
}else{
$newproduct15[$idproduct15]['qty']=1;
	$_SESSION['cart'][$idproduct15]=$newproduct15[$idproduct15];
}
header('location:details15.php');
	
	

 ?>
