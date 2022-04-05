<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
<title><?php echo $this->value['WebTitle']; ?>-<?php echo $this->value['ListName']; ?>-<?php echo $this->value['Name']; ?></title>
<meta name="author" content="<?php echo $this->value['WebTitle']; ?>">
<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>,<?php echo $this->value['ListName']; ?>,<?php echo $this->value['Name']; ?>">
<meta name="description" content="<?php echo $this->value['WebDescription']; ?>,<?php echo $this->value['ListName']; ?>,<?php echo $this->value['Name']; ?>">
<link rel="stylesheet" type="text/css" href="<?php echo $this->value['StylePath']; ?>/css/framework.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->value['StylePath']; ?>/css/fontawesome-all.min.css">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $this->value['StylePath']; ?>/img/icon-192x192.png">
</head>
<body class="theme-light" data-highlight="blue2">
<div id="page">
<!-- 页头 开始 -->
<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
<!-- 页头 结束 -->
<div class="page-content header-clear">
<div class="page-title has-subtitle">
<div class="page-title-left"><a href="<?php echo $this->value['CUrl']; ?>" title="<?php echo $this->value['Name']; ?>" class="font-24"><?php echo $this->value['ListName']; ?></a></div>
</div>
<div class="content caption round-small shadow-huge">
<a href="<?php echo $this->value['CUrl']; ?>" title="<?php echo $this->value['Name']; ?>"><img src="<?php echo $this->value['Pic']; ?>" alt="<?php echo $this->value['Name']; ?>" class="responsive-image imgPlay"></a>
</div>
<div class="content">
<div class="content-title has-border border-green2-dark bottom-10">
<h2><?php echo $this->value['Name']; ?></h2>
</div>
<span class="under-heading color-highlight font-10 bottom-10"><?php echo $this->value['Time']; ?></span>
<a href="<?php echo $this->value['CUrl']; ?>" class="btn-submit bottom-10">在线播放</a>
<a href="#" onClick="location.reload();" class="btn-submit">如加载失败，请刷新页面。</a>
<?php $Video=(array)$this->value['VideoWebAd'];$Video_count=count($Video);for ($x=0; $x<=$Video_count-1; $x++) {$VideoWeb=$Video[$x];$VideoWebUrl=$VideoWeb['VideoWebUrl'];$VideoRemarks=$VideoWeb['VideoRemarks'];$VideoPicUrl=$VideoWeb['VideoPicUrl'];$VideoState=$VideoWeb['VideoState'];$VideoPicUrlWidth=$VideoWeb['VideoPicUrlWidth'];$VideoPicUrlHeight=$VideoWeb['VideoPicUrlHeight'];;?> 
<p style="margin:5px 0;"><a href="<?php echo $VideoWebUrl?>" target="_blank"><img style="width:<?php echo $VideoPicUrlWidth?>;height:<?php echo $VideoPicUrlHeight?>;" src="<?php echo $VideoPicUrl?>"></a></p>
<?php } ?>
</div>
<div class="content">
<div class="content-title has-border border-red2-dark bottom-10"><h2>相关推荐</h2></div>
</div>
<div class="content bottom-0">
<?php  $VideoType=$this->value['VideoType']; $MYSQLVOD=(array)$this->value['VideoTypeNCSQL'];shuffle($MYSQLVOD);  $Count=10;for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVODs=$MYSQLVOD[$x];  ?>
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVODs['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVODs['d_name'] ?>" class="clear"><div class="caption round-small shadow-huge"><img src="<?php 	echo  $MYSQLVODs['d_pic'] ?>" alt="<?php 	echo  $MYSQLVODs['d_name'] ?>" class="responsive-image imgPlay"></div></a>
<?php  } ?>
<div class="clear"></div>
</div>
</div>
<!-- 页尾 开始 -->
<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
<!-- 页尾 结束 -->
</div>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/plugins.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/custom.js" async></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/language.js"></script>
</body>
</html>