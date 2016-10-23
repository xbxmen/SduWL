<?php
	include_once('curl.php');
		
	if($_POST['username'] && $_POST['password'] && $_POST['ip']){
		$ret = CAMS::connect($_POST['ip'], $_POST['username'], $_POST['password']);
		$ret = str_replace('"','',$ret);
		if($ret != -1){
			setcookie("sw_username",$_POST['username'],time()+36000);
			setcookie("sw_password",$_POST['password'],time()+36000);
			setcookie("sw_ip",$_POST['ip'],time()+3600);
			echo $ret;
		}else{
			echo -1;
			exit;
		}
		
	}else{
		echo -1;
	}
?>