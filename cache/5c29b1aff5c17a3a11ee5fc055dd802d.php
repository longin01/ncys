<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/splash/splash-icon.png">
<link rel="apple-touch-startup-image" href="images/splash/splash-screen.png" media="screen and (max-device-width: 320px)">
<link rel="apple-touch-startup-image" href="images/splash/splash-screen@2x.png" media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)">
<link rel="apple-touch-startup-image" sizes="640x1096" href="images/splash/splash-screen@3x.png">
<link rel="apple-touch-startup-image" sizes="1024x748" href="images/splash/splash-screen-ipad-landscape" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : landscape)">
<link rel="apple-touch-startup-image" sizes="768x1004" href="images/splash/splash-screen-ipad-portrait.png" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : portrait)">
<link rel="apple-touch-startup-image" sizes="1536x2008" href="images/splash/splash-screen-ipad-portrait-retina.png" media="(device-width: 768px)	and (orientation: portrait)	and (-webkit-device-pixel-ratio: 2)">
<link rel="apple-touch-startup-image" sizes="1496x2048" href="<?php echo $this->value['StylePath']; ?>/img/splash-screen-ipad-landscape-retina.png" media="(device-width: 768px)	and (orientation: landscape)	and (-webkit-device-pixel-ratio: 2)">
<title><?php echo $this->value['WebTitle']; ?>-<?php  echo $this->value['VideoTypeName']; ?></title>
<meta name="author" content="<?php echo $this->value['WebTitle']; ?>">
<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>,<?php  echo $this->value['VideoTypeName']; ?>">
<meta name="description" content="<?php echo $this->value['WebDescription']; ?>,<?php  echo $this->value['VideoTypeName']; ?>">
<link href="<?php echo $this->value['StylePath']; ?>/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/framework.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/owl.theme.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/swipebox.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/animate.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- 页头 开始 -->
<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
<!-- 页头 结束 -->
<div class="header">
<a class="open-nav" href="#"><i class="fa fa-navicon"></i></a>
<a class="header-message" href="<?php echo $this->value['WEBUrl']; ?>"><?php  echo $this->value['VideoTypeName']; ?></a>
<a class="open-socials" href="#"><i class="fa fa-share-alt"></i></a>
</div>
<div id="content" class="snap-content">
<div class="full-bottom"></div>
<div class="content">
<div class="adaptive-style">
<h4><?php  echo $this->value['VideoTypeName']; ?></h4>
<a class="adaptive-three-activate" href="#"><i class="fa fa-th"></i></a>
<a class="adaptive-two-activate" href="#"><i class="fa fa-th-large"></i></a>
<a class="adaptive-one-activate active-adaptive-style" href="#"><i class="fa fa-navicon"></i></a>
</div>
<div class="clear"></div>
<?php $AdminTop=(array)$this->value['TopWebAd'];$AdminTop_count=count($AdminTop);for ($x=0; $x<=$AdminTop_count-1; $x++) {$TopWeb=$AdminTop[$x];$TopWebUrl=$TopWeb['TopWebUrl'];$TopRemarks=$TopWeb['TopRemarks'];$TopPicUrl=$TopWeb['TopPicUrl'];$TopState=$TopWeb['TopState'];$TopPicUrlWidth=$TopWeb['TopPicUrlWidth'];$TopPicUrlHeight=$TopWeb['TopPicUrlHeight'];;?> 
<p style="margin:5px 0;"><a href="<?php echo $TopWebUrl?>" target="_blank"><img style="width:<?php echo $TopPicUrlWidth?>;height:<?php echo $TopPicUrlHeight?>;" src="<?php echo $TopPicUrl?>"></a></p>
<?php } ?>
<div class="decoration"></div>
<div class="portfolio-adaptive adaptive-one">
<?php  $MYSQLVODS=(array)$this->value['VideoTypeNCSQL'];$VideoTypeId=$this->value['VideoTypeId'];$GetMb_page=$this->value['VideoTypePage']; $Count=24;$MYSQLVODS=PAGE($MYSQLVODS,$GetMb_page,$Count);  foreach($MYSQLVODS['source'] as $s){  ?>
<div class="adaptive-item"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$s['d_id'].$Host3.$VideoTypeId.$Host4; ?>" title="<?php 	echo  $s['d_name'] ?>"><img src="<?php 	echo  $s['d_pic'] ?>" alt="<?php 	echo  $s['d_name'] ?>" class="responsive-image"></a></div>
<?php  } ?>
</div>
<div class="pagination" id="wr-page">
<script src="<?php echo $this->value['StylePath']; ?>/js/jQuery.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/page.js?t=1"></script>
<script type="text/javascript">
$("#wr-page").wrpage({
pagesize: '<?php 	echo $MYSQLVODS['total']; ?>',
wr_current: '<?php 	echo $GetMb_page; ?>',
baseUrl: '<?php 	echo $Host1.'video_list'.$Host2.$VideoTypeId.$Host3.'currentPage'.$Host4; ?>',
})
</script>
</div>
<div class="decoration"></div>
</div>
<!-- 页尾 开始 -->
<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
<!-- 页尾 结束 -->
</div>
</div>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/jqueryui.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/framework.plugins.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/custom.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/language.js"></script>
</body>
</html>