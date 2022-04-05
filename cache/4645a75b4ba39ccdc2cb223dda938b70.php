<!DOCTYPE html>
<html lang="zxx">
<head>
<meta charset="UTF-8">
<title><?php echo $this->value['WebTitle']; ?></title>
<meta name="author" content="<?php echo $this->value['WebKeywords']; ?>">
<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>">
<meta name="description" content="<?php echo $this->value['WebDescription']; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="True">
<link rel="shortcut icon" href="<?php echo $this->value['StylePath']; ?>/img/favicon.png">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/materialize.min.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/slick.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/slick-theme.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/owl.carousel.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/owl.theme.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/owl.transitions.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/fakeLoader.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/lightbox.min.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/style.css">
</head>
<body>
<!-- 页头 开始 -->
<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
<!-- 页头 结束 -->
<div class="slider-slick app-pages">
<?php  $VideoType=1;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="slider-entry"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:280px;object-fit:cover;"></a></div>
<?php  } ?>
</div>
<div class="offers app-section">
<div class="container">
<?php $AdminTop=(array)$this->value['TopWebAd'];$AdminTop_count=count($AdminTop);for ($x=0; $x<=$AdminTop_count-1; $x++) {$TopWeb=$AdminTop[$x];$TopWebUrl=$TopWeb['TopWebUrl'];$TopRemarks=$TopWeb['TopRemarks'];$TopPicUrl=$TopWeb['TopPicUrl'];$TopState=$TopWeb['TopState'];$TopPicUrlWidth=$TopWeb['TopPicUrlWidth'];$TopPicUrlHeight=$TopWeb['TopPicUrlHeight'];;?> 
<p style="margin:5px 0;"><a href="<?php echo $TopWebUrl?>" target="_blank"><img style="width:<?php echo $TopPicUrlWidth?>;height:<?php echo $TopPicUrlHeight?>;" src="<?php echo $TopPicUrl?>"></a></p>
<?php } ?>
<div class="app-title"><h4>最新视频</h4></div>
<div class="row">
<?php  $VideoType=2;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="col s12"><div class="entry"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:200px;object-fit:cover;"></a></div></div>
<?php  } ?>
<?php  $VideoType=3;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="col s12"><div class="entry"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:200px;object-fit:cover;"></a></div></div>
<?php  } ?>
</div>
</div>
</div>
<div class="latest-project separator">
<div class="container">
<div class="app-title"><h4>热门视频</h4></div>
<div class="row">
<?php  $VideoType=4;  $Count=2;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="col s6 lp-left"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:120px;object-fit:cover;"></a></div>
<?php  } ?>
</div>
<div class="row">
<?php  $VideoType=5;  $Count=2;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="col s6 lp-left"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:120px;object-fit:cover;"></a></div>
<?php  } ?>
</div>
<div class="row">
<?php  $VideoType=6;  $Count=2;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="col s6 lp-left"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:120px;object-fit:cover;"></a></div>
<?php  } ?>
</div>
<div class="row">
<?php  $VideoType=7;  $Count=2;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="col s6 lp-left"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:120px;object-fit:cover;"></a></div>
<?php  } ?>
</div>
<div class="row">
<?php  $VideoType=8;  $Count=2;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="col s6 lp-left"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:120px;object-fit:cover;"></a></div>
<?php  } ?>
</div>
<div class="row">
<?php  $VideoType=9;  $Count=2;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="col s6 lp-left"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:120px;object-fit:cover;"></a></div>
<?php  } ?>
</div>
</div>
</div>
<div class="testimonial">
<div class="container">
<div id="testimonial" class="owl-carousel owl-theme">
<?php  $VideoType=10;  $Count=8;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="item"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:200px;object-fit:cover;"></a></div>
<?php  } ?>
</div>
</div>
</div>
<!-- 页尾 开始 -->
<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
<!-- 页尾 结束 -->
<script src="<?php echo $this->value['StylePath']; ?>/js/materialize.min.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/slick.min.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/fakeLoader.min.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/loading.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/slick.min.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/lightbox.min.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/custom.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/language.js"></script>
</body>
</html>