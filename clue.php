<?php
$url = 'https://hcrm-dev.dxy.net/papi/130016';
$data = array(
	"dxy_id"=>"dxy_wrkcs0001",
	"customer_name"=>"深圳大学",
	"contact_name"=>"许敏婷",
	"contact_phone_1"=>"0311-68050167",
	"contact_phone_2"=>"18812061566",
	"email"=>"971574288@qq.com",
	"vip_type"=>4,
	"appId"=>"1287925590",
	"nonce"=>"wnqfiIgt9VSQMaaT",
	"sign"=>"b2108394b5ae08a7a7959ee27092c775d3ac71b9",
	"timestamp"=>"1597899614"
);
$data  = json_encode($data);
$headerArray =array("Content-type:application/json;charset='utf-8'","Accept:application/json");
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,FALSE);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl,CURLOPT_HTTPHEADER,$headerArray);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($curl);
curl_close($curl);
return json_decode($output,true);
?>
-
// /hello echo {"data":"hello world", "ret":true}

// db操作 curd
-

// 周末看看mysql ｜ ｜ redis、memcahe

//