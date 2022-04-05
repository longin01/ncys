<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $this->value['WebTitle']; ?></title>
<meta name="author" content="<?php echo $this->value['WebKeywords']; ?>">
<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>">
<meta name="description" content="<?php echo $this->value['WebDescription']; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 user-scalable=no">
<meta name="mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="True">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->value['StylePath']; ?>/img/favicon.ico">  
<link rel="shortcut icon" href="<?php echo $this->value['StylePath']; ?>/img/favicon.png">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/materialize.min.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/slick.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/slick-theme.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/style.css">
</head>
<body>
<!-- 页头 开始 -->
<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
<!-- 页头 结束 -->
<div class="slider-slick app-pages">
<?php  $VideoType=1;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="slider-entry"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:280px;object-fit:cover;"><div class="overlay"></div><div class="caption"><div class="container"><h2><?php 	echo  $MYSQLVOD['d_name'] ?></h2><p><?php 	echo   rand(5, 10000); ?> 人看过</p><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="button">播放</a></div></div></div>
<?php  } ?>
</div>
<div class="videos">
<div class="container">
<?php $AdminTop=(array)$this->value['TopWebAd'];$AdminTop_count=count($AdminTop);for ($x=0; $x<=$AdminTop_count-1; $x++) {$TopWeb=$AdminTop[$x];$TopWebUrl=$TopWeb['TopWebUrl'];$TopRemarks=$TopWeb['TopRemarks'];$TopPicUrl=$TopWeb['TopPicUrl'];$TopState=$TopWeb['TopState'];$TopPicUrlWidth=$TopWeb['TopPicUrlWidth'];$TopPicUrlHeight=$TopWeb['TopPicUrlHeight'];;?> 
<p style="margin:5px 0;"><a href="<?php echo $TopWebUrl?>" target="_blank"><img style="width:<?php echo $TopPicUrlWidth?>;height:<?php echo $TopPicUrlHeight?>;" src="<?php echo $TopPicUrl?>"></a></p>
<?php } ?>
<div class="row">
<?php  $VideoType=2;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="col s6 top20"><div class="entry"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:120px;object-fit:cover;"></a><div class="time"><span><?php 	echo   rand(5, 10000); ?></span></div><div class="content"><h5><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="post-title"><?php 	echo  $MYSQLVOD['d_name'] ?></a></h5><div class="desc"><span><i class="fa fa-eye"></i> <?php 	echo   rand(5, 10000); ?> 人观看</span></div></div></div></div>
<?php  } ?>
<?php  $VideoType=3;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="col s6 top20"><div class="entry"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:120px;object-fit:cover;"></a><div class="time"><span><?php 	echo   rand(5, 10000); ?></span></div><div class="content"><h5><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="post-title"><?php 	echo  $MYSQLVOD['d_name'] ?></a></h5><div class="desc"><span><i class="fa fa-eye"></i> <?php 	echo   rand(5, 10000); ?> 人观看</span></div></div></div></div>
<?php  } ?>
<?php  $VideoType=4;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="col s6 top20"><div class="entry"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:120px;object-fit:cover;"></a><div class="time"><span><?php 	echo   rand(5, 10000); ?></span></div><div class="content"><h5><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="post-title"><?php 	echo  $MYSQLVOD['d_name'] ?></a></h5><div class="desc"><span><i class="fa fa-eye"></i> <?php 	echo   rand(5, 10000); ?> 人观看</span></div></div></div></div>
<?php  } ?>
<?php  $VideoType=5;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="col s6 top20"><div class="entry"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:120px;object-fit:cover;"></a><div class="time"><span><?php 	echo   rand(5, 10000); ?></span></div><div class="content"><h5><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="post-title"><?php 	echo  $MYSQLVOD['d_name'] ?></a></h5><div class="desc"><span><i class="fa fa-eye"></i> <?php 	echo   rand(5, 10000); ?> 人观看</span></div></div></div></div>
<?php  } ?>
<?php  $VideoType=7;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="col s6 top20"><div class="entry"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:120px;object-fit:cover;"></a><div class="time"><span><?php 	echo   rand(5, 10000); ?></span></div><div class="content"><h5><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="post-title"><?php 	echo  $MYSQLVOD['d_name'] ?></a></h5><div class="desc"><span><i class="fa fa-eye"></i> <?php 	echo   rand(5, 10000); ?> 人观看</span></div></div></div></div>
<?php  } ?>
<?php  $VideoType=8;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="col s6 top20"><div class="entry"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:120px;object-fit:cover;"></a><div class="time"><span><?php 	echo   rand(5, 10000); ?></span></div><div class="content"><h5><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="post-title"><?php 	echo  $MYSQLVOD['d_name'] ?></a></h5><div class="desc"><span><i class="fa fa-eye"></i> <?php 	echo   rand(5, 10000); ?> 人观看</span></div></div></div></div>
<?php  } ?>
<?php  $VideoType=9;  $Count=4;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<div class="col s6 top20"><div class="entry"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="imgPlay" style="height:120px;object-fit:cover;"></a><div class="time"><span><?php 	echo   rand(5, 10000); ?></span></div><div class="content"><h5><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" class="post-title"><?php 	echo  $MYSQLVOD['d_name'] ?></a></h5><div class="desc"><span><i class="fa fa-eye"></i> <?php 	echo   rand(5, 10000); ?> 人观看</span></div></div></div></div>
<?php  } ?>
</div>
</div>
</div>
<!-- 页尾 开始 -->
<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
<!-- 页尾 结束 -->
<script src="<?php echo $this->value['StylePath']; ?>/js/materialize.min.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/slick.min.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/custom.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/language.js"></script>
</body>
</html>