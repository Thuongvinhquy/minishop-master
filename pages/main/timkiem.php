<?php
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
	}else{
		$tukhoa = '';
	}
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
	$query_pro = mysqli_query($mysqli,$sql_pro);

	$chay=0;
	if(isset($_POST['nholon'])){
		$nho = $_POST['nho'];
		$lon = $_POST['lon'];
		$chay = 1;
	}else{
		$nho = '';
		$lon = '';
	}

	$sql_pro1 = "SELECT * FROM tbl_sanpham WHERE giasp BETWEEN $nho and $lon ORDER BY giasp";
	$query_pro1 = mysqli_query($mysqli,$sql_pro1);
	
	
?>
 <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-8 col-lg-10 order-md-last">
    				<div class="row">

					<?php
					$tinhsao = 0;
					if($chay == 1)
					{ 
						while($row = mysqli_fetch_array($query_pro1)){ 
							$tinhsao = ($row['sao1'] + $row['sao2']*2 + $row['sao3']*3 + $row['sao4']*4 + $row['sao5']*5);
						?>
						<div class="col-sm-12 col-md-12 col-lg-4 ftco-animate d-flex">
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
					<?php } }else{
					while($row = mysqli_fetch_array($query_pro)){ 
						$tinhsao = ($row['sao1'] + $row['sao2']*2 + $row['sao3']*3 + $row['sao4']*4 + $row['sao5']*5);
					?>
						
		    			<div class="col-sm-12 col-md-12 col-lg-4 ftco-animate d-flex">
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
					} }
					?>


		    		</div>
		    	</div>

		    	<div class="col-md-4 col-lg-2">
		    		<div class="">
						
					<div class="col-md-17">
	                <div class="form-group">
					<h4 class="heading">Theo tên</h4>
						<form action="" method="POST" autocomplete="off" class="colorlib-form-2">
	                  		
							<div style="float: left;" class="input-group-append">
								<input type="text" class="form-control" name="tukhoa" placeholder="Tìm kiếm...">
								<button
									class="btn btn-secondary"
									type="submit"
									name="timkiem"
									style="background-color: #f26522; border-color: #f26522"
								><i class="icon-search"></i>
								</button>
							</div>
						</form>
	                </div>
	              </div>
							<div style="margin-top: 30%;" class="sidebar-box-2">
								<br><br><h2 class="heading">Theo giá</h2>
								<form action="" method="post" class="colorlib-form-2" autocomplete="off">
		              <div class="row">
		                <div class="col-md-12">
		                  <div class="form-group">
		                    <label for="guests">Từ:</label>
		                    <div class="form-field">
		                      <i class="icon icon-arrow-down3"></i>
		                      <select name="nho" id="people" class="form-control">
		                        <option value="0">0</option>
		                        <option value="20000">20.000 vnđ</option>
		                        <option value="40000">40.000 vnđ</option>
		                        <option value="60000">60.000 vnđ</option>
		                        <option value="80000">80.000 vnđ</option>
		                      </select>
		                    </div>
		                  </div>
		                </div>
		                <div class="col-md-12">
		                  <div class="form-group">
		                    <label for="guests">Đến</label>
		                    <div class="form-field">
		                      <i class="icon icon-arrow-down3"></i>
		                      <select name="lon" id="people" class="form-control">
		                        <option value="0">0</option>
		                        <option value="40000">40.000 vnđ</option>
		                        <option value="60000">60.000 vnđ</option>
		                        <option value="100000">100.000 vnđ</option>
		                        <option value="200000">200.000 vnđ</option>
		                      </select>
		                    </div>
		                  </div>
		                </div>
		              </div>
					  <p class="text-center"><input type="submit" name="nholon" class="btn btn-primary py-3 px-4" value="Tìm kiếm"></p>
		            </form>
							</div>
						</div>
    			</div>
    		</div>
    	</div>
    </section>