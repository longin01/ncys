<!DOCTYPE html>
<html lang="en-US">
<head>
<title><?php echo $this->value['WebTitle']; ?>-<?php  echo $this->value['PicTypeName']; ?></title>
<meta name="author" content="<?php echo $this->value['WebTitle']; ?>">
<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>,<?php  echo $this->value['PicTypeName']; ?>" />
<meta name="description" content="<?php echo $this->value['WebDescription']; ?>,<?php  echo $this->value['PicTypeName']; ?>" />
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
<div class="content-container">
<div class="page-header-container animated fadeInRight">
<h2 class="page-title"><?php  echo $this->value['PicTypeName']; ?></h2>
<div class="redline"></div>
</div>
<div class="widget-box animated fadeInUp">
<?php $AdminTop=(array)$this->value['TopWebAd'];$AdminTop_count=count($AdminTop);for ($x=0; $x<=$AdminTop_count-1; $x++) {$TopWeb=$AdminTop[$x];$TopWebUrl=$TopWeb['TopWebUrl'];$TopRemarks=$TopWeb['TopRemarks'];$TopPicUrl=$TopWeb['TopPicUrl'];$TopState=$TopWeb['TopState'];$TopPicUrlWidth=$TopWeb['TopPicUrlWidth'];$TopPicUrlHeight=$TopWeb['TopPicUrlHeight'];;?> 
<p style="margin:5px 0;"><a href="<?php echo $TopWebUrl?>" target="_blank"><img style="width:<?php echo $TopPicUrlWidth?>;height:<?php echo $TopPicUrlHeight?>;" src="<?php echo $TopPicUrl?>"></a></p>
<?php } ?>
<?php  $MYSQLVODS=(array)$this->value['PicTypeNCSQL'];$PicTypeId=$this->value['PicTypeId'];$GetMb_page=$this->value['PicTypePage']; $Count=21;$MYSQLVODS=PAGE($MYSQLVODS,$GetMb_page,$Count);  foreach($MYSQLVODS['source'] as $s){  ?>
<a href="<?php 	echo  $Host1.'pic_detail'.$Host2.$s['a_id'].$Host3.$PicTypeId.$Host4; ?>" title="<?php 	echo  $s['a_name'] ?>" class="small-listing-item"><div class="entry-thumb"><img src="<?php 	echo  $s['a_remarks'] ?>" alt="<?php 	echo  $s['a_name'] ?>" class="imgPlay" style="height:200px;object-fit:cover;"></div></a>
<?php  } ?>
<div class="clear"></div>
</div>
<div class="pagination" id="wr-page">
<script src="<?php echo $this->value['StylePath']; ?>/js/jQuery.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/page.js?t=1"></script>
<script type="text/javascript">
$("#wr-page").wrpage({
pagesize: '<?php 	echo $MYSQLVODS['total']; ?>',
wr_current: '<?php 	echo $GetMb_page; ?>',
baseUrl: '<?php 	echo $Host1.'pic_list'.$Host2.$PicTypeId.$Host3.'currentPage'.$Host4; ?>',
})
</script>
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