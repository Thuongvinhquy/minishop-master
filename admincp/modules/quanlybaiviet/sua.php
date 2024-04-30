<?php
	$sql_sua_sp = "SELECT * FROM tbl_baiviet WHERE id_baiviet='$_GET[idbv]' LIMIT 1";
	$query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>
<p>Sửa sản phẩm</p>
<div class="table-responsive">
<table class="table" width="100%" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua_sp)) {
?>
 <form method="POST" action="modules/quanlybaiviet/xuly.php?idbv=<?php echo $row['id_baiviet'] ?>" enctype="multipart/form-data">
	  <tr>
	  	<td>Tên sản phẩm</td>
	  	<td><input class="form-control" type="text" value="<?php echo $row['tieude'] ?>" name="tieude"></td>
	  </tr>
	  <tr>
	  	<td>Tóm tắt</td>
	  	<td><textarea class="form-control" rows="10"  name="noidung" style="resize: none"><?php echo $row['noidung'] ?></textarea></td>
	  </tr>
	   <tr>
	  	<td>Hình ảnh</td>
	  	<td>
	  		<input class="form-control" type="file" name="hinhanh">
	  		<img src="modules/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
	  	</td>
		  <tr>
	    <td>Nơi thêm bài viết</td>
	    <td>
	    	<select class="form-select" name="noithem">
	    		<?php
	    		if($row['noithem']==1){ 
	    		?>
	    		<option value="1" selected>Bài viết trang chủ</option>
	    		<option value="0">Bài Viết trang giới thiệu</option>
	    		<?php
	    		}else{ 
	    		?>
	    		<option value="1">Bài viết trang chủ</option>
	    		<option value="0" selected>Bài Viết trang giới thiệu</option>
	    		<?php
	    		} 
	    		?>

	    	</select>
	    </td>
	  </tr>
	   <tr>
	    <td colspan="2"><input class="form-control" style="background-color: cadetblue;" type="submit" name="suabaiviet" value="Sửa bài viết"></td>
	  </tr>
 </form>
 <?php
 } 
 ?>

</table>
</div>