<?php
	session_start();
	error_reporting(0);
	include('includes/config.php');
	if(strlen($_SESSION['login'])==0)
	    {   
	header('location:index.php');
	}
	else{
		if(isset($_POST['update']))
		{
			$name=$_POST['name'];
			$contactno=$_POST['contactno'];
			$query=mysqli_query($con,"update users set name='$name',contactno='$contactno' where id='".$_SESSION['id']."'");
			if($query)
			{
	echo "<script>alert('Личная информация обновлена');</script>";
			}
		}


	date_default_timezone_set('Europe/Moscow');// change according timezone
	$currentTime = date( 'd-m-Y h:i:s A', time () );


	if(isset($_POST['submit']))
	{
	$sql=mysqli_query($con,"SELECT password FROM  users where password='".md5($_POST['cpass'])."' && id='".$_SESSION['id']."'");
	$num=mysqli_fetch_array($sql);
	if($num>0)
	{
	 $con=mysqli_query($con,"update students set password='".md5($_POST['newpass'])."', updationDate='$currentTime' where id='".$_SESSION['id']."'");
	echo "<script>alert('Пароль успешно изменен !!');</script>";
	}
	else
	{
		echo "<script>alert('Текущий пароль не соответствует !!');</script>";
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

	    <title>Личный кабинет</title>

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

		<!-- favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.jpg">

		<script type="text/javascript">
			function valid()
			{
			if(document.chngpwd.cpass.value=="")
			{
			alert("Current Password Filed is Empty !!");
			document.chngpwd.cpass.focus();
			return false;
			}
			else if(document.chngpwd.newpass.value=="")
			{
			alert("New Password Filed is Empty !!");
			document.chngpwd.newpass.focus();
			return false;
			}
			else if(document.chngpwd.cnfpass.value=="")
			{
			alert("Confirm Password Filed is Empty !!");
			document.chngpwd.cnfpass.focus();
			return false;
			}
			else if(document.chngpwd.newpass.value!= document.chngpwd.cnfpass.value)
			{
			alert("Password and Confirm Password Field do not match  !!");
			document.chngpwd.cnfpass.focus();
			return false;
			}
			return true;
			}
		</script>
	</head>

    <body class="cnt-home">
    	<!-- ============================================== HEADER : START ============================================== -->
			<header class="header-style-1">
				<!-- ============================================== TOP MENU ============================================== -->
					<?php include('includes/top-header.php');?>
				<!-- ============================================== TOP MENU : END ============================================== -->
					<?php include('includes/main-header.php');?>
				<!-- ============================================== NAVBAR ============================================== -->
					<?php include('includes/menu-bar.php');?>
				<!-- ============================================== NAVBAR : END ============================================== -->
			</header>
		<!-- ============================================== HEADER : END ============================================== -->

		<div class="breadcrumb">
			<div class="container">
				<div class="breadcrumb-inner">
					<ul class="list-inline list-unstyled">
						<li><a href="index.php">Главная</a></li>
						<li class='active'>Проверка</li>
					</ul>
				</div><!-- /.breadcrumb-inner -->
			</div><!-- /.container -->
		</div><!-- /.breadcrumb -->

		<div class="body-content outer-top-bd">
			<div class="container">
				<div class="checkout-box inner-bottom-sm">
					<div class="row">
						<div class="col-md-8">
							<div class="panel-group checkout-steps" id="accordion">
								<!-- checkout-step-01  -->
									<div class="panel panel-default checkout-step-01">
										<!-- panel-heading start-->
											<div class="panel-heading">
									    		<h4 class="unicase-checkout-title">
										        	<a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
										          		<span>1</span>Мой профайл
										        	</a>
										     	</h4>
									    	</div>
    									<!-- panel-heading end-->

										<div id="collapseOne" class="panel-collapse collapse in">
											<!-- panel-body  -->
											<form class="register-form" role="form" method="post">
												<div class="form-group">
													    <label class="info-title" for="name">Имя
													    	<span>*</span>
													    </label>
													    <input type="text" class="form-control unicase-form-control text-input" value="<?php echo $row['name'];?>" id="name" name="name" required="required">
												</div> <!-- /.form-group -->

												<div class="form-group">
												    	<label class="info-title" for="exampleInputEmail1">Эл. почта 
												    		<span>*</span>
												    	</label>
										 				<input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" value="<?php echo $row['email'];?>" readonly>
											  	</div> <!-- /.form-group -->

											  	<div class="form-group">
													    <label class="info-title" for="Contact No.">Контактный номер 
													    	<span>*</span>
													    </label>
													    <input type="text" class="form-control unicase-form-control text-input" id="contactno" name="contactno" required="required" value="<?php echo $row['contactno'];?>"  maxlength="10">
												</div> <!-- /.form-group -->
													  
											  	<button type="submit" name="update" class="btn-upper btn btn-primary checkout-page-button">Обновить</button>
											</form>
											<?php } ?>
										</div>	<!-- /.collapseOne -->
										<!-- already-registered-login -->	
									</div>		<!--  /.panel panel-default checkout-step-01	 -->
							</div> <!-- /.panel-group checkout-step -->
							<!-- panel-body  -->
						</div><!-- /.col-md-8 -->
					</div> <!-- /.row -->
								
					<!-- checkout-step-02  -->
					<div class="panel panel-default checkout-step-02">
						<div class="panel-heading">
							<h4 class="unicase-checkout-title">
								<a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
									<span>2</span>Изменить пароль
								</a>
							</h4>
						</div>

						<div id="collapseTwo" class="panel-collapse collapse">
						    <div class="panel-body">
						    	<form class="register-form" role="form" method="post" name="chngpwd" onSubmit="return valid();">
						    		<div class="form-group">
									    <label class="info-title" for="Current Password">Текущий пароль
									    	<span>*</span>
									    </label>
									    <input type="password" class="form-control unicase-form-control text-input" id="cpass" name="cpass" required="required">
									</div>	<!-- /.form-group -->

									<div class="form-group">
									    <label class="info-title" for="New Password">Новый пароль 
									    	<span>*</span>
									    </label>
							 			<input type="password" class="form-control unicase-form-control text-input" id="newpass" name="newpass">
								  	</div> <!-- /.form-group -->

									<div class="form-group">
										<label class="info-title" for="Confirm Password">Повторите пароль 
											<span>*</span>
										</label>
										<input type="password" class="form-control unicase-form-control text-input" id="cnfpass" name="cnfpass" required="required" >
									</div> <!-- /.form-group -->

					  				<button type="submit" name="submit" class="btn-upper btn btn-primary checkout-page-button">Изменить </button>
								</form> 
							</div> <!-- /.panel-body -->
						</div> <!-- /.collapseTwo -->
					</div> <!-- /.panel panel-default checkout-step-02 -->
					  	<!-- checkout-step-02  -->
				</div><!-- /.checkout-box inner-bottom-sm -->
			</div> <!-- /.container -->
			<?php include('includes/myaccount-sidebar.php');?>
		</div><!-- /.body-content outer-top-bd-->
		</div><!-- /.checkout-box -->
	<?php include('includes/brands-slider.php');?>
	<?php include('includes/brands-slider-duble.php');?>

</div>
</div>
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
</body>
</html>
<?php  ?>
