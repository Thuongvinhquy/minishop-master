<h5>Liệt kê đơn hàng</h5>
<?php
	$sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky ORDER BY tbl_cart.id_cart DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);

  $sql_lietke_tien = "SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham ORDER BY tbl_cart_details.id_cart_details DESC";
	$query_lietke_tien = mysqli_query($mysqli,$sql_lietke_tien);
  $tien=0;
  $b=0;
  while($row = mysqli_fetch_array($query_lietke_tien))
  {
    $tien=$tien+($row['giasp'] * $row['soluongmua']);
    $b++;
  }
?>
<div class="table-responsive">
<table class="table" style="width:100%" style="border-collapse: collapse;">
<thead class="thead-dark">
  <tr>
  	<th scope="col">Id</th>
    <th scope="col">Mã đơn hàng</th>
    <th scope="col">Tên khách hàng</th>
    <th scope="col">Địa chỉ</th>
    <th scope="col">Email</th>
    <th scope="col">Số điện thoại</th>
    <th scope="col">Tình trạng</th>
  	<th scope="col">Quản lý</th>
  
  </tr>
</thead>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
  	$i++;
  ?>
  <tr>
  	<th scope="row"><?php echo $i ?></th>
    <td><?php echo $row['code_cart'] ?></td>
    <td><?php echo $row['tenkhachhang'] ?></td>
    <td><?php echo $row['diachi'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['dienthoai'] ?></td>
    <td>
    	<?php if($row['cart_status']==1){
    		echo '<button class="btn btn-warning"><a style="color: white;" href="modules/quanlydonhang/xuly.php?code='.$row['code_cart'].'">Đơn hàng mới</a></button>';
    	}else{
    		echo 'Đã xem';
    	}
    	?>
    </td>
   	<td>
   		<button class="btn btn-warning"><a style="color: white;" href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a></button> 
   	</td>
   
  </tr>
  <?php
  }
  ?>
<tr>
  <td colspan="6">Tổng doanh thu của <?php echo $b ?> đơn hàng là:</td>
  <td style="color: red;" colspan="2"><?php echo number_format($tien,0,',','.').'vnđ' ?></td>
</tr> 
</table>

</div>