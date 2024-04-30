
<?php 
    include('../../config/config.php');
    if(isset($_GET['idd']))
    {
        $idd = $_GET['idd'];
        $sql_xoa1 ="DELETE FROM tbl_cart WHERE code_cart='".$idd."'";
		$query_xoa1 = mysqli_query($mysqli,$sql_xoa1);
        $sql_xoa2 ="DELETE FROM tbl_cart_details WHERE code_cart='".$idd."'";
		$query_xoa2 = mysqli_query($mysqli,$sql_xoa2);
		header('Location:../../index.php?action=quanlydonhang&query=lietke');
    }
?>