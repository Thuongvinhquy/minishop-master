<?php
	$sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
	$query_chitiet = mysqli_query($mysqli,$sql_chitiet);

	$sql_cmt = "SELECT * FROM tbl_cmt where id_sanpham='$_GET[id]' and duyet_cmt=1 ORDER BY id_cmt desc";
	$query_cmt = mysqli_query($mysqli,$sql_cmt);
	$nguoidg=0;
	while($row_chitiet = mysqli_fetch_array($query_chitiet)){
		$id_sanpham = $row_chitiet['id_sanpham'];
		$nguoidg = $row_chitiet['sao1'] + $row_chitiet['sao2'] + $row_chitiet['sao3'] +$row_chitiet['sao4'] +$row_chitiet['sao5'];

		
?>

    <section class="ftco-section">
    	<div class="container">
		<form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>" class="image-popup prod-img-bg"><img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3><?php echo $row_chitiet['tensanpham'] ?></h3>	
    				<div class="rating d-flex">
					<p class="text-left mr-4">
						<a href="#"><span class="ion-ios-star-outline"><?php echo $row_chitiet['sao1'] ?></span></a>
						<a href="#"><span class="ion-ios-star-outline"><?php echo $row_chitiet['sao2'] ?></span></a>
						<a href="#"><span class="ion-ios-star-outline"><?php echo $row_chitiet['sao3'] ?></span></a>
						<a href="#"><span class="ion-ios-star-outline"><?php echo $row_chitiet['sao4'] ?></span></a>
						<a href="#"><span class="ion-ios-star-outline"><?php echo $row_chitiet['sao5'] ?></span></a>
					</p>
						</div>
					<p class="price"><span><?php echo number_format($row_chitiet['giasp'],0,',','.').'VND' ?></span></p>
					<p style="white-space:pre-line;"><?php echo $row_chitiet['tomtat'] ?></p>
						<div class="row mt-4">
						<div class="w-100"></div>
						<p style="color: #000;">Số lượng</p>
						<div class="input-group col-md-6 d-flex mb-3">
	             			<input type="text" name="soluong" value="1" id="femail" autocomplete="off" class="quantity form-control input-number">
	          			</div>
	          	<div class="w-100"></div>
	          	<div class="col-md-12">
	          		<p style="color: #000;">còn <?php echo $row_chitiet['soluong'] ?> cuốn</p>
	          	</div>
          	</div>
          	<p><input class="btn btn-black py-3 px-5 mr-2" name="themgiohang" type="submit" value="Thêm giỏ hàng"></p>
    			</div>
    		</div>
		</form>




    		<div class="row mt-5">
          <div class="col-md-12 nav-link-wrap">
            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link ftco-animate active mr-lg-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Tóm Tắt</a>

              <a class="nav-link ftco-animate mr-lg-1" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Nội Dung</a>

              <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Bình Luận & Đánh Giá</a>

            </div>
          </div>
          <div class="col-md-12 tab-wrap">
            
            <div class="tab-content bg-light" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
              	<div class="p-4">
	              	<h3 class="mb-4"><?php echo $row_chitiet['tensanpham']; ?></h3>
	              	<p style="white-space:pre-line;"><?php echo $row_chitiet['tomtat']; ?></p>
              	</div>
              </div>

              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
              	<div class="p-4">
	              	<h3 class="mb-4"><?php echo $row_chitiet['tensanpham']; ?></h3>
	              	<p style="white-space:pre-line;"><?php echo $row_chitiet['noidung']; ?></p>
              	</div>
              </div>
			  <?php
				}
			?>
              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
              	<div class="row p-4">
						   		<div class="col-md-7">

						   			<h3 class="mb-4">Bình Luận</h3>
								<?php while($row_cmt = mysqli_fetch_array($query_cmt)){ ?>
						   			<div class="review">
								   		<div class="user-img" style="background-image: url(images/User.png)"></div>
									
								   		<div class="desc">
								   			<h4>
								   				<span class="text-left"><?php echo $row_cmt['ten_cmt'] ?></span>
								   				<span class="text-right"><?php echo $row_cmt['ngay_cmt'] ?></span>
								   			</h4>
								   			<p class="star">
								   				<span>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
							   					</span>
											<?php 
											if(isset($_SESSION['dangky'])){
												if($row_cmt['id_kh'] == $_SESSION['id_khachhang']){ ?>
												<span class="text-right"><a href="pages/main/sanpham_xuly.php?id_xoa=<?php echo $row_cmt['id_cmt'] ?>" class="reply"><i class="icon-delete"></i></a></span>
											<?php 
											}
										}
											?>
				
								   			</p>
								   			<p><?php echo $row_cmt['noidung_cmt'] ?></p>
								   		</div>
									
								   	</div>
								<?php } ?>
								<style>
									 .form {
									text-align: center;
									margin-top: 5%;
									height: 0px;
									}
									#form1 
									{
									width: 100%;
									background: #fff;
									margin: 0 auto;
									}
									#form1 input[type=text] 
									{
									width: 100%;
									box-sizing: border-box;
									font-size: 18px;
									color: #555;
									display: block;
									line-height: 1.2;
									background-color: rgb(218, 218, 218);
									border-radius: 20px;
									margin-bottom: 10px;
									height: 50px;
									padding: 0 20px 0 23px;
									border: 0;
									box-shadow: 0 5px 20px 0 rgb(0 0 0 / 5%);
									-moz-box-shadow: 0 5px 20px 0 rgba(0,0,0,.05);
									-webkit-box-shadow: 0 5px 20px 0 rgb(0 0 0 / 5%);
									-o-box-shadow: 0 5px 20px 0 rgba(0,0,0,.05);
									-ms-box-shadow: 0 5px 20px 0 rgba(0,0,0,.05);
									}
									#form1 input[type=text]:focus
									{
									border: 0;
									outline: none;
									box-shadow: 0 5px 20px 0 rgb(250 66 81 / 10%);
									-moz-box-shadow: 0 5px 20px 0 rgba(250,66,81,.1);
									-webkit-box-shadow: 0 5px 20px 0 rgb(250 66 81 / 10%);
									-o-box-shadow: 0 5px 20px 0 rgba(250,66,81,.1);
									-ms-box-shadow: 0 5px 20px 0 rgba(250,66,81,.1);
									}
									#form1 #fcontent 
									{
									outline: none;
									min-height: 150px;
									}
									#form1 input[type=submit] 
									{
									width: 40%;
									background-color: #bd59d4;
									height: 42%;
									line-height: 4%;
									padding: 4% 8%;
									border-radius: 21px;
									font-size: 14px;
									text-transform: uppercase;
									color: #fff;
									border: 0;
									box-shadow: 0 10px 30px 0 rgb(189 89 212 / 50%);
									-moz-box-shadow: 0 10px 30px 0 rgba(189,89,212,.5);
									-webkit-box-shadow: 0 10px 30px 0 rgb(189 89 212 / 50%);
									-o-box-shadow: 0 10px 30px 0 rgba(189,89,212,.5);
									-ms-box-shadow: 0 10px 30px 0 rgba(189,89,212,.5);
									}
									#form1 input[type="submit"]:hover 
									{
									background:#CC4949;
									}
								</style>
									<div id="form" class="ftco-animate">
									   <form id="form1" class="form" action="pages/main/sanpham_xuly.php?id_cmt=<?php echo $id_sanpham ?>&id_kh=<?php if(isset($_SESSION['id_khachhang'])){ echo $_SESSION['id_khachhang']; } ?>" method="POST">
											<input type="text" name="ten_cmt" readonly value="<?php if(isset($_SESSION['dangky']) != null){echo $_SESSION['dangky'];}else echo 'Bạn chưa đăng nhập'  ?>">
											<input type="text" id="fcontent"  name="noidung_cmt" placeholder="Bình luận..." autocomplete="off">
											<br>
											<input style="float: right;" type="submit" name="cmt" class="btn btn-outline-primary" value="Bình luận">
										</form>
									</div>
						   		</div>
								   
						   	<style>
								.danhgia a
								{
									margin-right: 3%;
									font-size: 200%;
								}
								.danhgia a:hover
								{
									margin-left: 10px;
									/* padding: 5%; */
								}
							   </style>
						   		<div class="col-md-5">
						   			<div class="rating-wrap">
							   			<h3 class="mb-4">Đánh Giá Sản Phẩm</h3>
							   			<p class="star">
							   				<span class="danhgia">
							   					<a <?php if(isset($_SESSION['dangky'])){ ?> href="pages/main/sanpham_xuly.php?id_dg=<?php echo $id_sanpham ?>&iddanhgia=1" <?php }else{ ?> href="index.php?quanly=dangnhap" <?php } ?>><i class="ion-ios-star-outline"></i></a>
							   					<a <?php if(isset($_SESSION['dangky'])){ ?> href="pages/main/sanpham_xuly.php?id_dg=<?php echo $id_sanpham ?>&iddanhgia=2" <?php }else{ ?> href="index.php?quanly=dangnhap" <?php } ?>><i class="ion-ios-star-outline"></i></a>
							   					<a <?php if(isset($_SESSION['dangky'])){ ?> href="pages/main/sanpham_xuly.php?id_dg=<?php echo $id_sanpham ?>&iddanhgia=3" <?php }else{ ?> href="index.php?quanly=dangnhap" <?php } ?>><i class="ion-ios-star-outline"></i></a>
							   					<a <?php if(isset($_SESSION['dangky'])){ ?> href="pages/main/sanpham_xuly.php?id_dg=<?php echo $id_sanpham ?>&iddanhgia=4" <?php }else{ ?> href="index.php?quanly=dangnhap" <?php } ?>><i class="ion-ios-star-outline"></i></a>
							   					<a <?php if(isset($_SESSION['dangky'])){ ?> href="pages/main/sanpham_xuly.php?id_dg=<?php echo $id_sanpham ?>&iddanhgia=5" <?php }else{ ?> href="index.php?quanly=dangnhap" <?php } ?>><i class="ion-ios-star-outline"></i></a>
						   					</span>
											   <br><?php if(!isset($_SESSION['dangky'])){ echo 'Hãy đăng nhập để được đánh giá'; }?>
						   					<br><span><?php echo $nguoidg ?> Lượt Đánh Giá</span>
							   			</p>
							   		</div>
						   		</div>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>