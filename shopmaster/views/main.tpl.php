<!doctype html>
<html class="no-js" lang="">
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
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Font awesome CSS
		============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
		<!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
		<!-- meanmenu CSS
		============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- jquery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="css/jquery-ui.css">
		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="css/main.css">
		<!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="css/style2.css">
		<!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
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
								<p class="welcome-msg">Default welcome msg!</p>
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
											<h1 class="zero gfont-1">working time</h1>
											<p>Mon- Sun: 8.00 - 18.00</p>
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
										<h1 class="zero gfont-1">Free shipping</h1>
										<p>On order over $199</p>
									</div>
								</div>
							</div>
							<!-- End Single-Support -->
							<!-- Start Single-Support -->
							<div class="col-md-3 col-sm-4">
								<div class="single-support">
									<i class="fa fa-money"></i>
									<div class="support-text">
										<h1 class="zero gfont-1">Money back 100%</h1>
										<p>Within 30 Days after delivery</p>
									</div>
								</div>
							</div>
							<!-- End Single-Support -->
							<!-- Start Single-Support -->
							<div class="col-md-3 col-sm-4">
								<div class="single-support">
									<i class="fa fa-phone-square"></i>
									<div class="support-text">
										<h1 class="zero gfont-1">Phone: 0123456789</h1>
										<p>Order Online Now !</p>
									</div>
								</div>
							</div>
							<!-- End Single-Support -->
						</div>
					</div>
					<!-- End Support-Client -->
					<!-- Start logo & Search Box -->
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<div class="logo">
								<a href="/" title="Malias"><img src="images/logo.png" alt="Malias"></a>
							</div>
						</div>
						<div class="col-md-9 col-sm-12">
		                    <div class="quick-access">
		                    	<div class="search-by-category" style="margin-left: 60px;">
		                    		<div class="search-container">
		                    		</div>
		                    		<div class="header-search">
		                    			<form action="#">
			                    			<input type="text" placeholder="Search">
			                    			<button type="submit"><i class="fa fa-search"></i></button>
		                    			</form>
		                    		</div>
		                    	</div>
		                    	<div class="top-cart" style="margin-left: 120px;">
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
												<div class="cart-img-details">
													<?php if (!empty($_SESSION['cart'])): ?>
													<?php foreach ($_SESSION['cart'] as $id => $item): ?>
													<div class="cart-img-content">
														<a href="#"><h4><?= $item['name'] ?></h4></a>
														<span>
															<strong class="text-right"><?= $item['qty'] ?>x</strong>
															<strong class="cart-price text-right"><?= $item['price'] ?></strong>
														</span>
													</div>
													<?php endforeach; ?>
													    <?php else: ?>
       													 <p>Корзина пуста...</p>
   													 <?php endif; ?>
												</div>
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
							<div class="mainmenu hidden-sm hidden-xs">
								<nav>
									<ul>
										<li><a href="index.html">Home</a>	</li>
										<li><a href="about.html">About Us</a></li>
										<li><a href="contact.html">Contact Us</a></li>
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
						<div class="col-xs-12">
							<nav id="mobile-menu">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="contact.html">Contact Us</a></li>
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
	                                        <a href="#">Cameras & Photography</a>
	                                        <!--  MEGA MENU START -->

	                                        <!-- MEGA MENU END -->
	                                    </li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- END CATEGORY-MENU-LIST -->
	                </div>
	                <div class="col-md-9">
	                </div>
	            </div>
			</div>
		</div>
		<!-- Category slider area End -->
		<!-- START PAGE-CONTENT -->
			<div class="container">
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
											<h3 class="title-group-2 gfont-1">Electronic</h3>
										</div>

										<ul role="tablist">
										    <li role="presentation" class=" active"><a href="#display-1-1" role="tab" data-toggle="tab">Speaker</a></li>
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
																<div class="product-img">
																		<img class="primary-img" src="images/product/mediam/12bg.jpg" alt="Product">
																</div>
																<div class="product-description">
																	<h5><?php echo $item['name']; ?></h5>
																	<p><?php echo $item['description']; ?></p>
																	<div class="price-box">
																		<span class="price"><?php echo $item['price']; ?> грн</span>
																	</div>

																	<div class="product-action">
																		<div class="button-group">
																			<?php if($item['count_product'] == 0){ ?>
																				<div class="product-button">
																				<a class="add-to-cart" data-id="<?php echo $item['id']; ?>"><button disabled>
																					<i class="fa fa-shopping-cart"></i> Нет в наличии</button></a>
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
        <script src="js/jquery.min.js"></script>
		<!-- bootstrap JS
		============================================ -->
        <script src="js/bootstrap.min.js"></script>
		<!-- wow JS
		============================================ -->
        <script src="js/wow.min.js"></script>
		<!-- meanmenu JS
		============================================ -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- owl.carousel JS
		============================================ -->
        <script src="js/owl.carousel.min.js"></script>
		<!-- scrollUp JS
		============================================ -->
        <script src="js/jquery.scrollUp.min.js"></script>
        <!-- countdon.min JS
		============================================ -->
        <script src="js/countdon.min.js"></script>
        <!-- Nivo slider js
		============================================ -->
		<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
		<!-- main JS
		============================================ -->
        <script src="js/main.js"></script>
        		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </body>
</html>
