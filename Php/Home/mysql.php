<?php
/***��ȡ���ݿ��е����ݲ��Ҹ��������***/
$AdminBasic = json_decode(file_get_contents("./TTSQL/Admin/Basic/AdminBasic.php"),true);
//PCģ��
$WebMobanPC		=	$AdminBasic['WebMobanPC'];
//�ֻ�ģ��
$WebMobanWAP	=	$AdminBasic['WebMobanWAP'];
//��վ����
$WebTitle		=	$AdminBasic['WebTitle'];
//��վ�ؼ���
$WebKeywords	=	$AdminBasic['WebKeywords'];
//��վ����
$WebDescription	=	$AdminBasic['WebDescription'];
//��վ����
$WebGongao	=	$AdminBasic['WebGongao'];
//��վ��������
$WebGongaoOpen	=	$AdminBasic['WebGongaoOpen'];
//��վlogo����
$WebLogo		=	$AdminBasic['WebLogo'];
//��վ����
$WebEmail		=	$AdminBasic['WebEmail'];
//��վͳ��
$WebCnzz = file_get_contents("./TTSQL/Admin/Basic/AdminStatistics.php");
//վȺ���
//$webss=explode(".",$_SERVER['HTTP_HOST']);$ws=$webss['1'].'.'.$webss['2'];




$webniubi='1';//1:������վȺ2:������վȺ

if($webniubi=='1'){
	if(strpos($_SERVER ['HTTP_HOST'],'www.') !== false){ 
	preg_match("#\.(.*)#i","http://".$_SERVER ['HTTP_HOST'],$webss);$webss = $webss[1];	
	}else{
	 $webss=$_SERVER['HTTP_HOST'];
	}	
}

if($webniubi=='2'){
	 $webss=$_SERVER['HTTP_HOST'];
}



$file ="./TTSQL/Admin/Plug/Zhanqun/index.php";

if(file_exists($file))
{
$AdminWebDomain = json_decode(file_get_contents($file),true);

foreach ($AdminWebDomain as $value) {
	if($webss==$value['WebDomain']){
	$WebDomain=$value['WebDomain'];
	$WebMobanPC=$value['WebMobanPC'];
	$WebMobanWAP=$value['WebMobanWAP'];
	$WebTitle=$value['WebTitle'];
	$WebKeywords=$value['WebKeywords'];
	$WebDescription=$value['WebDescription'];
	$WebLogo=$value['WebLogo'];
	$WebEmail=$value['WebEmail'];	
		}

 }
}
else
{
    //������վȺ�����ļ�
}








?>