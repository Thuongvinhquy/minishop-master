<?php
	$id_kh=$_SESSION['id_khachhang'];
	$sql_kh = "SELECT * FROM tbl_dangky WHERE 	id_dangky='$id_kh' ";
    $query_kh = mysqli_query($mysqli, $sql_kh);
	
	$sql_kh2 = "SELECT * FROM tbl_dangky WHERE 	id_dangky='$id_kh' ";
    $query_kh2 = mysqli_query($mysqli, $sql_kh2);
	while($row = mysqli_fetch_array($query_kh2))
	{
		$phanquyen = $row['phanquyen'];
	}

	$sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_cart_details,tbl_sanpham WHERE tbl_cart.code_cart=tbl_cart_details.code_cart and tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham and id_khachhang='$id_kh' ORDER BY tbl_cart_details.id_cart_details DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
	
	$sql_lietke_dh2 = "SELECT * FROM tbl_cart,tbl_cart_details,tbl_sanpham WHERE tbl_cart.code_cart=tbl_cart_details.code_cart and tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham and id_khachhang='$id_kh' ORDER BY tbl_cart_details.id_cart_details DESC";
	$query_lietke_dh2 = mysqli_query($mysqli,$sql_lietke_dh2);
	$thanhtien = 0;
	$soluong = 0;
	$soluong2 = 0;
	$tongtien = 0;
	while($row = mysqli_fetch_array($query_lietke_dh2))
	{
		$soluong2 += $row['soluongmua'];
		$tongtien += $row['soluongmua'] * $row['giasp'];
	}
?>


<div class="container">
              	<div class="row p-4">
						   		<div class="col-md-6">
						   			<h3 class="mb-4"><?php if($phanquyen==1){echo 'Quản trị viên';}elseif($phanquyen==2){echo 'Nhân viên';}else{echo 'Khách hàng';} ?></h3>
								<?php
									while($row = mysqli_fetch_array($query_kh)){
								?>
						   			<div class="review">
								   		<div class="user-img" style="background-image: url(images/User.png)"></div>
								   		<div class="desc">
								   			<h4>
								   				<span class="text-left"><?php echo $row['tenkhachhang']; ?></span>
								   				<span class="text-right"></span>
								   			</h4>
											<p>Email: <?php echo $row['email']; ?></p>
								   			<p>Sđt: <?php echo $row['dienthoai']; ?></p>
											<p>Địa chỉ: <?php echo $row['diachi']; ?></p>
								   			<p class="star">
							   					<span><a href="index.php?quanly=suanguoidung" class="reply"><i class="icon-update">Sửa thông tin</i></a></span>
												<span><a href="index.php?quanly=thaydoimatkhau" class="reply"><i class="icon-update">Đổi mật khẩu</i></a></span>
								   			</p>
											<a href="index.php?dangxuat=1"><input class="btn btn-black py-3 px-5 mr-2" name="themgiohang" type="submit" value="Đăng Xuất"></a>
								   		</div>
										   
								   	</div>
								<?php } ?>
						   		</div>
								   <div class="col-md-6 container">
									<div class="row justify-content-start">
											<div class="col col-lg-12 col-md-6 mt-5 cart-wrap ftco-animate">
												<div class="cart-total mb-3">
													<h3>Đơn Hàng</h3>
													<p class="d-flex">
														<span>Số lượng</span>
														<span><?php echo $soluong2; ?></span>
													</p>
													<hr>
													<p class="d-flex total-price">
														<span>Tổng tiền</span>
														<span><?php echo number_format($tongtien,0,',','.').'vnđ' ?></span>
													</p>
												</div>
											</div>
										</div>
									</div>
						   		<div class="col-md-12">
								   <section class="ftco-section ftco-cart">
								   <div class="container">
											<div class="row justify-content-center mb-3 pb-3">
										<div class="col-md-12 heading-section text-center ftco-animate">
										<h2 class="mb-4">Chi tiết đơn hàng đã mua</h2>
										</div>
									</div>   		
									</div>
										<div class="container">
											<div class="row">
											<div class="col-md-12 ftco-animate">
												<div class="cart-list">
													<table class="table">
														<thead class="thead-primary">
														<tr class="text-center">
															<th>&nbsp;</th>
															<th>Sản Phẩm</th>
															<th>số lượng</th>
															<th>Thành tiền</th>
														</tr>
														</thead>
											<tbody>
												<?php
													while($row = mysqli_fetch_array($query_lietke_dh)){
														$thanhtien = $row['soluongmua'] * $row['giasp'];
														$soluong=$row['soluongmua'];
												?>
												<tr class="text-center">
													
													<td class="image-prod"><img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh']; ?>" alt="" width="30%"></div></td>
													
													<td class="product-name">
													<h3><?php echo $row['tensanpham']; ?></h3>
													<p>Series: <?php echo $row['masp']; ?></p>
													</td>
													<td class="total"><input type="text" name="quantity" class="quantity form-control input-number" readonly value="<?php echo $row['soluongmua'] ?>" min="1" max="100"></td>
													<td class="total">&nbsp;<?php echo number_format($thanhtien,0,',','.').'vnđ' ?>&nbsp;</td>
												</tr>


												<?php
													}
												?>

												
											</tbody>
													</table>
												</div>
											</div>
										</div>
									</section>
						   	</div>
              </div>
</div>