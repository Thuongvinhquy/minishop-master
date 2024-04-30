<?php
include('../../config/config.php');
if(isset($_GET['idpq']) && isset($_GET['idkh']))
{
	$idpq = $_GET['idpq'];
	$idkh = $_GET['idkh'];
	if($idpq == 1)
	{
		$sql_update = "UPDATE tbl_dangky SET phanquyen=1 WHERE id_dangky='$idkh'";
		mysqli_query($mysqli,$sql_update);
	}elseif($idpq == 2)
	{
		$sql_update = "UPDATE tbl_dangky SET phanquyen=2 WHERE id_dangky='$idkh'";
		mysqli_query($mysqli,$sql_update);
	}else 
	{
		$sql_update = "UPDATE tbl_dangky SET phanquyen=0 WHERE id_dangky='$idkh'";
		mysqli_query($mysqli,$sql_update);
	}
	header('Location:../../index.php?action=quanlytaikhoan&query=them');
}

?>