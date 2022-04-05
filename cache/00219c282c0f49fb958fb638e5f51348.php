<!DOCTYPE html>
<html lang="en-US">
<head>
<title><?php echo $this->value['WebTitle']; ?></title>
<meta name="author" content="<?php echo $this->value['WebKeywords']; ?>">
<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>" />
<meta name="description" content="<?php echo $this->value['WebDescription']; ?>">
<meta charset="utf-8">
<meta content="IE=edge" http-equiv="x-ua-compatible">
<meta content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="yes" name="apple-touch-fullscreen">
<link rel="stylesheet" type="text/css" href="<?php echo $this->value['StylePath']; ?>/css/style.css?21042016">
<link rel="stylesheet" type="text/css" href="<?php echo $this->value['StylePath']; ?>/css/responsive.css">
<link rel="shortcut icon" href="<?php echo $this->value['StylePath']; ?>/img/favicon.png">
</head>
<body>
<div id="main">
<!-- 页头 开始 -->
<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
<!-- 页头 结束 -->
<div class="featured-slider animated fadeInRight">
<?php  $VideoType=1;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="featured-item"><div class="thumb"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:240px;object-fit:cover;"></a></div><div class="overlay"></div><div class="caption"><div class="issue"><span><?php 	echo   rand(5, 10000); ?> 人观看</span></div><h2><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><?php 	echo  $MYSQLVOD['d_name'] ?></a></h2></div></div>
<?php  } ?>
</div>
<div class="content-container animated fadeInUp">
<div class="widget-box">
<?php $AdminTop=(array)$this->value['TopWebAd'];$AdminTop_count=count($AdminTop);for ($x=0; $x<=$AdminTop_count-1; $x++) {$TopWeb=$AdminTop[$x];$TopWebUrl=$TopWeb['TopWebUrl'];$TopRemarks=$TopWeb['TopRemarks'];$TopPicUrl=$TopWeb['TopPicUrl'];$TopState=$TopWeb['TopState'];$TopPicUrlWidth=$TopWeb['TopPicUrlWidth'];$TopPicUrlHeight=$TopWeb['TopPicUrlHeight'];;?> 
<p style="margin:5px 0;"><a href="<?php echo $TopWebUrl?>" target="_blank"><img style="width:<?php echo $TopPicUrlWidth?>;height:<?php echo $TopPicUrlHeight?>;" src="<?php echo $TopPicUrl?>"></a></p>
<?php } ?>
<h3 class="widget-title"><span>最新视频</span></h3>
<?php  $VideoType=2;  $Count=5;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="small-listing-item"><div class="entry-thumb"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:200px;object-fit:cover;"></div></a>
<?php  } ?>
<?php  $VideoType=3;  $Count=5;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="small-listing-item"><div class="entry-thumb"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:200px;object-fit:cover;"></div></a>
<?php  } ?>
<div class="clear"></div>
</div>
<div class="widget-box">
<h3 class="widget-title"><span>热门视频</span></h3>
<?php  $VideoType=4;  $Count=5;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="small-listing-item"><div class="entry-thumb"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:200px;object-fit:cover;"></div></a>
<?php  } ?>
<?php  $VideoType=5;  $Count=5;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="small-listing-item"><div class="entry-thumb"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:200px;object-fit:cover;"></div></a>
<?php  } ?>
<div class="clear"></div>
</div>
<div class="widget-box">
<h3 class="widget-title"><span>推荐视频</span></h3>
<div class="widget-item-slider">
<?php  $VideoType=7;  $Count=5;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="items"><div class="thumb"><div class="icon-container"><div class="icons"><i class="fa fa-play"></i></div></div>
<img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:100px;object-fit:cover;"></div></a>
<?php  } ?>
<?php  $VideoType=8;  $Count=5;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="items"><div class="thumb"><div class="icon-container"><div class="icons"><i class="fa fa-play"></i></div></div>
<img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:100px;object-fit:cover;"></div></a>
<?php  } ?>
</div>
</div>
<div class="widget-box">
<h3 class="widget-title"><span>排行榜</span></h3>
<div class="widget-item-slider">
<?php  $VideoType=9;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="items"><div class="thumb"><div class="icon-container"><div class="icons"><i class="fa fa-play"></i></div></div>
<img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:100px;object-fit:cover;"></div></a>
<?php  } ?>
<?php  $VideoType=10;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="items"><div class="thumb"><div class="icon-container"><div class="icons"><i class="fa fa-play"></i></div></div>
<img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:100px;object-fit:cover;"></div></a>
<?php  } ?>
</div>
</div>
</div>
<!-- 页尾 开始 -->
<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
<!-- 页尾 结束 -->
</div>
</div>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/materialize.min.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/slick.min.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/jquery.swipebox.min.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/custom.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/language.js"></script>
</body>
</html>