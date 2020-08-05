<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
	</title>
</head>
<body>

	<div>
		<div>

			Xin chào <span>Admin</span>
			<h3>Dach sách sản phẩm</h3>
		</div>
	</div>
	<?php
	session_start();
	$total = 0;
	if(isset($_SESSION['cart']) && $_SESSION['cart']!=null){
		foreach ($_SESSION['cart'] as $list) {
			$total+=$list['qty'];

			# code...
		}
}
	 ?>
	 Dang co <a href="viewcart.php"><?php echo $total ?></a> San pham trong gio hang</p>
	
	
		
		
	
	<?php   
	require('listproduct.php');


	 echo"<ul>";
	foreach ($product as $listProduct) {
		echo "</li><h3>".$listProduct['name']."</h3>
		      <p>Giá bán:".number_format($listProduct['price'])."</p>
		      <p><a href='insert.php?id=".$listProduct['id']."'>Mua ngay</a>
		</li>";



	}



	echo"<ul>";
	?>



</body>
</html>