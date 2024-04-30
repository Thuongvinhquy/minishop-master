<?php
include('../../admincp/config/config.php');

if(isset($_GET['iddanhgia']))
{
    $id_sanpham = $_GET['id_dg'];
	$sao = $_GET['iddanhgia'];
	if($sao == 1)
	{
		$sql_danhgia = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$id_sanpham' LIMIT 1";
		$query_danhgia = mysqli_query($mysqli,$sql_danhgia);
		while($row_danhgia = mysqli_fetch_array($query_danhgia))
		{
			$udsao = $row_danhgia['sao1'] + 1;
		}
		$sql_updanhgia = "UPDATE tbl_sanpham SET sao1='".$udsao."' WHERE id_sanpham='$id_sanpham'";
		$query_updanhgia = mysqli_query($mysqli,$sql_updanhgia);
		?>
		<script>
			window.alert("Điều gì đã làm bạn dánh giá 1 sao? Hãy liên hệ cho chúng tôi nếu bạn thấy chưa hài lòng!");
			window.location="../../index.php?quanly=lienhe";
		</script>
	<?php
	}
	elseif($sao == 2)
	{
		$sql_danhgia = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$id_sanpham' LIMIT 1";
		$query_danhgia = mysqli_query($mysqli,$sql_danhgia);
		while($row_danhgia = mysqli_fetch_array($query_danhgia))
		{
			$udsao = $row_danhgia['sao2'] + 1;
		}
		$sql_updanhgia = "UPDATE tbl_sanpham SET sao2='".$udsao."' WHERE id_sanpham='$id_sanpham'";
		$query_updanhgia = mysqli_query($mysqli,$sql_updanhgia);
		?>
		<script>
			window.alert("Điều gì đã làm bạn dánh giá 2 sao? Hãy liên hệ cho chúng tôi nếu bạn thấy chưa hài lòng!");
			window.location="../../index.php?quanly=lienhe";
		</script>
	<?php
	}
	elseif($sao == 3)
	{
		$sql_danhgia = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$id_sanpham' LIMIT 1";
		$query_danhgia = mysqli_query($mysqli,$sql_danhgia);
		while($row_danhgia = mysqli_fetch_array($query_danhgia))
		{
			$udsao = $row_danhgia['sao3'] + 1;
		}
		$sql_updanhgia = "UPDATE tbl_sanpham SET sao3='".$udsao."' WHERE id_sanpham='$id_sanpham'";
		$query_updanhgia = mysqli_query($mysqli,$sql_updanhgia);
		?>
		<script>
			window.alert("Điều gì đã làm bạn dánh giá 3 sao? Hãy liên hệ cho chúng tôi nếu bạn thấy chưa hài lòng!");
			window.location="../../index.php?quanly=lienhe";
		</script>
	<?php
	}

	elseif($sao == 4)
	{
		$sql_danhgia = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$id_sanpham' LIMIT 1";
		$query_danhgia = mysqli_query($mysqli,$sql_danhgia);
		while($row_danhgia = mysqli_fetch_array($query_danhgia))
		{
			$udsao = $row_danhgia['sao4'] + 1;
		}
		$sql_updanhgia = "UPDATE tbl_sanpham SET sao4='".$udsao."' WHERE id_sanpham='$id_sanpham'";
		$query_updanhgia = mysqli_query($mysqli,$sql_updanhgia);
		?>
		<script>
			window.alert("Cảm ơn bạn đã đánh giá 4 sao");
			window.location="../../index.php?quanly=sanpham&id=<?php echo $id_sanpham ?>";
		</script>
	<?php
	}

	elseif($sao == 5)
	{
		$sql_danhgia = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$id_sanpham' LIMIT 1";
		$query_danhgia = mysqli_query($mysqli,$sql_danhgia);
		while($row_danhgia = mysqli_fetch_array($query_danhgia))
		{
			$udsao = $row_danhgia['sao5'] + 1;
		}
		$sql_updanhgia = "UPDATE tbl_sanpham SET sao5='".$udsao."' WHERE id_sanpham='$id_sanpham'";
		$query_updanhgia = mysqli_query($mysqli,$sql_updanhgia);
		?>
		<script>
			window.alert("Cảm ơn bạn đã đánh giá 5 sao");
			window.location="../../index.php?quanly=sanpham&id=<?php echo $id_sanpham ?>";
		</script>
	<?php
	}
}
elseif(isset($_POST['cmt']))
{
	$ngay = date("d/m/Y");
	$id_cmt = $_GET['id_cmt'];
	$id_kh = $_GET['id_kh'];
	$ten_cmt = $_POST['ten_cmt'];	
	$noidung_cmt = $_POST['noidung_cmt'];
	if($ten_cmt == 'Bạn chưa đăng nhập')
	{
		?>
			<script>
				window.location="../../index.php?quanly=dangky";
			</script>
		<?php
	}else{
		$sql_cmt = "INSERT INTO tbl_cmt(ten_cmt,noidung_cmt,id_sanpham,ngay_cmt,id_kh) VALUE('".$ten_cmt."','".$noidung_cmt."','".$id_cmt."','".$ngay."','".$id_kh."')";
		$query_cmt = mysqli_query($mysqli,$sql_cmt);
		?>
		<script>
			window.location="../../index.php?quanly=sanpham&id=<?php echo $id_cmt ?>";
		</script>
	<?php
	}
}else{
	$id_xoa = $_GET['id_xoa'];

	$sql = "SELECT * FROM tbl_cmt WHERE id_cmt = '$id_xoa' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	while($row = mysqli_fetch_array($query)){
		$id_sanpham = $row['id_sanpham'];
	}

	$sql_xoa = "DELETE FROM tbl_cmt WHERE id_cmt='".$id_xoa."'";
	$query_xoa = mysqli_query($mysqli,$sql_xoa);
	?>
		<script>
			window.location="../../index.php?quanly=sanpham&id=<?php echo $id_sanpham ?>";
		</script>
	<?php
}
?>