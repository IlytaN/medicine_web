<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile</title>
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
    
  <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="form-box">
          <div class="panel panel-basic">
            <div class="panel-heading text-center">
              <h3>Profile Summary</h3>
            </div>
            <div class="panel-body">
              <div class="alert alert-success">
                Successfully Login
              </div>
              <h1> Welcome <?php echo $user ?> </h1>
            </div>
            <div class="panel-footer text-center">
                <button type="button" class="btn btn-outline-info">
                    <a href="<?php echo base_url(); ?>index.php/">Go to Homepage</a></button>
                <button type="button" class="btn btn-outline-info">
                    <a href="<?php echo base_url(); ?>index.php/medicines/show_list">Go to Your page</a></button>
                <button type="button" class="btn btn-outline-info">
              <a href="<?php echo base_url(); ?>index.php/user/logout">Logout</a>
                    </button>
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
