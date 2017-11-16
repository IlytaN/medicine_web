<!DOCTYPE html>
<html>
<head>
<title>MedicineWeb</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/mystyle.css');?>">
<!-- Bootstrap Core CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBeLdYWFSGPZJcT_NERzJleOaNlQeLqgxo&callback=initMap"
  type="text/javascript"></script>
    </head>
<body>
	<nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand">Medicine web</a>
            </div>
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
        </div>
    </nav>
		<div class="container">
