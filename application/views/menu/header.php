<!DOCTYPE html>
<html>
<head>
<title>Love drugs</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/mystyle.css');?>">
<!-- Bootstrap Core CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
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
                                     <li><a href="<?php echo site_url('main/index') ?>">Home</a></li>
									<li><a href="<?php echo site_url('user/register') ?>">Register</a></li>
									<li><a href="<?php echo site_url('user/login') ?>">Log in</a></li>
									<li><a href="<?php echo base_url().'medicines/show_medicines' ?>">Available medicines</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
		<div class="container">
