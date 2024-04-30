<?php
	if(isset($_POST['dangnhap'])){
		$email = $_POST['email'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);

		if($count>0){
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['tenkhachhang'];
			$_SESSION['id_khachhang'] = $row_data['id_dangky'];
			// header("Location:index.php?quanly=giohang");
			?>
			<script>
				window.alert("Đăng Nhập Thành Công");
				window.location="index.php?quanly=giohang";
    		</script>
			<?php
		}else{
			echo '<p style="color:red">Mật khẩu hoặc Email sai ,vui lòng nhập lại.</p>';
			
		}
	} 
?>
<!------ Include the above in your HEAD tag ---------->
<style>
.form {
      text-align: center;
      margin-top: 5%;
      }
      #form1 
      {
      width: 60%;
      background: #fff;
      margin: 0 auto;
      }
      #form1 input[type=text] 
      {
      width: 100%;
      box-sizing: border-box;
      font-size: 18px;
      color: #555;
      display: block;
      line-height: 1.2;
      background-color: rgb(218, 218, 218);
      border-radius: 20px;
      margin-bottom: 10px;
      height: 50px;
      padding: 0 20px 0 23px;
      border: 0;
      box-shadow: 0 5px 20px 0 rgb(0 0 0 / 5%);
      -moz-box-shadow: 0 5px 20px 0 rgba(0,0,0,.05);
      -webkit-box-shadow: 0 5px 20px 0 rgb(0 0 0 / 5%);
      -o-box-shadow: 0 5px 20px 0 rgba(0,0,0,.05);
      -ms-box-shadow: 0 5px 20px 0 rgba(0,0,0,.05);
      }
      #form1 input[type=text]:focus
      {
      border: 0;
      outline: none;
      box-shadow: 0 5px 20px 0 rgb(250 66 81 / 10%);
      -moz-box-shadow: 0 5px 20px 0 rgba(250,66,81,.1);
      -webkit-box-shadow: 0 5px 20px 0 rgb(250 66 81 / 10%);
      -o-box-shadow: 0 5px 20px 0 rgba(250,66,81,.1);
      -ms-box-shadow: 0 5px 20px 0 rgba(250,66,81,.1);
      }
      #form1 input[type=password] 
      {
      width: 100%;
      box-sizing: border-box;
      font-size: 18px;
      color: #555;
      display: block;
      line-height: 1.2;
      background-color: rgb(218, 218, 218);
      border-radius: 20px;
      margin-bottom: 10px;
      height: 50px;
      padding: 0 20px 0 23px;
      border: 0;
      box-shadow: 0 5px 20px 0 rgb(0 0 0 / 5%);
      -moz-box-shadow: 0 5px 20px 0 rgba(0,0,0,.05);
      -webkit-box-shadow: 0 5px 20px 0 rgb(0 0 0 / 5%);
      -o-box-shadow: 0 5px 20px 0 rgba(0,0,0,.05);
      -ms-box-shadow: 0 5px 20px 0 rgba(0,0,0,.05);
      }
      #form1 input[type=password]:focus
      {
      border: 0;
      outline: none;
      box-shadow: 0 5px 20px 0 rgb(250 66 81 / 10%);
      -moz-box-shadow: 0 5px 20px 0 rgba(250,66,81,.1);
      -webkit-box-shadow: 0 5px 20px 0 rgb(250 66 81 / 10%);
      -o-box-shadow: 0 5px 20px 0 rgba(250,66,81,.1);
      -ms-box-shadow: 0 5px 20px 0 rgba(250,66,81,.1);
      }
      #form1 #fcontent 
      {
      outline: none;
      min-height: 150px;
      }
      #form1 input[type=submit] 
      {
      width: 40%;
      background-color: #bd59d4;
      height: 42%;
      padding: 1%;
      border-radius: 21px;
      font-size: 14px;
      text-transform: uppercase;
      color: #fff;
      border: 0;
      box-shadow: 0 10px 30px 0 rgb(189 89 212 / 50%);
      -moz-box-shadow: 0 10px 30px 0 rgba(189,89,212,.5);
      -webkit-box-shadow: 0 10px 30px 0 rgb(189 89 212 / 50%);
      -o-box-shadow: 0 10px 30px 0 rgba(189,89,212,.5);
      -ms-box-shadow: 0 10px 30px 0 rgba(189,89,212,.5);
      }
      #form1 input[type="submit"]:hover 
      {
      background:#CC4949;
      }
</style>
    <div id="form" class="ftco-animate">
        <form id="form1" autocomplete="off" class="form" action="" method="POST">
                <br><input type="text" name="email" placeholder="Email..." id="femail" autocomplete="off"><br>
                <input type="password" name="password" placeholder="Mật khẩu..." id="password" autocomplete="off"><br>

                <input type="submit" name="dangnhap" value="Đăng nhập">
            <div id="register-link" style="text-align: center;">
                <br><a href="index.php?quanly=dangky" class="btn btn-primary py-3 px-4">Đăng ký</a>
            </div>
        </form>
    </div>
