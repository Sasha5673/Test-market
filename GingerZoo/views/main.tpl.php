<!doctype html>
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
		<!-- nivo slider CSS
			============================================ -->
			<link rel="stylesheet" href="/css/slider.css" type="text/css">
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
																		<strong class="text-right"><?= $item['qty'] ?> шт. &nbsp;</strong>
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
				<div class="category-slider-area">
					<div class="container">
						<div class="row">
							<div class="col-md-3">
								<!-- CATEGORY-MENU-LIST START -->
								<div class="left-category-menu hidden-sm hidden-xs">
									<div class="left-product-cat">
										<div class="category-heading">
											<h2>categories</h2>
										</div>
										<div class="category-menu-list">
											<ul>
												<!-- Single menu start -->
												<li class="arrow-plus">
													<a href="/">Все бренды</a>
													<a href="?brand=Hill's">Hill's</a>
													<a href="?brand=Royal Canin">Royal Canin</a>
													<a href="?brand=1st Choice">1st Choice</a>
												</li>
												<li class="arrow-plus">
													<a href="/">Весь вес кормов</a>
													<a href="?weight=0.5">0.5 кг.</a>
													<a href="?weight=2">2 кг.</a>
													<a href="?weight=4">4 кг.</a>
													<a href="?weight=8">8 кг.</a>
													<a href="?weight=10">10 кг.</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- END CATEGORY-MENU-LIST -->
							</div>
							<div class="col-md-9">
								<!-- slider -->
								<div class="slider">
									<div class="slider-images">
										<img src="/images/product/sliders/slider-1/background1.png" alt="Image 1">
										<img src="/images/product/sliders/slider-1/background2.png" alt="Image 2">
										<img src="/images/product/sliders/slider-1/background3.png" alt="Image 3">
									</div>
									<div class="slider-controls">
										<button class="prev-slide"><</button>
										<button class="next-slide">></button>
									</div>
								</div>
								<!-- slider end-->
							</div>
						</div>
					</div>
				</div>
				<!-- Category slider area End -->
				<!-- START PAGE-CONTENT -->
				<div class="container" data-ng-controller="indexController">
					<div class="row">
						<div class="col-md-3 col-sm-3">
						</div>
						<div class="col-md-9 col-sm-9">
							<!-- START PRODUCT-BANNER -->
							<!-- END PRODUCT-BANNER -->
							<!-- START PRODUCT-AREA (1) -->
							<div class="product-area">
								<div class="row">
									<div class="col-xs-12 col-md-12">
										<!-- Start Product-Menu -->
										<div class="product-menu">
											<div class="product-title">
												<h3 class="title-group-2 gfont-1">Корм для животных</h3>
											</div>

											<ul role="tablist">
												<li role="presentation" class=" active"><a href="/?animal=Собаки">Собаки</a></li>
												<li role="presentation" class=" active"><a href="/?animal=Кошки">Кошки</a></li>
											</ul>
										</div>
									</div>
								</div>
								<!-- End Product-Menu -->
								<div class="clear"></div>
								<!-- Start Product -->
								<div class="row">
									<div class="col-xs-12 col-md-12">
										<div class="product carosel-navigation">
											<div class="tab-content">
												<!-- Product = display-1-1 -->
												<div role="tabpanel" class="tab-pane fade in active" id="display-1-1">
													<div class="row">
														<div class="active-product-carosel">
															<!-- Start Single-Product -->
															<?php foreach ($pageData['products'] as $key => $item) {
																?>

																<div class="col-xs-12">
																	<div class="single-product">
																		<div class="label_new">
																			<span class="new">new</span>
																		</div>
																		<div class="product-img" style="text-align: center; padding-top: 10px;">
																			<img src="<?php echo $item['img'] ?>" width='150px' align='center' data-ng-click='openProductesDetails(<?php echo $item['id']; ?>)'>
																		</div>
																		<br/>
																		<div class="product-description" style="text-align: center;">
																			<a href="#" data-ng-click='openProductesDetails(<?php echo $item['id']; ?>)'><h4><?php echo $item['name']; ?></h4></a>
																			<h5>Бренд товара: <?php echo $item['brand']; ?></h5>
																			<h5>Категория: <?php echo $item['animal']; ?></h5>
																			<h5><?php echo $item['weight']; ?> кг</h5>
																			<div class="price-box">
																				<span class="price"><?php echo $item['price']; ?> грн</span>
																			</div>
																			<br/>
																			<br/>
																			<br/>
																			<br/>
																			<div class="product-action">
																				<div class="button-group">
																					<?php if($item['count_product'] == 0){ ?>
																						<div class="product-button">
																							<a class="add-to-cart" data-id="<?php echo $item['id']; ?>"><button disabled>
																								<i class="fa fa-shopping-bag"></i> Нет в наличии</button></a>
																							</div>
																						<?php } else { ?>
																							<div class="product-button">
																								<a class="add-to-cart" href="?cart=add&id=<?php echo $item['id']; ?>"  data-id="<?php echo $item['id']; ?>"><button>
																									<i class="fa fa-shopping-cart"></i> Add to Cart</button></a>
																								</div>
																							<?php } ?>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	<?php } ?>
																	<!-- End Single-Product -->
																</div>
															</div>
														</div>
														<br/>
														<br/>
														<!-- End Product = display-1-1 -->
													</div>
												</div>
											</div>
										</div>
										<!-- End Product -->
									</div>
								</div>
							</div>
						</div>
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
        <!-- Nivo slider js
        	============================================ -->
        	<script src="/js/slider.js"></script>
		<!-- main JS
			============================================ -->
			<script src="/js/main.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		</body>
		</html>
