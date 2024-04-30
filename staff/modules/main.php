<div class="clear"></div>
<div class="main">

	<?php

				if(isset($_GET['action']) && $_GET['query']){
					$tam = $_GET['action'];
					$query = $_GET['query'];
				}else{
					$tam = '';
					$query = '';
				}
				if($tam=='quanlydanhmucsanpham' && $query=='them'){
					include("modules/quanlydanhmucsp/lietke.php");
				}elseif($tam=='quanlydanhmucsanpham' && $query=='them2'){
					include("modules/quanlydanhmucsp/them.php");
				}elseif ($tam=='quanlydanhmucsanpham' && $query=='sua') {
					include("modules/quanlydanhmucsp/sua.php");
				}elseif ($tam=='quanlysp' && $query=='them') {
					include("modules/quanlysp/lietke.php");
				}elseif ($tam=='quanlysp' && $query=='them2') {
					include("modules/quanlysp/them.php");
				}elseif($tam=='quanlysp' && $query=='sua'){
					include("modules/quanlysp/sua.php");
				}elseif($tam=='quanlydonhang' && $query=='lietke'){
					include("modules/quanlydonhang/lietke.php");
				}elseif($tam=='donhang' && $query=='xemdonhang'){
					include("modules/quanlydonhang/xemdonhang.php");
				}elseif ($tam=='quanlybaiviet' && $query=='them') {
					include("modules/quanlybaiviet/lietke.php");
				}elseif ($tam=='quanlybaiviet' && $query=='them2') {
					include("modules/quanlybaiviet/them.php");
				}elseif($tam=='quanlybaiviet' && $query=='sua'){
					include("modules/quanlybaiviet/sua.php");
				}elseif ($tam=='quanlylienhe' && $query=='them') {
					include("modules/quanlylienhe/lietke.php");
				}elseif ($tam=='quanlycmt' && $query=='them') {
					include("modules/quanlycmt/lietke.php");
				}else{
					include("modules/quanlysp/lietke.php");
				}
	?> 
	
</div>