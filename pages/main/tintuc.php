<?php
    $sql_hinhanh = "SELECT * FROM tbl_baiviet WHERE noithem='0' ORDER BY id_baiviet";
    $query_lietke = mysqli_query($mysqli, $sql_hinhanh);
    $i = 0;
?>
<br>
<div class="container">
<?php
    while($row = mysqli_fetch_array($query_lietke))
    {
        $i++;
?>

        
        <h4>&nbsp;&nbsp;<i><?php echo $i;?>.</i><?php echo $row['tieude']; ?></h4>
        <div style="width: 97%;"><p class="text-justify" style="white-space:pre-line;">&nbsp;&nbsp;<?php echo $row['noidung']; ?></p></div>
        <br>
        <div class="ftco-animate" style="text-align: center;"><img src="admincp/modules/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>" width="50%"></div>
        <br><br>

<?php
    }

?>
</div>