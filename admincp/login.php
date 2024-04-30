<?php
	session_start();
	if(isset($_GET['idkh'])){
			$_SESSION['dangnhap'] = $_GET['idkh'];
		?>
			<script>
				window.location="index.php?iddx=<?php echo $_GET['idkh'] ?>";
			</script>
		<?php 
	}else {
		?>
			<script>
				alert('Bạn không có quyền truy cập vào trang quản trị viên');
			</script>
		<?php
	}
?>

