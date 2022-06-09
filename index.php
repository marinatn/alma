<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
			header('location:index.php');
		}else{
			$message="Недопустимый идентификатор продукта";
		}
	}
}


?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<!-- Meta start-->
			<meta charset="utf-8">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
			<meta name="description" content="">
			<meta name="author" content="">
		    <meta name="keywords" content="MediaCenter, Template, eCommerce">
		    <meta name="robots" content="all">
	    <!-- Meta end-->

	    <title>Интернет-магазин натуральной косметики</title>


		<!-- CSS CODE IMPORT START-->  
		    <!-- Bootstrap Core CSS -->
		    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		    
		    <!-- Customizable CSS -->
		    <link rel="stylesheet" href="assets/css/main.css">
		    <link rel="stylesheet" href="assets/css/green.css">
		    <link rel="stylesheet" href="assets/css/owl.carousel.css">
			<link rel="stylesheet" href="assets/css/owl.transitions.css">
			<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
			<link href="assets/css/lightbox.css" rel="stylesheet">
			<link rel="stylesheet" href="assets/css/animate.min.css">
			<link rel="stylesheet" href="assets/css/rateit.css">
			<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

			<!-- Demo Purpose Only. Should be removed in production -->
			<link rel="stylesheet" href="assets/css/config.css">
			<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
			<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
			<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
			<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
			<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
			<link rel="stylesheet" href="assets/css/font-awesome.min.css">
			<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<!-- CSS CODE IMPORT END-->  

		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.jpg">
	</head>

    <body class="cnt-home">
    	<!-- ============================================== HEADER START ============================================== -->
    		<header class="header-style-1">
    			<?php include('includes/main-header.php');?>
    			<?php include('includes/top-header.php');?>

				<!-- ========================================== SLIDER START ========================================= -->
				<div id="hero" class="homepage-slider3">
					<div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
						<!-- image 1 -->
						<div class="full-width-slider">	
							<div class="item" style="background-image: url(assets/images/sliders/slider1.jpg);"> 
								<!-- /.container-fluid -->
							</div><!-- /.item -->
						</div><!-- /.full-width-slider -->

						<!-- image 2 -->
						<div class="full-width-slider">
							<div class="item full-width-slider" style="background-image: url(assets/images/sliders/slider2.jpg);">
								<!-- /.container-fluid -->
							</div><!-- /.item -->
						</div><!-- /.full-width-slider -->

						<!-- image 3 -->
						<div class="full-width-slider">	
							<div class="item" style="background-image: url(assets/images/sliders/slider3.jpg);">
								<!-- /.container-fluid -->
							</div><!-- /.item -->
						</div><!-- /.full-width-slider -->
					</div><!-- /.owl-carousel -->
				</div>
				<!-- ========================================== SLIDER END ========================================= -->
				<?php include('includes/menu-bar.php');?>
			</header>
		<!-- ============================================== HEADER END ============================================== -->
		<div class="body-content outer-top-xs" id="top-banner-and-menu">
			<div class="container">
				<div class="furniture-container homepage-container">
					<div class="row">

						<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
							<!-- ================================== TOP NAVIGATION START================================== -->
								<?php include('includes/side-menu.php');?>
							<!-- ================================== TOP NAVIGATION : END ================================== -->
						</div><!-- /.col-xs-12 col-sm-12 col-md-3 sidebar -->	
			
						<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
							<!-- ============================================== INFO BOXES =========================================== -->
								<div class="info-boxes wow fadeInUp">
									<div class="info-boxes-inner">
										<div class="row">

											<div class="col-md-6 col-sm-4 col-lg-4">
												<div class="info-box">
													<div class="row">
														<div class="col-xs-2">
						     								<i class="icon fa fa-dollar"></i>
														</div> <!-- /.col-xs-12 col-sm-12 col-md-3 sidebar -->

														<div class="col-xs-10">
															<h4 class="info-box-heading green">Возврат денег</h4>
														</div> <!-- /.col-xs-10 -->
													</div><!-- /.row -->

													<h6 class="text">Не устраивает качество товара? 
														<br> Вернем деньги
													</h6>
												</div> <!-- /.info-box -->
											</div><!-- .col-md-6 col-sm-4 col-lg-4 -->

											<div class="hidden-md col-sm-4 col-lg-4">
												<div class="info-box">
													<div class="row">
														<div class="col-xs-2">
															<i class="icon fa fa-truck"></i>
														</div> <!-- /.col-xs-2 -->
						
														<div class="col-xs-10">
															<h4 class="info-box-heading orange">Бесплатная доставка</h4>
														</div> <!-- /.col-xs-10 -->
													</div> <!-- /.row -->

													<h6 class="text">Бесплатная доставка от 3000₽</h6>	
												</div> <!-- /.info-box -->
											</div><!-- /.hidden-md col-sm-4 col-lg-4 -->

											<div class="col-md-6 col-sm-4 col-lg-4">
												<div class="info-box">
													<div class="row">
														<div class="col-xs-2">
															<i class="icon fa fa-gift"></i>
														</div> <!-- /.col-xs-2 -->

														<div class="col-xs-10">
															<h4 class="info-box-heading red">Скидки</h4>
														</div> <!-- /.col-xs-10 -->
													</div> <!-- /.row -->
													<h6 class="text">Выгодные <br> промокоды <br> еженедельно <br> </h6>	
												</div> <!-- /.info-box -->
											</div><!-- /.col-md-6 col-sm-4 col-lg-4 -->
										</div><!-- /.row -->
									</div><!-- /.info-boxes-inner -->
								</div><!-- /.info-boxes -->
							<!-- ==================================== INFO BOXES : END ======================================= -->		
						</div><!-- /.homebanner-holder -->
					</div><!-- /.row -->

					<!-- ============================================== SCROLL TABS ============================================== -->
					<div id="product-tabs-slider" class="scroll-tabs inner-bottom-vs  wow fadeInUp">
						<div class="more-info-tab clearfix">
						   <h3 class="new-product-title pull-left">Каталог продукции Альма</h3>
							<ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
								<li class="active">
									<a href="#all" data-toggle="tab">Все товары</a>
								</li>
							</ul><!-- /.nav-tabs -->
						</div>

						<div class="tab-content outer-top-xs">
							<div class="tab-pane in active" id="all">			
								<div class="product-slider">
									<div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
										<!-- PHP code start -->
											<?php
											$ret=mysqli_query($con,"select * from products");
											while ($row=mysqli_fetch_array($ret)) 
											{
												# code...
											?>
										<!-- PHP code end -->

										<div class="item item-carousel">
											<div class="products">
												<div class="product">		
													<div class="product-image">
														<div class="image">
															<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
																<img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="180" height="300" alt="">
															</a>
														</div><!-- /.image -->
													</div><!-- /.product-image -->

													<div class="product-info text-left">
														<h3 class="name">
															<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?>
															</a>
														</h3>

														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">	
															<span class="price">
																₽<?php echo htmlentities($row['productPrice']);?>			
															</span>
															
															<span class="price-before-discount">₽<?php echo htmlentities($row['productPriceBeforeDiscount']);?>	
															</span>
														</div><!-- /.product-price -->
													</div><!-- /.product-info text-left -->

													<div class="action">
														<a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Добавить в корзину
														</a>
													</div> <!-- /.action -->
												</div><!-- /.product -->
											</div><!-- /.products -->
										</div><!-- /.item item-carousel-->

										<?php } ?>

									</div><!-- /.owl-carousel home-owl-carousel custom-carousel owl-theme -->
								</div><!-- /.product-slider -->
							</div> <!-- /.tab-pane in active -->

							<div class="tab-pane" id="books">
								<div class="product-slider">
									<div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
										<!-- PHP code start -->
											<?php
												$ret=mysqli_query($con,"select * from products where category=3");
												while ($row=mysqli_fetch_array($ret)) 
												{
													# code...
											?>
										<!-- PHP code end -->

										<div class="item item-carousel">
											<div class="products">
												<div class="product">		
													<div class="product-image">
														<div class="image">
															<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
																<img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="180" height="300" alt="">
															</a>
														</div><!-- /.image -->	
													</div><!-- /.product-image -->

													<div class="product-info text-left">
														<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">	
															<span class="price">
																₽ <?php echo htmlentities($row['productPrice']);?>			
															</span>
															
															<span class="price-before-discount">₽<?php echo htmlentities($row['productPriceBeforeDiscount']);?>
															</span>					
														</div><!-- /.product-price -->
													</div><!-- /.product-info text-left -->

													<div class="action">
														<a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Добавить в корзину
														</a>
													</div> <!-- /.action -->
												</div><!-- /.product -->
											</div><!-- /.products -->
										</div><!-- /.item -->

										<?php } ?>
									</div><!-- /.owl-carousel home-owl-carousel custom-carousel owl-theme-->
								</div><!-- /.product-slider -->
							</div> <!-- /.tab-pane-->

							<div class="tab-pane" id="furniture">
								<div class="product-slider">
									<div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
										<!-- PHP code start -->
											<?php
												$ret=mysqli_query($con,"select * from products where category=5");
												while ($row=mysqli_fetch_array($ret)) 
												{
											?>
										<!-- PHP code end -->

										<div class="item item-carousel">
											<div class="products">
												<div class="product">		
													<div class="product-image">
														<div class="image">
															<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
																<img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="180" height="300" alt="">
															</a>
														</div> <!-- /.image -->
													</div> <!-- /.product-image -->

													<div class="product-info text-left">
														<h3 class="name">
															<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?>
															</a>
														</h3>

														<div class="rating rateit-small"></div>
														<div class="description"></div>

														<div class="product-price">	
															<span class="price">
																₽<?php echo htmlentities($row['productPrice']);?>			
															</span>

															<span class="price-before-discount">₽<?php echo htmlentities($row['productPriceBeforeDiscount']);?>
															</span>					
														</div> <!-- /.product-price -->
													</div> <!-- /.product-info text-left -->
								
													<div class="action">
														<a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Добавить в корзину
														</a>
													</div> <!-- /.action -->
												</div> <!-- /.product -->
											</div> <!-- /.products -->
										</div> <!-- /.item item-carousel -->

										<?php } ?>

									</div> <!-- /.owl-carousel home-owl-carousel custom-carousel owl-theme -->
								</div> <!-- /.product-slider -->
							</div> <!-- /.tab-pane -->
						</div> <!-- /.tab-content outer-top-xs -->
					</div> <!-- /.product-tabs-slider -->
					    

			        <!-- ============================================== TABS ============================================== -->
						<div class="sections prod-slider-small outer-top-small">
							<div class="row">
								<div class="col-md-6">
				                   <section class="section">
				                   		<h3 class="section-title">Новинки</h3>
				                   		<div class="owl-carousel homepage-owl-carousel custom-carousel outer-top-xs owl-theme" data-item="2">
					                   		<!-- PHP code start -->
						   						<?php
													$ret=mysqli_query($con,"select * from products where category=7 and subCategory=13");
													while ($row=mysqli_fetch_array($ret)) 
													{
												?>
											<!-- PHP code end -->
											<div class="item item-carousel">
												<div class="products">
													<div class="product">		
														<div class="product-image">
															<div class="image">
																<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
																	<img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="180" height="300">
																</a>
															</div><!-- /.image -->			                        		   
														</div><!-- /.product-image -->

														<div class="product-info text-left">
															<h3 class="name">
																<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?>
																</a>
															</h3>

															<div class="rating rateit-small"></div>
															<div class="description"></div>

															<div class="product-price">	
																<span class="price">
																	₽ <?php echo htmlentities($row['productPrice']);?>			
																</span>

																<span class="price-before-discount">₽<?php echo htmlentities($row['productPriceBeforeDiscount']);?>
																</span>
															</div> <!-- /.product-price -->
														</div> <!-- /.product-info text-left -->

														<div class="action">
															<a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Добавить в корзину</a>
														</div> <!-- /.action -->
													</div> <!-- /.product -->
												</div> <!-- /.products -->
											</div> <!-- /.item item-carousel -->

											<?php }?>
										</div> <!-- /.owl-carousel homepage-owl-carousel custom-carousel outer-top-xs owl-theme -->
				                   </section>
								</div> <!-- /.col-md-6 -->

								<div class="col-md-6">
									<section class="section">
										<h3 class="section-title">Для лица</h3>
					                   	<div class="owl-carousel homepage-owl-carousel custom-carousel outer-top-xs owl-theme" data-item="2">
					                   		<!-- PHP code start -->
													<?php
												$ret=mysqli_query($con,"select * from products where category=7 and subCategory=14");
												while ($row=mysqli_fetch_array($ret)) 
												{
												?>
											<!-- PHP code end -->

											<div class="item item-carousel">
												<div class="products">
													<div class="product">		
														<div class="product-image">
															<div class="image">
																<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
																	<img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="300" height="300">
																</a>
															</div><!-- /.image -->			                        		   
														</div><!-- /.product-image -->

														<div class="product-info text-left">
															<h3 class="name">
																<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?>
																</a>
															</h3>

															<div class="rating rateit-small"></div>
															<div class="description"></div>

															<div class="product-price">	
																<span class="price"> ₽ <?php echo htmlentities($row['productPrice']);?>			
																</span>

																<span class="price-before-discount">₽<?php echo htmlentities($row['productPriceBeforeDiscount']);?>
																</span>
															</div> <!-- /.product-price -->
														</div> <!-- /.product-info text-left -->
														
														<div class="action">
															<a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Добавить в корзину
															</a>
														</div> <!-- /.action -->
													</div> <!-- /.product -->
												</div> <!-- /.products -->
											</div> <!-- /.item item-carousel -->
											<?php }?>
										</div> <!-- /.owl-carousel homepage-owl-carousel custom-carousel outer-top-xs owl-theme -->
				                   </section>
				               </div> <!-- /.col-md-6 -->
							</div> <!-- /.row -->
						</div> <!-- /.sections prod-slider-small outer-top-small -->
					<!-- ============================================== TABS : END ============================================== -->

					

					<section class="section featured-product inner-xs wow fadeInUp">
						<h3 class="section-title">Скрабы</h3>
						<div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
						<!-- PHP code start -->
							<?php
								$ret=mysqli_query($con,"select * from products category=7 and subCategory=16");
								while ($row=mysqli_fetch_array($ret)) 
								{
									# code...
							?>
						<!-- PHP code end -->
							<div class="item">
								<div class="products">
									<div class="product">
										<div class="product-micro">
											<div class="row product-micro-row">
												<div class="col col-xs-6">
													<div class="product-image">
														<div class="image">
															<a href="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-lightbox="image-1" data-title="<?php echo htmlentities($row['productName']);?>">
																<img data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" width="170" height="174" alt="">
																<div class="zoom-overlay"></div>
															</a>					
														</div><!-- /.image -->
													</div><!-- /.product-image -->
												</div><!-- /.col col-xs-6-->

												<div class="col col-xs-6">
													<div class="product-info">
														<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
														<div class="rating rateit-small"></div>
														<div class="product-price">	
															<span class="price">
																Rp. <?php echo htmlentities($row['productPrice']);?>
															</span>

														</div><!-- /.product-price -->
														<div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Добавить в корзину</a></div>
													</div> <!-- /.product-info -->
												</div><!-- /.col col-xs-6 -->
											</div><!-- /.product-micro-row -->
										</div><!-- /.product-micro -->
									</div>
								</div> <!-- /.products -->
							</div> <!-- /.item -->

						<?php } ?>
						</div> <!-- /.owl-carousel best-seller custom-carousel owl-theme outer-top-xs -->
					</section>

					<?php include('includes/brands-slider.php');?>
					<?php include('includes/brands-slider-duble.php');?>
				</div> <!-- /.furniture-container homepage-container -->
			</div> <!-- /.container -->

			<?php include('includes/footer.php');?>
			
			<script src="assets/js/jquery-1.11.1.min.js"></script>
			
			<script src="assets/js/bootstrap.min.js"></script>
			
			<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
			<script src="assets/js/owl.carousel.min.js"></script>
			
			<script src="assets/js/echo.min.js"></script>
			<script src="assets/js/jquery.easing-1.3.min.js"></script>
			<script src="assets/js/bootstrap-slider.min.js"></script>
		    <script src="assets/js/jquery.rateit.min.js"></script>
		    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
		    <script src="assets/js/bootstrap-select.min.js"></script>
		    <script src="assets/js/wow.min.js"></script>
			<script src="assets/js/scripts.js"></script>

			<!-- For demo purposes – can be removed on production -->
				<script src="switchstylesheet/switchstylesheet.js"></script>
				
				<script>
					$(document).ready(function(){ 
						$(".changecolor").switchstylesheet( { seperator:"color"} );
						$('.show-theme-options').click(function(){
							$(this).parent().toggleClass('open');
							return false;
						});
					});

					$(window).bind("load", function() {
					   $('.show-theme-options').delay(2000).trigger('click');
					});
				</script>
			<!-- For demo purposes – can be removed on production : End -->
	</body>
</html>