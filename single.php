<?php

include "databases.php";

$result = mysqli_query($link, "SELECT * FROM Brand, Mechanism, product WHERE id_product={$_GET['id']} AND Brand.id_brand=product.id_brand AND Mechanism.id_mechanism=product.id_mechanism AND Brand.id_brand=product.id_brand AND Mechanism.id_mechanism=product.id_mechanism");

// while($product = mysqli_fetch_assoc($result)){
// 	echo $product['model'];
// }

// while($product = mysqli_fetch_assoc($result)){
// 	print_r($product);
// 	// echo $product['id_brand'];
// 	echo "<br>";
// }

if(isset($_GET['update'])) {
	$sql = mysqli_query($link, "INSERT INTO basket (id_product, id_service) VALUES (".$_GET['id'].", '2')");
}

if(isset($_GET['clean'])) {
	$sql = mysqli_query($link, "DELETE FROM basket WHERE id_basket = id_basket");
}

?>

<?php while($product = mysqli_fetch_assoc($result)){ ?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $product['name']; ?></title>
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
<script type="text/javascript">
	$(function() {
	
	    var menu_ul = $('.menu_drop > li > ul'),
	           menu_a  = $('.menu_drop > li > a');
	    
	    menu_ul.hide();
	
	    menu_a.click(function(e) {
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	            menu_a.removeClass('active');
	            menu_ul.filter(':visible').slideUp('normal');
	            $(this).addClass('active').next().stop(true,true).slideDown('normal');
	        } else {
	            $(this).removeClass('active');
	            $(this).next().stop(true,true).slideUp('normal');
	        }
	    });
	
	});
</script>		
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
						<p><a href="javascript: document.location.href = 'single.php?clean';" class="simpleCart_empty">Очистить</a></a></p>
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
					<li class="active"><?php echo $product['name']; ?></li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-single-->
	<div class="single contact">
		<div class="container">
			<div class="single-main">
				<div class="col-md-9 single-main-left">
				<div class="sngl-top">
					<div class="col-md-5 single-top-left">	
						<div class="flexslider">
							  <ul class="slides">
								<li data-thumb="<?php echo $product['photo']; ?>">
									<div class="thumb-image"> <img src="<?php echo $product['photo']; ?>" data-imagezoom="true" class="img-responsive" alt=""/> </div>
								</li>
							  </ul>
						</div>
						<!-- FlexSlider -->
						<script src="js/imagezoom.js"></script>
						<script defer src="js/jquery.flexslider.js"></script>
						<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>
					</div>	
					<div class="col-md-7 single-top-right">
						<div class="single-para simpleCart_shelfItem">
						<h2><?php echo $product['name']; ?> <?php echo $product['model']; ?></h2>
							<div class="star-on">
								<ul class="star-footer">
										<h4>Артикул: <?php echo $product['article']; ?></h4>
									</ul>
							<div class="clearfix"> </div>
							</div>
							
							<h5 class="item_price"><?php echo $product['price']; ?> BYN</h5>
							<p><?php echo $product['info']; ?></p>
							<ul class="tag-men">
								<li><span>Тип</span>
								<span class="women1"><?php echo $product['sex']; ?></span></li>
								<li><span>Мех</span>
								<span class="women1"><?php echo $product['mechanism']; ?></span></li>
							</ul>
								<a href="index.php?update&id=<?php echo $product['id_product']; ?>" class="add-cart item_add">Добавить</a>
							
						</div>
					</div>
					<div class="clearfix"> </div>
					<?php } ?>
				</div>
				<!-- <div class="tabs">
					<ul class="menu_drop">
				<li class="item1"><a href="#"><img src="images/arrow.png" alt="">Описание</a>
					<ul>
						<li class="subitem1"><a href="#">С 1946 года марка Casio выпускает качественные и надежные часы с красивым дизайном. Основатель бренда, который был инженером, мечтал создать революционную марку электронных устройств. Среди всех электронных устройств (калькулятор, цифровая камера, принтер и мобильные устройства), которые представляет Casio, часы наиболее популярны. Casio производит широкий ассортимент часов на любой вкус, все они отличаются своим цветовым разнообразием, чтобы удовлетворить любой вкус. Все часы изготовлены из прочных материалов, что и обеспечивает часы такими функциями, как ударопрочность, водостойкость. “Мы ценим креативность и гарантируем, что наши продукты будут соответствовать универсальным потребностям”-слоган под которым компания работает со дня открытия по сей день.</a></li>
					</ul>
				</li>
				<li class="item2"><a href="#"><img src="images/arrow.png" alt="">Гарантия</a>
					<ul>
					    <li class="subitem2"><a href="#">Условия гарантии<br>
							<br>
							Марка Casio предоставляет 2 года гарантии на часовые механизмы и 3 месяца гарантии на батарею. Гарантия не действует в случае внешних повреждений.</a></li>
					</ul>
				</li>
				<li class="item3"><a href="#"><img src="images/arrow.png" alt="">Доставка</a>
					<ul>
						<li class="subitem1"><a href="#">
