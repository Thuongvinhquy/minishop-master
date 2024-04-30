<?php
	$sql_lietke_footer = "SELECT * FROM tbl_footer ORDER BY id_footer DESC";
	$query_lietke_footer = mysqli_query($mysqli,$sql_lietke_footer);
    while($row = mysqli_fetch_array($query_lietke_footer)){
?>
<footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">SHOPBOOK210</h2>
              <p>Một cuốn sách dù dở đến đâu ta cũng thu lượm được vài điều đặc biệt của nó.(Danh ngôn sống)</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="<?php echo $row['linkfb']; ?>"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="<?php echo $row['linkig']; ?>"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Trợ giúp</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Thông tin vận chuyển</a></li>
	                <li><a href="#" class="py-2 d-block">Trả hàng &amp; Mua bán </a></li>
	                <li><a href="#" class="py-2 d-block">Diều khoản &amp; Sử dụng</a></li>
	                <li><a href="#" class="py-2 d-block">Chính sách bảo mật</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">Câu hỏi thường gặp</a></li>
	                <li><a href="#" class="py-2 d-block">Tư vấn khách hàng</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Liên hệ</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text"><?php echo $row['diachi']; ?></span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text"><?php echo $row['sdt']; ?></span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text"><?php echo $row['email']; ?></span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
<?php } ?>