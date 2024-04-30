<?php
	$sql_lietke = "SELECT * FROM tbl_banner WHERE id_banner='1' LIMIT 1";
	$query_lietke = mysqli_query($mysqli,$sql_lietke);

	$sql_lietke2 = "SELECT * FROM tbl_banner WHERE id_banner='2' LIMIT 1";
	$query_lietke2 = mysqli_query($mysqli,$sql_lietke2);
?>  
    <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
		  <?php while($row = mysqli_fetch_array($query_lietke)){ ?>
	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
	          	<img class="one-third order-md-last img-fluid" src="admincp/modules/quanlybanner/uploads/<?php echo $row['hinhanh'] ?>" alt="">
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">#SÁCH MỚI</span>
		          		<div class="horizontal">
				            <h1 class="mb-4 mt-3"><?php echo $row['tenbanner']; ?></h1>
				            <p class="mb-4" style="white-space:pre-line;"><?php echo $row['noidungbanner']; ?></p>
				            
				            <p><a href="#" class="btn-custom">MUA NGAY</a></p>
				          </div>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
			<?php } while($row = mysqli_fetch_array($query_lietke2)){ ?>
	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
	          	<img class="one-third order-md-last img-fluid" src="admincp/modules/quanlybanner/uploads/<?php echo $row['hinhanh'] ?>" alt="">
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">#SÁCH MỚI</span>
		          		<div class="horizontal">
				            <h1 class="mb-4 mt-3"><?php echo $row['tenbanner']; ?></h1>
				            <p class="mb-4" style="white-space:pre-line;"><?php echo $row['noidungbanner']; ?></p>
				            
				            <p><a href="#" class="btn-custom">MUA NGAY</a></p>
				          </div>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
		<?php } ?>
	    </div>
    </section>