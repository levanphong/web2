<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>The Aditii Website Template | Handbags :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script> 
<!-- start top_js_button -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="home.html"><img src="images/logo.png" alt=""/> </a>
		</div>
		<div class="h_icon">
		<ul class="icon1 sub-icon1">
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
	 ĐANG CÓ <a href="viewcart.php"><?php echo $total ?></a> SẢN PHẨM TRONG GIỎ HÀNG</p>
				<ul class="sub-icon1 list">
					<li><h3>shopping cart empty</h3><a href=""></a></li>
					<li><p>if items in your wishlit are missing, <a href="contact.html">contact us</a> to view them</p></li>
				</ul>
			</li>
		</ul>
		</div>
		<div class="h_search">
    		<form>
    			<input type="text" value="">
    			<input type="submit" value="">
    		</form>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<div class="header_btm">
<div class="wrap">
	<div class="header_sub">
		<div class="h_menu">
			<ul>
				<li><a href="home.html">Home</a></li> |
				
				<li class="active"><a href="handbags.php">handbags</a></li> |
				<li><a href="accessories.php">accessories</a></li> |
				<li class="active"><a href="shoes.php">shoes</a></li> |
				
			</ul>
		</div>
		<div class="top-nav">
	          <nav class="nav">	        	
	    	    <a href="#" id="w3-menu-trigger"> </a>
	                  <ul class="nav-list" style="">
	            	        <li class="nav-item"><a class="active" href="home.html">Home</a></li>
							
							<li class="nav-item"><a href="handbags.php">Handbags</a></li>
							<li class="nav-item"><a href="accessories.php">Accessories</a></li>
							
	                 </ul>
	           </nav>
	             <div class="search_box">
				<form>
				   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
			    </form>
			</div>
	          <div class="clear"> </div>
	          <script src="js/responsive.menu.js"></script>
         </div>	
	<div class="clear"></div>
</div>
</div>
</div>
<!-- start main -->


  <div class="main_bg">
<div class="wrap">	
	<div class="main">
		<h2 class="style top">featured handbags</h2>
		<!-- start grids_of_3 -->
		<div class="grids_of_3">
			<div class="grid1_of_3">
				<a href="details.php">
					<img src="images/w_pic1.jpg" alt=""/>

					  <h3>branded handbags</h3>
					<div class="price">
						<h4>2.500.000 đ<span>indulge</span></h4>
						
						 

						
						 
						
							
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="grid1_of_3">
				<a href="details.php">
					<img src="images/w_pic2.jpg" alt=""/>
					<h3>branded handbags</h3>
					<div class="price">
						<h4>1.500.000 đ<span>indulge</span></h4>
						
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="grid1_of_3">
				<a href="details2.php">
					<img src="images/w_pic3.jpg" alt=""/>
					<h3>branded handbags</h3>
					<div class="price">
						<h4>2.000.000 đ<span>indulge</span></h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="grids_of_3">
			<div class="grid1_of_3">
				<a href="details3.php">
					<img src="images/w_pic4.jpg" alt=""/>
					<h3>branded handbags</h3>
					<div class="price">
						<h4>3.000.000 đ<span>indulge</span></h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="grid1_of_3">
				<a href="details4.php">
					<img src="images/w_pic5.jpg" alt=""/>
					<h3>branded handbags</h3>
					<div class="price">
						<h4>4.000.000 đ<span>indulge</span></h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="grid1_of_3">
				<a href="details5.php">
					<img src="images/w_pic6.jpg" alt=""/>
					<h3>branded handbags</h3>
					<div class="price">
						<h4>5.000.000 đ<span>indulge</span></h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="clear"></div>
		</div>	
		<!-- end grids_of_3 -->
	</div>
</div>
</div>	

<!-- start footer -->
<div class="footer_bg">
<div class="wrap">	
	<div class="footer">
		<!-- start grids_of_4 -->	
		<div class="grids_of_4">
			<div class="grid1_of_4">
				<h4>featured sale</h4>
				<ul class="f_nav">
					<li><a href="">alexis Hudson</a></li>
					<li><a href="">american apparel</a></li>
					<li><a href="">ben sherman</a></li>
					<li><a href="">big buddha</a></li>
					<li><a href="">channel</a></li>
					<li><a href="">christian audigier</a></li>
					<li><a href="">coach</a></li>
					<li><a href="">cole haan</a></li>
				</ul>
			</div>
			<div class="grid1_of_4">
				<h4>mens store</h4>
				<ul class="f_nav">
					<li><a href="">alexis Hudson</a></li>
					<li><a href="">american apparel</a></li>
					<li><a href="">ben sherman</a></li>
					<li><a href="">big buddha</a></li>
					<li><a href="">channel</a></li>
					<li><a href="">christian audigier</a></li>
					<li><a href="">coach</a></li>
					<li><a href="">cole haan</a></li>
				</ul>
			</div>
			<div class="grid1_of_4">
				<h4>women store</h4>
				<ul class="f_nav">
					<li><a href="">alexis Hudson</a></li>
					<li><a href="">american apparel</a></li>
					<li><a href="">ben sherman</a></li>
					<li><a href="">big buddha</a></li>
					<li><a href="">channel</a></li>
					<li><a href="">christian audigier</a></li>
					<li><a href="">coach</a></li>
					<li><a href="">cole haan</a></li>
				</ul>
			</div>
			<div class="grid1_of_4">
				<h4>quick links</h4>
				<ul class="f_nav">
					<li><a href="">alexis Hudson</a></li>
					<li><a href="">american apparel</a></li>
					<li><a href="">ben sherman</a></li>
					<li><a href="">big buddha</a></li>
					<li><a href="">channel</a></li>
					<li><a href="">christian audigier</a></li>
					<li><a href="">coach</a></li>
					<li><a href="">cole haan</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
</div>	

<!-- start footer -->
<div class="footer_bg1">
<div class="wrap">
	<div class="footer">
		<!-- scroll_top_btn -->
	    <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!--end scroll_top_btn -->
		<div class="copy">
			<p class="link">&copy;  All rights reserved | Template by&nbsp;&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></p>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>

</body>
</html>