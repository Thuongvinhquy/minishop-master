<?php
include('../../config/config.php');


$tieude = $_POST['tieude'];
$noidung = $_POST['noidung'];
//xuly hinh anh
$hinhanh2 = $_FILES['hinhanh']['name'];
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;


if(isset($_POST['suabanner'])){
	//sua
	if($hinhanh2 != null){
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
		
		$sql_update = "UPDATE tbl_banner SET tenbanner='".$tieude."',noidungbanner='".$noidung."',hinhanh='".$hinhanh."' WHERE id_banner='$_GET[idbn]'";
		//xoa hinh anh cu
		$sql = "SELECT * FROM tbl_banner WHERE id_banner = '$_GET[idbn]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['hinhanh']);
		}

	}else{
		$sql_update = "UPDATE tbl_banner SET tenbanner='".$tieude."',noidungbanner='".$noidung."' WHERE id_banner='$_GET[idbn]'";
	}
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlybanner&query=them');
}

?>