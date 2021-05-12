<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	 <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>Pick A Sole</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
       <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/blank/template/css/bootstrap.min.css">
      <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/blank/template/css/style.css">
      <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/blank/template/css/responsive.css">
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/blank/template/css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/blank/template/css/owl.carousel.min.css">
      <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/blank/template/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blank' ); ?></a>

	<header id="masthead" class="site-header">
		<body class="main-layout">
	<div class="header_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
          <br>
					<div class="logo"><a href="index.html"><img src="http://localhost/wordpress/wp-content/uploads/2021/04/logo1.png"></a></div>
				</div>
				<div class="col-sm-9">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <br>
                      <br>
                      <br>
                        <div class="navbar-nav">
                          <a class="nav-item nav-link" href="http://localhost/wordpress/wp-content/themes/blank/template/index.php">Home</a>
                         <a class="nav-item nav-link" href="#">Collection</a>
                         <a class="nav-item nav-link" href="http://localhost/wordpress/wp-content/themes/blank/template/shop">Shoes</a>
                         <a class="nav-item nav-link" href="http://localhost/wordpress/wp-content/themes/blank/template/about.php">About Us</a>
                         <a class="nav-item nav-link" href="http://localhost/wordpress/wp-content/themes/blank/template/contact.php">Contact Us</a>
                           <a class="nav-item nav-link last" href="#"><img src="http://localhost/wordpress/wp-content/uploads/2021/04/search_icon.png"></a>
                           <a class="nav-item nav-link last" href="contact.html"><img src="http://localhost/wordpress/wp-content/uploads/2021/04/shop_icon.png"></a>
                        </div>
                    </div>
                    </nav>
				</div>
			</div>
		</div>

	<!-- HEADER START-->
		<div class="banner_section">
			<div class="container-fluid">
				<section class="slide-wrapper">
    <div class="container-fluid">
	    <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>


            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
					<div class="col-sm-2 padding_0">
						<p class="style_text">Style.</p>
						<div class="page_no">1/4</div>
						<p class="style_text_2">Soul.</p>
					</div>
					<div class="col-sm-5">
						<div class="banner_head">
							<h1 class="banner_text">Air.</h1>
							<h1 class="header_text"><strong>Nike Revolution 5</strong></h1>
							<p class="header_text_2">The Nike Revolution 5 is a good all-round shoe that looks good and will see you well through shorter, dry weather runs and a variety of indoor gym classes and workouts.</p>
							<button class="buy_Btn">Buy Now</button>

							<button class="seemore_Btn">See More</button>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="shoes_img"><img src="http://localhost/wordpress/wp-content/uploads/2021/04/shoe1.png"></div>
					</div>
				</div>
                </div>
                <div class="carousel-item">
                    <div class="row">
					<div class="col-sm-2 padding_0">
            <p class="style_text">Style.</p>
						<div class="page_no">2/4</div>
						<p class="style_text_2">Soul.</p>
					</div>
					<div class="col-sm-5">
						<div class="banner_head">
              <h1 class="banner_text">Air.</h1>
							<h1 class="header_text"><strong>Nike Revolution 5</strong></h1>
							<p class="header_text_2">The Nike Revolution 5 is a good all-round shoe that looks good and will see you well through shorter, dry weather runs and a variety of indoor gym classes and workouts.</p>
							<button class="buy_Btn">Buy Now</button>
						<button class="seemore_Btn">See More</button></a>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="shoes_img"><img src="http://localhost/wordpress/wp-content/uploads/2021/04/shoe2.png"></div>
					</div>
				</div>
                </div>
                <div class="carousel-item">
                    <div class="row">
					<div class="col-sm-2 padding_0">
            <p class="style_text">Style.</p>
						<div class="page_no">3/4</div>
						<p class="style_text_2">Soul.</p>
					</div>
					<div class="col-sm-5">
						<div class="banner_head">
							<h1 class="banner_text">Air Max.</h1>
							<h1 class="header_text"><strong>Nike Air Max Dia</strong></h1>
							<p class="header_text_2">Air Max shoes are identified by their midsoles incorporating flexible urethane pouches filled with pressurized gas, visible from the exterior of the shoe and intended to provide cushioning underfoot.</p>
							<button class="buy_Btn">Buy Now</button>
							<button class="seemore_Btn">See More</button>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="shoes_img"><img src="http://localhost/wordpress/wp-content/uploads/2021/04/shoe3.png"></div>
					</div>
				</div>
                </div>
                <div class="carousel-item">
                    <div class="row">
					<div class="col-sm-2 padding_0">
            <p class="style_text">Style.</p>
            <div class="page_no">4/4</div>
            <p class="style_text_2">Soul.</p>
					</div>
					<div class="col-sm-5">
						<div class="banner_head">
              <h1 class="banner_text">Air Max.</h1>
              <h1 class="header_text"><strong>Nike Air Max Dia</strong></h1>
              <p class="header_text_2">Air Max shoes are identified by their midsoles incorporating flexible urethane pouches filled with pressurized gas, visible from the exterior of the shoe and intended to provide cushioning underfoot.</p>
              <button class="buy_Btn">Buy Now</button>
							<button class="seemore_Btn">See More</button>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="shoes_img"><img src="http://localhost/wordpress/wp-content/uploads/2021/04/shoe4.png"></div>
					</div>
				</div>
                </div>
            </div>
        </div>
    </div>
</section>
			</div>
		</div>
	</div>

	</header><!-- #masthead -->

