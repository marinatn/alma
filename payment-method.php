<?php 
	session_start();
	error_reporting(0);
	include('includes/config.php');
	if(strlen($_SESSION['login'])==0)
	    {   
	header('location:login.php');
	}
	else{
		if (isset($_POST['submit'])) {

			mysqli_query($con,"update orders set 	paymentMethod='".$_POST['paymethod']."' where userId='".$_SESSION['id']."' and paymentMethod is null ");
			unset($_SESSION['cart']);
			header('location:order-history.php');

		}
?>

<!DOCTYPE html>
<html lang="ru">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Способ оплаты</title>

	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
		<link rel="stylesheet" href="assets/css/config.css">
		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="assets/images/favicon.jpg">
	</head>

    <body class="cnt-home">	
		<header class="header-style-1">
			<?php include('includes/top-header.php');?>
			<?php include('includes/main-header.php');?>
			<?php include('includes/menu-bar.php');?>
		</header>

		<div class="breadcrumb">
			<div class="container">
				<div class="breadcrumb-inner">
					<ul class="list-inline list-unstyled">
						<li><a href="home.html">Главная</a></li>
						<li class='active'>Способ оплаты</li>
					</ul>
				</div><!-- /.breadcrumb-inner -->
			</div><!-- /.container -->
		</div><!-- /.breadcrumb -->

		<div class="body-content outer-top-bd">
			<div class="container">
				<div class="checkout-box faq-page inner-bottom-sm">
					<div class="row">
						<div class="col-md-12">
							<h2>Выбор способа оплаты</h2>
							<div class="panel-group checkout-steps" id="accordion">
								<!-- checkout-step-01  -->
									<div class="panel panel-default checkout-step-01">
										<!-- panel-heading -->
											<div class="panel-heading">
										    	<h4 class="unicase-checkout-title">
											        <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
											         	Выберите способ оплаты
											        </a>
											    </h4>
									    	</div>  <!-- /.panel-heading -->
									    <!-- panel-heading -->

										<div id="collapseOne" class="panel-collapse collapse in">
											<!-- panel-body  -->
											    <div class="panel-body">
												    <li id="li_5">

													    <span>
												            <input id="element_5_1" name="element_5" class="element radio" type="radio" value="Банковской картой" />
												            	<label class="choice" for="element_5_1">
												            		Банковской картой
												            	</label>
												            <input id="element_5_2" name="element_5" class="element radio" type="radio" value="Расчетный счет" />
												            	<label class="choice" for="element_5_2">
												            		Расчетный счет
												            	</label>
												            <input id="element_5_3" name="element_5" class="element radio" type="radio" value="Оплата при получении">
												            	<label>
												            		Оплата при получении
												            	</label>
												        </span>
												      
									   
													    
												    </li>	

												        <li id="li_3">
													        <label class="description" for="element_3">Реквизиты банковской карты</label>
													        <div class="left">
													            <input id="element_3_3" name="element_3_3" class="element text medium" value="" type="text">
													            <label for="element_3_3">Номер карты</label>
													        </div>
													        <div class="right">
													            <input id="element_3_4" name="element_3_4" class="element text medium" value="" type="text">
													            <label for="element_3_4">Срок дейсвтия</label>
													        </div>
													        <div>
													            <input id="element_3_1" name="element_3_1" class="element text large" value="" type="text">
													            <label for="element_3_1">CSV код</label>
													        </div>
													    </li>	
													    <input type="submit" value="Оплатить" name="submit" class="btn btn-primary">
												</div> <!-- /.panel-body -->
											<!-- panel-body  -->
										</div><!-- collapseOne -->
									</div> <!-- /.panel panel-default checkout-step-01 -->
									<!-- checkout-step-01  -->
					  		</div><!-- /.panel-group checkout-steps -->
						</div> <!-- /.col-md-12 -->
					</div><!-- /.row -->
				</div><!-- /.checkout-box faq-page inner-bottom-sm-->
				<!-- ============================================== BRANDS CAROUSEL ============================================== -->
					<?php echo include('includes/brands-slider.php');?>
					<?php include('includes/brands-slider-duble.php');?>
				<!-- ============================================== BRANDS CAROUSEL : END ================================== -->	
			</div><!-- /.container -->
		</div><!-- /.body-content outer-top-bd -->

		<?php include('includes/footer.php');?>
		<script>
        document.getElementById("element_5_1").onclick = function () {
            document.getElementById("li_3").style.display = "block";
            document.getElementById("li_4").style.display = "none";
        }
 
       
    </script>
		</script>
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
	</body>
</html>
<?php } ?>
