<?php
	if(isset($_POST['doimatkhau'])){
		$taikhoan = $_POST['email'];
		$matkhau_cu = md5($_POST['password_cu']);
		$matkhau_moi = md5($_POST['password_moi']);
		$sql = "SELECT * FROM tbl_dangky WHERE email='".$taikhoan."' AND matkhau='".$matkhau_cu."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$sql_update = mysqli_query($mysqli,"UPDATE tbl_dangky SET matkhau='".$matkhau_moi."'");
			echo '<p style="color:green">Mật khẩu đã được thay đổi."</p>';
			?>
			<script>
				window.alert("Mật khẩu đã được thay đổi.");
				window.location="index.php?quanly=nguoidung";
    		</script>
			<?php
		}else{
			echo '<p style="color:red">Tài khoản hoặc Mật khẩu cũ không đúng,vui lòng nhập lại."</p>';
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
                <br><input type="text" name="email" placeholder="Email..." id="username"><br>
                <input type="password" name="password_cu" placeholder="Mật khẩu cũ..." id="password"><br>
                <input type="text" name="password_moi" placeholder="Mật khẩu mới..." id="password"><br>
                
                <input type="submit" name="doimatkhau" value="Đổi mật khẩu">
        </form>
    </div>
