<?php
	$sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_cmt WHERE tbl_sanpham.id_sanpham=tbl_cmt.id_sanpham ORDER BY id_cmt DESC";
	$query_chitiet = mysqli_query($mysqli,$sql_chitiet);
?>
<h5>Quản lý bình luận</h5>
<div class="table-responsive">
  <table class="table" style="width:100%" style="border-collapse: collapse;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col" style="text-align: center;">Sản phẩm</th>
      <th scope="col" style="text-align: center;">Tên</th>
      <th scope="col" style="text-align: center;">Bình luận</th>
      <th scope="col" style="text-align: center;">Duyệt bình luận</th>
    </tr>
  </thead>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_chitiet)){
      $i++;
    ?>
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td style="text-align: center;"><?php echo $row['tensanpham'] ?><br><img src="../admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
      <td style="text-align: center;"><?php echo $row['ten_cmt'] ?><br><?php echo $row['ngay_cmt'] ?></td>
      <td style="text-align: center;"><?php echo $row['noidung_cmt'] ?></td>
      <td style="text-align: center;">
      <?php if($row['duyet_cmt'] == 0){ ?>
        <button class="btn btn-warning">
          <a style="color: white;" href="modules/quanlycmt/xuly.php?idcmt=<?php echo $row['id_cmt'] ?>">Duyệt</a>
        </button> 
        <?php }else{?>
          <button class="btn btn-danger">
          <a style="color: white;" href="modules/quanlycmt/xuly.php?huycmt=<?php echo $row['id_cmt'] ?>">Hủy duyệt</a>
        </button> 
          <?php }?>
        
      </td>
    
    </tr>
    <?php
    } 
    ?>
  
  </table>
</div>