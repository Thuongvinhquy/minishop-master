<?php
	$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' and tinhtrang='1' ORDER BY id_sanpham DESC";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	//get ten danh muc
	$sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
	$query_cate = mysqli_query($mysqli,$sql_cate);
	$row_title = mysqli_fetch_array($query_cate);
?>
	<section class="ftco-section bg-light container">
	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4"><?php echo $row_title['tendanhmuc'] ?></h2>
          </div>
        </div>   		
    	</div>
		<div class="container">
    		<div class="row">
					<?php
					$tinhsao = 0;
					while($row = mysqli_fetch_array($query_pro)){ 
						$tinhsao = ($row['sao1'] + $row['sao2']*2 + $row['sao3']*3 + $row['sao4']*4 + $row['sao5']*5);
					?>


    			<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
    				<div class="product d-flex flex-column">
    					<a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="img-prod"><img class="img-fluid" src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3">
    						<div class="d-flex">
    							<div class="cat">
									<span>Series:<?php echo $row['masp']; ?></span>
		    					</div>
		    					<div class="rating">
	    							<p class="text-right mb-0">
									<?php echo $tinhsao ?>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    							</p>
	    						</div>
	    					</div>
    						<h3><a href="#"><?php echo $row['tensanpham'] ?></a></h3>
    						<div class="pricing">
	    						<p class="price"><span><?php echo number_format($row['giasp'],0,',','.').' vnđ' ?></span></p>
	    					</div>
	    					<p class="bottom-area d-flex px-3">
    							<a href="pages/main/themgiohang.php?idgiohang=<?php echo $row['id_sanpham'] ?>" class="buy-now text-center py-2">Thêm Giỏ hàng<span><i class="ion-ios-cart ml-1"></i></span></a>
    						</p>
    					</div>
    				</div>
    			</div>

					<?php
					} 
					?>
		</div>
	</section>