<!DOCTYPE html>
<html lang="zxx">
<head>
<meta charset="UTF-8">
<title><?php echo $this->value['WebTitle']; ?>-<?php  echo $this->value['VideoTypeName']; ?></title>
<meta name="author" content="<?php echo $this->value['WebTitle']; ?>">
<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>,<?php  echo $this->value['VideoTypeName']; ?>">
<meta name="description" content="<?php echo $this->value['WebDescription']; ?>,<?php  echo $this->value['VideoTypeName']; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="HandheldFriendly" content="True">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/materialize.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/normalize.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/owl.carousel.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/owl.theme.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/owl.transitions.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/fakeLoader.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/magnific-popup.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/style.css">
<link rel="shortcut icon" href="<?php echo $this->value['StylePath']; ?>/img/favicon.png">
</head>
<body>
<!-- 页头 开始 -->
<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
<!-- 页头 结束 -->
<div class="pages section">
<div class="container">
<?php $AdminTop=(array)$this->value['TopWebAd'];$AdminTop_count=count($AdminTop);for ($x=0; $x<=$AdminTop_count-1; $x++) {$TopWeb=$AdminTop[$x];$TopWebUrl=$TopWeb['TopWebUrl'];$TopRemarks=$TopWeb['TopRemarks'];$TopPicUrl=$TopWeb['TopPicUrl'];$TopState=$TopWeb['TopState'];$TopPicUrlWidth=$TopWeb['TopPicUrlWidth'];$TopPicUrlHeight=$TopWeb['TopPicUrlHeight'];;?> 
<p style="margin:5px 0;"><a href="<?php echo $TopWebUrl?>" target="_blank"><img style="width:<?php echo $TopPicUrlWidth?>;height:<?php echo $TopPicUrlHeight?>;" src="<?php echo $TopPicUrl?>"></a></p>
<?php } ?>
<div class="blog">
<div class="row">
<?php  $MYSQLVODS=(array)$this->value['VideoTypeNCSQL'];$VideoTypeId=$this->value['VideoTypeId'];$GetMb_page=$this->value['VideoTypePage']; $Count=9;$MYSQLVODS=PAGE($MYSQLVODS,$GetMb_page,$Count);  foreach($MYSQLVODS['source'] as $s){  ?>
<div class="col s12"><div class="blog-content"><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$s['d_id'].$Host3.$VideoTypeId.$Host4; ?>" title="<?php 	echo  $s['d_name'] ?>"><img src="<?php 	echo  $s['d_pic'] ?>" alt="<?php 	echo  $s['d_name'] ?>" class="imgPlay" style="height:200px;object-fit:cover;"></a></div></div>
<?php  } ?>
</div>
<div class="row">
<div class="col s12">
<div class="pagination-blog">
<ul id="wr-page">
<script src="<?php echo $this->value['StylePath']; ?>/js/jQuery.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/page.js?t=1"></script>
<script type="text/javascript">
$("#wr-page").wrpage({
pagesize: '<?php 	echo $MYSQLVODS['total']; ?>',
wr_current: '<?php 	echo $GetMb_page; ?>',
baseUrl: '<?php 	echo $Host1.'video_list'.$Host2.$VideoTypeId.$Host3.'currentPage'.$Host4; ?>',
})
</script>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- 页尾 开始 -->
<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
<!-- 页尾 结束 -->
<script src="<?php echo $this->value['StylePath']; ?>/js/materialize.min.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/fakeLoader.min.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/main.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/language.js"></script>
</body>
</html>