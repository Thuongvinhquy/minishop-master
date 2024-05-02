<?php 

	$mysqli = new mysqli("localhost","user","159263Quy*","web_mysqli");

	// Check connection
	if ($mysqli->connect_errno) {
	  echo "Kết nối MYSQLi lỗi" . $mysqli->connect_error;
	  exit();
	}

?>