<?php
	#ajax回值
	$username = $_GET['username'];

	if($username == "qxl") {
		#$response = "已存在" ;
		echo ("该用户已存在");
	} else {
		#$response = "用户名可以使用" ;
		echo("用户名可以使用");
	}

	return $response;
?>