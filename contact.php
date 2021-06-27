<?php

include "databases.php";

if(isset($_GET['clean'])) {
	$sql = mysqli_query($link, "DELETE FROM basket WHERE id_basket = id_basket");
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Контакты</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="shortcut icon" href="images/title.ico" type="image/x-icon">
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
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
						<p><a href="javascript: document.location.href = 'contact.php?clean';" class="simpleCart_empty">Очистить</a></a></p>
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
						<li class="active"><a href="contact.php">Контакты</a>
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
					<li class="active">Контакты</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--contact-start-->
	<div class="contact">
		<div class="container">
			<div class="contact-top heading">
				<h2>Контакты</h2>
			</div>
				<div class="contact-text">
				<div class="col-md-3 contact-left">
						<div class="address">
							<h5>Адрес</h5>
							<p>Watch Market, 
							<span>Our currency is BYN,</span>
							Kolesnikova 3.</p>
						</div>
						<div class="address">
							<h5>Контакты</h5>
							<p>Телефон: +375 (17) 319-31-31, 
							<span>Факс: +375 (17) 319-31-31</span>
							Email: <a href="mailto:office@kbp.by">office@kbp.by</a></p>
						</div>
					</div>
					<div class="col-md-9 contact-right">
						<form>
							<input type="text" placeholder="Имя">
							<input type="text" placeholder="Телефон">
							<input type="text"  placeholder="Email">
							<textarea placeholder="Сообщение" required=""></textarea>
							<div class="submit-btn">
								<input type="submit" value="Отправить">
							</div>
						</form>
					</div>	
					<div class="clearfix"></div>
				</div>
		</div>
	</div>
	<!--contact-end-->
	<!--map-start-->
	<div class="map">
		<iframe src="https://yandex.by/map-widget/v1/-/CCUYB-W6oD" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
	</div>
	<!--map-end-->
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