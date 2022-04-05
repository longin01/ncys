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
<title><?php echo $this->value['WebTitle']; ?></title>
<meta name="author" content="<?php echo $this->value['WebKeywords']; ?>">
<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>">
<meta name="description" content="<?php echo $this->value['WebDescription']; ?>">
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
<div class="bread-crumb"><a href="<?php echo $this->value['UserUrl']; ?>" title="会员中心">会员中心</a></div>
<div class="decoration"></div>
<div class="container no-bottom">
<div class="slider-controls" data-snap-ignore="true">
<?php  $VideoType=1;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="responsive-image" style="height:240px;object-fit:cover;"></a><p class="small-slider-caption"><?php 	echo   rand(5, 10000); ?> 人喜欢</p></div>
<?php  } ?>
</div>
<a href="#" class="next-slider"></a>
<a href="#" class="prev-slider"></a>
</div>
<div class="decoration"></div>
<div class="container no-bottom"><h4 class="uppercase">最新视频</h4></div>
<div class="container no-bottom">
<?php $AdminTop=(array)$this->value['TopWebAd'];$AdminTop_count=count($AdminTop);for ($x=0; $x<=$AdminTop_count-1; $x++) {$TopWeb=$AdminTop[$x];$TopWebUrl=$TopWeb['TopWebUrl'];$TopRemarks=$TopWeb['TopRemarks'];$TopPicUrl=$TopWeb['TopPicUrl'];$TopState=$TopWeb['TopState'];$TopPicUrlWidth=$TopWeb['TopPicUrlWidth'];$TopPicUrlHeight=$TopWeb['TopPicUrlHeight'];;?> 
<p style="margin:5px 0;"><a href="<?php echo $TopWebUrl?>" target="_blank"><img style="width:<?php echo $TopPicUrlWidth?>;height:<?php echo $TopPicUrlHeight?>;" src="<?php echo $TopPicUrl?>"></a></p>
<?php } ?>
<?php  $VideoType=2;  $Count=6;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<p class="column"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="responsive-image" style="height:200px;object-fit:cover;"></a></p>
<?php  } ?>
</div>
<div class="decoration"></div>
<div class="container no-bottom"><h4 class="uppercase">热门视频</h4></div>
<ul class="gallery">
<?php  $VideoType=3;  $Count=6;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<li><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="responsive-image" style="height:200px;object-fit:cover;"></a></li>
<?php  } ?>
</ul>
<div class="decoration"></div>
<div class="container no-bottom">
<h4 class="uppercase">推荐视频</h4>
<div class="quote-slider-no-controls" data-snap-ignore="true">
<?php  $VideoType=4;  $Count=6;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div><p class="column"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="responsive-image" style="height:200px;object-fit:cover;"></a></p></div>
<?php  } ?>
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
<script type="text/javascript">
function swapStyleSheet(sheet){
	document.getElementById('pagestyle').setAttribute('href', sheet);
}
</script>
</body>
</html>