<html>
<head>
	<title><?php echo $this->value['WebTitle']; ?>-<?php echo $this->value['ListName']; ?>-<?php echo $this->value['Name']; ?>视频介绍</title>
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
<div class="v-read">
	<!-- 标题 -->
	<div class="v-type-title uk-clearfix">
		<p class="bead ">
			<span class="icon iconfont icon-home"></span>
			位置：
			<a href="#" class=""><?php echo $this->value['ListName']; ?></a>
			<span class="icon iconfont icon-right"></span>
			<a href="#"><?php echo $this->value['Name']; ?></a>
		</p>
	</div>
	<!-- 影片介绍 -->
	<div class="read-info">
		<div class="read-img"> <img src='<?php echo $this->value['Pic']; ?>'></div>
		<!-- 视频标题 -->
		<h3 class="read-title uk-margin-top uk-margin-small-bottom"><?php echo $this->value['Name']; ?></h3>
		<div class="read-text uk-margin-top-remove uk-clearfix">
			<p class="uk-float-left">套图分类:<span><?php echo $this->value['ListName']; ?></span></p><p class="uk-float-left">更新时间:<span><?php echo $this->value['Time']; ?></span></p>
		</div>	
		<div class="read-btn uk-margin-top uk-margin-bottom uk-clearfix">
			<a href="<?php echo $this->value['CUrl']; ?>" class="uk-float-left">点击浏览</a><a href="<?php echo $this->value['CUrl']; ?>" class="uk-float-right">快速浏览</a>
		</div>
	</div>
</div>
	<?php $Video=(array)$this->value['VideoWebAd'];$Video_count=count($Video);for ($x=0; $x<=$Video_count-1; $x++) {$VideoWeb=$Video[$x];$VideoWebUrl=$VideoWeb['VideoWebUrl'];$VideoRemarks=$VideoWeb['VideoRemarks'];$VideoPicUrl=$VideoWeb['VideoPicUrl'];$VideoState=$VideoWeb['VideoState'];$VideoPicUrlWidth=$VideoWeb['VideoPicUrlWidth'];$VideoPicUrlHeight=$VideoWeb['VideoPicUrlHeight'];;?> 
	<a target="_blank"  href="<?php echo $VideoWebUrl?>"><img style="width:<?php echo $VideoPicUrlWidth?>;height:<?php echo $VideoPicUrlHeight?>;margin-bottom:2px;" src="<?php echo $VideoPicUrl?>"></a> 
	<?php } ?>
<div class="v-type-favorite uk-clearfix">
	<!-- 相关视频 标题 -->
	<div class="v-type-title uk-clearfix uk-margin-top uk-margin-small-bottom"><h3 class="uk-float-left">推荐套图</h3></div>
	<!-- 视频缩略图 -->
	<ul class="recom recom-play">
		<?php  $PicType=$this->value['PicType']; $MYSQLVOD=(array)$this->value['PicTypeTTSQL'];shuffle($MYSQLVOD);  $Count=4;for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVODs=$MYSQLVOD[$x];  ?>
			<li>
				<a href="<?php 	echo  $Host1.'pic_detail'.$Host2.$MYSQLVODs['a_id'].$Host3.$PicType.$Host4; ?>" class="uk-display-block ">
					<div class="re-pic uk-float-left"><img  class="v-cover lazy" data-original="<?php 	echo  $MYSQLVODs['a_remarks'] ?>" alt="<?php 	echo  $MYSQLVODs['a_name'] ?>"></div>
					<div class="re-info">
						<div class="re-h uk-margin-top-remove"><?php 	echo  $MYSQLVODs['a_name'] ?></div>
						<div class="re-detail">
							<span><i class="icon iconfont icon-play"></i><?php 	echo   rand(5, 10000); ?>
							</span>
							<span><i class="icon iconfont icon-zan"></i>欣赏套图乐趣无限</span>
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
