<?php 

 if(isset($_Get['action'])){
		if(!empty($_SESSION['cart'])){
		foreach($_POST['quantity'] as $key => $val){
			if($val==0){
				unset($_SESSION['cart'][$key]);
			}else{
				$_SESSION['cart'][$key]['quantity']=$val;
			}
		}
		}
	}
?>
	<div class="main-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
					<!-- ================================================ LOGO ================================================= -->
					<div class="logo">
						<a href="index.php">
							<div class="">
								<h4>
									<img height="50" width="50" data-echo="assets/logo.jpg" src="assets/images/blank.gif" alt="">&nbsp; Альма
								</h4>
							</div> <!-- /.control-group -->
						</a>
					</div> <!-- /.logo -->
				</div> <!-- /.col-xs-12 col-sm-12 col-md-3 logo-holder -->

				<div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">
					<!-- ==================================== SEARCH AREA  START ======================================= -->		
						<div class="search-area">
						    <form name="search" method="post" action="search-result.php">
						        <div class="control-group">
						            <input class="search-field" placeholder="Введите поисковый запрос" name="product" required="required" />
						            <button hidden="hidden" type="submit" name="search"></button> 
						        </div>
						    </form>
						</div><!-- /.search-area -->
					<!-- ==================================== SEARCH AREA : END ======================================= -->				
				</div><!-- /.col-xs-12 col-sm-12 col-md-6 top-search-holderr -->

				<div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row">
					<!-- ========================================= SHOPPING CART DROPDOWN ===================================== -->
						<?php
						if(!empty($_SESSION['cart'])){
							?>
					<div class="dropdown dropdown-cart">
						<a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
							<div class="items-cart-inner">
								<div class="total-price-basket">

									<span class="lbl">Корзина -</span>

									<span class="total-price">
										<span class="sign">₽</span>
										<span class="value"><?php echo $_SESSION['tp']; ?></span>
									</span>
								</div> <!-- /.total-price-basket -->

								<div class="basket">
									<i class="glyphicon glyphicon-shopping-cart"></i>
								</div> <!-- /.basket -->

								<div class="basket-item-count">
									<span class="count"><?php echo $_SESSION['qnty'];?></span>
								</div> /<!-- .basket-item-count -->
						    </div> <!-- /.items-cart-inner -->
						</a>

						<ul class="dropdown-menu">
							<?php
					    		$sql = "SELECT * FROM products WHERE id IN(";
								foreach($_SESSION['cart'] as $id => $value){
								$sql .=$id. ",";
								}
								$sql=substr($sql,0,-1) . ") ORDER BY id ASC";
								$query = mysqli_query($con,$sql);
								$totalprice=0;
								$totalqunty=0;
								if(!empty($query)){
								while($row = mysqli_fetch_array($query)){
									$quantity=$_SESSION['cart'][$row['id']]['quantity'];
									$subtotal= $_SESSION['cart'][$row['id']]['quantity']*$row['productPrice']+$row['shippingCharge'];
									$totalprice += $subtotal;
									$_SESSION['qnty']=$totalqunty+=$quantity;
							?>
							<li>
								<div class="cart-item product-summary">
									<div class="row">
										<div class="col-xs-4">
											<div class="image">
												<a href="detail.html">
													<img  src="admin/productimages/<?php echo $row['id'];?>/<?php echo $row['productImage1'];?>" width="35" height="50" alt="">
												</a>
											</div> <!-- /.image -->
										</div> <!-- /.col-xs-4 -->

										<div class="col-xs-7">
											<h3 class="name">
												<a href="index.php?page-detail"><?php echo $row['productName']; ?></a>
											</h3>
											<div class="price">₽ <?php echo ($row['productPrice']+$row['shippingCharge']); ?>*<?php echo $_SESSION['cart'][$row['id']]['quantity']; ?>
											</div> <!-- /.price -->
										</div> <!-- /.col-xs-7 -->
									</div> <!-- /.row -->
								</div><!-- /.cart-item product-summary -->

								<?php } }?>

								<div class="clearfix"></div>

								<hr>
							
								<div class="clearfix cart-total">
									<div class="pull-right">
										<span class="text">Итого :</span>
										<span class='price'>₽<?php echo $_SESSION['tp']="$totalprice". ".00"; ?></span>	
									</div> <!-- /.pull-right -->
								
									<div class="clearfix"></div>
									<a href="my-cart.php" class="btn btn-upper btn-primary btn-block m-t-20">Моя корзина</a>	
								</div><!-- /.clearfix cart-total-->
							</li>
						</ul><!-- /.dropdown-menu-->
					</div><!-- /.dropdown dropdown-cart -->

					<?php } else { ?>

					<div class="dropdown dropdown-cart">
						<a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
							<div class="items-cart-inner">
								<div class="total-price-basket">
									<span class="lbl">корзина -</span>
									<span class="total-price">
											<span class="sign">₽</span>
											<span class="value">00.00</span>
									</span>
								</div> <!-- /.total-price-basket -->

								<div class="basket">
									<i class="glyphicon glyphicon-shopping-cart"></i>
								</div> <!-- /.basket -->

								<div class="basket-item-count">
									<span class="count">0</span>
								</div>
							</div> <!-- /.tems-cart-inner -->
						</a>
							<ul class="dropdown-menu">
								<li>
									<div class="cart-item product-summary">
										<div class="row">
											<div class="col-xs-12">
												Ваша корзина пуста :(
											</div> <!-- /.col-xs-12 -->
										</div> <!-- /.row -->
									</div> <!-- /.cart-item product-summary -->

									<hr>
							
									<div class="clearfix cart-total">
										<div class="clearfix"></div>
										<a href="index.php" class="btn btn-upper btn-primary btn-block m-t-20">Продолжить покупки</a>	
									</div><!-- /.clearfix cart-total-->
								</li>
							</ul><!-- /.dropdown-menu-->
					</div> <!-- /.dropdown dropdown-cart -->

					<?php }?>
					<!-- ===================================== SHOPPING CART DROPDOWN : END================================= -->		
				</div> <!-- /.col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row-->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div> <!-- /.main-headert -->