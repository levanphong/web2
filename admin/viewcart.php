<?php 
session_start();
 ?>
<meta charset="utf-8">
<h3>Thong tin gio hang</h3>
<?php 
if(isset($_SESSION['cart']) && $_SESSION['cart']!=null){
	echo "<table border='1' width='600'>";
	echo "<tr>";
	echo "<td>Ten san pham</td>";
		echo "<td></td>";
			echo "<td>Gia</td>";
			echo"<td>Thanh tien</td>";
						echo"<td>Xoa</td>";



	echo "<tr>";
	foreach ($_SESSION['cart'] as $list) {
		echo"<tr>";
		echo"<td>".$list['name']."</td>";
		echo"<td>".$list['qty']."</td>";
		echo"<td>".$list['price']."</td>";
		echo"<td>".($list['qty']*$list['price'])."</td>";
		echo "<td><a href='delete.php?id=".$list['id']."'>Xoa</td>";

		echo"</tr>";
		# code...
	}
}
 ?>


