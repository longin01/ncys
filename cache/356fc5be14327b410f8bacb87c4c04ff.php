<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?php echo $this->value['WebTitle']; ?></title>
<meta name="author" content="<?php echo $this->value['WebKeywords']; ?>">
<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>">
<meta name="description" content="<?php echo $this->value['WebDescription']; ?>">
<meta content="IE=edge" http-equiv="x-ua-compatible">
<meta content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="yes" name="apple-touch-fullscreen">
<link href="<?php echo $this->value['StylePath']; ?>/css/ionicons.min.css" media="all" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/keyframes.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/materialize.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/swiper.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/swipebox.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<div id="content" class="main animated fadein">
<div class="swiper-container swiper-slider">
<div class="swiper-wrapper">
<?php  $VideoType=1;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="swiper-slide"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:240px;object-fit:cover;"></a></div>
<?php  } ?>
</div>
<div class="swiper-pagination"></div>
</div>
<div class="section1 center">
<?php $AdminTop=(array)$this->value['TopWebAd'];$AdminTop_count=count($AdminTop);for ($x=0; $x<=$AdminTop_count-1; $x++) {$TopWeb=$AdminTop[$x];$TopWebUrl=$TopWeb['TopWebUrl'];$TopRemarks=$TopWeb['TopRemarks'];$TopPicUrl=$TopWeb['TopPicUrl'];$TopState=$TopWeb['TopState'];$TopPicUrlWidth=$TopWeb['TopPicUrlWidth'];$TopPicUrlHeight=$TopWeb['TopPicUrlHeight'];;?> 
<p style="margin:5px 0;"><a href="<?php echo $TopWebUrl?>" target="_blank"><img style="width:<?php echo $TopPicUrlWidth?>;height:<?php echo $TopPicUrlHeight?>;" src="<?php echo $TopPicUrl?>"></a></p>
<?php } ?>
</div>
<div class="section center grey lighten-5"><h4 class="m-0"><strong>最新视频</strong></h4><div class="line"></div></div>
<?php  $VideoType=2;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="grey lighten-5 m5"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:200px;object-fit:cover;"></a></div>
<?php  } ?>
<?php  $VideoType=3;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="grey lighten-5 m5"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:200px;object-fit:cover;"></a></div>
<?php  } ?>
<div class="section center grey lighten-5"><h4 class="m-0"><strong>热门视频</strong></h4><div class="line"></div></div>
<div class="news">
<?php  $VideoType=4;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="animated fadeinright delay-2"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="media-left"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:200px;object-fit:cover;"></a></div>
<?php  } ?>
<?php  $VideoType=5;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="animated fadeinright delay-2"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="media-left"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:200px;object-fit:cover;"></a></div>
<?php  } ?>
</div>
<div class="section center grey lighten-5"><h4 class="m-0"><strong>推荐视频</strong></h4><div class="line"></div></div>
<div class="news">
<?php  $VideoType=7;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="animated fadeinright delay-2"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="media-left"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:200px;object-fit:cover;"></a></div>
<?php  } ?>
<?php  $VideoType=8;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="animated fadeinright delay-2"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="media-left"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:200px;object-fit:cover;"></a></div>
<?php  } ?>
</div>
<!-- 页尾 开始 -->
<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
<!-- 页尾 结束 -->
</div>
<!-- 页尾 开始 -->
<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
<!-- 页尾 结束 -->
</div>
<script src="<?php echo $this->value['StylePath']; ?>/js/modernizr.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/jquery.swipebox.min.js"></script>   
<script src="<?php echo $this->value['StylePath']; ?>/js/jquery.smoothState.min.js"></script> 
<script src="<?php echo $this->value['StylePath']; ?>/js/materialize.min.js"></script> 
<script src="<?php echo $this->value['StylePath']; ?>/js/swiper.min.js"></script>  
<script src="<?php echo $this->value['StylePath']; ?>/js/jquery.mixitup.min.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/masonry.min.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/chart.min.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/functions.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/language.js"></script>
</body>
</html>