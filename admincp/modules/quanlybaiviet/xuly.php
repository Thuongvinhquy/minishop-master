<?php
include('../../config/config.php');


$tieude = $_POST['tieude'];
$noidung = $_POST['noidung'];
//xuly hinh anh
$hinhanh2 = $_FILES['hinhanh']['name'];
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
$noithem = $_POST['noithem'];


if(isset($_POST['thembaiviet'])){
	//them
	$sql_them = "INSERT INTO tbl_baiviet(tieude,noidung,hinhanh,noithem) VALUE('".$tieude."','".$noidung."','".$hinhanh."','".$noithem."')";
	mysqli_query($mysqli,$sql_them);
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	header('Location:../../index.php?action=quanlybaiviet&query=them');
}elseif(isset($_POST['suabaiviet'])){
	//sua
	if($hinhanh2 != null){
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
		
		$sql_update = "UPDATE tbl_baiviet SET tieude='".$tieude."',noidung='".$noidung."',hinhanh='".$hinhanh."',noithem='".$noithem."' WHERE id_baiviet='$_GET[idbv]'";
		//xoa hinh anh cu
		$sql = "SELECT * FROM tbl_baiviet WHERE id_baiviet = '$_GET[idbv]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['hinhanh']);
		}

	}else{
		$sql_update = "UPDATE tbl_baiviet SET tieude='".$tieude."',noidung='".$noidung."',noithem='".$noithem."' WHERE id_baiviet='$_GET[idbv]'";
	}
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlybaiviet&query=them');
}else{
	$id=$_GET['idbv'];
	$sql = "SELECT * FROM tbl_baiviet WHERE id_baiviet = '$id' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	while($row = mysqli_fetch_array($query)){
		unlink('uploads/'.$row['hinhanh']);
	}
	$sql_xoa = "DELETE FROM tbl_baiviet WHERE id_baiviet='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlybaiviet&query=them');
}

?>