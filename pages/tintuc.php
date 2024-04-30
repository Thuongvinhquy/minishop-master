
<?php
    $sql_hinhanh = "SELECT * FROM tbl_baiviet WHERE noithem='1' ORDER BY id_baiviet";
    $query_lietke = mysqli_query($mysqli, $sql_hinhanh);
    $i = 0;
?>

<?php
    $sql_hinhanh2 = "SELECT * FROM tbl_baiviet WHERE noithem='0' ORDER BY id_baiviet ASC LIMIT 3";
    $query_lietke2 = mysqli_query($mysqli, $sql_hinhanh2);
?>

<div class="clear"></div>
<div class="clear" style="margin-top: 3%;">
<section class="ftco-section bg-light">
      <div class="container-fluid" style="padding-bottom: 50px; padding-left: 4px; padding-right: 31px;">
        <div class="row">
        <?php
          while($row = mysqli_fetch_array($query_lietke2))
          {
            $i++
        ?>
          <div class="col-xs-12 col-sm-4 home-banner-pd ftco-animate product">
            <div class="block-banner-category">
              <a href="#" class="link-banner wrap-flex-align flex-column">
                <div class="fg-image fade-box bg-image hover-zoom">
                    <a href="#" class="img-prod">
                      <img class="lazyloaded w-100" src="admincp/modules/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>" alt="Shoes" style="width: 107%; height: auto;">
                  </a>
                </div>
                
              </a>
            </div>
          </div>
          <?php
          }
          ?>
        </div>
      </div>
    </section>
</div>
<section class="" style="margin-top: 1%;">
  <div class="content">
          <div class="container">
            <div class="hot_sp">
              <h2 style="text-align:center;padding-top: 10px">
                <a style="font-size: 28px;color: black;text-decoration: none" href="">Bài viết mới nhất</a>
              </h2>
              <br />
            </div>
          </div>
        </div>

    
      


        <div class="clear">
  <div class="container"> 
    
  <div class="row">
  <?php
    while($row = mysqli_fetch_array($query_lietke))
    {
      $i++
  ?>
 
    <div class="col-md-4">
      <div class="post_item">
        <div style="text-align: center;" class="post_featured">
          <img src="admincp/modules/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>" width="60%">
        </div>
        <div class="pro-text" style="text-align: center;">
          <span class="post_info_item" >

            Thứ Ba 11/06/2020

          </span>
        </div>
        <div style="text-align: center;" class="pro-text ftco-animate">
          <h3 class="post_title">
            <a style=" color: black;
                          font-size: 18.4px;text-decoration: none;" href="#" inspiration pack>
              <?php echo $row['tieude']; ?>
            </a>
          </h3>
        </div>
        <div class="ftco-animate" style="text-align:center; padding-bottom: 30px; font-size: 15px; font-style: italic;">
          <p class="text-justify"><?php echo $row['noidung']; ?></p>
        </div>
      </div>
    </div>
  
  <?php
    }
    ?>
  </div>

  </div>
  </div>

  