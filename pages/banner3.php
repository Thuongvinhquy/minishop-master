<?php
	$sql_lietke_footer = "SELECT * FROM tbl_footer ORDER BY id_footer DESC";
	$query_lietke_footer = mysqli_query($mysqli,$sql_lietke_footer);
    while($row = mysqli_fetch_array($query_lietke_footer)){
?>
<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-bag"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Miễn Phí Vận Chuyển</h3>
                <p>Mã freeship extra cho các đơn hàng từ 0đ còn sử dụng được 100% được cập nhật liên tục mỗi ngày </p>
              </div>
            </div>      
          </div>
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Hỗ Trợ Khách Hàng</h3>
                <p>Gọi tổng đài chăm sóc khách hàng <?php echo $row['sdt'] ?> để được phục vụ 365 ngày/năm từ 7:00 đến 22:00</p>
              </div>
            </div>    
          </div>
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-payment-security"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Thanh Toán An Toàn</h3>
                <p> Thời gian khách hàng nhận được tiền hoàn từ 7 - 10 ngày (trừ Thứ 7, Chủ Nhật và Ngày lễ)</p>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>
    <?php } ?>