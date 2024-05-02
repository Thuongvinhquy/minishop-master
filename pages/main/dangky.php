<?php
if(isset($_POST['dangky'])) {
    $tenkhachhang = $_POST['hovaten'];
    $email = $_POST['email'];
    $dienthoai = $_POST['dienthoai'];
    $matkhau = md5($_POST['matkhau']);
    $diachi = $_POST['diachi'];
    
    // Thêm trường 'phanquyen' vào câu lệnh INSERT
    $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai, phanquyen) VALUES('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."', 0)");
    
    if($sql_dangky){
        echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
        $_SESSION['dangky'] = $tenkhachhang;
        $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
        ?>
        <script>
            window.alert("Đăng Ký Thành Công");
            window.location="index.php?quanly=giohang";
        </script>
        <?php
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
      padding: 1% 5%;
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
        <form id="form1" class="form" action="" method="POST">
                <br><input type="text" placeholder="Họ và tên..." name="hovaten" id="fname" autocomplete="off"><br>
                <input type="text" placeholder="Email..." name="email" id="femail" autocomplete="off"><br>
                <input type="text" placeholder="Điện thoại..." name="dienthoai" id="fname" autocomplete="off"><br>
                <input type="text" placeholder="Địa chỉ..." name="diachi" id="fcontent" autocomplete="off"><br>
                <input type="text" placeholder="Mật Khẩu..." name="matkhau" id="fname" autocomplete="off"><br>
    
                <input type="submit" name="dangky" value="Đăng ký">
            </div>
        </form>
    </div>