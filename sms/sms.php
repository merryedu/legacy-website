<?php

header("Content-type: text/html; charset=utf-8"); 

/**
 * 在PHP 5.5.17 中测试通过。
 * 默认用通用接口(send)发送，若需使用模板接口(tpl_send),请自行将代码注释去掉。
 */

//通用接口发送样例
$apikey = "36d9d929ea139247b8ef8727db2d26e7"; //请用自己的apikey代替
$mobile = $_POST['mobile'];; //请用自己的手机号代替
$text= $_POST['text'];
echo send_sms($apikey,$text,$mobile);

//模板接口样例（不推荐。需要测试请将注释去掉。)
/* 以下代码块已被注释
  $apikey = "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"; //请用自己的apikey代替
  $mobile = "xxxxxxxxxxx"; //请用自己的手机号代替
  $tpl_id = 1; //对应默认模板 【#company#】您的验证码是#code#
  $tpl_value = "#company#=云片网&#code#=1234";
  echo tpl_send_sms($apikey,$tpl_id, $tpl_value, $mobile);
*/


/**
* 通用接口发短信
* apikey 为云片分配的apikey
* text 为短信内容
* mobile 为接受短信的手机号
*/
function send_sms($apikey, $text, $mobile){
   $url="http://yunpian.com/v1/sms/send.json";
   $encoded_text = urlencode("$text");
   $post_string="apikey=$apikey&text=$encoded_text&mobile=$mobile";
   return sock_post($url, $post_string);
}

/**
* 模板接口发短信
* apikey 为云片分配的apikey
* tpl_id 为模板id
* tpl_value 为模板值
* mobile 为接受短信的手机号
*/
function tpl_send_sms($apikey, $tpl_id, $tpl_value, $mobile){
   $url="http://yunpian.com/v1/sms/tpl_send.json";
   $encoded_tpl_value = urlencode("$tpl_value");  //tpl_value需整体转义
   $post_string="apikey=$apikey&tpl_id=$tpl_id&tpl_value=$encoded_tpl_value&mobile=$mobile";
   return sock_post($url, $post_string);
}

/**
* url 为服务的url地址
* query 为请求串
*/
function sock_post($url,$query){
   $data = "";
   $info=parse_url($url);
   $fp=fsockopen($info["host"],80,$errno,$errstr,30);
   if(!$fp){
      return $data;
   }
   $head="POST ".$info['path']." HTTP/1.0\r\n";
   $head.="Host: ".$info['host']."\r\n";
   $head.="Referer: http://".$info['host'].$info['path']."\r\n";
   $head.="Content-type: application/x-www-form-urlencoded\r\n";
   $head.="Content-Length: ".strlen(trim($query))."\r\n";
   $head.="\r\n";
   $head.=trim($query);
   $write=fputs($fp,$head);
   $header = "";
   while ($str = trim(fgets($fp,4096))) {
      $header.=$str;
   }
   while (!feof($fp)) {
      $data .= fgets($fp,4096);
   }
   return $data;
}
?>

