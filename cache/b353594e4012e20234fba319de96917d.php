<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-type" name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width"/>
<title><?php echo $this->value['WebTitle']; ?></title>
<meta name="author" content="<?php echo $this->value['WebTitle']; ?>">
<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>">
<meta name="description" content="<?php echo $this->value['WebDescription']; ?>">
<link rel="shortcut icon" type="image/png" href="<?php echo $this->value['StylePath']; ?>/images/logo.ico">
<link href="<?php echo $this->value['StylePath']; ?>/css/home.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/default.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- 页头 开始 -->
<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
<!-- 页头 结束 -->
<div class="mod">
<div class="area">
<?php $AdminTop=(array)$this->value['TopWebAd'];$AdminTop_count=count($AdminTop);for ($x=0; $x<=$AdminTop_count-1; $x++) {$TopWeb=$AdminTop[$x];$TopWebUrl=$TopWeb['TopWebUrl'];$TopRemarks=$TopWeb['TopRemarks'];$TopPicUrl=$TopWeb['TopPicUrl'];$TopState=$TopWeb['TopState'];$TopPicUrlWidth=$TopWeb['TopPicUrlWidth'];$TopPicUrlHeight=$TopWeb['TopPicUrlHeight'];;?> 
<p style="margin:5px 0;"><a href="<?php echo $TopWebUrl?>" target="_blank"><img src="<?php echo $TopPicUrl?>" style="width:<?php echo $TopPicUrlWidth?>;height:<?php echo $TopPicUrlHeight?>;"></a></p>
<?php } ?>
<div class="mod-title">
<div id="link" class="block"><div id="title">最新视频</div></div>
</div>
<div class="mod-row col5 clearfix">
<?php  $VideoType=1;  $Count=10;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<dl><dt><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>"></a></dt></dl>
<?php  } ?>
<?php  $VideoType=2;  $Count=10;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<dl><dt><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>"></a></dt></dl>
<?php  } ?>
<?php  $VideoType=3;  $Count=10;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<dl><dt><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>"></a></dt></dl>
<?php  } ?>
<?php  $VideoType=4;  $Count=10;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<dl><dt><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>"></a></dt></dl>
<?php  } ?>
</div>
<div class="mod-title">
<div id="link" class="block"><div id="title">热门视频</div></div>
</div>
<div class="mod-row col5 clearfix">
<?php  $VideoType=5;  $Count=10;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<dl><dt><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>"></a></dt></dl>
<?php  } ?>
<?php  $VideoType=6;  $Count=10;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<dl><dt><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>"></a></dt></dl>
<?php  } ?>
<?php  $VideoType=7;  $Count=10;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<dl><dt><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>"></a></dt></dl>
<?php  } ?>
<?php  $VideoType=8;  $Count=10;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<dl><dt><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>"></a></dt></dl>
<?php  } ?>
</div>
<div class="mod-title">
<div id="link" class="block"><div id="title">推荐视频</div></div>
</div>
<div class="mod-row col5 clearfix">
<?php  $VideoType=9;  $Count=10;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<dl><dt><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>"></a></dt></dl>
<?php  } ?>
<?php  $VideoType=10;  $Count=10;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<dl><dt><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>"></a></dt></dl>
<?php  } ?>
<?php  $VideoType=11;  $Count=10;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<dl><dt><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>"></a></dt></dl>
<?php  } ?>
<?php  $VideoType=12;  $Count=10;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<dl><dt><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>"></a></dt></dl>
<?php  } ?>
</div>
<!-- 页尾 开始 -->
<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
<!-- 页尾 结束 -->
</div>
</div>
<script src="<?php echo $this->value['StylePath']; ?>/js/language.js"></script>
</body>
</html>