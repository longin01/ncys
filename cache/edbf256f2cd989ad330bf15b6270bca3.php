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
<link rel="apple-touch-startup-image" sizes="1024x748" href="<?php echo $this->value['StylePath']; ?>/img/splash-screen-ipad-landscape" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : landscape)">
<link rel="apple-touch-startup-image" sizes="768x1004" href="<?php echo $this->value['StylePath']; ?>/img/splash-screen-ipad-portrait.png" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : portrait)">
<link rel="apple-touch-startup-image" sizes="1536x2008" href="<?php echo $this->value['StylePath']; ?>/img/splash-screen-ipad-portrait-retina.png" media="(device-width: 768px)	and (orientation: portrait)	and (-webkit-device-pixel-ratio: 2)">
<link rel="apple-touch-startup-image" sizes="1496x2048" href="<?php echo $this->value['StylePath']; ?>/img/splash-screen-ipad-landscape-retina.png" media="(device-width: 768px)	and (orientation: landscape)	and (-webkit-device-pixel-ratio: 2)">
<title><?php echo $this->value['WebTitle']; ?></title>
<meta name="author" content="<?php echo $this->value['WebTitle']; ?>">
<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>">
<meta name="description" content="<?php echo $this->value['WebDescription']; ?>">
<link href="<?php echo $this->value['StylePath']; ?>/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/framework.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/owl.theme.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/swipebox.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/colorbox.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- 页尾 开始 -->
<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
<!-- 页尾 结束 -->
<div class="slider-container">
<div class="homepage-slider" data-snap-ignore="true">
<?php  $VideoType=1;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div><div class="homepage-slider-caption"><h3><?php 	echo   rand(5, 10000); ?> 人观看</h3><p><?php 	echo  $MYSQLVOD['d_name'] ?></p></div><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="responsive-image" style="height:240px;object-fit:cover;"></a></div>
<?php  } ?>
</div>
<div class="homepage-slider-controls"><a href="#" class="next-home"></a><a href="#" class="prev-home"></a></div>
</div>
<div class="content">
<?php $AdminTop=(array)$this->value['TopWebAd'];$AdminTop_count=count($AdminTop);for ($x=0; $x<=$AdminTop_count-1; $x++) {$TopWeb=$AdminTop[$x];$TopWebUrl=$TopWeb['TopWebUrl'];$TopRemarks=$TopWeb['TopRemarks'];$TopPicUrl=$TopWeb['TopPicUrl'];$TopState=$TopWeb['TopState'];$TopPicUrlWidth=$TopWeb['TopPicUrlWidth'];$TopPicUrlHeight=$TopWeb['TopPicUrlHeight'];;?> 
<p style="margin:5px 0;"><a href="<?php echo $TopWebUrl?>" target="_blank"><img style="width:<?php echo $TopPicUrlWidth?>;height:<?php echo $TopPicUrlHeight?>;" src="<?php echo $TopPicUrl?>"></a></p>
<?php } ?>
<div class="decoration"></div>
<div class="container"><h3>最新视频</h3></div>
<div class="decoration"></div>
<div class="container">
<div class="quote-slider" data-snap-ignore="true">
<?php  $VideoType=2;  $Count=6;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div><div class="quote-item"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:200px;object-fit:cover;"></a><em><?php 	echo  $MYSQLVOD['d_name'] ?> <?php 	echo   rand(5, 10000); ?> 人观看</em></div></div>
<?php  } ?>
</div>
</div>
<div class="decoration"></div>
<div class="container no-bottom">
<?php  $VideoType=3;  $Count=6;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="one-half-responsive"><p class="thumb-left no-bottom"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>"  class="imgPlay" style="height:200px;object-fit:cover;"></a></p><div class="thumb-clear"></div></div><div class="hide-if-responsive"></div>
<?php  } ?>
<?php  $VideoType=4;  $Count=6;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="container no-bottom"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="responsive-image" style="height:200px;object-fit:cover;"></a></div>
<?php  } ?>
<div class="decoration"></div>
<div class="container">
<h4>热门视频</h4>
<div class="customer-slider">
<?php  $VideoType=5;  $Count=6;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:200px;object-fit:cover;"></a></div>
<?php  } ?>
</div>
</div>
<div class="decoration"></div>
<div class="container">
<h4>推荐视频</h4>
<?php  $VideoType=7;  $Count=5;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="container no-bottom"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="responsive-image" style="height:200px;object-fit:cover;"></a></div>
<?php  } ?>
<?php  $VideoType=8;  $Count=5;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="container no-bottom"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="responsive-image" style="height:200px;object-fit:cover;"></a></div>
<?php  } ?>
</div>
<div class="decoration"></div>
<!-- 页尾 开始 -->
<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
<!-- 页尾 结束 -->
</div>
<div class="bottom-deco"></div>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/jqueryui.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/jquery.swipebox.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/colorbox.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/snap.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/contact.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/custom.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/framework.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/framework.launcher.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/language.js"></script>
</body>
</html>