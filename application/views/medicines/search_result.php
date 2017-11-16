<div class="fixed-bottom medfont">
     <TABLE class="table table-hover">
       <TR>
         <TH>ID</TH>
         <TH>Name</TH>
         <TH>Image</TH>
         <TH>Description</TH>
       </TR>
       <?php
       foreach ($results as $row) {
         echo '<tr><td>'.$row['id'].'</td>';
         echo '<td><b>'.$row['name'].'</b></td>';
         echo '<td><img class="img-thumbnail" style="max-width:200px" src="'.$row['img'].'"></td>';
         echo '<td>'.$row['description'].'</td>';
       }
       ?>
     </TABLE>
 </div>
