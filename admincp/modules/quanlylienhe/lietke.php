<?php
	$sql_lietke_sp = "SELECT * FROM tbl_lienhe ORDER BY id_lienhe DESC";
	$query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<h5>Quản lý liên hệ người dùng</h5>
<div class="table-responsive">
  <table class="table" style="width:100%" style="border-collapse: collapse;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col" style="text-align: center;">Tên</th>
      <th scope="col" style="text-align: center;">Email</th>
      <th scope="col" style="text-align: center;">Nội dung</th>
      <th scope="col" style="text-align: center;">Duyệt Liên Hệ</th>
    </tr>
  </thead>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_sp)){
      $i++;
    ?>
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td style="text-align: center;"><?php echo $row['ten'] ?></td>
      <td style="text-align: center;"><?php echo $row['email'] ?></td>
      <td style="text-align: center;"><?php echo $row['noidung'] ?></td>
      <td style="text-align: center;">
      <?php if($row['xacnhan'] == 0){ ?>
        <button class="btn btn-warning">
          <a style="color: white;" href="modules/quanlylienhe/xuly.php?idlh=<?php echo $row['id_lienhe'] ?>">Duyệt</a>
        </button> 
        <?php }else{ echo 'Đã xác nhận'; }?>
        
      </td>
    
    </tr>
    <?php
    } 
    ?>
  
  </table>
</div>