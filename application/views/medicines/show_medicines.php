<!-- show all medicines-->
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<div class="form">
    <form>
  <input type="text" name="search" placeholder="Search for a medicine..">
</form>
    </div>

<br>
<!-- JQuery Moving Annimation -->
<div class="fixed-top jquery"><script> 
$(document).ready(function(){
    $("button").click(function(){
        $("div").animate({left: '570px'});
    });
});
</script> 
<button type="button" class="btn btn-outline-info">
<b>Click here and follow the arrow to find out how to add medicine to your personal page </b> <span class="glyphicon glyphicon-arrow-down"></span></button>

    </div>

<br>
<br>
<br>

<div class="fixed-bottom medfont"> 
<TABLE class="table table-hover">
  <TR>
    <TH></TH>
    <TH></TH>
    <th></th>
    <TH></TH>
    <th></th>
  </TR>
  <?php
  foreach ($medicines as $row) {
    echo '<tr><td>'.$row['id'].'</td>';
    echo '<td><b>'.$row['name'].'</b></td>';
    echo '<td><img class="img-thumbnail" style="max-width:200px" src="'.$row['img'].'"></td>';
    echo '<td>'.$row['description'].'</td>';
    echo '<td><button class="btn btn-basic"><a href="'.site_url('medicines/add_medicine').'/'.
		$row['id'].'"><span class="glyphicon glyphicon-plus-sign"></a></button></td></tr>';
  }
  ?>
</TABLE>
    </div>


