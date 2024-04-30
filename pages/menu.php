<?php

	$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
  
  if(isset($_SESSION['id_khachhang']))
  {
      $id = $_SESSION['id_khachhang'];  
      $sql_kh = "SELECT * FROM tbl_dangky WHERE id_dangky='$id' ";
      
      $query_kh = mysqli_query($mysqli, $sql_kh);
      while($row = mysqli_fetch_array($query_kh))
      {
        $ten = $row['tenkhachhang'];
        $phanquyen = $row['phanquyen'];
      }
  }


?>
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	} 
?>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">ShopBook210</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Trang Chủ</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Loại Sách</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              <?php while($row = mysqli_fetch_array($query_danhmuc)){ ?>
              	<a class="dropdown-item" href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a>
              <?php } ?>
              </div>
            </li>
	          <li class="nav-item"><a href="index.php?quanly=tintuc" class="nav-link">Tin Tức</a></li>
	          <li class="nav-item"><a href="index.php?quanly=lienhe" class="nav-link">Liên Hệ</a></li>
	          <li class="nav-item"><a href="index.php?quanly=timkiem" class="nav-link">Tìm Kiếm</a></li>
          <?php if(isset($_SESSION['dangky']))
            { 
            if($phanquyen == 1){
            ?>
            <li class="nav-item"><a href="admincp/login.php?idkh=<?php echo $_SESSION['dangky']; ?>" target="_blank" class="nav-link">Quản trị viên</a></li>
            <?php
            }elseif($phanquyen == 2)
            {
            ?> <li class="nav-item"><a href="Staff/login.php?idkh=<?php echo $_SESSION['dangky']; ?>" target="_blank" class="nav-link">Nhân Viên</a></li> <?php 
            }else
            {

            }
            }
                if(isset($_SESSION['dangky'])){ 
            ?>
              <!-- <li class="nav-item"><a href="index.php?dangxuat=1" class="nav-link"> -->
              <li class="nav-item"><a href="index.php?quanly=nguoidung" class="nav-link">
                      <?php
                      if(isset($_SESSION['id_khachhang'])){
                        echo $ten;
                      } 
                      ?>
                    </a>
                </li>
                <?php
                    }else{ 
                ?>
                 <li class="nav-item"><a href="index.php?quanly=dangnhap" class="nav-link">Đăng Nhập</a></li>
                 <?php
                    }
                 ?>
	          <li class="nav-item cta cta-colored"><a href="index.php?quanly=giohang" class="nav-link"><span class="icon-shopping_cart"></span>[<?php if(isset($_SESSION['soluong'])){ echo $_SESSION['soluong']; }else{ echo '0'; } ?>]</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>