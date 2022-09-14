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
        <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>

	</head>
	<body id="top">
  <?php if (!empty($query)) {
	?>
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
					<a onclick="location.href = '<?php echo base_url() . 'main/index'; ?>';" class="navbar-brand"><img src="<?php echo base_url(); ?>assets/frontend/images/logo.png" alt="Logo" / style="cursor: pointer;"></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
                     <?php foreach ($query as $content) {?>
						<li><a href="#<?php echo $content['page_slug']; ?>"><?php echo @$content['page_menu'] ?></a></li>
                     <?php }?>


						<li><a  onclick="location.href = '<?php echo base_url() . 'main/careers'; ?>';" style= "cursor: pointer;">CAREERS</a></li>

						<li><a  onclick="location.href = '<?php echo base_url() . 'main/contactUs'; ?>';" style= "cursor: pointer;">CONTACT</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- end navigation -->

    	<!-- start home -->
          <?php foreach ($query as $content) {
		?>

          <?php
if ($content['page_slug'] == 'top') {

			?>

            <section id="home" class="hj">
            <div class="container home-page">
                <div class="row">
                    <div class=" col-md-8 banner-slider">
                        <h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">
                        <?php echo @$content['page_title']; ?></h1>
                    </div>

                    <div class="col-md-12">
                        <div class="text-banner">
        <div class="col-sm-9">
                    <?php echo @$content['content']; ?>
                    </div>
                         <div class="col-md-3">

                       <img src="<?php echo base_url(); ?>assets/frontend/images/AlanIsemonger.jpg" alt="Logo" class= "img-responsive"/>


                    </div>


                    </div>
                    </div>


                </div>
            </div>
        </section>


         <?php }?>

         <?php
if ($content['page_slug'] == 'about') {
			?>

            <section id="about">
            <div class="container">
                <div class="col-md-12 About-market">
                        <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><?php echo @$content['page_title']; ?></h2>
                    </div>
                <div class="row ">
                <div class="items">


                    <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft about-img" data-wow-offset="50" data-wow-delay="0.6s">
                        <img src="<?php echo base_url(); ?>assets/frontend/images/img-about.png" alt="Logo" class= "img-responsive"/>
                    </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight about-img" data-wow-offset="50" data-wow-delay="0.6s">

                               <?php echo @$content['content']; ?>


                    </div>
                </div>
                </div>
            </div>
        </section>
        <!-- end about -->
<?php }?>


         <?php
if ($content['page_slug'] == 'team') {
			?>

      <!-- start team -->
        <section id="team" class="staff-market">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 About-market">
                        <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><?php echo @$content['page_title']; ?></h2>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn staff-bio" data-wow-offset="50" data-wow-delay="1.3s">

                        <div class="text-left">
                        <?php echo @$content['content']; ?>

                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- end team -->



 <?php }?>

         <?php
if ($content['page_slug'] == 'service') {
			?>
   <!-- start service -->
        <section id="service" class="service-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 About-market">
                        <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><?php echo @$content['page_title']; ?></h2>
                    </div>

                    <?php echo @$content['content']; ?>

                </div>
            </div>
        </section>

<?php }?>



         <?php for ($i = 1; $i < 10; $i++) {
			?>
         <?php
if ($content['page_slug'] == 'page_content_' . $i) {
				?>
           <section id="<?php echo $content['page_slug']; ?>" class="portfolio-mar">
            <div class="container">

                <div class="row">
                <div class="col-md-12 About-market">
                        <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"> <?php echo @$content['page_title']; ?></h2>
                </div>
                     <div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn staff-bio" data-wow-offset="50" data-wow-delay="1.3s">

                    <?php echo @$content['content']; ?>

                    <?php if ($content['page_slug'] == 'page_content_2') {?>
                    <div class="col-md-3 col-sm-3  fadeIn wow"><div class="LI-profile-badge" data-version="v1" data-size="medium" data-locale="en_US" data-type="vertical" data-theme="light" data-vanity="alan-isemonger-24147b15"><a class="LI-simple-link" href='https://www.linkedin.com/in/alan-isemonger-24147b15?trk=profile-badge'>Alan Isemonger</a></div></div>
                    <?php }?>
</div>

                </div>
            </div>

           </div>
        </section>


        <?php }}?>

     <?php }?>

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


<?php }?>

	</body>
</html>