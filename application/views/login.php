<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inventory - Login</title>
    <!-- Icon -->
    <link rel="shortcut icon" type="image/icon" href="favicon.ico">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>AdminLTE/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
  	<link rel="stylesheet" href="<?php echo base_url() ?>/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>AdminLTE/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url() ?>AdminLTE/plugins/iCheck/square/blue.css">
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-box-body">
        <b><p class="login-box-msg">Login Form</p></b>
        <form action="<?php echo site_url('auth/process_login') ?>" method="post">
          <div class="form-group has-feedback">
            <input type="text" name="username" class="form-control" placeholder="Username" maxlength="30" required />
            <span class="form-control-feedback"><i class="fa fa-user"></i></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password" maxlength="255" required />
            <span class="form-control-feedback"><i class="fa fa-unlock"></i></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary">Sign In <i class="fa fa-sign-in"></i></button>
            </div><!-- /.col -->
          </div>
          <br>
            <center><font style="color:red;"></font></center>
        </br>
        </form>
        
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.2.3 -->
	<script src="<?php echo base_url() ?>AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url() ?>AdminLTE/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url() ?>AdminLTE/plugins/iCheck/icheck.min.js"></script>
  </body>
</html>
