<!DOCTYPE html>
<html class="no-js" lang="" data-ng-app="/">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php echo $pageData['title']; ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon
			============================================ -->
			<link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
		<!-- Google Fonts
			============================================ -->
			<link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
			<link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>

		<!-- Bootstrap CSS
			============================================ -->
			<link rel="stylesheet" href="/css/bootstrap.min.css">
		<!-- Font awesome CSS
			============================================ -->
			<link rel="stylesheet" href="/css/font-awesome.min.css">
		<!-- owl.carousel CSS
			============================================ -->
			<link rel="stylesheet" href="/css/owl.carousel.css">
			<link rel="stylesheet" href="/css/owl.theme.css">
			<link rel="stylesheet" href="/css/owl.transitions.css">
		<!-- meanmenu CSS
			============================================ -->
			<link rel="stylesheet" href="/css/meanmenu.min.css">
		<!-- jquery-ui CSS
			============================================ -->
			<link rel="stylesheet" href="/css/jquery-ui.css">
		<!-- animate CSS
			============================================ -->
			<link rel="stylesheet" href="/css/animate.css">
		<!-- main CSS
			============================================ -->
			<link rel="stylesheet" href="/css/main.css">
		<!-- style CSS
			============================================ -->
			<link rel="stylesheet" href="/css/style2.css">
		<!-- responsive CSS
			============================================ -->
			<link rel="stylesheet" href="/css/responsive.css">
		</head>
		<body>

			<!-- HEADER-AREA START -->
			<header class="header-area">
				<!-- HEADER-TOP START -->
				<div class="header-top hidden-xs">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="top-menu">
									<p class="welcome-msg">Мы открылись! В нашем магазине множество товаров</p>
								</div>
								<!-- Start Top-Link -->
								<div class="top-link">
									<ul class="link">
										<li><a href="/profile"><i class="fa fa-user"></i> My Account</a></li>
										<li><a href="/login"><i class="fa fa-unlock-alt"></i> Login</a></li>
									</ul>
								</div>
								<!-- End Top-Link -->
							</div>
						</div>
					</div>
				</div>
				<!-- HEADER-TOP END -->
				<!-- HEADER-MIDDLE START -->
				<div class="header-middle">
					<div class="container">
						<!-- Start Support-Client -->
						<div class="support-client hidden-xs">
							<div class="row">
								<!-- Start Support-Client -->
								<div class="support-client hidden-xs">
									<div class="row">
										<!-- Start Single-Support -->
										<div class="col-md-3 hidden-sm">
											<div class="single-support">
												<div class="support-content">
													<i class="fa fa-clock-o"></i>
													<div class="support-text">
														<h1 class="zero gfont-1">Рабочее время</h1>
														<p>Пн-Сб: 8.00 - 18.00</p>
													</div>
												</div>
											</div>
										</div>
										<!-- End Single-Support -->
										<!-- Start Single-Support -->
										<div class="col-md-3 col-sm-4">
											<div class="single-support">
												<i class="fa fa-truck"></i>
												<div class="support-text">
													<h1 class="zero gfont-1">Бесплатная доставка</h1>
													<p>При заказе от 1000₴</p>
												</div>
											</div>
										</div>
										<!-- End Single-Support -->
										<!-- Start Single-Support -->
										<div class="col-md-3 col-sm-4">
											<div class="single-support">
												<i class="fa fa-money"></i>
												<div class="support-text">
													<h1 class="zero gfont-1">Возврат средств 100%</h1>
													<p>В течение 30 дней после доставки</p>
												</div>
											</div>
										</div>
										<!-- End Single-Support -->
										<!-- Start Single-Support -->
										<div class="col-md-3 col-sm-4">
											<div class="single-support">
												<i class="fa fa-phone-square"></i>
												<div class="support-text">
													<h1 class="zero gfont-1">Телефон: +380931010071</h1>
													<p>Закажите онлайн прямо сейчас!</p>
												</div>
											</div>
										</div>
										<!-- End Single-Support -->
									</div>
								</div>
								<!-- End Support-Client -->
								<!-- Start logo & Search Box -->
								<div class="row" data-ng-controller="indexController">
									<div class="col-md-3 col-sm-12">
										<div class="logo">
											<a href="/" title="Malias"><img src="images/GingerZoo.jpg" alt="Malias"></a>
										</div>
									</div>
									<div class="col-md-9 col-sm-12">
										<div class="quick-access">
											<div class="search-by-category">
												<div class="search-container">
													<form method="get" action="">
														<select name="animal">
															<option value="">All Animals</option>
															<option value="Собаки"<?php if(isset($_GET['animal']) && $_GET['animal'] === 'Собаки') { echo ' selected'; } ?>>Собаки</option>
															<option value="Кошки"<?php if(isset($_GET['animal']) && $_GET['animal'] === 'Кошки') { echo ' selected'; } ?>>Кошки</option>
														</select>
														<button type="submit">Filter</button> <!-- Add filter button -->
													</form>
												</div>
												<div class="header-search">
													<form method="get" action="">
														<input type="text" name="product" placeholder="Search">
														<button type="submit"><i class="fa fa-search"></i></button>
													</form>
												</div>
											</div>
											<div class="top-cart">
												<ul>
													<li>
														<a href="/ordering">
															<span class="cart-icon"><i class="fa fa-shopping-cart"></i></span>
															<span class="cart-total">
																<span class="cart-title">shopping cart</span>
																<span class="cart-item"><?= $_SESSION['cart.qty'] ?> item(s)- </span>
																<span class="top-cart-price"><?= $_SESSION['cart.sum'] ?> ₴</span>
															</span>
														</a>
														<div class="mini-cart-content">
															<?php if (!empty($_SESSION['cart'])): ?>
																<?php foreach ($_SESSION['cart'] as $id => $item): ?>
																	<div class="cart-img-details">
																		<div class="cart-img-photo">
																			<img src="<?php echo $item['img'] ?>" data-ng-click='openProductesDetails(<?php echo $item['id']; ?>)'>
																		</div>
																		<div class="cart-img-content">
																			<a href="#" data-ng-click='openProductesDetails(<?php echo $item['id']; ?>)'><h4><?= $item['name'] ?></h4></a>
																			<span>
																				<strong class="text-right"><?= $item['qty'] ?>x</strong>
																				<strong class="cart-price text-right"><?= $item['price'] ?></strong>
																			</span>
																		</div>
																	</div>
																<?php endforeach; ?>
																<?php else: ?>
																	<div style="text-align: center;">
																		<p>Корзина пуста...</p>
																	</div>
																<?php endif; ?>
																<div class="clear"></div>
																<div class="cart-inner-bottom">
																	<span class="total">
																		Total:
																		<span class="amount"><?= $_SESSION['cart.sum'] ?> ₴</span>
																	</span>
																	<span class="cart-button-top">
																		<a href="/ordering">Оформить заказ</a>

																		<a type="submit" href="/cart/deleteCart">Очистить карзину</a>

																	</span>
																</div>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<!-- End logo & Search Box -->
								</div>
							</div>
							<!-- HEADER-MIDDLE END -->
							<!-- START MAINMENU-AREA -->
							<div class="mainmenu-area">
								<div class="container">
									<div class="row">
										<div class="col-md-6">
											<div class="mainmenu hidden-sm hidden-xs" >
												<nav>
													<ul>
														<li><a href="/">Home</a></li>
														<li><a href="/aboutus">About Us</a></li>
														<li><a href="/contactus">Contact Us</a></li>
													</ul>
												</nav>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END MAIN-MENU-AREA -->
							<!-- Start Mobile-menu -->
							<div class="mobile-menu-area hidden-md hidden-lg">
								<div class="container">
									<div class="row">
										<div class="col-md-6">
											<nav id="mobile-menu" style="text-align: center;">
												<ul>
													<li><a href="/" style="color: black;">Home</a></li>
													<li><a href="/aboutus" style="color: black;">About Us</a></li>
													<li><a href="/contactus" style="color: black;">Contact Us</a></li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
							<!-- End Mobile-menu -->
						</header>
						<!-- HEADER AREA END -->
						<!-- Category slider area start -->
						<section class="page-content">
							<!-- Start About-Area -->
							<div class="about-area">
								<div class="container">
									<div class="row">
										<div class="col-md-12">
											<div class="f-title text-center">
												<h3 class="title text-uppercase">О нашем магазине</h3>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-7 col-sm-12 col-xs-12">
											<div class="about-page-cntent">
												<h3>Вас приветствует зоомагазин GingerZoo 🐾</h3>
												<p>На нашем сайте Вы найдете множество необходимых видов корма для вашего домашнего питомца по самым оптимальным ценам. Осуществить заказ вы можете не выходя из дома. В ассортименте есть продукция таких торговых марок как : Royal Canin, Hill’s, 1st Choise. В нашем магазине размещены те товары, которые станут необходимы для владельцев разных типов собак и кошек.</p>
												<blockquote>
													<p>В нашем магазине в наличии корма для собак : для собак возраст от 10 месяцев до 8 лет , для взрослых собак средних пород (от 11 до 25 кг) в возрасте от 12 месяцев до 7 лет , для крупных размеров взрослой собаки (от 26 кг до 44) в возрасте от 15 месяцев до 5 лет), для собак относящихся к группе GIANT (вес превышает 45 кг) , корм для поддержания идеального веса у взрослых собак средних пород (старше 1 года и весом от 11 до 25 кг) , для зрелых и пожилых собак мелких пород (до 10 кг и возрастом старше 7 лет) , с удовольствием всех питательных потребностей организма собаки старше 7 лет , для поддержания здоровья суставов крупных пород (весом свыше 25 кг и старше 1 года) , для пожилых миниатюрных и малых собак в возрасте от 8 лет или для взрослых собак, склонных к полноте , для собак всех пород возрастом от 12 месяцев, страдающих от пищевой аллергии, а также множество других , подходящих и нужных любому виду собаки.</p>
												</blockquote>
												<blockquote>
													<p>Также в нашем магазине в наличии корма для котов/кошек : сбалансированная формула, помогающая поддерживать здоровье кожи и шерсти у взрослых кошек , полнорационный корм для привередливых кошек с двумя типами крокет, сбалансированная формула, помогающая снизить интенсивность образования зубного камня и сохранить здоровье ротовой полости у взрослых кошек, сухой корм для стерилизованных/кастрированных кошек/котов в возрасте от 1 до 7 лет , сухой корм с курицей для взрослых кошек возрастом от 1 до 6 лет со сниженным уровнем активности и склонностью к набору лишнего веса, и множество других. </p>
												</blockquote>
												<p>Наши цены будут радовать Вас так-же как и Ваши любимые домашние питомцы.Закажи прямо сейчас и порадуй своих любимцев с доставкой в кратчайшие сроки. Мы те кто Вам нужны.</p>
											</div>
										</div>
										<div class="col-md-5 col-sm-12 col-xs-12">
											<div class="img-element">
												<img alt="banner1" src="images/product/about/about1.jpg">
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End About-Area -->
							<!-- Start Our-Team -->
							<div class="our-team">
								<div class="container">
									<div class="row">
										<div class="col-md-12">
											<div class="f-title text-center">
												<h3 class="title text-uppercase">Наша команда</h3>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3 col-sm-3">
											<div class="item-team text-center">
												<div class="team-info">
													<div class="team-img">
														<img alt="Team" class="img-responsive" src="images/product/about/team1.jpg">
														<div class="mask">
															<div class="mask-inner">
																<a href="https://web.telegram.org/k/#@Sancherez"><i class="fa fa-telegram"></i></a>
																<a href="https://www.instagram.com/j__jesus__j/"><i class="fa fa-instagram"></i></a>
															</div>
														</div>
													</div>
												</div>
												<h4>Alexandr Myrnyi</h4>
												<h5>PHP Developer</h5>
											</div>
										</div>
										<div class="col-md-3 col-sm-3">
											<div class="item-team text-center">
												<div class="team-info">
													<div class="team-img">
														<img alt="Team" class="img-responsive" src="images/product/about/team2.jpg">
														<div class="mask">
															<div class="mask-inner">
																<a href="https://web.telegram.org/k/#@juliamirna"><i class="fa fa-telegram"></i></a>
																<a href="https://www.instagram.com/_juliamirna7_/"><i class="fa fa-instagram"></i></a>
															</div>
														</div>
													</div>
												</div>
												<h4>Julia Zhuravleva</h4>
												<h5>Designer</h5>
											</div>
										</div>
										<div class="col-md-3 col-sm-3">
											<div class="item-team text-center">
												<div class="team-info">
													<div class="team-img">
														<img alt="Team" class="img-responsive" src="images/product/about/team3.jpg">
														<div class="mask">
															<div class="mask-inner">
																<a href="https://web.telegram.org/k/#@kholodovskiy"><i class="fa fa-telegram"></i></a>
																<a href="https://www.instagram.com/kholodovskiy/"><i class="fa fa-instagram"></i></a>
															</div>
														</div>
													</div>
												</div>
												<h4>Stanislav Holodov</h4>
												<h5>Programmer</h5>
											</div>
										</div>
										<div class="col-md-3 col-sm-3">
											<div class="item-team text-center">
												<div class="team-info">
													<div class="team-img">
														<img alt="Team" class="img-responsive" src="images/product/about/team4.jpg">
														<div class="mask">
															<div class="mask-inner">
																<a href="https://web.telegram.org/k/#@petrushechka999"><i class="fa fa-telegram"></i></a>
																<a href="https://www.instagram.com/petrushechka_kh/"><i class="fa fa-instagram"></i></a>
															</div>
														</div>
													</div>
												</div>
												<h4>Ekaterina Naidenko</h4>
												<h5>Administrator</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Our-Team -->
						</section>
						<!-- END BRAND-LOGO-AREA -->
						<!-- START SUBSCRIBE-AREA -->
						<div class="subscribe-area">
							<div class="container">
								<div class="row">
									<div class="col-md-8 col-sm-7 col-xs-12">
										<label class="hidden-sm hidden-xs">Sign Up for Our Newsletter:</label>
										<div class="subscribe">
											<form action="#">
												<input type="text" placeholder="Enter Your E-mail">
												<button type="submit">Subscribe</button>
											</form>
										</div>
									</div>
									<div class="col-md-4 col-sm-5 col-xs-12">
										<div class="social-media">
											<a href="#"><i class="fa fa-facebook fb"></i></a>
											<a href="#"><i class="fa fa-google-plus gp"></i></a>
											<a href="#"><i class="fa fa-twitter tt"></i></a>
											<a href="#"><i class="fa fa-youtube yt"></i></a>
											<a href="#"><i class="fa fa-linkedin li"></i></a>
											<a href="#"><i class="fa fa-rss rs"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END SUBSCRIBE-AREA -->
					</section>
					<!-- END HOME-PAGE-CONTENT -->
					<!-- FOOTER-AREA START -->
					<footer class="footer-area">

					</footer>
					<!-- FOOTER-AREA END -->
					<!-- QUICKVIEW PRODUCT -->

					<!-- Modal -->
					<div class="modal fade cart-modal" id="cart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Корзина</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>

								<div class="modal-cart-content">
									<div class="modal-body">
										<?php if (!empty($_SESSION['cart'])): ?>
											<table class="table">
												<thead>
													<tr>
														<th scope="col">Image</th>
														<th scope="col">Title</th>
														<th scope="col">Price</th>
														<th scope="col">Qty</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($_SESSION['cart'] as $id => $item): ?>
														<tr>
															<td><a href="#"><?= $item['name'] ?></a></td>
															<td><?php $item['price'] ?></td>
															<td><?php $item['qty'] ?></td>
															<td><?php $item['description'] ?></td>
														</tr>
													<?php endforeach; ?>

													<tr>
														<td colspan="4" align="right">Товаров: <span id="modal-cart-qty"><?= $_SESSION['cart.qty'] ?></span>
															<br> Сумма: <?= $_SESSION['cart.sum'] ?> грн.
														</td>
													</tr>
												</tbody>
											</table>
											<?php else: ?>
												<p>Корзина пуста...</p>
											<?php endif; ?>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<?php if (!empty($_SESSION['cart'])): ?>
												<button type="button" class="btn btn-primary">Оформить заказ</button>
												<button type="button" class="btn btn-danger" id="clear-cart">Очистить корзину</button>
											<?php endif; ?>
										</div>
									</div>

								</div>
							</div>
						</div>
						<!-- END Modal -->
					</div>
					<!-- END QUICKVIEW PRODUCT -->


		<!-- jquery
			============================================ -->
			<script src="/js/angular.min.js"></script>
			<script src="/js/product.js"></script>
			<script src="/js/jquery.min.js"></script>
		<!-- bootstrap JS
			============================================ -->
			<script src="/js/bootstrap.min.js"></script>
		<!-- wow JS
			============================================ -->
			<script src="/js/wow.min.js"></script>
		<!-- meanmenu JS
			============================================ -->
			<script src="/js/jquery.meanmenu.js"></script>
		<!-- owl.carousel JS
			============================================ -->
			<script src="/js/owl.carousel.min.js"></script>
		<!-- scrollUp JS
			============================================ -->
			<script src="/js/jquery.scrollUp.min.js"></script>
        <!-- countdon.min JS
        	============================================ -->
        	<script src="/js/countdon.min.js"></script>
		<!-- main JS
			============================================ -->
			<script src="/js/main.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		</body>
		</html>
