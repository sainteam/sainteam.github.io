<!DOCTYPE html>
<html>
<head>
<title>Логин</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="shortcut icon" href="images/title.ico" type="image/x-icon">
<!--jQuery (necessary for Bootstrap's JavaScript plugins)-->
<script src="js/jquery-1.11.0.min.js"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script src="js/simpleCart.min.js"> </script>
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!--dropdown-->
<script src="js/jquery.easydropdown.js"></script>			
</head>
<body> 
	<!--top-header-->
	<div class="top-header">
		<div class="container">
			<div class="top-header-main">
				<div class="col-md-12 header-left">
					<div class="cart box_1">
						<a href="checkout.php">
							<div class="total">
								<span class="simpleCart_total"></span>
							</div>
							<img src="images/cart-1.png" alt="" />
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Очистить</a></p>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--top-header-->
	<!--start-logo-->
	<br>
	<div class="py-5 text-center">
		<a href="index.php"><img class="d-block mx-auto mb-4" src="images/logo.jpg" alt width="100"></a>
	</div>
	<!--start-logo-->
	<!--bottom-header-->
	<div class="header-bottom">
		<div class="container">
			<div class="header">
				<div class="col-md-9 header-left">
				<div class="top-nav">
					<ul class="memenu skyblue"><li class="grid"><a href="index.php">Главная</a></li>
						<li class="grid"><a href="typo.php">О компании</a>
						</li>
						<li class="grid"><a href="contact.php">Контакты</a>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
		</div>
	</div>
	<!--bottom-header-->
	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.php">Главная</a></li>
					<li class="active">Аккаунт</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--account-starts-->
	<div class="account">
		<div class="container">
		<div class="account-top heading">
				<h2>Аккаунт</h2>
			</div>
			<div class="account-main">
				<div class="col-md-6 account-left">
					<h3>Есть аккаунт?</h3>
					<div class="account-bottom">
						<input placeholder="Введите Email" type="text" tabindex="3" required>
						<input placeholder="Введите пароль" type="password" tabindex="4" required>
						<div class="address">
							<a class="forgot" href="#">Забыли пароль?</a>
							<input type="submit" value="Авторизация">
						</div>
					</div>
				</div>
				<div class="col-md-6 account-right account-left">
					<h3>Новый пользователь? Создайте аккаунт</h3>
					<p>Создав учетную запись в нашем магазине, вы сможете быстрее проходить процесс оформления заказа, сохранять несколько адресов доставки, просматривать и отслеживать свои заказы в своей учетной записи и многое другое.</p>
					<a href="register.html">Регистрация</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--account-end-->
	<!--information-starts-->
	<div class="information">
		<div class="container">
			<div class="infor-top">
				<div class="col-md-3 infor-left">
					<h3>Соц. сети</h3>
					<ul>
						<li><a href="#"><span class="fb"></span><h6>Facebook</h6></a></li>
						<li><a href="#"><span class="twit"></span><h6>Twitter</h6></a></li>
						<li><a href="#"><span class="google"></span><h6>Google+</h6></a></li>
					</ul>
				</div>
				<!-- <div class="col-md-3 infor-left">
					<h3>Информация</h3>
					<ul>
						<li><a href="#"><p>Specials</p></a></li>
						<li><a href="#"><p>New Products</p></a></li>
						<li><a href="#"><p>Our Stores</p></a></li>
						<li><a href="contact.html"><p>Contact Us</p></a></li>
						<li><a href="#"><p>Top Sellers</p></a></li>
					</ul>
				</div> -->
				<!-- <div class="col-md-3 infor-left">
					<h3>Аккаунт</h3>
					<ul>
						<li><a href="account.php"><p>Личный кабинет</p></a></li>
						<li><a href="checkout.php"><p>Корзина</p></a></li>
					</ul>
				</div> -->
				<div class="col-md-3 infor-left">
					<h3>О магазине</h3>
					<h4>Watch Market,
						<span>Our currency is BYN,</span>
						Kolesnikova 3.</h4>
					<h5>+375 (17) 319-31-31</h5>	
					<p><a href="mailto:office@kbp.by">office@kbp.by</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--information-end-->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-6 footer-left">
					<form>
						<input type="text" value="Введите Ваш Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Введите Ваш Email';}">
						<input type="submit" value="Отправить">
					</form>
				</div>
				<div class="col-md-6 footer-right">					
					<p>© 2021 Watch Market. All Rights Reserved | Design by Watch Market Group </p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--footer-end-->
</body>
</html>