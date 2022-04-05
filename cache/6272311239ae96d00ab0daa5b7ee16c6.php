<html>
<head>
	<title><?php echo $this->value['WebTitle']; ?></title>
	<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>" />
	<meta name="description" content="<?php echo $this->value['WebDescription']; ?>" />
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
	<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/m.style.css?t=1">
</head>
<body>
<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
 <div class="v-type " style="margin-top: 0rem; ">
	<!-- 标题 -->
	<div class="v-type-title uk-clearfix"><h3 class="uk-float-left"><?php  $vodtypes=(array)$this->value['数据分类'];  $shuzua=$vodtypes['1'];echo $shuzua['name']; ?></h3></div>
	<!-- 视频缩略图 -->
	<ul class="v-list uk-clearfix uk-display-block">
		<?php  $VideoType=1;  $Count=6;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
			<li class="v-item v-item">
				<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" class="uk-display-block">
					<div class="v-cover lazy" data-original="<?php 	echo  $MYSQLVOD['d_pic'] ?>"></div>
					<h3 class="v-title"><?php 	echo  $MYSQLVOD['d_name'] ?></h3>
					<div class="uk-clearfix v-icon">
						<p class="uk-float-left uk-margin-right"><i class="icon iconfont icon-play"></i><span><?php 	echo   rand(5, 10000); ?></span></p>
						<p class="uk-float-left uk-margin-top-remove"><i class="icon iconfont icon-zan"></i><span><?php 	echo   rand(5, 10000); ?></span></p>
					</div>
				</a>
			</li>
		<?php  } ?>
	</ul>
	<!-- 标题 -->
	<div class="v-type-title uk-clearfix"><h3 class="uk-float-left"><?php  $vodtypes=(array)$this->value['数据分类'];  $shuzua=$vodtypes['4'];echo $shuzua['name']; ?></h3></div>
	<!-- 视频缩略图 -->
	<ul class="v-list uk-clearfix uk-display-block">
		<?php  $VideoType=4;  $Count=6;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
			<li class="v-item v-item">
				<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" class="uk-display-block">
					<div class="v-cover lazy" data-original="<?php 	echo  $MYSQLVOD['d_pic'] ?>"></div>
					<h3 class="v-title"><?php 	echo  $MYSQLVOD['d_name'] ?></h3>
					<div class="uk-clearfix v-icon">
						<p class="uk-float-left uk-margin-right"><i class="icon iconfont icon-play"></i><span><?php 	echo   rand(5, 10000); ?></span></p>
						<p class="uk-float-left uk-margin-top-remove"><i class="icon iconfont icon-zan"></i><span><?php 	echo   rand(5, 10000); ?></span></p>
					</div>
				</a>
			</li>
		<?php  } ?>
	<!-- 标题 -->
	<div class="v-type-title uk-clearfix"><h3 class="uk-float-left"><?php  $vodtypes=(array)$this->value['数据分类'];  $shuzua=$vodtypes['6'];echo $shuzua['name']; ?></h3></div>
	<!-- 视频缩略图 -->
	<ul class="v-list uk-clearfix uk-display-block">
		<?php  $VideoType=6;  $Count=6;$MYSQLVODS = json_decode(file_get_contents('./NCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
			<li class="v-item v-item">
				<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" class="uk-display-block">
					<div class="v-cover lazy" data-original="<?php 	echo  $MYSQLVOD['d_pic'] ?>"></div>
					<h3 class="v-title"><?php 	echo  $MYSQLVOD['d_name'] ?></h3>
					<div class="uk-clearfix v-icon">
						<p class="uk-float-left uk-margin-right"><i class="icon iconfont icon-play"></i><span><?php 	echo   rand(5, 10000); ?></span></p>
						<p class="uk-float-left uk-margin-top-remove"><i class="icon iconfont icon-zan"></i><span><?php 	echo   rand(5, 10000); ?></span></p>
					</div>
				</a>
			</li>
		<?php  } ?>
	</ul>		
	</ul>	
 </div>
<div class="v-type uk-margin-small-top">
	<div class="v-type-title uk-clearfix">
		<h3 class="uk-float-left">友情链接</h3>
	</div>
	<ul class="links-list uk-display-block uk-clearfix">
		<?php  $IeUrl=(array)$this->value['IeUrl']; $Count=Count($IeUrl); for ($x=0; $x<=$Count-1; $x++) {  $IeUrls=$IeUrl[$x];  ?><li class="uk-float-left uk-margin-right"><a href="<?php 	echo  $IeUrls['IeUrlWebUrl'] ?>" target="_blank" class="uk-float-left"><?php 	echo  $IeUrls['IeUrlName'] ?></a></li><?php  } ?>
	</ul>
</div>
<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
 </body>
</html>

