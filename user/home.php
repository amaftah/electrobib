<?php include('../connectiondb.php');
session_start();

if(!isset($_SESSION['email'])) {  
  header('Location: ./login.php');
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css"/>

 		<link type="text/css" rel="stylesheet" href="../css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="../css/slick-theme.css"/>

 		<link type="text/css" rel="stylesheet" href="../css/nouislider.min.css"/>

 		<link rel="stylesheet" href="../css/font-awesome.min.css">

 		<link type="text/css" rel="stylesheet" href="../css/style.css"/>
</head>
<body>
<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
                                <select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">book</option>
										<option value="2">novel</option>
                                        <option value="3">DVD</option>
                                        <option value="4">research paper</option>
                                        <option value="5">magazine</option>
									</select>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">

								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
        <nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">books</a></li>
						<li><a href="#">DVD</a></li>
						<li><a href="#">magazine</a></li>
						<li><a href="#">research paper</a></li>
						<li><a href="#">novel</a></li>
						<li><a href="#">contact</a></li>
						<li><a href="#">memory</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
        <div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="../img/shop01.png" alt="">
							</div>
							<div class="shop-body">
								<h3>books<br>Collection</h3>
								<a href="../books.php" class="cta-btn">Reserve now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="../img/shop02.png" alt="">
							</div>
							<div class="shop-body">
								<h3>DVD<br>Collection</h3>
								<a href="../DVD.php" class="cta-btn">Reserve now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="../img/shop03.png" alt="">
							</div>
							<div class="shop-body">
								<h3>magazine<br>Collection</h3>
								<a href="../magazine.php" class="cta-btn">Reserve  now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
       


        <script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
    
</body>
</html>