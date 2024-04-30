<?php
	$sql_lietke_sp = "SELECT * FROM tbl_banner ORDER BY id_banner DESC";
	$query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<h5>Quản Lý banner</h5>
<div class="table-responsive">
  <table class="table" style="width:100%" style="border-collapse: collapse;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col" style="text-align: center;">Nội dung</th>
      <th scope="col" style="text-align: center;">Hình ảnh</th>
      <th scope="col" style="text-align: center;">Quản lý</th>
    </tr>
  </thead>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_sp)){
      $i++;
    ?>
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td style="text-align: center;">
        <h3><?php echo $row['tenbanner'] ?></h3>
        <p><?php echo $row['noidungbanner'] ?></p>
      </td>
      <td style="text-align: center;"><img src="modules/quanlybanner/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
      <td style="text-align: center;">
        <button class="btn btn-warning" style="margin-top: 5%;">
          <a style="color: white;" href="?action=quanlybanner&query=sua&idbn=<?php echo $row['id_banner'] ?>">Sửa</a> 
        </button> 
      </td>
    
    </tr>
    <?php
    } 
    ?>
  
  </table>
</div>