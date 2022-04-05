<!DOCTYPE HTML><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<title><?php echo $this->value['WebTitle']; ?>-{NCCMS-Boon-List:Title}</title>
<meta name="author" content="<?php echo $this->value['WebTitle']; ?>">
<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>,{NCCMS-Boon-List:Title}">
<meta name="description" content="<?php echo $this->value['WebDescription']; ?>,{NCCMS-Boon-List:Title}">
<link href="<?php echo $this->value['StylePath']; ?>/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/framework.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/owl.theme.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/swipebox.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/animate.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- 页头 开始 -->
<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
<!-- 页头 结束 -->
<div class="menu-background"></div>
<div class="content">
<div class="adaptive-style">
<h4>{NCCMS-Boon-List:Title}</h4>
<a class="adaptive-three-activate" href="#"><i class="fa fa-th"></i></a>
<a class="adaptive-two-activate" href="#"><i class="fa fa-th-large"></i></a>
<a class="adaptive-one-activate active-adaptive-style" href="#"><i class="fa fa-navicon"></i></a>
</div>
<div class="clear"></div>
<?php $AdminTop=(array)$this->value['TopWebAd'];$AdminTop_count=count($AdminTop);for ($x=0; $x<=$AdminTop_count-1; $x++) {$TopWeb=$AdminTop[$x];$TopWebUrl=$TopWeb['TopWebUrl'];$TopRemarks=$TopWeb['TopRemarks'];$TopPicUrl=$TopWeb['TopPicUrl'];$TopState=$TopWeb['TopState'];$TopPicUrlWidth=$TopWeb['TopPicUrlWidth'];$TopPicUrlHeight=$TopWeb['TopPicUrlHeight'];;?> 
<p style="margin:5px 0;"><a href="<?php echo $TopWebUrl?>" target="_blank"><img style="width:<?php echo $TopPicUrlWidth?>;height:<?php echo $TopPicUrlHeight?>;" src="<?php echo $TopPicUrl?>"></a></p>
<?php } ?>
<div class="decoration"></div>
<div class="portfolio-adaptive adaptive-one">
{NCCMS-Boon-List:Count=21}
<div class="adaptive-item"><a href="{NCCMS-Boon-List:DUrl}" title="{NCCMS-Boon-List:Name}"><img src="{NCCMS-Boon-List:Pic}" alt="{NCCMS-Boon-List:Name}" class="responsive-image"></a></div>
{/NCCMS-Boon-List}
</div>
<div class="pagination" id="wr-page">
<script src="<?php echo $this->value['StylePath']; ?>/js/jQuery.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/page.js?t=1"></script>
<script type="text/javascript">
$("#wr-page").wrpage({
pagesize: '{NCCMS-Boon-List:totalPage}',
wr_current: '{NCCMS-Boon-List:currentPage}',
baseUrl: '{NCCMS-Boon-List:baseUrl}',
})
</script>
</div>
<div class="decoration"></div>
</div>
<!-- 页尾 开始 -->
<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
<!-- 页尾 结束 -->
</div>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/jqueryui.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/framework.plugins.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/custom.js"></script>
<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/language.js"></script>
</body>
</html>