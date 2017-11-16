<div class="container">
  <!-- user's info -->
  <div class="row">
      <?php
      foreach ($loggedUser as $row) {
        echo "<div class='col-md-3'>
          <img class='img-thumbnail' src='https://abs.twimg.com/sticky/default_profile_images/default_profile_400x400.png'>";
        echo '<h3>'.$row['fname'].$row['lname'].'</h3></div>';
        echo "<div class='col-md-7'>
                <p>".$row['description']."</p>
              </div>";
        echo '<button class="btn btn-dark"><a href="'.base_url().'index.php/medicines/editdescription">Edit</a></button>';
      }
      ?>
  </div>

<!-- personal medicine list -->
    <div class="fixed-bottom medfont"> 
  <TABLE class="table table-bordered">
    <TR>
      <TH>ID</TH>
      <TH>Medicine ID</TH>
      <TH>Name</TH>
      <th>Image</th>
      <TH>Description</TH>
      <th></th>
    </TR>
    <?php
    foreach ($medicines as $row) {
      echo '<tr><td>'.$row['id'].'</td>';
      echo '<td>'.$row['m_id'].'</td>';
      echo '<td>'.$row['name'].'</td>';
      echo '<td><img class="img-thumbnail" style="max-width:200px" src="'.$row['img'].'"></td>';
      echo '<td>'.$row['description'].'</td>';
      echo '<td><button class="btn btn-basic"><a href="'.site_url('medicines/delete_medicine').'/'.
  		$row['id'].'">Delete</a></button></td></tr>';
    }
    ?>
  </TABLE>
</div>
