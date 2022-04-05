<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $this->value['WebTitle']; ?></title>
<meta name="author" content="<?php echo $this->value['WebKeywords']; ?>">
<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>">
<meta name="description" content="<?php echo $this->value['WebDescription']; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 user-scalable=no">
<meta name="mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="True">
<link rel="shortcut icon" href="<?php echo $this->value['StylePath']; ?>/img/favicon.png">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/framework7.material.colors.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/framework7.material.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/slick.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/slick-theme.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/owl.carousel.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/owl.theme.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/owl.transitions.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/lightbox.min.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/style.css">
</head>
<body>
<!-- 页头 开始 -->
<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
<!-- 页头 结束 -->
<div class="views">
<div class="view view-main">
<div class="navbar">
<div class="navbar-inner">
<div class="left navbar-icon"><a href="" class="link open-panel" data-panel="left"><i class="fa fa-bars"></i></a></div>
<div class="center site-title"><a href="<?php echo $this->value['WEBUrl']; ?>" class="external"><h1><?php echo $this->value['WebTitle']; ?></h1></a></div>
<div class="right navbar-icon"><a href="" class="link open-panel" data-panel="right"><i class="fa fa-language"></i></a></div>
</div>
</div>
<div class="pages">
<div class="page" data-page="home">
<div class="page-content">
<div class="slider-slick app-pages">
<?php  $VideoType=1;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="slider-entry"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="external"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:280px;object-fit:cover;"></a></div>
<?php  } ?>
</div>
<div class="profile">
<div class="container">
<?php $AdminTop=(array)$this->value['TopWebAd'];$AdminTop_count=count($AdminTop);for ($x=0; $x<=$AdminTop_count-1; $x++) {$TopWeb=$AdminTop[$x];$TopWebUrl=$TopWeb['TopWebUrl'];$TopRemarks=$TopWeb['TopRemarks'];$TopPicUrl=$TopWeb['TopPicUrl'];$TopState=$TopWeb['TopState'];$TopPicUrlWidth=$TopWeb['TopPicUrlWidth'];$TopPicUrlHeight=$TopWeb['TopPicUrlHeight'];;?> 
<p style="margin:5px 0;"><a href="<?php echo $TopWebUrl?>" target="_blank"><img style="width:<?php echo $TopPicUrlWidth?>;height:<?php echo $TopPicUrlHeight?>;" src="<?php echo $TopPicUrl?>"></a></p>
<?php } ?>
<div class="row">
<?php  $VideoType=2;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="col-100"><div class="entry"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="external"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:200px;object-fit:cover;"></a></div></div>
<?php  } ?>
<?php  $VideoType=3;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="col-100"><div class="entry"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="external"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:200px;object-fit:cover;"></a></div></div>
<?php  } ?>
<?php  $VideoType=4;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="col-100"><div class="entry"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="external"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:200px;object-fit:cover;"></a></div></div>
<?php  } ?>
<?php  $VideoType=5;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="col-100"><div class="entry"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="external"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:200px;object-fit:cover;"></a></div></div>
<?php  } ?>
</div>
</div>
</div>
<div class="portfolio app-section">
<div class="container">
<div class="app-title"><h4>热门视频</h4></div>
<ul class="portfolio-filter">
<li data-filter="all" class="active">全部</li>
<li data-filter="1"><?php  $vodtypes=(array)$this->value['数据分类'];  $shuzua=$vodtypes['7'];echo $shuzua['name']; ?></li>
<li data-filter="2"><?php  $vodtypes=(array)$this->value['数据分类'];  $shuzua=$vodtypes['8'];echo $shuzua['name']; ?></li>
<li data-filter="3"><?php  $vodtypes=(array)$this->value['数据分类'];  $shuzua=$vodtypes['9'];echo $shuzua['name']; ?></li>
</ul>
<div class="portfolio-item">
<div class="row">
<?php  $VideoType=7;  $Count=5;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="col-100 filtr-item" data-category="1"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="external"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:200px;object-fit:cover;"></a></div>
<?php  } ?>
</div>
<div class="row">
<?php  $VideoType=8;  $Count=5;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="col-100 filtr-item" data-category="2"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="external"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:200px;object-fit:cover;"></a></div>
<?php  } ?>
</div>
<div class="row">
<?php  $VideoType=9;  $Count=5;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="col-100 filtr-item" data-category="3"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="external"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:200px;object-fit:cover;"></a></div>
<?php  } ?>
</div>
</div>
</div>
</div>
<!-- 页尾 开始 -->
<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
<!-- 页尾 结束 -->
</div>
</div>
</div>
</div>
</div>
<script src="<?php echo $this->value['StylePath']; ?>/js/framework7.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/slick.min.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/lightbox.min.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/jquery.filterizr.min.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/my-app.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/language.js"></script>
</body>
</html>