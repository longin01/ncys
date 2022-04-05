<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?php echo $this->value['WebTitle']; ?>-<?php  echo $this->value['VideoTypeName']; ?></title>
<meta name="author" content="<?php echo $this->value['WebTitle']; ?>">
<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>,<?php  echo $this->value['VideoTypeName']; ?>">
<meta name="description" content="<?php echo $this->value['WebDescription']; ?>,<?php  echo $this->value['VideoTypeName']; ?>">
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
<div class="hero-header hero-small m-b-20 animated fadeindown">
<h1 class="hero-title primary-text"><a href="<?php echo $this->value['WEBUrl']; ?>"><?php  echo $this->value['VideoTypeName']; ?></a></h1>
</div>
<div class="section1 center">
<?php $AdminTop=(array)$this->value['TopWebAd'];$AdminTop_count=count($AdminTop);for ($x=0; $x<=$AdminTop_count-1; $x++) {$TopWeb=$AdminTop[$x];$TopWebUrl=$TopWeb['TopWebUrl'];$TopRemarks=$TopWeb['TopRemarks'];$TopPicUrl=$TopWeb['TopPicUrl'];$TopState=$TopWeb['TopState'];$TopPicUrlWidth=$TopWeb['TopPicUrlWidth'];$TopPicUrlHeight=$TopWeb['TopPicUrlHeight'];;?> 
<p style="margin:5px 0;"><a href="<?php echo $TopWebUrl?>" target="_blank"><img style="width:<?php echo $TopPicUrlWidth?>;height:<?php echo $TopPicUrlHeight?>;" src="<?php echo $TopPicUrl?>"></a></p>
<?php } ?>
</div>
<?php  $MYSQLVODS=(array)$this->value['VideoTypeNCSQL'];$VideoTypeId=$this->value['VideoTypeId'];$GetMb_page=$this->value['VideoTypePage']; $Count=21;$MYSQLVODS=PAGE($MYSQLVODS,$GetMb_page,$Count);  foreach($MYSQLVODS['source'] as $s){  ?>
<div class="card"><div class="header-hover"><div class="details"><span><?php 	echo  $s['d_name'] ?></span><span class="small"><?php 	echo   rand(5, 10000); ?> 人观看</span></div></div>
<div class="image"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$s['d_id'].$Host3.$VideoTypeId.$Host4; ?>" title="<?php 	echo  $s['d_name'] ?>"><img src="<?php 	echo  $s['d_pic'] ?>" alt="<?php 	echo  $s['d_name'] ?>"></a></div></div>
<?php  } ?>
<div class="pagination" id="wr-page">
<script src="<?php echo $this->value['StylePath']; ?>/js/page.js?t=1"></script>
<script type="text/javascript">
$("#wr-page").wrpage({
pagesize: '<?php 	echo $MYSQLVODS['total']; ?>',
wr_current: '<?php 	echo $GetMb_page; ?>',
baseUrl: '<?php 	echo $Host1.'video_list'.$Host2.$VideoTypeId.$Host3.'currentPage'.$Host4; ?>',
})
</script>
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