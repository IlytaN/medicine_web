<!-- below is testing codes, please delete or ignore them-->
<TABLE class="table table-bordered">
  <TR>
    <TH>id</TH>
    <TH>name</TH>
    <TH>description</TH>
    <TH>image</TH>
    <TH>composition</TH>
  </TR>
  <?php
  foreach ($medicines as $row) {
    echo '<tr><td>'.$row['m_id'].'</td>';
    echo '<td>'.$row['m_name'].'</td>';
    echo '<td>'.$row['m_description'].'</td>';
    echo '<td>'.$row['m_img'].'</td>';
    echo '<td>'.$row['m_composition'].'</td>';
  }
  ?>
</TABLE>
