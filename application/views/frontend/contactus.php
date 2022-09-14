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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
        </script>

        <script type="text/javascript">
        var onloadCallback = function() {
          grecaptcha.render('html_element', {
            'sitekey' : '6LenuzMUAAAAAJ3iSgRzYPjp5RnN7WoVqqS8nUkW'

          });
        };
    </script>

    <script type="text/javascript">
    $(document).ready(function(){
      $('form').on('submit', function(e) {
        if(grecaptcha.getResponse() == "") {
          e.preventDefault();
          alert("You can't proceed! Please fill the Captcha");
        } else {
          alert("Thank you");
        }
      });

    });

    </script>

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
					<a onclick="location.href = '<?php echo base_url() . 'main/index'; ?>';" class="navbar-brand"><img src="<?php echo base_url(); ?>assets/frontend/images/logo.png" alt="Logo" / style="cursor: pointer;"></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
                     <?php foreach ($query as $content) {?>
            <li><a onclick="location.href = '<?php echo base_url() . 'main/index#' . $content['page_slug']; ?>';"><?php echo @$content['page_menu'] ?></a></li>
                     <?php }?>

						<li><a  onclick="location.href = '<?php echo base_url() . 'main/careers'; ?>';" style= "cursor: pointer;">CAREERS</a></li>

						<li><a  onclick="location.href = '<?php echo base_url() . 'main/contactUs'; ?>';" style= "cursor: pointer;">CONTACT</a></li>
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
      <!-- end home -->

      <!-- start ContactUs -->
      <section id="contact-us" class="">
        <div class="container">
          <div class="row About-market">
                <div class="text-center">
                      <h2 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.2s">Contact EME – Your Inquiry Is Important To Us!</h2>

                </div>
           <?php echo $this->session->flashdata('msg'); ?>
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 contact-form">
                  <form method="POST" action="<?php echo base_url() . 'main/contact'; ?>">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Name<span>*</span></label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name" required>
                      </div>

                       <div class="form-group">
                        <label for="exampleFormControlInput1">Email address <span>*</span></label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Enter Email" required>
                      </div>

                       <div class="form-group">
                        <label for="exampleFormControlInput1">Subject <span>*</span></label>
                        <input type="text"  name="subject" class="form-control" id="exampleFormControlInput1" placeholder=" Enter Subject" required>
                      </div>
</div>
<div class="col-sm-6">


                      <div class="form-group">
                              <label for="exampleFormControlInput1">Message <span>*</span></label>
                              <textarea cols="70" rows="10" name="message"></textarea>
                      </div>

                      <div id="html_element" name="recaptcha"></div>
                        <input type="submit" class="btn btn-primary" name="submit">
</div>

                  </form>

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