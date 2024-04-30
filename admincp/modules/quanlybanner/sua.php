<?php
	$sql_sua_sp = "SELECT * FROM tbl_banner WHERE id_banner='$_GET[idbn]' LIMIT 1";
	$query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>
<p>Sửa Banner</p>
<div class="table-responsive">
<table class="table" width="100%" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua_sp)) {
?>
 <form method="POST" action="modules/quanlybanner/xuly.php?idbn=<?php echo $row['id_banner'] ?>" enctype="multipart/form-data">
	  <tr>
	  	<td>Tiều đề</td>
	  	<td><input class="form-control" type="text" value="<?php echo $row['tenbanner'] ?>" name="tieude"></td>
	  </tr>
	  <tr>
	  	<td>Nội dung</td>
	  	<td><textarea class="form-control" rows="10"  name="noidung" style="resize: none"><?php echo $row['noidungbanner'] ?></textarea></td>
	  </tr>
	   <tr>
	  	<td>Hình ảnh</td>
	  	<td>
	  		<input class="form-control" type="file" name="hinhanh">
	  		<img src="modules/quanlybanner/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
	  	</td>
	   <tr>
	    <td colspan="2"><input class="form-control" style="background-color: cadetblue;" type="submit" name="suabanner" value="Sửa banner"></td>
	  </tr>
 </form>
 <?php
 } 
 ?>

</table>
</div>