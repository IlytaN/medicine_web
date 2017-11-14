<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit description</title>
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
          <div class="panel panel-primary">
            <div class="panel-heading text-center">
              <h3>Edit your user description</h3>
            </div>
            <div class="panel-body">
              <h1>
                <form action="<?php echo base_url() ;?>index.php/medicines/edit_description" method="post">
                  <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="5" name="desc"></textarea>
                  </div>
                  <div class="form-group">
                      <div class="row">
                          <div class="col-sm-offset-5 col-sm-3  btn-submit">
                              <button type="submit" class="btn btn-success">Submit</button>
                          </div>
                      </div>
                  </div>
                </form>
              </h1>
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
