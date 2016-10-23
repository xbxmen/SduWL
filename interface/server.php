<?php
if(true){ //$_POST['username'] && $_POST['password'] && $_POST['ip']
	$ip = '211.87.236.185';
	$username = '201400301203';
	$password = '960105';
	/*
	 设置  header 
	 * */
	$headerArr = array(
		'User-Agent' => 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36',
        'Host'=>'192.168.8.10',
        'Origin'=>'http://192.168.8.10',
        'Referer'=>'http://192.168.8.10/portal/index_default.jsp?Language=Chinese',
        'Content-Type' => 'application/x-www-form-urlencoded',
        'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
        'Cache-Control' => 'max-age=0',
        'Connection' => 'keep-alive'
	);
	
	/* form 提交的 数据 */
	$form = array(
		'Language'=>'Chinese',
		'ClientIP'=>$ip,
		'sessionID'=>'-6106489003554212615',
		'timeoutvalue'=>45,
		'heartbeat'=>240,
		'fastwebornot'=>false,
		'StartTime'=>time(),
		'username'=>$username,
		'password'=>$password,
		'shkOvertime'=>1,
		'strOldPrivateIP'=>$ip,
		'strOldPublicIP'=>$ip,
		'strPrivateIP'=>$ip,
		'PublicIP'=>$ip,
		'iIPCONFIG'=>0,
		'sHttpPrefix'=>'http://192.168.8.10',
	);  
	//echo http_build_query($form);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://192.168.8.10/portal/login.jsp?Flag=0");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headerArr );  //构造IP
	curl_setopt($ch, CURLOPT_REFERER, "http://192.168.8.10/portal/index_default.jsp?Language=Chinese");//构造来路
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_NOBODY,1); /*不将 body 输出*/
	curl_setopt($ch, CURLOPT_POST,true);
	curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($form));
	
	/*其他 参数*/
	$str = curl_exec($ch);
	curl_close ($ch);
	/*获取 标签内容*/
	echo $str;
	$regex="/.*?<td class=\"tWhite\">(.*?)<\/td>.*?/";
	if(preg_match_all($regex, $str , $matches)){
        return $matches[1][0];
	}else{
		return -1;
	}
}



?>