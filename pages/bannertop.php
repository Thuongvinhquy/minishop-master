<?php
	$sql_lietke_footer = "SELECT * FROM tbl_footer ORDER BY id_footer DESC";
	$query_lietke_footer = mysqli_query($mysqli,$sql_lietke_footer);
    while($row = mysqli_fetch_array($query_lietke_footer)){
?>
<div class="py-1 bg-black">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text"><?php echo $row['sdt']; ?></span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text"><?php echo $row['email']; ?></span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">Giao hàng từ 3-5 ngày &amp; đổi trả hàng miễn phí</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
<?php } ?>