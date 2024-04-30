<p>Thêm sản phẩm</p>
<div class="table-responsive">
<table class="table" width="100%" style="border-collapse: collapse;">
 <form method="POST" action="modules/quanlybaiviet/xuly.php" enctype="multipart/form-data">
	  <tr>
	  	<td>Tên sản phẩm</td>
	  	<td><input class="form-control" type="text" name="tieude"></td>
	  </tr>
	  <tr>
	  	<td>Nội dung</td>
	  	<td><textarea class="form-control" rows="10"  name="noidung" style="resize: none"></textarea></td>
	  </tr>
	   <tr>
	  	<td>Hình ảnh</td>
	  	<td><input class="form-control" type="file" name="hinhanh"></td>
	  </tr>
	  <tr>
		  <td>Nơi thêm bài viết</td>
	  <td>
	    	<select class="form-select" name="noithem">
	    		<option value="1">Bài viết trang chủ</option>
	    		<option value="0">Bài Viết trang giới thiệu</option>
	    	</select>
	    </td>
	  </tr>
	   <tr>
	    <td colspan="2"><input class="form-control" style="background-color: cadetblue;" type="submit" name="thembaiviet" value="Thêm bài viết"></td>
	  </tr>
 </form>
</table>
</div>