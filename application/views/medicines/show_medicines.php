<!-- show all medicines-->
<TABLE class="table table-bordered">
  <TR>
    <TH>id</TH>
    <TH>name</TH>
    <th>img</th>
    <TH>description</TH>
    <th></th>
  </TR>
  <?php
  foreach ($medicines as $row) {
    echo '<tr><td>'.$row['id'].'</td>';
    echo '<td>'.$row['name'].'</td>';
    echo '<td><img class="img-thumbnail" style="max-width:200px" src="'.$row['img'].'"></td>';
    echo '<td>'.$row['description'].'</td>';
    echo '<td><button class="btn btn-success"><a href="'.site_url('medicines/add_medicine').'/'.
		$row['id'].'">Add</a></button></td></tr>';
  }
  ?>
</TABLE>
