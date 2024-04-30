<?php
include('../../config/config.php');
if(isset($_GET['idcmt']))
{
	$duyet = 1;
	$sql_update = "UPDATE tbl_cmt SET duyet_cmt='".$duyet."' WHERE id_cmt='$_GET[idcmt]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlycmt&query=them');
}elseif(isset($_GET['huycmt'])){
	$duyet = $row['duyet_cmt'] + 0;
	$sql_update = "UPDATE tbl_cmt SET duyet_cmt='".$duyet."' WHERE id_cmt='$_GET[huycmt]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlycmt&query=them');
}

else
{
	$sql_xoa = "DELETE FROM tbl_cmt WHERE id_cmt='".$_GET['idxcmt']."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlycmt&query=them');
}

?>