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
    echo '<td>'.$row['img'].'</td>';
    echo '<td>'.$row['description'].'</td>';
    echo '<td><button class="btn btn-success"><a href="'.site_url('medicines/delete_medicine').'/'.
		$row['id'].'">Delete</a></button></td></tr>';
  }
  ?>
</TABLE>
