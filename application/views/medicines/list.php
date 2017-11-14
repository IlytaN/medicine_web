<div class="container">
  <!-- user's info -->
  <div class="row">
      <?php
      foreach ($loggedUser as $row) {
        echo "<div class='col-md-3'>
          <img class='img-thumbnail' src='https://pbs.twimg.com/profile_images/874276197357596672/kUuht00m.jpg'>";
        echo '<h3>'.$row['fname'].$row['lname'].'</h3></div>';
        echo "<div class='col-md-7'>
                <p>".$row['description']."</p>
              </div>";
        echo '<button class="btn btn-success"><a href="'.base_url().'index.php/medicines/editdescription">Edit</a></button>';
      }
      ?>
  </div>

<!-- personal medicine list -->
  <TABLE class="table table-bordered">
    <TR>
      <TH>id</TH>
      <TH>medicine id</TH>
      <TH>name</TH>
      <th>img</th>
      <TH>description</TH>
      <th></th>
    </TR>
    <?php
    foreach ($medicines as $row) {
      echo '<tr><td>'.$row['id'].'</td>';
      echo '<td>'.$row['m_id'].'</td>';
      echo '<td>'.$row['name'].'</td>';
      echo '<td><img class="img-thumbnail" style="max-width:200px" src="'.$row['img'].'"></td>';
      echo '<td>'.$row['description'].'</td>';
      echo '<td><button class="btn btn-success"><a href="'.site_url('medicines/delete_medicine').'/'.
  		$row['id'].'">Delete</a></button></td></tr>';
    }
    ?>
  </TABLE>
</div>
