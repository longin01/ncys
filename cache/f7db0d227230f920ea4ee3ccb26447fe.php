<!DOCTYPE HTML><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<title><?php echo $this->value['WebTitle']; ?>-<?php echo $this->value['ListName']; ?>-<?php echo $this->value['Name']; ?></title>
<meta name="author" content="<?php echo $this->value['WebTitle']; ?>">
<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>,<?php echo $this->value['ListName']; ?>,<?php echo $this->value['Name']; ?>">
<meta name="description" content="<?php echo $this->value['WebDescription']; ?>,<?php echo $this->value['ListName']; ?>,<?php echo $this->value['Name']; ?>">
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
<div class="blog-posts">
<div class="blog-post">
<a href="<?php echo $this->value['CUrl']; ?>" title="<?php echo $this->value['Name']; ?>" class="blog-post-image"><img src="<?php echo $this->value['Pic']; ?>" alt="<?php echo $this->value['Name']; ?>"></a>
<h3 class="blog-post-title"><?php echo $this->value['Name']; ?></h3>
<p style="margin:5px 0;"><?php echo $this->value['Time']; ?></p>
<button class="btn-submit" onClick="location.href='<?php echo $this->value['CUrl']; ?>';">在线播放</button>
<?php $Video=(array)$this->value['VideoWebAd'];$Video_count=count($Video);for ($x=0; $x<=$Video_count-1; $x++) {$VideoWeb=$Video[$x];$VideoWebUrl=$VideoWeb['VideoWebUrl'];$VideoRemarks=$VideoWeb['VideoRemarks'];$VideoPicUrl=$VideoWeb['VideoPicUrl'];$VideoState=$VideoWeb['VideoState'];$VideoPicUrlWidth=$VideoWeb['VideoPicUrlWidth'];$VideoPicUrlHeight=$VideoWeb['VideoPicUrlHeight'];;?> 
<p style="margin:5px 0;"><a href="<?php echo $VideoWebUrl?>" target="_blank"><img style="width:<?php echo $VideoPicUrlWidth?>;height:<?php echo $VideoPicUrlHeight?>;" src="<?php echo $VideoPicUrl?>"></a></p>
<?php } ?>
</div>
</div>
<div class="blog-sidebar">
<div class="decoration hide-if-responsive"></div>
<div class="widget container">
<h4>视频搜索</h4>
<form>
<input class="blog-search" type="text" name="search" placeholder="搜索...">
</form>
</div>
<div class="decoration"></div>
<div class="widget container">
<h4>相关推荐</h4>
<ul class="gallery square-thumb blog-gallery">
<?php  $VideoType=$this->value['VideoType']; $MYSQLVOD=(array)$this->value['VideoTypeNCSQL'];shuffle($MYSQLVOD);  $Count=6;for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVODs=$MYSQLVOD[$x];  ?>
<li><a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVODs['d_id'].$Host3.$VideoType.$Host4; ?>" title="<?php 	echo  $MYSQLVODs['d_name'] ?>"><img src="<?php 	echo  $MYSQLVODs['d_pic'] ?>" alt="<?php 	echo  $MYSQLVODs['d_name'] ?>"></a></li>
<?php  } ?>
</ul>
</div>
<div class="widget container">
<h4>热搜</h4>
<div class="one-half">
<ul class="blog-category">
<li><a href="/?m=video_search*淫穴*1" target="_blank"><i class="fa fa-angle-right"></i>淫穴</a></li>
<li><a href="/?m=video_search*另类*1" target="_blank"><i class="fa fa-angle-right"></i>另类</a></li>
<li><a href="/?m=video_search*全裸*1" target="_blank"><i class="fa fa-angle-right"></i>全裸</a></li>
<li><a href="/?m=video_search*宅男*1" target="_blank"><i class="fa fa-angle-right"></i>宅男</a></li>
<li><a href="/?m=video_search*医院*1" target="_blank"><i class="fa fa-angle-right"></i>医院</a></li>
<li><a href="/?m=video_search*淑女*1" target="_blank"><i class="fa fa-angle-right"></i>淑女</a></li>
<li><a href="/?m=video_search*姐姐*1" target="_blank"><i class="fa fa-angle-right"></i>姐姐</a></li>
<li><a href="/?m=video_search*初恋*1" target="_blank"><i class="fa fa-angle-right"></i>初恋</a></li>
<li><a href="/?m=video_search*女友*1" target="_blank"><i class="fa fa-angle-right"></i>女友</a></li>
<li><a href="/?m=video_search*素人*1" target="_blank"><i class="fa fa-angle-right"></i>素人</a></li>
</ul>
</div>
<div class="one-half last-column">
<ul class="blog-category">
<li><a href="/?m=video_search*厕所*1" target="_blank"><i class="fa fa-angle-right"></i>厕所</a></li>
<li><a href="/?m=video_search*无码*1" target="_blank"><i class="fa fa-angle-right"></i>无码</a></li>
<li><a href="/?m=video_search*露脸*1" target="_blank"><i class="fa fa-angle-right"></i>露脸</a></li>
<li><a href="/?m=video_search*纹身*1" target="_blank"><i class="fa fa-angle-right"></i>纹身</a></li>
<li><a href="/?m=video_search*电车*1" target="_blank"><i class="fa fa-angle-right"></i>电车</a></li>
<li><a href="/?m=video_search*情趣*1" target="_blank"><i class="fa fa-angle-right"></i>情趣</a></li>
<li><a href="/?m=video_search*淫水*1" target="_blank"><i class="fa fa-angle-right"></i>淫水</a></li>
<li><a href="/?m=video_search*捆绑*1" target="_blank"><i class="fa fa-angle-right"></i>捆绑</a></li>
<li><a href="/?m=video_search*搭讪*1" target="_blank"><i class="fa fa-angle-right"></i>搭讪</a></li>
<li><a href="/?m=video_search*自慰*1" target="_blank"><i class="fa fa-angle-right"></i>自慰</a></li>
</ul>
</div>
<div class="clear"></div>
</div>
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