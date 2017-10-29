<!-- below is testing codes, please delete or ignore them-->
<TABLE class="table table-bordered">
  <TR>
    <TH>id</TH>
    <TH>name</TH>
    <TH>description</TH>
  </TR>
  <?php
  foreach ($medicines as $row) {
    echo '<tr><td>'.$row['id'].'</td>';
    echo '<td>'.$row['name'].'</td>';
    echo '<td>'.$row['description'].'</td>';
  }
  ?>
</TABLE>
