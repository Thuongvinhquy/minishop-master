<?php
	$sql_lietke_sp = "SELECT * FROM tbl_baiviet ORDER BY id_baiviet DESC";
	$query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<h5>Bài viết</h5>
<div class="table-responsive">
  <table class="table" style="width:100%" style="border-collapse: collapse;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col" style="text-align: center;">tiêu đề</th>
      <th scope="col" style="text-align: center;">nội dung</th>
      <th scope="col" style="text-align: center;">Hình ảnh</th>
      <th scope="col" style="text-align: center;">Nơi thêm</th>
    </tr>
  </thead>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_sp)){
      $i++;
    ?>
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td style="text-align: center;"><?php echo $row['tieude'] ?></td>
      <td style="text-align: center;"><?php echo $row['noidung'] ?></td>
      <td style="text-align: center;"><img src="../admincp/modules/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
      <td style="text-align: center;"><?php if($row['noithem']==1){
          echo 'Bài viết trang chủ';
        }else{
          echo 'Bài Viết trang giới thiệu';
        } 
        ?>
        
      </td>
    
    </tr>
    <?php
    } 
    ?>
  
  </table>
</div>