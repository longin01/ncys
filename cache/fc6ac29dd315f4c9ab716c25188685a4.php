<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $this->value['WebTitle']; ?>-<?php  echo $this->value['RadioTypeName']; ?></title>
<meta name="author" content="<?php echo $this->value['WebTitle']; ?>">
<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>,<?php  echo $this->value['RadioTypeName']; ?>">
<meta name="description" content="<?php echo $this->value['WebDescription']; ?>,<?php  echo $this->value['RadioTypeName']; ?>">
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
<div class="center site-title"><a href="<?php echo $this->value['WEBUrl']; ?>" class="external"><h1><?php  echo $this->value['RadioTypeName']; ?></h1></a></div>
<div class="right navbar-icon"><a href="" class="link open-panel" data-panel="right"><i class="fa fa-language"></i></a></div>
</div>
</div>
<div class="pages">
<div class="page">
<div class="page-content">
<div class="app-pages">
<div class="blog app-section">
<div class="container">
<?php $AdminTop=(array)$this->value['TopWebAd'];$AdminTop_count=count($AdminTop);for ($x=0; $x<=$AdminTop_count-1; $x++) {$TopWeb=$AdminTop[$x];$TopWebUrl=$TopWeb['TopWebUrl'];$TopRemarks=$TopWeb['TopRemarks'];$TopPicUrl=$TopWeb['TopPicUrl'];$TopState=$TopWeb['TopState'];$TopPicUrlWidth=$TopWeb['TopPicUrlWidth'];$TopPicUrlHeight=$TopWeb['TopPicUrlHeight'];;?> 
<p style="margin:5px 0;"><a href="<?php echo $TopWebUrl?>" target="_blank"><img style="width:<?php echo $TopPicUrlWidth?>;height:<?php echo $TopPicUrlHeight?>;" src="<?php echo $TopPicUrl?>"></a></p>
<?php } ?>
<?php  $MYSQLVODS=(array)$this->value['RadioTypeNCSQL'];$RadioTypeId=$this->value['RadioTypeId'];$GetMb_page=$this->value['RadioTypePage']; $Count=21;$MYSQLVODS=PAGE($MYSQLVODS,$GetMb_page,$Count);  foreach($MYSQLVODS['source'] as $s){  ?>
<div class="entry"><a href="<?php 	echo  $Host1.'radio_detail'.$Host2.$s['d_id'].$Host3.$RadioTypeId.$Host4; ?>" title="<?php 	echo  $s['d_name'] ?>" class="external"><img src="<?php 	echo  $s['d_pic'] ?>" alt="<?php 	echo  $s['d_name'] ?>" class="imgPlay" style="height:200px;object-fit:cover;"></a><div class="content"><h5><a href="<?php 	echo  $Host1.'radio_detail'.$Host2.$s['d_id'].$Host3.$RadioTypeId.$Host4; ?>" title="<?php 	echo  $s['d_name'] ?>" class="external"><?php 	echo  $s['d_name'] ?></a></h5></div></div>
<?php  } ?>
<div class="pagination">
<ul id="wr-page">
<script src="<?php echo $this->value['StylePath']; ?>/js/jQuery.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/page.js?t=1"></script>
<script type="text/javascript">
$("#wr-page").wrpage({
pagesize: '<?php 	echo $MYSQLVODS['total']; ?>',
wr_current: '<?php 	echo $GetMb_page; ?>',
baseUrl: '<?php 	echo $Host1.'radio_list'.$Host2.$RadioTypeId.$Host3.'currentPage'.$Host4; ?>',
})
</script>
</ul>
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