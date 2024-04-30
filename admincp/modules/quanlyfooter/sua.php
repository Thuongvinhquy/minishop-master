<?php
	$sql_sua_footer = "SELECT * FROM tbl_footer WHERE id_footer='$_GET[id]' LIMIT 1";
	$query_sua_footer = mysqli_query($mysqli,$sql_sua_footer);
?>
<p>Sửa danh mục sản phẩm</p>
<div class="table-responsive">
<table class="table" width="50%" style="border-collapse: collapse;">
 <form method="POST" action="modules/quanlyfooter/xuly.php?id=<?php echo $_GET['id'] ?>">
 	<?php
 	while($row = mysqli_fetch_array($query_sua_footer)) {
 	?>
	  <tr>
	  	<td>Địa chỉ</td>
	  	<td><input class="form-control" type="text" value="<?php echo $row['diachi'] ?>" name="diachi"></td>
	  </tr>
	  <tr>
	    <td>Số điện thoại</td>
	    <td><input class="form-control" type="text" value="<?php echo $row['sdt'] ?>" name="sdt"></td>
	  </tr>
	  <tr>
	    <td>email</td>
	    <td><input class="form-control" type="text" value="<?php echo $row['email'] ?>" name="email"></td>
	  </tr>
	  <tr>
	    <td>Link facebook</td>
	    <td><input class="form-control" type="text" value="<?php echo $row['linkfb'] ?>" name="linkfb"></td>
	  </tr>
	  <tr>
	    <td>Link instagram</td>
	    <td><input class="form-control" type="text" value="<?php echo $row['linkig'] ?>" name="linkig"></td>
	  </tr>
	   <tr>
	   <td colspan="2">
		   <input class="form-control" style="background-color: cadetblue;" type="submit" name="suafooter" value="Sửa footer">
		</td>
	  </tr>
	  <?php
	  } 
	  ?>

 </form>
</table>
</div>