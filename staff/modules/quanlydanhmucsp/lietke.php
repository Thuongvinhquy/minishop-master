<?php
	$sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
	$query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
<h5>Liệt kê danh mục</h5>
<div class="table-responsive">
  <table class="table"  style="border-collapse: collapse;width:100%;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Tên danh mục</th>
    </tr>
  </thead>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
      $i++;
    ?>
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo $row['tendanhmuc'] ?></td>
    
    </tr>
    <?php
    } 
    ?>
  
  </table>
</div>