<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
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
                                   <li><a href="<?php echo site_url('main/index') ?>"><span class="glyphicon glyphicon-home"></span> Home</a></li> 
									<li><a href="<?php echo site_url('user/register') ?>">Register</a></li>
									<li><a href="<?php
												if (!empty($sess_id))
												{echo site_url('user/login');}
												 else
												 {echo site_url('user/logout');}
												?>">Log in/out
											</a>
									</li>
									<li><a href="<?php echo site_url().'/medicines/show_list' ?>">My page</a></li>
									<li><a href="<?php echo site_url().'/medicines/show_medicines' ?>">Available medicines</a></li>
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
          <div class="panel panel-basic">
            <div class="panel-heading text-center">
              <h3>Register</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                  <div class="col-sm-12">
                      <?php echo $this->session->flashdata('msg'); ?>
                  </div>
              </div>
              <form action="<?php echo base_url(); ?>index.php/user/registration" method="post">

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                                    <label class="control-label" for="fname"><span class="glyphicon glyphicon-user"></span> First Name</label>
                                        <div >
                                            <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required="">
                                            <span class="text-danger"><?php echo form_error('fname'); ?></span>
                                        </div>
                                </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                                    <label class="control-label" for="lname">Last Name</label>
                                        <div >
                                            <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required="">
                                            <span class="text-danger"><?php echo form_error('lame'); ?></span>
                                        </div>
                                </div>
                  </div>
                </div>
                <div class="form-group">
                                <label class="control-label" for="pswd"><span class="glyphicon glyphicon-envelope"></span> Email</label>
                                    <div>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                                        <span class="text-danger"><?php echo form_error('email'); ?></span>
                                    </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="pswd"><span class="glyphicon glyphicon-lock"></span> Password</label>
                                    <div>
                                        <input type="password" class="form-control" id="pswd" name="password" placeholder="Password" required="">
                                        <span class="text-danger"><?php echo form_error('password'); ?></span>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="cn-pswd"><span class="glyphicon glyphicon-ok"></span> Confirm Password</label>
                                    <div>
                                        <input type="password" class="form-control" id="cn-pswd" name="confirmpswd" placeholder="Confirm Password" required="">
                                        <span class="text-danger"><?php echo form_error('confirmpswd'); ?></span>
                                    </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-offset-5 col-sm-3  btn-submit">
                                        <button type="submit" class="btn"><b>Register</b></button>
                                    </div>
                                </div>
                            </div>

              </form>
            </div>
            <div class="panel-footer text-center">
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
