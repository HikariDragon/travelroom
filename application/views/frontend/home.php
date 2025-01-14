<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/elements/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Log on to codeastro.com for more projects -->
	<!-- Site Title -->
	<title>RoomTravel</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
		CSS
		============================================= -->
	<?php $this->load->view('frontend/include/base_css'); ?>
</head>

<body>
	<!-- navbar -->
	<?php $this->load->view('frontend/include/base_nav'); ?>
	<!-- start banner Area -->
	<main class="main">
		<!--==================== HOME ====================-->
		<section class="home" id="home">
			<img src="assets/assets2/img/home1.jpg" alt="" class="home__img">

			<div class="home__container container grid">
				<div class="home__data">
					<span class="home__data-subtitle">Discover your place</span>
					<h1 class="home__data-title">Jelajahi <br> Pantai Terindah <br> Dipulau Jawa</h1>
					<a href="#" class="button">Jelajahi</a>

				</div>

				<div class="home__social">
					<a href="https://www.facebook.com/" target="_blank" class="home__social-link">
						<i class="ri-facebook-box-fill"></i>
					</a>
					<a href="https://www.instagram.com/" target="_blank" class="home__social-link">
						<i class="ri-instagram-fill"></i>
					</a>
					<a href="https://twitter.com/" target="_blank" class="home__social-link">
						<i class="ri-twitter-fill"></i>
					</a>
				</div>

				<div class="home__info">
					<div>
						<span class="home__info-title">5 best places to visit</span>
						<a href="" class="button button--flex button--link home__info-button">
							More <i class="ri-arrow-right-line"></i>
						</a>
					</div>

					<div class="home__info-overlay">
						<img src="assets/assets2/img/home2.jpg" alt="" class="home__info-img">
					</div>
				</div>
			</div>
		</section>

		<!--==================== PROMO ====================-->
		<section class="about section" id="about">
			<div class="about__container container grid">
				<div class="about__data">
					<h2 class="section__title about__title">Cek Promo <br> Sebelum Bepergian, Yuk !!</h2>
					<p class="about__description">You can find the most beautiful and pleasant places at the best
						prices with special discounts, you choose the place we will guide you all the way to wait, get your
						place now.
					</p>
					<a href="#" class="button">Cek Semua Promo</a>
				</div>

				<div class="about__img">
					<div class="about__img-overlay">
						<img src="assets/assets2/img/about1.jpg" alt="" class="about__img-one">
					</div>

					<div class="about__img-overlay">
						<img src="assets/assets2/img/about2.jpg" alt="" class="about__img-two">
					</div>
				</div>
			</div>
		</section>

		<!--==================== DISCOVER ====================-->
		<!-- <section class="discover section" id="discover">
			<h2 class="section__title">Discover the most <br> attractive places</h2>

			<div class="discover__container container swiper-container">
				<div class="swiper-wrapper"> -->
		<!--==================== DISCOVER 1 ====================-->
		<!-- <div class="discover__card swiper-slide">
						<img src="assets/assets2/img/discover1.jpg" alt="" class="discover__img">
						<div class="discover__data">
							<h2 class="discover__title">Bali</h2>
							<span class="discover__description">24 tours available</span>
						</div>
					</div> -->

		<!--==================== DISCOVER 2 ====================-->
		<!-- <div class="discover__card swiper-slide">
						<img src="assets/assets2/img/discover2.jpg" alt="" class="discover__img">
						<div class="discover__data">
							<h2 class="discover__title">Hawaii</h2>
							<span class="discover__description">15 tours available</span>
						</div>
					</div> -->

		<!--==================== DISCOVER 3 ====================-->
		<!-- <div class="discover__card swiper-slide">
						<img src="assets/assets2/img/discover3.jpg" alt="" class="discover__img">
						<div class="discover__data">
							<h2 class="discover__title">Hvar</h2>
							<span class="discover__description">18 tours available</span>
						</div>
					</div> -->

		<!--==================== DISCOVER 4 ====================-->
		<!-- <div class="discover__card swiper-slide">
						<img src="assets/assets2/img/discover4.jpg" alt="" class="discover__img">
						<div class="discover__data">
							<h2 class="discover__title">Whitehaven</h2>
							<span class="discover__description">32 tours available</span>
						</div>
					</div>
				</div>
			</div>
		</section> -->

		<!--==================== EXPERIENCE ====================-->
		<section class="experience section">
			<h2 class="section__title">With Our Experience <br> We Will Serve You</h2>

			<div class="experience__container container grid">
				<div class="experience__content grid">
					<div class="experience__data">
						<h2 class="experience__number">20</h2>
						<span class="experience__description">Year <br> Experience</span>
					</div>

					<div class="experience__data">
						<h2 class="experience__number">75</h2>
						<span class="experience__description">Complete <br> tours</span>
					</div>

					<div class="experience__data">
						<h2 class="experience__number">650+</h2>
						<span class="experience__description">Tourist <br> Destination</span>
					</div>
				</div>

				<div class="experience__img grid">
					<div class="experience__overlay">
						<img src="assets/assets2/img/experience1.jpg" alt="" class="experience__img-one">
					</div>

					<div class="experience__overlay">
						<img src="assets/assets2/img/experience2.jpg" alt="" class="experience__img-two">
					</div>
				</div>
			</div>
		</section>

		<!--==================== VIDEO ====================-->
		<section class="video section">
			<h2 class="section__title">Video Tour</h2>

			<div class="video__container container">
				<p class="video__description">Find out more with our video of the most beautiful and
					pleasant places for you and your family.
				</p>

				<div class="video__content">
					<video id="video-file">
						<source src="assets/assets2/video/video.mp4" type="video/mp4">
					</video>

					<button class="button button--flex video__button" id="video-button">
						<i class="ri-play-line video__button-icon" id="video-icon"></i>
					</button>
				</div>
			</div>
		</section>

		<!--==================== PLACES ====================-->
		<section class="place section" id="place">
			<h2 class="section__title">Choose Your Place</h2>

			<div class="place__container container grid">
				<!--==================== PLACES CARD 1 ====================-->
				<div class="place__card">
					<img src="assets/assets2/img/place1.jpg" alt="" class="place__img">

					<div class="place__content">
						<span class="place__rating">
							<i class="ri-star-line place__rating-icon"></i>
							<span class="place__rating-number">4,8</span>
						</span>

						<div class="place__data">
							<h3 class="place__title">Bali</h3>
							<span class="place__subtitle">Indonesia</span>
							<span class="place__price">$2499</span>
						</div>
					</div>

					<button class="button button--flex place__button">
						<i class="ri-arrow-right-line"></i>
					</button>
				</div>

				<!--==================== PLACES CARD 2 ====================-->
				<div class="place__card">
					<img src="assets/assets2/img/place2.jpg" alt="" class="place__img">

					<div class="place__content">
						<span class="place__rating">
							<i class="ri-star-line place__rating-icon"></i>
							<span class="place__rating-number">5,0</span>
						</span>

						<div class="place__data">
							<h3 class="place__title">Bora Bora</h3>
							<span class="place__subtitle">Polinesia</span>
							<span class="place__price">$1599</span>
						</div>
					</div>

					<button class="button button--flex place__button">
						<i class="ri-arrow-right-line"></i>
					</button>
				</div>

				<!--==================== PLACES CARD 3 ====================-->
				<div class="place__card">
					<img src="assets/assets2/img/place3.jpg" alt="" class="place__img">

					<div class="place__content">
						<span class="place__rating">
							<i class="ri-star-line place__rating-icon"></i>
							<span class="place__rating-number">4,9</span>
						</span>

						<div class="place__data">
							<h3 class="place__title">Hawaii</h3>
							<span class="place__subtitle">EE.UU</span>
							<span class="place__price">$3499</span>
						</div>
					</div>

					<button class="button button--flex place__button">
						<i class="ri-arrow-right-line"></i>
					</button>
				</div>

				<!--==================== PLACES CARD 4 ====================-->
				<div class="place__card">
					<img src="assets/assets2/img/place4.jpg" alt="" class="place__img">

					<div class="place__content">
						<span class="place__rating">
							<i class="ri-star-line place__rating-icon"></i>
							<span class="place__rating-number">4,8</span>
						</span>

						<div class="place__data">
							<h3 class="place__title">Whitehaven</h3>
							<span class="place__subtitle">Australia</span>
							<span class="place__price">$2499</span>
						</div>
					</div>

					<button class="button button--flex place__button">
						<i class="ri-arrow-right-line"></i>
					</button>
				</div>

				<!--==================== PLACES CARD 5 ====================-->
				<div class="place__card">
					<img src="assets/assets2/img/place5.jpg" alt="" class="place__img">

					<div class="place__content">
						<span class="place__rating">
							<i class="ri-star-line place__rating-icon"></i>
							<span class="place__rating-number">4,8</span>
						</span>

						<div class="place__data">
							<h3 class="place__title">Hvar</h3>
							<span class="place__subtitle">Croacia</span>
							<span class="place__price">$1999</span>
						</div>
					</div>

					<button class="button button--flex place__button">
						<i class="ri-arrow-right-line"></i>
					</button>
				</div>
			</div>
		</section>

		<!--==================== SUBSCRIBE ====================-->
		<section class="subscribe section">
			<div class="subscribe__bg">
				<div class="subscribe__container container">
					<h2 class="section__title subscribe__title">Subscribe Our <br> Newsletter</h2>
					<p class="subscribe__description">Subscribe to our newsletter and get a
						special 30% discount.
					</p>

					<form action="" class="subscribe__form">
						<input type="text" placeholder="Enter email" class="subscribe__input">

						<button class="button">
							Subscribe
						</button>
					</form>
				</div>
			</div>
		</section>

		<!--==================== SPONSORS ====================-->
		<section class="sponsor section">
			<div class="sponsor__container container grid">
				<div class="sponsor__content">
					<img src="assets/assets2/img/sponsors1.png" alt="" class="sponsor__img">
				</div>
				<div class="sponsor__content">
					<img src="assets/assets2/img/sponsors2.png" alt="" class="sponsor__img">
				</div>
				<div class="sponsor__content">
					<img src="assets/assets2/img/sponsors3.png" alt="" class="sponsor__img">
				</div>
				<div class="sponsor__content">
					<img src="assets/assets2/img/sponsors4.png" alt="" class="sponsor__img">
				</div>
				<div class="sponsor__content">
					<img src="assets/assets2/img/sponsors5.png" alt="" class="sponsor__img">
				</div>
			</div>
		</section>
	</main>
	<!-- End service Area -->
	<!-- End feature Area -->
	<!-- Log on to codeastro.com for more projects -->
	<!-- End Generic Start -->
	<!-- start footer Area -->
	<?php $this->load->view('frontend/include/base_footer'); ?>
	<!-- js -->
	<?php $this->load->view('frontend/include/base_js'); ?>
</body>

</html>