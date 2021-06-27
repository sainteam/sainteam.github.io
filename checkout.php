<?php

include "databases.php";

$result = mysqli_query($link, "SELECT * FROM basket, product, service, brand WHERE product.id_product=basket.id_product AND service.id_service=basket.id_service AND brand.id_brand=product.id_brand");

/*while($product = mysqli_fetch_assoc($result)){

    echo "<div><a href='single.php?id=$product[id_basket]'><img src='$product[icon]'>$product[name] $product[model] $product[price] $product[service]</a></div>";
}*/

// while($product = mysqli_fetch_assoc($result)){
// 	print_r($product);
// 	// echo $product['id_brand'];
// 	echo "<br>";
// }

if(isset($_GET['clean'])) {
	$sql = mysqli_query($link, "DELETE FROM basket WHERE id_basket = id_basket");
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Корзина</title>
<link rel="stylesheet" type="text/css">
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
								<span class="simpleCart_total">></span>
							</div>
							<img src="images/cart-1.png" alt="" />
						</a>
						<p><a href="javascript: document.location.href = 'checkout.php?clean';" class="simpleCart_empty">Очистить</a></a></p>
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
					<li class="active">Корзина</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-ckeckout-->
	<div class="ckeckout">
		<div class="container">
			<div class="ckeck-top heading">
				<h2>Корзина</h2>
			</div>
			<div class="ckeckout-top">
			<div class="cart-items">
			 <h3>Мои покупки</h3>
				
			<div class="in-check" >
				<ul class="unit">
					<li><span>Картинка</span></li>
					<li><span>Название товара</span></li>		
					<li><span>Стоимость</span></li>
					<li><span>Доставка</span></li>
					<div class="clearfix"> </div>
				</ul>

				<?php while($product = mysqli_fetch_assoc($result)){ ?>

					<script>$(document).ready(function(c) {
					$('.close<?php echo $product['id_basket']; ?>').on('click', function(c){
						$('.cart-header<?php echo $product['id_basket']; ?>').fadeOut('slow', function(c){
							$('.cart-header<?php echo $product['id_basket']; ?>').remove();
							<?php $sql = mysqli_query($link, "DELETE FROM basket WHERE id_basket = {$_GET['id']}") ?>
						});
						});	  
					});
			   		</script>

				<style>
				ul.cart-header<?php echo $product['id_basket']; ?> {
				    padding: 1em;
				    background: #f8f8f8;
				    border-bottom: 1px solid #181b2a;
				    margin-bottom: 20px;
				}
				ul.cart-header<?php echo $product['id_basket']; ?> li {
				    display: inline-block;
				    width: 25%;
				    float: left;
				}
				ul.cart-header<?php echo $product['id_basket']; ?> li span{
					margin: 2.3em 0 0;
					display: block;
					color:#000;
					font-size: 1.05em;
					text-align: left;
				}
				ul.cart-header<?php echo $product['id_basket']; ?> {
				    padding: 5px;
				    margin-bottom: 10px;
				}
				ul.cart-header<?php echo $product['id_basket']; ?> li p{
				    font-size: 11px;
				    line-height: 1.6em;
				    color: #999;
				    margin: 0;
				}
				.cart-header<?php echo $product['id_basket']; ?>{
					position:relative;
				}
				.close<?php echo $product['id_basket']; ?>{
					background: url('../images/close.png') no-repeat 0px 0px;
					cursor: pointer;
					width: 28px;
					height: 28px;
					position: absolute;
				    right: 5px;
				    top: 10px;
					-webkit-transition: color 0.2s ease-in-out;
					-moz-transition: color 0.2s ease-in-out;
					-o-transition: color 0.2s ease-in-out;
					transition: color 0.2s ease-in-out;
				}
				.close<?php echo $product['id_basket']; ?>{
				    width: 20px;
				    height: 20px;
				    top: 5px;
				    background-size: 100%;
				}
				.close<?php echo $product['id_basket']; ?>{
				    width: 17px;
				    height: 17px;
				}
				</style>

				<ul class="cart-header<?php echo $product['id_basket']; ?>">
					<div class="close<?php echo $product['id_basket']; ?>"><a href="checkout.php?id=<?php echo $product['id_basket']; ?>"><?php echo $product['id_basket']; ?></a></div>
						<li class="ring-in"><a href="single.php?id=<?php echo $product['id_product']; ?>" ><img src="<?php echo $product['icon']; ?>" class="img-responsive" alt=""></a>
						</li>
						<li><span class="name"><?php echo $product['name']; ?> <?php echo $product['model']; ?></span></li>
						<li><span class="cost"><?php echo $product['price']; ?> BYN</span></li>
						<li><span><?php echo $product['service']; ?></span>
						<p>Доставка осуществляется с момента покупки в течении рабочего дня</p></li>
					<div class="clearfix"> </div>
				</ul>
			<?php } ?>

			</div>
			</div> 
		 </div>
		</div>
	</div>
	<!--end-ckeckout-->
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