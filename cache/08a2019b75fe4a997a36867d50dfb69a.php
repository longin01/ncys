<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-type" name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width"/>
<title><?php echo $this->value['WebTitle']; ?>-<?php echo $this->value['ListName']; ?>-<?php echo $this->value['Name']; ?></title>
<meta name="author" content="<?php echo $this->value['WebTitle']; ?>">
<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>,<?php echo $this->value['ListName']; ?>,<?php echo $this->value['Name']; ?>">
<meta name="description" content="<?php echo $this->value['WebDescription']; ?>,<?php echo $this->value['ListName']; ?>,<?php echo $this->value['Name']; ?>">
<link rel="shortcut icon" type="image/png" href="<?php echo $this->value['StylePath']; ?>/images/logo.ico">
<link href="<?php echo $this->value['StylePath']; ?>/css/home.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->value['StylePath']; ?>/css/default.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->value['StylePath']; ?>/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- 页头 开始 -->
<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
<!-- 页头 结束 -->
<div class="mod">
<div class="area">
<?php $Video=(array)$this->value['VideoWebAd'];$Video_count=count($Video);for ($x=0; $x<=$Video_count-1; $x++) {$VideoWeb=$Video[$x];$VideoWebUrl=$VideoWeb['VideoWebUrl'];$VideoRemarks=$VideoWeb['VideoRemarks'];$VideoPicUrl=$VideoWeb['VideoPicUrl'];$VideoState=$VideoWeb['VideoState'];$VideoPicUrlWidth=$VideoWeb['VideoPicUrlWidth'];$VideoPicUrlHeight=$VideoWeb['VideoPicUrlHeight'];;?> 
<p style="margin:5px 0;"><a href="<?php echo $VideoWebUrl?>" target="_blank"><img src="<?php echo $VideoPicUrl?>" style="width:<?php echo $VideoPicUrlWidth?>;height:<?php echo $VideoPicUrlHeight?>;"></a></p>
<?php } ?>
<div class="mod-title">
<div id="link" class="block"><div id="title"><?php echo $this->value['ListName']; ?>~<?php echo $this->value['Name']; ?></div></div>
</div>
<div class="mod-row col5 clearfix">
<a href="<?php echo $this->value['CUrl']; ?>" title="<?php echo $this->value['Name']; ?>"><img src="<?php echo $this->value['Pic']; ?>" alt="<?php echo $this->value['Name']; ?>" class="imgPlay" style="height:500px;object-fit:cover;"></a>
</div>
<div class="mod-row col5">
<p style="margin:10px 0;"><?php echo $this->value['overview']; ?>......</p>
<button type="submit" class="btn-submit" style="width:100%;" onClick="location.href='<?php echo $this->value['CUrl']; ?>';">在线阅读</button>
</div>
<div class="mod-title">
<div id="link" class="block"><div id="title">相关推荐</div></div>
</div>
<div class="mod-row col5 clearfix">
<?php  $BookType=$this->value['BookType']; $MYSQLVOD=(array)$this->value['BookTypeNCSQL'];shuffle($MYSQLVOD);  $Count=30;for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVODs=$MYSQLVOD[$x];  ?>
<dl><dt><a href="<?php 	echo  $Host1.'book_detail'.$Host2.$MYSQLVODs['a_id'].$Host3.$BookType.$Host4; ?>" title="<?php 	echo  $MYSQLVODs['a_name'] ?>"><img src="<?php 	echo  $MYSQLVODs['a_pic'] ?>" alt="<?php 	echo  $MYSQLVODs['a_name'] ?>" class="imgPlay"></a></dt></dl>
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