Спасибо за посещение и покупки на нашем сайте. Мы с радостью доставим Ваш заказ не только в нашу торговую точку, но и до двери вашего дома. Ниже Вы можете ознакомиться с условиями доставки. 
Самовывоз
Любой товар представленный на сайте, вы можете зарезервировать для самовывоза из магазина с положительным остатком. Список магазинов представлен в карточке каждого товара. 
Обращаем ваше внимание, что информация на сайте обновляется по определенному интервалу времени и может отличаться от фактического наличия в магазине. Обязательно связывайтесь со специалистом интернет-магазина и оформляйте резерв, который будет ждать Вас. 
Резерв для самовывоза действителен 2 дня. 
Доставка по Минску
Вы можете оформить заказ для доставки курьером на дом. Доставка осуществляется в течении 48 часов с момента оформления заказа, в зависимости от времени оформления и территориального расположения. Более подробно вы можете узнать у сотрудников интернет магазина оформив заказа через корзину или позвонив по телефону, указанному в шапке сайта. 
Условия доставки: 
Доставка осуществляется бесплатно, от суммы не менее 50 руб.;
Оплата производится при получении товара, в белорусских рублях, наличными или банковской картой по терминалу;
Максимальное количество единиц изделий в заказе, не должно превышать 5 (пяти).
Общая сумма заказа, не должна превышать 5000 руб. иное оговаривается с оператором на этапе оформления заказа, либо оформляется самовывоз;
Доставка ювелирных изделий и драгоценных металлов не осуществляется.
Доставка по Беларуси
Мы доставим Ваш заказ практически в любую точку Беларуси.
Стоимость доставки:
Сумма заказа более 100 руб. – доставка бесплатно;
Сумма заказа менее 100 руб. – доставка не осуществляется. 
Условия доставки: 
Доставка ювелирных изделий и драгоценных металлов не осуществляется;
Сроки доставки зависят от территориального расположения и графика доставки для каждого отдельного региона, срок доставки можно уточнить через оператора;
Оплата товара при доставке курьером по Беларуси, осуществляется только наличными в белорусских рублях (временная мера);
Заказ с возможностью выбора на месте временно невозможен.<br>
<br>
Наши курьеры уже ждут вашего заказа :)</a></li>
					</ul>
				</li>
				<li class="item4"><a href="#"><img src="images/arrow.png" alt="">Полезная информация</a>
					<ul>
					    <li class="subitem2"><a href="#">Наручные часы</a></li>
					</ul>
				</li>
	 		</ul>
				</div> -->
			</div>
				<div class="col-md-3 prdt-right">
					<div class="w_sidebar">
						<section  class="sky-form">
							<h4>Категории</h4>
							<div class="row1 scroll-pane">
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Все аксессуары</label>							
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Мужские часы</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Женские часы</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Детские часы</label>			
								</div>
							</div>
						</section>
						<section  class="sky-form">
							<h4>Бренды</h4>
							<div class="row1 row2 scroll-pane">
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Все</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rolex</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Casio</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Orient</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>SWatch</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Timex</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Citizen</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Huawei</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Fossil</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Apple</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Samsung</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Луч</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Зенит</label>									
								</div>
							</div>
						</section>
						<section class="sky-form">
							<h4>Цвета</h4>
								<ul class="w_nav2">
									<li><a class="color1" href="#"></a></li>
									<li><a class="color2" href="#"></a></li>
									<li><a class="color3" href="#"></a></li>
									<li><a class="color4" href="#"></a></li>
									<li><a class="color5" href="#"></a></li>
									<li><a class="color6" href="#"></a></li>
									<li><a class="color7" href="#"></a></li>
									<li><a class="color8" href="#"></a></li>
									<li><a class="color9" href="#"></a></li>
									<li><a class="color10" href="#"></a></li>
									<li><a class="color12" href="#"></a></li>
									<li><a class="color13" href="#"></a></li>
									<li><a class="color14" href="#"></a></li>
									<li><a class="color15" href="#"></a></li>
									<li><a class="color5" href="#"></a></li>
									<li><a class="color6" href="#"></a></li>
									<li><a class="color7" href="#"></a></li>
									<li><a class="color8" href="#"></a></li>
									<li><a class="color9" href="#"></a></li>
									<li><a class="color10" href="#"></a></li>
								</ul>
						</section>
						<section class="sky-form">
							<h4>Скидки</h4>
								<div class="row1 row2 scroll-pane">
									<div class="col col-4">
										<label class="radio"><input type="radio" name="radio"><i></i>Без скидок</label>
										<label class="radio"><input type="radio" name="radio"><i></i>60 %</label>
										<label class="radio"><input type="radio" name="radio"><i></i>50 %</label>
										<label class="radio"><input type="radio" name="radio"><i></i>40 %</label>
										<label class="radio"><input type="radio" name="radio"><i></i>30 %</label>
										<label class="radio"><input type="radio" name="radio"><i></i>20 %</label>
										<label class="radio"><input type="radio" name="radio"><i></i>10 %</label>
									</div>
								</div>						
						</section>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-single-->
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