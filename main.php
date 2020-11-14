<!DOCTYPE html>
<html lang="ru">
<head>
<style = "">
.img {
	width: 2%;
	margin-left: 73%;
	margin-bottom: 7%;
	margin-top: -100%;
	}
</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<title>Website</title>
	<link rel="stylesheet" href="css/style_main.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="fontawesome-free/css/all.min.css">

	<!-- TweenMax -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
</head>
<body>

<img src="basket.png" class="lego">
<img src="pol.png" class="img">
<img src="Name.png" alt="" class="log">
<img src="images_main/model.png" alt="" class="photo-model">

<h1 class="taglin">Главная страница</h1>


	<div class="navigation">
		<div class="logo">
			<img src="images_main/logotype.png" alt="" class="logotype">
			
		</div>

		

		<div class="search-block">
			<div class="searsh">
				<input type="text" class="search-form" placeholder="Поиск">
				<a href="#" class="search-btn"><i class="fas fa-search"></i></a>
			</div>
		</div>

		<div class="personal-item">
			<div class="auth">
				<div class="login">
				    
					<a href="#" class="auth-link signIn"><i class="fas fa-user-circle"></i>Войти</a>
				</div>
				<div class="car">
					<a href="#" class="auth-link"><i class="fas fa-shopping-cart"></i>Корзина</a>
				</div>
			</div>
		</div>
	</div>

	<div class="sign-block">
		<div class="sign">
			<a href="#" class="exit"><i class="fas fa-times"></i></a>
			<h4 class="sign-head">Вход</h4>

			<div class="input-data">
				<input type="text" placeholder="введите логин">
			</div>
			<div class="input-data">
				<input type="password" placeholder="введите пароль">
			</div>
			<div class="input-btn">
				<input type="submit" value="Войти">
			</div>

			<p class="notReg">Ещё не зарегистрированы?</p>
			<div class="input-btn notReg-btn">
				<a href="index.php" input type="submit" value="Зарегистрироваться">Зарегистрироваться</a>
			</div>
		</div>
	</div>

	<div class="mobile-navigation">
		<a href="#" class="burger-link">
			<span></span>
		</a>

		<div class="mobile-nav">
			<ul class="mobile-menu">
				<li class="menu-item">
					<a href="#" class="menu-link signInMobile">Войти</a>
				</li>
			
			</ul>
		</div>
	</div>

	<div class="main-information">
		<div class="text-inform">
			<h1 class="animated">Интернет магазин</h1>
			<p class="tagline">В нашем магазине вы можете преобрести детскую одежду по адекватной цене.</p>
		
		</div>

		
	</div>
	


	<div class="social">
		<div class="find">
			<a class="findStore" href="#"><i class="fas fa-map-marker-alt"></i></a>
		</div>

		<div class="social-menu">
		
			<a href="goods.php" class="connect">В товары ></a>

			
		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
		TweenMax.from(".text-inform h1", 1, {
			delay: .4,
			y: 20,
			opacity: 0,
			ease:Expo.easeInOut
		});

		TweenMax.from(".tagline", 1, {
			delay: .7,
			y: 20,
			opacity: 0,
			ease:Expo.easeInOut
		});

		TweenMax.from(".inform-btn", 1, {
			delay: 1,
			y: 20,
			opacity: 0,
			ease:Expo.easeInOut
		});

		TweenMax.from(".photo-model", 1, {
			delay: .4,
			y: 20,
			opacity: 0,
			ease:Expo.easeInOut
		});

		TweenMax.from(".logo", 1, {
			delay: 2.2,
			y: -20,
			opacity: 0,
			ease:Expo.easeInOut
		});

		TweenMax.from(".menu", 1, {
			delay: 2.4,
			y: -20,
			opacity: 0,
			ease:Expo.easeInOut
		});

		TweenMax.from(".search-block", 1, {
			delay: 2.6,
			y: -20,
			opacity: 0,
			ease:Expo.easeInOut
		});

		TweenMax.from(".personal-item", 1, {
			delay: 2.8,
			y: -20,
			opacity: 0,
			ease:Expo.easeInOut
		});

		TweenMax.from(".find", 1, {
			delay: 3.2,
			y: 20,
			opacity: 0,
			ease:Expo.easeInOut
		});

		TweenMax.from(".connect", 1, {
			delay: 3.4,
			y: 20,
			opacity: 0,
			ease:Expo.easeInOut
		});

		TweenMax.from(".social-icon", 1, {
			delay: 3.6,
			y: 20,
			opacity: 0,
			ease:Expo.easeInOut
		});

		TweenMax.from(".burger-link", 1, {
			delay: 3,
			y: -20,
			opacity: 0,
			ease:Expo.easeInOut
		});
		$(document).ready(function () {
			var link = $('.burger-link');
			var link_active = $('.burger-link_active');
			var navigation = $('.mobile-nav');
			var nav_active = $('.nav-active');

			var sign = $('.signIn');
			var signBlock = $('.sign-block');
			var signBlock_active = $('.sign-block_active');
			var exit = $('.exit');
			var signInMobile = $('.signInMobile');

			var findStore = $('.findStore');
			var mapsBlock = $('.maps-block');
			var mapsBlock_active = $('.maps-block_active');

			link.click(function(){
				link.toggleClass('burger-link_active');
				navigation.toggleClass('nav-active');
			});

			link_active.click(function(){
				navigation.removeClass('nav-active');
			});

			sign.click(function(){
				signBlock.toggleClass('sign-block_active');
			});

			signInMobile.click(function(){
				signBlock.toggleClass('sign-block_active');
				navigation.removeClass('nav-active');
				link.removeClass('burger-link_active');
			});

			findStore.click(function(){
				mapsBlock.toggleClass('maps-block_active');
			});

			exit.click(function(){
				signBlock.removeClass('sign-block_active');
				mapsBlock.removeClass('maps-block_active');
			});
		});
	</script>

</body>
</html>