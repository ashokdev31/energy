<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-clearmin.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/roboto.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />
  </head>
  <body class="cm-login">

    <div class="text-center" style="padding:90px 0 30px 0;background:#fff;border-bottom:1px solid #ddd">
      <img src="<?php echo base_url(); ?>assets/img/admin_logo.png" alt="Logo" />
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3" style="margin:40px auto; float:none;">
      <form method="post" action="<?php echo base_url(); ?>admin/checkLogin">
            <span style="color: red; margin-left:10px;"><?php echo $this->session->flashdata('invalid_login'); ?></span>
		<div class="col-xs-12">
	          <div class="form-group">
				    <div class="input-group">
				      <div class="input-group-addon"><i class="fa fa-fw fa-user"></i></div>
				      <input type="text" name="email" class="form-control" placeholder="Email" required />
				    </div>
	          </div>
	          <div class="form-group">
			    <div class="input-group">
			      <div class="input-group-addon"><i class="fa fa-fw fa-lock"></i></div>
			      <input type="password" name="password" class="form-control" placeholder="Password" required />
			    </div>
	          </div>
	        </div>
			<div class="col-xs-12 text-center">
		          <button type="submit" class="btn btn-block btn-primary lgnbutton">Sign in</button>
        </div>
      </form>
    </div>
  </body>
</html>
