<!-- show all medicines-->
  <div class="form">
    <form action="<?php echo base_url() ;?>index.php/medicines/search" method="post">
        <div class="form-group">
            <div class="row">
              <div class="col-sm-9">
                <input type="text" name="drug" placeholder="Search for a medicine..">
              </div>
              <div class="row">
                <button type="submit" class="btn btn-basic offset-md-1  btn-submit">Search</button>
              </div>
            </div>
        </div>
    </form>
  </div>

<br>
<!-- JQuery Moving Annimation -->
<div class="fixed-top jquery">
      <script>
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
          <TH>ID</TH>
          <TH>Name</TH>
          <TH>Image</TH>
          <TH>Description</TH>
          <TH>Add to your list</TH>
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
