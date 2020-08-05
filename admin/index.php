<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Classy Login form Widget Flat Responsive Widget Template :: w3layouts</title>
<script src="../jss/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="../csss/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Classy Login form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php 
	require('../database.php');
  session_start();
 
    if (isset($_POST['submit'])){
    
    $username = $_REQUEST['username'];
    $password=$_REQUEST['password'];
    
    
        $query = "SELECT * FROM `admin` WHERE username='$username' and password='$password'";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
        if($rows!=0){
      $_SESSION['username'] = $username;

      header("Location:admin.php");

            }else{
        echo "<div class='form'><h3>Tên đăng nhập hoặc mật khẩu không đúng!</h3></br><a href='index.php'>Đăng nhập lại</a></div>";
        }
	 }?>

<!--header start here-->
<div class="header">
		<div class="header-main">
		       <h1>Admin</h1>
			<div class="header-bottom">
				<div class="header-right w3agile">
					
					<div class="header-left-bottom agileinfo">
						
					 <form action="#" method="post">
						<input type="text"  value="User name" name="username"/>
					<input type="password"  value="Password" name="password" />
						<div class="remember">
			             <span class="checkbox1">
							   <label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Remember me</label>
						 </span>
						 <div class="forgot">
						 	<h6><a href="#">Forgot Password?</a></h6>
						 </div>
						<div class="clear"> </div>
					  </div>
					   
						<input  type="submit" name="submit" value="Login">

					</form>	
					
				</div>
				</div>
			  
			</div>
		</div>
		


<!--footer end here-->
</body>
</html>
