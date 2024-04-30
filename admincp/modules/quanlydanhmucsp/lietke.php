<?php
	$sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
	$query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
<h5>Quản lý danh mục sản phẩm</h5>
<button class="btn" style="background-color: #CD5C5C; margin-top: 5px;margin-bottom: 3px;"><a href="index.php?action=quanlydanhmucsanpham&query=them2" style="text-decoration: none; color: #fff;">Thêm Danh Mục</a></button>
<div class="table-responsive">
  <table class="table"  style="border-collapse: collapse;width:100%;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Tên danh mục</th>
      <th scope="col">Quản lý</th>
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
      <td>
      <button class="btn btn-danger"><a style="color: white;" href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xoá</a></button> | <button class="btn btn-warning"><a style="color: white;" href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a></button>
      </td>
    
    </tr>
    <?php
    } 
    ?>
  
  </table>
</div>