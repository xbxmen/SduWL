<!DOCTYPE html>
<html xmlns="http://zhaoshuai.me">
	<head>
		<meta charset="utf-8" />
		<title>SDU WL</title>
		<base target="_blank" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
		<!--<script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>-->
		<script src="js/jquery-2.1.0.js" type="text/javascript" ></script>
		<script src="js/login.js" type="text/javascript" ></script>
	</head>
	<body>
		<div class="lg_main" style="text-align: center;">
			<form action="#">
				<div style="text-align: center;">
					<div class="">
						<input type="text" name="username" id="username" value="<?php echo isset($_COOKIE['sw_username'])? $_COOKIE['sw_username']:"";?>" placeholder="Schoolnum" class="ur" />
						<input type="password" id="password" value="<?php echo isset($_COOKIE['sw_password'])? $_COOKIE['sw_password']:"";?>"   placeholder="Password" type=""  class="pw" />
						<input type="text" name="ip" id="ip" value="" placeholder="IP Adress" style="display: none;" class="ip" />
					</div>
					<div id="topmess" style="font-size: 13px;font-family: '微软雅黑';display: none;">
						请您先连上QLSC_SDU 再试一下~~~
					</div>
					<div class="foot" style="top: 100px;">
						<input type="button" id="log" value="Sign In" class="bn" onclick="login()" />
					</div>
				</div>
			</form>
		</div>
	</body>
</html>