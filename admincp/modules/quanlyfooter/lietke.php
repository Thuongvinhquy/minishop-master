<?php
	$sql_lietke_footer = "SELECT * FROM tbl_footer ORDER BY id_footer DESC";
	$query_lietke_footer = mysqli_query($mysqli,$sql_lietke_footer);
?>
<h5>Quản lý footer</h5>
<div class="table-responsive">
  <table class="table"  style="border-collapse: collapse;width:100%;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Số điện thoại</th>
      <th scope="col">Email</th>
      <th scope="col">facebook&Instagram</th>
      <th scope="col">Quản lý</th>
    </tr>
  </thead>
    <?php
    while($row = mysqli_fetch_array($query_lietke_footer)){
    ?>
    <tr>
      <td><?php echo $row['diachi'] ?></td>
      <td><?php echo $row['sdt'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['linkfb'] ?><br><?php echo $row['linkig'] ?></td>
      <td>
      <button class="btn btn-warning"><a style="color: white;" href="?action=quanlyfooter&query=sua&id=<?php echo $row['id_footer'] ?>">Sửa</a></button>
      </td>
    
    </tr>
    <?php
    } 
    ?>
  
  </table>
</div>