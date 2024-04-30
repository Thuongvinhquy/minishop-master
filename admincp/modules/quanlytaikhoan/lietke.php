<?php
	$sql_lietke_sp = "SELECT * FROM tbl_dangky ORDER BY id_dangky DESC";
	$query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<h5>Quản lý tài khoản</h5>
<div class="table-responsive">
  <table class="table" style="width:100%" style="border-collapse: collapse;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col" style="text-align: center;">Tên</th>
      <th scope="col" style="text-align: center;">Liên hệ</th>
      <th scope="col" style="text-align: center;">Địa chỉ</th>
      <th scope="col" style="text-align: center;">Quyền truy cập</th>
      <th scope="col" style="text-align: center;">Chi tiết khách hàng</th>
    </tr>
  </thead>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_sp)){
      $i++;
    ?>
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td style="text-align: center;"><?php echo $row['tenkhachhang'] ?></td>
      <td style="text-align: center;"><?php echo $row['dienthoai'] ?><?php echo $row['email'] ?></td>
      <td style="text-align: center;"><?php echo $row['diachi'] ?></td>
      <td style="text-align: center;">
      <style>
        .dropbtn {
          background-color:goldenrod;
          color: white;
          padding: 7px;
          font-size: 16px;
          border: none;
          border-radius: 10%;
        }

        .dropdown {
          position: relative;
          display: inline-block;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f1f1f1;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
        }

        .dropdown-content a:hover {background-color: #ddd;}

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color: red;}
      </style>
        <div class="dropdown">
          <button class="dropbtn"><?php if($row['phanquyen']==1){echo 'Quản trị viên';}elseif($row['phanquyen']==2){echo 'Nhân viên';}else{echo 'Khách hàng';} ?></button>
          <div class="dropdown-content">
            <a href="modules/quanlytaikhoan/xuly.php?idpq=0&idkh=<?php echo $row['id_dangky'] ?>">Khách hàng</a>
            <a href="modules/quanlytaikhoan/xuly.php?idpq=1&idkh=<?php echo $row['id_dangky'] ?>">Quản trị viên</a>
            <a href="modules/quanlytaikhoan/xuly.php?idpq=2&idkh=<?php echo $row['id_dangky'] ?>">Nhân Viên</a>
          </div>
        </div>
    </td>
      <td style="text-align: center;"><button class="btn btn-warning"><a style="color: white;" href="?action=quanlytaikhoan&query=xem&idxem=<?php echo $row['id_dangky'] ?>">Chi tiết</a></button></td>
    
    </tr>
    <?php
    } 
    ?>
  
  </table>
</div>