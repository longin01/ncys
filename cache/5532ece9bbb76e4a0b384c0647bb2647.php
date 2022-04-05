<html>
<head>
	<title><?php echo $this->value['WebTitle']; ?>-<?php echo $this->value['ListName']; ?>-<?php echo $this->value['Name']; ?>视频播放</title>
	<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>,<?php echo $this->value['ListName']; ?>,<?php echo $this->value['Name']; ?>" />
	<meta name="description" content="<?php echo $this->value['WebDescription']; ?>,<?php echo $this->value['ListName']; ?>,<?php echo $this->value['Name']; ?>" />
	<link rel="icon" type="image/png" href="<?php echo $this->value['StylePath']; ?>/img/logo.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="index, follow" />
	<meta name="revisit-after" content="1 days" />
	<script src="<?php echo $this->value['StylePath']; ?>/js/jquery.min.js"></script>
	<script src="<?php echo $this->value['StylePath']; ?>/js/uikit.min.js"></script>
	<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->value['StylePath']; ?>/css/iconfont.css" /> 
	<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/m.style.css">
</head>
<body>
<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
<div class="player" style="height:200px">
	<?php echo $this->value['Play']; ?>
</div>
<div class="desc uk-display-block">
	<hr>
	<!-- 标题 -->
	<div class="desc-title uk-clearfix uk-margin-small-bottom"><h3 class="uk-margin-remove uk-float-left"><?php echo $this->value['Name']; ?></h3></div>
	<!-- 功能按钮 -->
	<div class="v-func uk-clearfix">
		<a href="#"><i class="icon iconfont icon-fenxiang"></i><span>分享</span></a>
		<a href="#"><i class="icon iconfont icon-shoucang"></i><span>收藏</span></a>
		<a href="#"><i class="icon iconfont icon-zan"></i><span><?php echo $this->value['Time']; ?></span></a>
	</div>
	<!-- 下拉信息 -->
	<div class="v-info">
		<button class="icon iconfont icon-arrow-bottom v-info-open">展开</button>
		<div class="v-info-box">
			<div class="uk-margin-small-bottom uk-margin-small-top">
				<span class="timer icon iconfont icon--eye ">ID:<?php echo $this->value['Id']; ?></span>
				<span class="timer icon iconfont icon-weibiaoti--"><?php echo $this->value['Name']; ?></span>
				<span class="timer icon iconfont icon-shijian"><?php echo $this->value['Time']; ?></span>
			</div>
			<div class="v-info-close icon iconfont icon-arrow-top">关闭</div>
		</div>
	</div>
	<?php $Video=(array)$this->value['VideoWebAd'];$Video_count=count($Video);for ($x=0; $x<=$Video_count-1; $x++) {$VideoWeb=$Video[$x];$VideoWebUrl=$VideoWeb['VideoWebUrl'];$VideoRemarks=$VideoWeb['VideoRemarks'];$VideoPicUrl=$VideoWeb['VideoPicUrl'];$VideoState=$VideoWeb['VideoState'];$VideoPicUrlWidth=$VideoWeb['VideoPicUrlWidth'];$VideoPicUrlHeight=$VideoWeb['VideoPicUrlHeight'];;?> 
	<a target="_blank"  href="<?php echo $VideoWebUrl?>"><img style="width:<?php echo $VideoPicUrlWidth?>;height:<?php echo $VideoPicUrlHeight?>;margin-bottom:2px;" src="<?php echo $VideoPicUrl?>"></a> 
	<?php } ?>
</div>
<div class="v-type-favorite uk-clearfix">
	<!-- 相关视频 标题 -->
	<div class="v-type-title uk-clearfix uk-margin-top uk-margin-small-bottom"><h3 class="uk-float-left">推荐视频</h3></div>
	<!-- 视频缩略图 -->
	<ul class="recom recom-play">
		<?php  $VideoType=$this->value['VideoType']; $MYSQLVOD=(array)$this->value['VideoTypeNCSQL'];shuffle($MYSQLVOD);  $Count=4;for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVODs=$MYSQLVOD[$x];  ?>
			<li>
				<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVODs['d_id'].$Host3.$VideoType.$Host4; ?>" class="uk-display-block ">
					<div class="re-pic uk-float-left"><img  class="v-cover lazy" data-original="<?php 	echo  $MYSQLVODs['d_pic'] ?>" alt="<?php 	echo  $MYSQLVODs['d_name'] ?>"></div>
					<div class="re-info">
						<div class="re-h uk-margin-top-remove"><?php 	echo  $MYSQLVODs['d_name'] ?></div>
						<div class="re-detail">
							<span><i class="icon iconfont icon-play"></i><?php 	echo   rand(5, 10000); ?>
							</span>
							<span><i class="icon iconfont icon-zan"></i><?php 	echo   rand(5, 10000); ?></span>
						</div>
					</div>
				</a>
			</li>
			
		<?php  } ?>					
	</ul>
</div>
<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
 </body>
</html>

