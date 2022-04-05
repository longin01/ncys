<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-type" name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width"/>
<title><?php echo $this->value['WebTitle']; ?>-<?php  echo $this->value['BookTypeName']; ?></title>
<meta name="author" content="<?php echo $this->value['WebTitle']; ?>">
<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>,<?php  echo $this->value['BookTypeName']; ?>">
<meta name="description" content="<?php echo $this->value['WebDescription']; ?>,<?php  echo $this->value['BookTypeName']; ?>">
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
<div id="link" class="block"><div id="title"><?php  echo $this->value['BookTypeName']; ?></div></div>
</div>
<div class="mod-row col5 clearfix">
<?php  $MYSQLVODS=(array)$this->value['BookTypeNCSQL'];$BookTypeId=$this->value['BookTypeId'];$GetMb_page=$this->value['BookTypePage']; $Count=30;$MYSQLVODS=PAGE($MYSQLVODS,$GetMb_page,$Count);  foreach($MYSQLVODS['source'] as $s){  ?>
<dl><dt><a href="<?php 	echo  $Host1.'book_detail'.$Host2.$s['a_id'].$Host3.$BookTypeId.$Host4; ?>" title="<?php 	echo  $s['a_name'] ?>"><img src="<?php 	echo  $s['a_pic'] ?>" alt="<?php 	echo  $s['a_name'] ?>"></a></dt></dl>
<?php  } ?>
</div>
<div class="pagination" id="wr-page">
<script src="<?php echo $this->value['StylePath']; ?>/js/jQuery.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/page.js?t=1"></script>
<script type="text/javascript">
$("#wr-page").wrpage({
pagesize: '<?php 	echo $MYSQLVODS['total']; ?>',
wr_current: '<?php 	echo $GetMb_page; ?>',
baseUrl: '<?php 	echo $Host1.'book_list'.$Host2.$BookTypeId.$Host3.'currentPage'.$Host4; ?>',
})
</script>
</div>
<!-- 页尾 开始 -->
<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
<!-- 页尾 结束 -->
</div>
</div>
<script src="<?php echo $this->value['StylePath']; ?>/js/language.js"></script>
</body>
</html>