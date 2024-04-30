<?php
include('../../config/config.php');
if(isset($_GET['idlh']))
{
	$sql_lietke_lh = "SELECT * FROM tbl_lienhe WHERE id_lienhe='".$_GET['idlh']."' ORDER BY id_lienhe DESC";
	$query_lietke_lh = mysqli_query($mysqli,$sql_lietke_lh);
	while($row = mysqli_fetch_array($query_lietke_lh))
	{
		$duyet = $row['xacnhan'] + 1;
	}
	$sql_update = "UPDATE tbl_lienhe SET xacnhan='".$duyet."' WHERE id_lienhe='$_GET[idlh]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlylienhe&query=them');
}

?>