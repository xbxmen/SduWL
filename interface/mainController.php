<?php 
include_once("curl.php");
$ip = isset($_COOKIE['sw_ip'])? $_COOKIE['sw_ip']:"" ;
$username = isset($_COOKIE['sw_username'])? $_COOKIE['sw_username']:"";
$password = isset($_COOKIE['sw_password'])? $_COOKIE['sw_password']:"";
if(@$ip && @$username && @$password){
	$return = CAMS::connect($ip,$username,$password);
	if($return == -1){
		echo "请您再连接QLSC_STU试一下吧~~~";
		exit;
	}else{	
		echo $return;
		exit;
	}
	exit;
}else{
	echo -1;
	exit;
}

?>