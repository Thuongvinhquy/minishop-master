<?php
include('../../config/config.php');

$diachi = $_POST['diachi'];
$sdt = $_POST['sdt'];
$email = $_POST['email'];
$linkfb = $_POST['linkfb'];
$linkig = $_POST['linkig'];


if(isset($_POST['suafooter'])){
	//sua
	$sql_update = "UPDATE tbl_footer SET diachi='".$diachi."',sdt='".$sdt."',email='".$email."',linkfb='".$linkfb."',linkig='".$linkig."' WHERE id_footer='$_GET[id]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlyfooter&query=them');
}

?>