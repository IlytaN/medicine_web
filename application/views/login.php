<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <style type="text/css">
    .form-box{
      max-width: 500px;
      position: relative;
      margin: 5% auto;
    }
  </style>
  
</head>
<body>
	 <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand">Medicine web</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                                     <li><a href="<?php echo site_url('main/index') ?>"> <li><a href="<?php echo site_url('main/index') ?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>Home</a></li>
									<li><a href="<?php echo site_url('user/register') ?>">Register</a></li>
									<li><a href="<?php echo site_url('user/login') ?>">Log in</a></li>
									<li><a href="<?php echo base_url().'medicines/show_medicines' ?>">Available medicines</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
  <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="form-box">
          <div class="panel panel-primary">
            <div class="panel-heading text-center">
              <h3>Login</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                  <div class="col-sm-12">
                      <?php echo $this->session->flashdata('msg'); ?>
                  </div>
              </div>
              <form action="<?php echo base_url() ;?>index.php/user/check_login" method="post">

                <div class="form-group">
                                <label class="control-label" for="pswd">Email</label>
                                    <div>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                                        <span class="text-danger"><?php echo form_error('email'); ?></span>
                                    </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="pswd">Password</label>
                                    <div>
                                        <input type="password" class="form-control" id="pswd" name="password" placeholder="Password" required="">
                                        <span class="text-danger"><?php echo form_error('password'); ?></span>
                                    </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-offset-5 col-sm-3  btn-submit">
                                        <button type="submit" class="btn btn-success">Login</button>
                                    </div>
                                </div>
                            </div>

              </form>
            </div>
            <div class="panel-footer text-center">
              <p><a href="<?php echo base_url() ?>"> Don't Have an Account? REGISTER</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
