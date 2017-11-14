<!-- home page is here. don't need <header> or <body> tags here -->
<!-- if you want to add jQuery/ bootstrap links to header or edit the navigation bar, please go to views/menu/header.php -->
<div class="container">
  <div class="jumbotron">
    <h1>Medicine web</h1> 
    <p>Hello, This is the home page of medicine web where you can search any medicne you want!</p> 
  </div>
</div>
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/doctor.jpg" alt="Doctor">
      </div>

      <div class="item">
        <img src="img/doctor.jpg" alt="Doctor">
      </div>
    
      <div class="item">
        <img src="img/doctor.jpg" alt="Doctor">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <h3 class="text-center">Contact us</h3>

  <div class="row">
    <div class="col-md-4">
      <p>Any Questions? Just ask!</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Find us in Dublin!</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: 84848394020</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: dit@dit.ie</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
</div>


   <!-- Note: if you want to access a page, go to controller page> function. Like the above line shown.-->
