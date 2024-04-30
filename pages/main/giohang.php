<?php
	if(isset($_SESSION['cart'])){
		
	}
?>
<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Sản Phẩm</th>
						        <th>Giá Bán</th>
						        <th>Số Lượng</th>
						        <th>Thành Tiền</th>
						      </tr>
						    </thead>
                  <tbody>
                      <?php
                      if(isset($_SESSION['cart'])){
                        $i = 0;
                        $tongtien = 0;
                        foreach($_SESSION['cart'] as $cart_item){
                          $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
                          $tongtien+=$thanhtien;
                          $i++;
                      ?>
                    <tr class="text-center">
                        <td class="product-remove"><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>"><span class="ion-ios-close"></span></a></td>
                        
                        <td class="image-prod"><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" alt="" width="50%"></div></td>
                        
                        <td class="product-name">
                          <h3><?php echo $cart_item['tensanpham']; ?></h3>
                          <p><?php echo $cart_item['masp']; ?></p>
                        </td>
                        
                        <td class="price"><?php echo number_format($cart_item['giasp'],0,',','.').'vnđ'; ?></td>
                        
                        <td class="quantity">
                          <div class="input-group mb-3">
                            <a class="quantity-left-minus btn" href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="ion-ios-remove"></i></a>
                            
                                <input type="text" name="quantity" class="quantity form-control input-number" readonly value="<?php echo $cart_item['soluong']; ?>" min="1" max="100">
                            <a class="quantity-right-plus btn" href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="ion-ios-add"></i></a>
                          </div>
                        </td>
                        
                        <td class="total">&nbsp;<?php echo number_format($thanhtien,0,',','.').'vnđ' ?>&nbsp;</td>
                    </tr>


                      <?php
                        }
                        $_SESSION['soluong'] = $i;
                      ?>

                      <?php	
                      }else{ 
                      ?>
                      <tr>
                        <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
                        <?php unset($_SESSION['soluong']); ?>
                      </tr>
                      <?php
                      } 
                      ?>
                    </div>
                </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
  <?php if(isset($_SESSION['cart'])){ ?>
  <div class="row justify-content-start">
    			<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Tổng Số Giỏ Hàng</h3>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Tổng Tiền</span>
    						<span><?php if(isset($tongtien)){echo number_format($tongtien,0,',','.').'vnđ'; }else{echo '0vnđ';}  ?></span>
    					</p>
    				</div>
        <?php
          if(isset($_SESSION['dangky'])){
        ?>
    				<p class="text-center"><a href="pages/main/thanhtoan.php" class="btn btn-primary py-3 px-4">Đặt Hàng</a></p>
        <?php
          }else{
        ?>
            <p class="text-center"><a href="index.php?quanly=dangky" class="btn btn-primary py-3 px-4">Đăng Ký Đặt Hàng</a></p>
        <?php
           }
        ?>
    			</div>
    		</div>
        <?php } ?>

  
</section>