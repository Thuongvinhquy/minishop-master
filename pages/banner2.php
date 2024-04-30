<?php
	    if(isset($_SESSION['id_khachhang']))
		{
			$id = $_SESSION['id_khachhang'];	
				
			$sql_kh = "SELECT * FROM tbl_dangky WHERE id_dangky='$id' ";
			$query_kh = mysqli_query($mysqli, $sql_kh);
		}

?>
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          <?php
				if(isset($_GET['quanly'])){
					$tam = $_GET['quanly'];
				}else{
					$tam = '';
				}
				if($tam=='danhmucsanpham'){
					?> <p class="breadcrumbs"><span class="mr-2"><a href="index.php">TRANG</a></span> <span>Danh Mục</span></p>
          <h1 class="mb-0 bread">Danh Mục Sản Phẩm</h1> <?php
				}elseif($tam=='giohang'){
					?> <p class="breadcrumbs"><span class="mr-2"><a href="index.php">TRANG</a></span> <span>GIỎ HÀNG</span></p>
          <h1 class="mb-0 bread"><?php if(isset($_SESSION['dangky'])){  while($row = mysqli_fetch_array($query_kh)){ echo 'GIỎ HÀNG '.$row['tenkhachhang']; } }else{ echo 'HÃY ĐĂNG NHẬP ĐỂ TIẾP TỤC MUA SẮM'; }  ?></h1> <?php
				}elseif($tam=='tintuc'){
					?> <p class="breadcrumbs"><span class="mr-2"><a href="index.php">TRANG</a></span> <span>TIN TỨC</span></p>
          <h1 class="mb-0 bread">TIN TỨC NHANH</h1> <?php
				}elseif($tam=='lienhe'){
					?> <p class="breadcrumbs"><span class="mr-2"><a href="index.php">TRANG</a></span> <span>LIÊN HỆ</span></p>
          <h1 class="mb-0 bread">LIÊN HỆ CHO CHÚNG TÔI</h1> <?php
				}elseif($tam=='sanpham'){
					?> <p class="breadcrumbs"><span class="mr-2"><a href="index.php">TRANG</a></span> <span>SẢN PHẨM</span></p>
          <h1 class="mb-0 bread">SẢN PHẨM</h1> <?php	
				}elseif($tam=='dangky'){
					?> <p class="breadcrumbs"><span class="mr-2"><a href="index.php">TRANG</a></span> <span>ĐĂNG KÝ</span></p>
          <h1 class="mb-0 bread">ĐĂNG KÝ TÀI KHOẢN</h1> <?php
				}elseif($tam=='thanhtoan'){
					include("main/thanhtoan.php");
				}elseif($tam=='dangnhap'){
					?> <p class="breadcrumbs"><span class="mr-2"><a href="index.php">TRANG</a></span> <span>ĐĂNG NHẬP</span></p>
          <h1 class="mb-0 bread">ĐĂNG NHẬP TÀI KHOẢN</h1> <?php
				}elseif($tam=='timkiem'){
					?> <p class="breadcrumbs"><span class="mr-2"><a href="index.php">TRANG</a></span> <span>TÌM KIẾM</span></p>
          <h1 class="mb-0 bread">TÌM KIẾM SẢN PHẨM</h1> <?php
				}elseif($tam=='camon'){
					include("main/camon.php");
				}elseif($tam=='thaydoimatkhau'){
					?> <p class="breadcrumbs"><span class="mr-2"><a href="index.php">TRANG</a></span> <span>ĐỔI MẬT KHẨU</span></p>
          <h1 class="mb-0 bread">THAY ĐỔI MẬT KHẨU</h1> <?php
		  		}elseif($tam=='suanguoidung'){
					?> <p class="breadcrumbs"><span class="mr-2"><a href="index.php">TRANG</a></span> <span>SỬA THÔNG TIN</span></p>
          <h1 class="mb-0 bread">SỬA THÔNG TIN KHÁCH HÀNG</h1> <?php
				}elseif($tam=='nguoidung'){
					?> <p class="breadcrumbs"><span class="mr-2"><a href="index.php">TRANG</a></span> <span>NGƯỜI DÙNG</span></p>
          <h1 class="mb-0 bread">TRANG CÁ NHÂN</h1> <?php
				}?>
          </div>
        </div>
      </div>
    </div>