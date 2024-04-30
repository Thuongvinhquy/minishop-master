<?php 
    if(isset($_POST['yeucau']))
      {
      $ten = $_POST['ten'];
      $email = $_POST['email'];
      $noidung = $_POST['noidung'];
      
      $sql_yeucau = "INSERT INTO tbl_lienhe(ten,email,noidung) VALUE('".$ten."','".$email."','".$noidung."')";
	mysqli_query($mysqli,$sql_yeucau);

      ?>
            <script>
                  window.location="index.php?quanly=lienhe";
		</script>
      <?php
      }
      ?>

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
      <div style="text-align: center;"><h2><i>Yêu Cầu Của Khách Hàng</i></h2></div>
      <div class="form">
            <form class="ftco-animate" action="" method="POST" id="form1">
                  <input type="text" id="fname" name="ten" placeholder="Họ tên"><br>
                  <input type="text" id="femail" name="email" placeholder="Địa chỉ Email"><br>
                  <input type="text" id="fcontent" name="noidung" placeholder="Nội dung yêu cầu"><br>

                  <input name="yeucau" type="submit" value="Gửi yêu cầu">
            </form>
      <iframe class="ftco-animate" class="responsive-iframe" style="margin-top: 50px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.751523921989!2d108.2171568148586!3d16.07837878887522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142183978f4658f%3A0x347454fffcda7f4a!2zNTQgTMOqIEzhu6NpLCBUaOG6oWNoIFRoYW5nLCBI4bqjaSBDaMOidSwgxJDDoCBO4bq1bmcgNTUwMDAw!5e0!3m2!1sen!2s!4v1624248615340!5m2!1sen!2s" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      
      </div>