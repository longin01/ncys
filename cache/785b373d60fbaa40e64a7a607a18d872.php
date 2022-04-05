<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $this->value['StylePath']; ?>/img/splash-icon.png">
<link rel="apple-touch-startup-image" href="<?php echo $this->value['StylePath']; ?>/img/splash-screen.png" media="screen and (max-device-width: 320px)">
<link rel="apple-touch-startup-image" href="<?php echo $this->value['StylePath']; ?>/img/splash-screen@2x.png" media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)">
<link rel="apple-touch-startup-image" sizes="640x1096" href="<?php echo $this->value['StylePath']; ?>/img/splash-screen@3x.png">
<title><?php echo $this->value['WebTitle']; ?>-<?php echo $this->value['ListName']; ?>-<?php echo $this->value['Name']; ?></title>
<meta name="author" content="<?php echo $this->value['WebTitle']; ?>">
<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>,<?php echo $this->value['ListName']; ?>,<?php echo $this->value['Name']; ?>">
<meta name="description" content="<?php echo $this->value['WebDescription']; ?>,<?php echo $this->value['ListName']; ?>,<?php echo $this->value['Name']; ?>">
<link href="<?php echo $this->value['StylePath']; ?>/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/menus-background.css" rel="stylesheet" type="text/css" id="pagestyle">
<link href="<?php echo $this->value['StylePath']; ?>/css/framework.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/owl.theme.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/swipebox.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/colorbox.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- 页头 开始 -->
<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
<!-- 页头 结束 -->
<div id="content" class="page-content">
<div class="content">
<div class="bread-crumb"><a href="<?php echo $this->value['ListUrl']; ?>" title="<?php echo $this->value['ListName']; ?>"><?php echo $this->value['ListName']; ?></a></div>
<div class="embed-responsive embed-responsive-play player-box">
<?php echo $this->value['Play']; ?>
</div>
<div class="mt-10" id="playtip" style="display:none;">
<h5 style="color:red;">每日限量观看5个视频，您今日次数已用完，您可以选择赚取观影次数，或者等明天次数恢复了观看</h5>
<div style="margin:5px 0;"><button type="submit" class="button button-green" onClick="location.href='<?php echo $this->value['UserUrl']; ?>';">赚取次数</button></div>
</div>
<p><strong><?php echo $this->value['Name']; ?></strong><em><?php echo $this->value['Time']; ?></em><button class="mt-10 button button-green contactSubmitButton" onClick="location.href='<?php echo $this->value['CUrl']; ?>';">在线播放</button></p>
<div class="decoration"></div>
<?php $Video=(array)$this->value['VideoWebAd'];$Video_count=count($Video);for ($x=0; $x<=$Video_count-1; $x++) {$VideoWeb=$Video[$x];$VideoWebUrl=$VideoWeb['VideoWebUrl'];$VideoRemarks=$VideoWeb['VideoRemarks'];$VideoPicUrl=$VideoWeb['VideoPicUrl'];$VideoState=$VideoWeb['VideoState'];$VideoPicUrlWidth=$VideoWeb['VideoPicUrlWidth'];$VideoPicUrlHeight=$VideoWeb['VideoPicUrlHeight'];;?> 
<p style="margin:5px 0;"><a href="<?php echo $VideoWebUrl?>" target="_blank"><img style="width:<?php echo $VideoPicUrlWidth?>;height:<?php echo $VideoPicUrlHeight?>;" src="<?php echo $VideoPicUrl?>"></a></p>
<?php } ?>
<div class="one-half-responsive">
<h4>热搜</h4>
<div class="container">
<a href="/?m=video_search*淫穴*1" target="_blank" class="button button-turqoise">淫穴</a>
<a href="/?m=video_search*全裸*1" target="_blank" class="button button-turqoise">全裸</a>
<a href="/?m=video_search*宅男*1" target="_blank" class="button button-turqoise">宅男</a>
<a href="/?m=video_search*捆绑*1" target="_blank" class="button button-dark">捆绑</a>
<a href="/?m=video_search*约炮*1" target="_blank" class="button button-dark">约炮</a>
<a href="/?m=video_search*18岁*1" target="_blank" class="button button-dark">18岁</a>
<a href="/?m=video_search*医院*1" target="_blank" class="button button-turqoise">医院</a>
<a href="/?m=video_search*淑女*1" target="_blank" class="button button-turqoise">淑女</a>
<a href="/?m=video_search*妹纸*1" target="_blank" class="button button-blue">妹纸</a>
<a href="/?m=video_search*嫩逼*1" target="_blank" class="button button-blue">嫩逼</a>
<a href="/?m=video_search*厕所*1" target="_blank" class="button button-blue">厕所</a>
<a href="/?m=video_search*无码*1" target="_blank" class="button button-blue">无码</a>
<a href="/?m=video_search*素人*1" target="_blank" class="button button-turqoise">素人</a>
<a href="/?m=video_search*灌醉*1" target="_blank" class="button button-blue">灌醉</a>
<a href="/?m=video_search*露脸*1" target="_blank" class="button button-magenta">露脸</a>
<a href="/?m=video_search*纹身*1" target="_blank" class="button button-magenta">纹身</a>
<a href="/?m=video_search*电车*1" target="_blank" class="button button-magenta">电车</a>
<a href="/?m=video_search*情趣*1" target="_blank" class="button button-magenta">情趣</a>
<a href="/?m=video_search*高挑*1" target="_blank" class="button button-orange">高挑</a>
<a href="/?m=video_search*后门*1" target="_blank" class="button button-orange">后门</a>
<a href="/?m=video_search*透明*1" target="_blank" class="button button-orange">透明</a>
<a href="/?m=video_search*淫水*1" target="_blank" class="button button-magenta">淫水</a>
<a href="/?m=video_search*骚逼*1" target="_blank" class="button button-blue">骚逼</a>
<a href="/?m=video_search*长腿*1" target="_blank" class="button button-blue">长腿</a>
<a href="/?m=video_search*姐姐*1" target="_blank" class="button button-turqoise">姐姐</a>
<a href="/?m=video_search*初恋*1" target="_blank" class="button button-turqoise">初恋</a>
<a href="/?m=video_search*女友*1" target="_blank" class="button button-turqoise">女友</a>
<a href="/?m=video_search*搭讪*1" target="_blank" class="button button-red">搭讪</a>
<a href="/?m=video_search*自慰*1" target="_blank" class="button button-red">自慰</a>
<a href="/?m=video_search*肤白*1" target="_blank" class="button button-red">肤白</a>
<a href="/?m=video_search*表姐*1" target="_blank" class="button button-red">表姐</a>
<a href="/?m=video_search*白丝*1" target="_blank" class="button button-red">白丝</a>
<a href="/?m=video_search*援交*1" target="_blank" class="button button-red">援交</a>
<a href="/?m=video_search*学生*1" target="_blank" class="button button-red">学生</a>
<a href="/?m=video_search*野外*1" target="_blank" class="button button-red">野外</a>
<a href="/?m=video_search*萌妹*1" target="_blank" class="button button-red">萌妹</a>
</div>
</div>
<div class="container no-bottom">
<?php  $VideoType=$this->value['VideoType']; $MYSQLVOD=(array)$this->value['VideoTypeNCSQL'];shuffle($MYSQLVOD);  $Count=6;for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVODs=$MYSQLVOD[$x];  ?>
<div class="decoration"></div><div class="recent-post"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVODs['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVODs['d_name'] ?>"><img src="<?php 	echo  $MYSQLVODs['d_pic'] ?>" alt="<?php 	echo  $MYSQLVODs['d_name'] ?>" class="responsive-image" style="height:200px;object-fit:cover;"></a></div>
<?php  } ?>
</div>
<div class="decoration"></div>
<div class="one-half-responsive">
<h4>视频搜索</h4>
<div class="container no-bottom">
<div class="contact-form no-bottom">
<form class="contactForm">
<fieldset>
<div class="formFieldWrap"><input type="text" name="search" placeholder="视频搜索" class="contactField requiredField"></div>
<div class="formSubmitButtonErrorsWrap"><input type="submit" class="buttonWrap button button-green contactSubmitButton" value="搜索"></div>
</fieldset>
</form>
</div>
</div>
</div>
<!-- 页尾 开始 -->
<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
<!-- 页尾 结束 -->
</div>
</div>
</div>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/jqueryui.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/jquery.swipebox.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/colorbox.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/snap.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/contact.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/custom.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/framework.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/framework.launcher.js"></script>
<script>
if (<?php echo $this->value['WebUserLimit']; ?>){ //限制开关
$(document).ready(function() {
userKey = "user_info";
console.log($.cookie(userKey));
userInfo = JSON.parse($.cookie(userKey));
$.ajax({
type: "GET",
url: '/Php/Home/userinfo.php',
beforeSend:function(){
},
success: function (res) {
userInfo = JSON.parse($.cookie(userKey));
console.log(userInfo)
if(userInfo != null ) {
if (userInfo.leftNum<1){
$('#playtip').show();
$('.player-box').html('');
}
}
},
error: function (err) {
alert('获取用户id失败!');
}
})
});
}
</script>
<script type="text/javascript">
function swapStyleSheet(sheet){
	document.getElementById('pagestyle').setAttribute('href', sheet);
}
</script>
</body>
</html>