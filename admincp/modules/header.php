<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangnhap']);
		?>
			<script>
				window.location="../index.php?dangxuat=1";
			</script>
		<?php 
	}
?>
<button class="btn" style="background-color: #CD5C5C; margin-top: 5px;margin-bottom: 3px;">
<a href="index.php?dangxuat=1" style="text-decoration: none; color: #fff;">Đăng xuất : <?php if(isset($_SESSION['dangnhap'])){
		echo $_SESSION['dangnhap'];
	} ?></a>
</button>