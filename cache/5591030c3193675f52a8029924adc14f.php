<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-type" name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width"/>
<title><?php echo $this->value['WebTitle']; ?>-<?php echo $this->value['ListName']; ?>-<?php echo $this->value['Name']; ?></title>
<meta name="author" content="<?php echo $this->value['WebTitle']; ?>">
<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>,<?php echo $this->value['ListName']; ?>,<?php echo $this->value['Name']; ?>">
<meta name="description" content="<?php echo $this->value['WebDescription']; ?>,<?php echo $this->value['ListName']; ?>,<?php echo $this->value['Name']; ?>">
<link rel="shortcut icon" type="image/png" href="<?php echo $this->value['StylePath']; ?>/images/logo.ico">
<link href="<?php echo $this->value['StylePath']; ?>/css/home.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->value['StylePath']; ?>/css/default.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->value['StylePath']; ?>/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- 页头 开始 -->
<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
<!-- 页头 结束 -->
<div class="mod">
<div class="area">
<?php $Video=(array)$this->value['VideoWebAd'];$Video_count=count($Video);for ($x=0; $x<=$Video_count-1; $x++) {$VideoWeb=$Video[$x];$VideoWebUrl=$VideoWeb['VideoWebUrl'];$VideoRemarks=$VideoWeb['VideoRemarks'];$VideoPicUrl=$VideoWeb['VideoPicUrl'];$VideoState=$VideoWeb['VideoState'];$VideoPicUrlWidth=$VideoWeb['VideoPicUrlWidth'];$VideoPicUrlHeight=$VideoWeb['VideoPicUrlHeight'];;?> 
<p style="margin:5px 0;"><a href="<?php echo $VideoWebUrl?>" target="_blank"><img src="<?php echo $VideoPicUrl?>" style="width:<?php echo $VideoPicUrlWidth?>;height:<?php echo $VideoPicUrlHeight?>;"></a></p>
<?php } ?>
<div class="mod-title">
<div id="link" class="block"><div id="title"><?php echo $this->value['ListName']; ?>~<?php echo $this->value['Name']; ?></div></div>
</div>
<div class="mod-row col5 clearfix">
<div class="embed-responsive embed-responsive-play player-box">
<?php echo $this->value['Play']; ?>
</div>
<!-- 试看提示-开始 -->
<div class="default_dialog" id="playtip" style="display:none;position:fixed;z-index:1100000;top:0;left:0;bottom:0;background:rgba(0,0,0,0.7);height:100%;width:100%;">
<div style="color:#fff;font-size:1.2rem;line-height:1.5;position:fixed;left:50%;top:50%;-webkit-transform:translate3d(0,0,0) scale(1.185);transform: translate3d(0,0,0) scale(1.185);-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);width:76vw;max-width:414px;background:#fff;border-radius:5px;box-shadow:1px 2px 3px #333;color:#555;padding:10px;text-align:center;">
<div class="close_dialog" style="position:absolute;right:-21px;color:#fff;top:-22px;border-radius:50%;border:2px solid;padding:5px 12px;background:rgba(0,0,0,0.4);">X</div>
<p>观看提示</p>
<p>您今日次数已用完</p>
<p>每天可免费观看5个视频。</p>
<p>如您想观看更多视频，可选择赚取观影次数。</p>
<p><a href="<?php echo $this->value['UserUrl']; ?>" target="_blank" class="btn-submit"><strong>赚取次数</strong></a></p>
</div>
</div>
<!-- 试看提示-结束 -->
</div>
<div class="mod-row col5">
<button type="submit" class="btn-submit" style="width:100%;" onClick="location.href='<?php echo $this->value['CUrl']; ?>';">在线播放</button>
</div>
<div class="mod-title">
<div id="link" class="block"><div id="title">相关推荐</div></div>
</div>
<div class="mod-row col5 clearfix">
<?php  $VideoType=$this->value['VideoType']; $MYSQLVOD=(array)$this->value['VideoTypeNCSQL'];shuffle($MYSQLVOD);  $Count=30;for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVODs=$MYSQLVOD[$x];  ?>
<dl><dt><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVODs['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVODs['d_name'] ?>"><img src="<?php 	echo  $MYSQLVODs['d_pic'] ?>" alt="<?php 	echo  $MYSQLVODs['d_name'] ?>" class="imgPlay"></a></dt></dl>
<?php  } ?>			
</div>
<!-- 页尾 开始 -->
<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
<!-- 页尾 结束 -->
</div>
</div>
<script src="<?php echo $this->value['StylePath']; ?>/js/language.js"></script>
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
</body>
</html>