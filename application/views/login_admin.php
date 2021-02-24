<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Halaman Login </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>asset/master/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>asset/master/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>asset/master/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url();?>asset/master/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>asset/master/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form role="form" method="post" action="<?php echo base_url();?>index.php/login/get_login">
              <h1>Login Form</h1>
              <div>
                <input class="form-control" placeholder="Username" name="usr" id="usr" type="username" autofocus><br>
              </div>
              <div>
                  <input class="form-control" placeholder="Password" name="psw" id="psw" type="password" value="">
              </div>
              <div>
                  <button type="submit" class="btn btn-default submit">Login</button>
				  <a class="reset_pass" href="<?php echo base_url('index.php/login/forgot');?>">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Sistem Informasi E-Kinerja</h1>
                  <p>©Dinas Komunikasi dan Informasi Provinsi Jawa Timur</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form role="form" method="post" action="<?php echo base_url();?>index.php/login/signup">
              <h1>Create Account</h1>
              <div>
                <input type="username" class="form-control" id="username" name="username" placeholder="Username"><br>
              </div>
              <div>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" >
              </div>
              <div>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
              </div>
              <div>
                <button type="submit" class="btn btn-default submit">Submit</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Sistem Informasi E-Kinerja </h1>
                  <p>© Dinas Komunikasi dan Informasi Provinsi Jawa Timur</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
