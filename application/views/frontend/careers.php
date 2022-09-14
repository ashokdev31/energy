<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!--
        Awesome Template
        http://www.templatemo.com/preview/templatemo_450_awesome
        -->
		<title>Energy market</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/animate.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/style.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/templatemo-style.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

        <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.singlePageNav.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/typed.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/wow.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/custom.js"></script>

	</head>
	<body id="top">
  	<!-- start preloader -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-wave">
     	 		<div class="sk-rect1"></div>
       			<div class="sk-rect2"></div>
       			<div class="sk-rect3"></div>
      	 		<div class="sk-rect4"></div>
      			<div class="sk-rect5"></div>
     		</div>
    	</div>
    	<!-- end preloader -->

      	<!-- start navigation -->
		<nav class="navbar navbar-default templatemo-nav top-menu" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a onclick="location.href = '<?php echo base_url() . 'main/index'; ?>';" class="navbar-brand"><img src="<?php echo base_url(); ?>assets/frontend/images/logo.png" alt="Logo" /></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
                     <?php foreach ($query as $content) {?>
						<li><a onclick="location.href = '<?php echo base_url() . 'main/index#' . $content['page_slug']; ?>';"?><?php echo @$content['page_menu'] ?></a></li>
                     <?php }?>

						<li><a onclick="location.href = '<?php echo base_url() . 'main/careers'; ?>';"  style= "cursor: pointer;">CAREERS</a></li>

						<li><a   onclick="location.href = '<?php echo base_url() . 'main/contactUs'; ?>';" style= "cursor: pointer;">CONTACT</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- end navigation -->

    <!-- start home -->
      <section id="home" class="contact-banner">
        <div class="container home-page">
          <div class="row">
            <div class=" col-md-8 banner-slider">
              <h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">Welcome to Energy Market Expertise, LLC</h1>
            </div>

          </div>
        </div>
      </section>

     <!-- start portfolio -->
        <section id="portfolio" class="portfolio-mar">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-lg-8 col-xs-12 career">
                        <h2>Do You Have What It Takes?</h2>
                        <p>Energy Market Expertise seeks individuals with strong technical skills coupled with the experience and communications ability to leverage those skills. Please submit resumes directly to us via the Contact Us page.</p>
                    </div>


                </div>
            </div>

        </section>

    	 <footer id="copyright" class="footer-matket">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"> (c) 2017 Energy Market Expertise, LLC • Site By: Kindlebit Web Design</p>
                    </div>
                </div>
            </div>
        </footer>
    	<!-- end portfolio -->

	</body>
</html>