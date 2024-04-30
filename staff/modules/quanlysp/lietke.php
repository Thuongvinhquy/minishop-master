<?php
	$sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
	$query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<h5>Liệt kê sản phẩm</h5>
<div class="table-responsive">
  <table class="table" style="width:100%" style="border-collapse: collapse;">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="text-align: center;">Id</th>
      <th scope="col" style="text-align: center;">Tên sản phẩm</th>
      <th scope="col" style="text-align: center;">Hình ảnh</th>
      <th scope="col" style="text-align: center;">Giá sp</th>
      <th scope="col" style="text-align: center;">Số lượng</th>
      <th scope="col" style="text-align: center;">Danh mục</th>
      <th scope="col" style="text-align: center;">Mã sp</th>
      <th scope="col" style="text-align: center;">Tóm tắt</th>
      <th scope="col" style="text-align: center;">Trạng thái</th>
    
    </tr>
  </thead>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_sp)){
      $i++;
    ?>
    <tr>
      <th scope="row" style="text-align: center;"><?php echo $i ?></th>
      <td style="text-align: center;"><?php echo $row['tensanpham'] ?></td>
      <td style="text-align: center;"><img src="../admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
      <td style="text-align: center;"><?php echo $row['giasp'] ?></td>
      <td style="text-align: center;"><?php echo $row['soluong'] ?></td>
      <td style="text-align: center;"><?php echo $row['tendanhmuc'] ?></td>
      <td style="text-align: center;"><?php echo $row['masp'] ?></td>
      <td style="text-align: center;"><?php echo $row['tomtat'] ?></td>
      <td style="text-align: center;"><?php if($row['tinhtrang']==1){
          echo 'Kích hoạt';
        }else{
          echo 'Ẩn';
        } 
        ?>
        
      </td>
    
    </tr>
    <?php
    } 
    ?>
  
  </table>
</div>