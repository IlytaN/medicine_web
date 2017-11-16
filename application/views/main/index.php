<!-- home page is here. don't need <header> or <body> tags here -->
<!-- if you want to add jQuery/ bootstrap links to header or edit the navigation bar, please go to views/menu/header.php -->

 <!-- Div & JavaScript fora RealTime clock -->
<div id="clockbox" style="text-align:center; font-family:monospace;">
<script type="text/javascript">
tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
}
</script>
</div>
 
<!-- jumbotron to head the page -->
  <div class="jumbotron">
    <h1>Medicine web</h1> 
    <p>Hello, This is the home page of medicine web where you find any medicine you want!</p> 
  </div>




 <div class="c-wrapper">
<div id="carousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="http://www.doctorswhocreate.com/wp-content/uploads/2017/11/doctor-1461911723OIY-e1509992895205-600x400.jpg">
    </div>
        <div class="item">
             <img src="https://asthma-education.com/wp-content/uploads/2017/03/the-doctor-with-a-stethoscope.jpg">
    </div>
    <div class="item">
      <img src="https://fm.cnbc.com/applications/cnbc.com/resources/img/editorial/2014/07/23/101860421-pilles.600x400.jpg?v=1498062454">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#carousel" data-slide="next">
    <span class="icon-next"></span>
  </a>
</div>
</div>


<br>
<br>
<br>
<div class="disapear">
<script>
$(document).ready(function(){
    $("p").dblclick(function(){
        $(this).hide();
    });
});
</script>
    
<p class="lead"> Looking to add medicine to your Home Page? Make sure you log in first (Double Click me to make me disapear)</p>
</div>

<div id="map-container" class="col-md-6"></div>
<script>
function init_map() {
		var var_location = new google.maps.LatLng(53.349805,-6.260310);
        var var_mapoptions = {
          center: var_location,
          zoom: 14
        };
		var var_marker = new google.maps.Marker({
			position: var_location,
			map: var_map,
			title:"Dublin"});
 
        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);
 
		var_marker.setMap(var_map);	
        }
 
      google.maps.event.addDomListener(window, 'load', init_map);
 
    </script>

    <div id="products" class="row list-group">
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                
                <div class="caption">
                      <h4 class="group inner list-group-item-heading">
                        Looking for us?</h4>
                    <p class="group inner list-group-item-text">
                       We are situated in Dublin City Centre. We are two website designers dedicated to bringing you the best user experience.</p>
                </div>
            </div>
        </div>
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Looking To Download?</h4>
                    <p class="group inner list-group-item-text">
                      If you want to downloaded this webpage for personal use check out our GitHub.. </p>
                    <div class="row">
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Contact Informaton?</h4>
                    <p class="group inner list-group-item-text">
                        Theres a contact form below. Fill it out and we will get back to you!</p>
                    
                           
                        </div>
                    </div>
                </div>
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

 
