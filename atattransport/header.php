<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <!-- Latest compiled and minified CSS -->

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<?php wp_head(); ?>
</head>
<body>
<header>

	<!-- /////////////////////////////////////////Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">AZTransport</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="#news">News</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<!-- Navigation -->

	<!-- CAROUSEL -->
	<div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel" data-interval="4000">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>
	 
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="<?php echo get_template_directory_uri(); ?>/images/banner1.jpg" />
				<!-- Static Header -->
				<div class="header-text hidden-xs">
					<div class="col-md-12 text-center">
						<h1>Your Favorite Source of Free Bootstrap Themes</h1>
						<hr>
						<p>Start Bootstrap can help you build better websites using the Bootstrap CSS framework! <br/>Just download your template and start going, no strings attached!</p>
						<a href="" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
					</div>
				</div><!-- /header-text -->
			</div>
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/images/banner2.jpg" />
				<!-- Static Header -->
				<div class="header-text hidden-xs">
					<div class="col-md-12 text-center">
						<h1>Your Favorite Source of Free Bootstrap Themes</h1>
						<hr>
						<p>Start Bootstrap can help you build better websites using the Bootstrap CSS framework! <br/>Just download your template and start going, no strings attached!</p>
						<a href="" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
					</div>
				</div><!-- /header-text -->
			</div>
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/images/banner3.jpg" />
				<!-- Static Header -->
				<div class="header-text hidden-xs">
					<div class="col-md-12 text-center">
						<h1>Your Favorite Source of Free Bootstrap Themes</h1>
						<hr>
						<p>Start Bootstrap can help you build better websites using the Bootstrap CSS framework! <br/>Just download your template and start going, no strings attached!</p>
						<a href="" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
					</div>
				</div><!-- /header-text -->
			</div>
		</div>
	 
		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div> <!-- Carousel -->
	
</header>
