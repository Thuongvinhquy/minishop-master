<?php
    if(isset($_SESSION['id_khachhang']))
    {
        $id = $_SESSION['id_khachhang'];
    }
	
    $sql_kh = "SELECT * FROM tbl_dangky WHERE id_dangky='$id' ";
    $query_kh = mysqli_query($mysqli, $sql_kh);

    if(isset($_POST['suanguoidung']))
    {
        $tenkhachhang = $_POST['hovaten'];
		$email = $_POST['email'];
		$diachi = $_POST['diachi'];
        $dienthoai = $_POST['dienthoai'];
        $sql_update = "UPDATE tbl_dangky SET tenkhachhang='".$tenkhachhang."',email='".$email."',diachi='".$diachi."',dienthoai='".$dienthoai."' WHERE id_dangky='$id'";
        $query_update = mysqli_query($mysqli,$sql_update);
        ?>
        <script>
            window.alert("Đã Sửa Thành Công");
            window.location="index.php?quanly=nguoidung";
    	</script>
        <?php

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
      width: 20%;
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
      <?php while($row = mysqli_fetch_array($query_kh)){ ?>
    <div id="form" class="ftco-animate">
        <form id="form1" action="" method="POST">
                <br>
                <label for="firstname">Tên:</label>
                <input type="text" value="<?php echo $row['tenkhachhang']; ?>" name="hovaten" id="fname" autocomplete="off">
                <label for="firstname">Email:</label>
                <input type="text" value="<?php echo $row['email']; ?>" name="email" id="femail" autocomplete="off">
                <label for="firstname">Số điện thoại:</label>
                <input type="text" value="<?php echo $row['dienthoai']; ?>" name="dienthoai" id="fname" autocomplete="off">
                <label for="firstname">Địa chỉ:</label>
                <input type="text" value="<?php echo $row['diachi']; ?>" name="diachi" id="fcontent" autocomplete="off">
                <div style="text-align: center;">
                    <input type="submit" name="suanguoidung" value="Sửa">
                </div>
            </div>
        </form>
    </div>
    <?php } ?>