<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $this->value['WebTitle']; ?>-<?php echo $this->value['ListName']; ?>-<?php echo $this->value['Name']; ?>小说介绍</title>
	<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>,<?php echo $this->value['ListName']; ?>,<?php echo $this->value['Name']; ?>" />
	<meta name="description" content="<?php echo $this->value['WebDescription']; ?>,<?php echo $this->value['ListName']; ?>,<?php echo $this->value['Name']; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/uikit.min.css" />
    <link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/common.min.css" />
    <link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/font/iconfont.css" />
    <script src="<?php echo $this->value['StylePath']; ?>/js/jquery.js"></script>
    <script src="<?php echo $this->value['StylePath']; ?>/js/uikit.min.js"></script>
    <script src="<?php echo $this->value['StylePath']; ?>/js/accordion.min.js"></script>
	<link rel="icon" type="image/png" href="<?php echo $this->value['StylePath']; ?>/images/logo.ico">
</head>
<body>
    <div class="w1200 uk-clearfix">
			<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
				<div class="right-container">
                <div class="list-videos uk-margin-top uk-margin-bottom">
                    <div class="video-head uk-clearfix uk-margin-bottom">
                        <!-- 面包屑 -->
                        <div class="bred uk-float-left">
                            <p>
                                <i class="icon iconfont icon-home"></i>
                                <span>您当前位置：</span>
                                <a href="#"><?php echo $this->value['ListName']; ?></a>
                                <i class="icon iconfont icon-right"></i>
                                <a href="#" class=""><?php echo $this->value['Name']; ?></a>
                                <i class="icon iconfont icon-right"></i>
                                <span class="right">小说介绍</span>
                            </p>
                            
                        </div>
                    </div>
					<div class="video-content">
                        <div class="read">
                            <div class="read-img">
                                <?php echo $this->value['overview']; ?>......<!--<?php echo $this->value['Pic']; ?>-->
                            </div>

                            <!-- 标题 -->
                            <h3 class="uk-text-left uk-margin-bottom"><?php echo $this->value['Name']; ?></h3>
                            <!-- 影片信息 -->
                            <div class="read-text uk-margin-top-remove uk-clearfix">
                                <!-- 播放按钮 -->
                                <div class="read-btn uk-margin-bottom uk-float-left">
                                    <a href="<?php echo $this->value['CUrl']; ?>" class="uk-float-left uk-margin-large-right uk-button h-line ">点击阅读</a>
                                    <a href="<?php echo $this->value['CUrl']; ?>" class="uk-float-left uk-margin-large-right uk-button h-line ">快速阅读</a>
                                </div>
                                <p class="uk-float-left uk-margin-large-right">小说分类:<span><?php echo $this->value['ListName']; ?></span></p>
                                <p class="uk-float-left uk-margin-large-right">更新时间:<span><?php echo $this->value['Time']; ?></span></p>
                            </div>
                        </div>
                        
						<!-- 分割线 -->
						<div class="line"><hr></div>
						 <?php $Video=(array)$this->value['VideoWebAd'];$Video_count=count($Video);for ($x=0; $x<=$Video_count-1; $x++) {$VideoWeb=$Video[$x];$VideoWebUrl=$VideoWeb['VideoWebUrl'];$VideoRemarks=$VideoWeb['VideoRemarks'];$VideoPicUrl=$VideoWeb['VideoPicUrl'];$VideoState=$VideoWeb['VideoState'];$VideoPicUrlWidth=$VideoWeb['VideoPicUrlWidth'];$VideoPicUrlHeight=$VideoWeb['VideoPicUrlHeight'];;?> 
							<li><a target="_blank"  href="<?php echo $VideoWebUrl?>"><img style="width:<?php echo $VideoPicUrlWidth?>;height:<?php echo $VideoPicUrlHeight?>;margin-bottom:2px;" src="<?php echo $VideoPicUrl?>"></a></li> 
						 <?php } ?>
						<!-- 分割线 -->
                    </div>					
					<div class="list-videos uk-margin-top uk-margin-bottom">
                    <div class="video-head uk-clearfix">
                        <h3 class="h3-color uk-float-left"><?php echo $this->value['ListName']; ?>推荐小说</h3>
                        <a href="<?php echo $this->value['ListUrl']; ?>" class="more"><?php echo $this->value['ListName']; ?>更多推荐小说</a>
                    </div>




                    <div class="video-content uk-grid uk-grid-small">
					

							<?php  $BookType=$this->value['BookType']; $MYSQLVOD=(array)$this->value['BookTypeNCSQL'];shuffle($MYSQLVOD);  $Count=9;for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVODs=$MYSQLVOD[$x];  ?>
							<div class="uk-width-1-3 uk-margin-bottom">
								<a class="video-pic video-pic-h uk-display-block" href="<?php 	echo  $Host1.'book_detail'.$Host2.$MYSQLVODs['a_id'].$Host3.$BookType.$Host4; ?>"><span class="live-tag"></span>
									<img src="<?php 	echo  $MYSQLVODs['a_pic'] ?>" alt="<?php 	echo  $MYSQLVODs['a_name'] ?>"></a>
								<div class="video-title">
									<a href="#" class="uk-margin-small-bottom uk-margin-small-top uk-display-block"><?php 	echo  $MYSQLVODs['a_name'] ?></a>
									<div class="uk-clearfix uk-margin-small-top">
										<p class="video-play uk-float-left"><i class="icon iconfont icon-play"></i><span><?php 	echo   rand(5, 10000); ?></span></p>
										<p class="video-like uk-float-left uk-margin-left"><i class="icon iconfont icon-like"></i><span><?php 	echo   rand(5, 10000); ?></span></p>
									</div>
								</div>
							</div>
					<?php  } ?>						
					




                  
                    </div>
                </div>
				<div class="line">
                    <hr>
                </div>



        </div>				
				
				
				
				
				
				

				 <!-- 视频结束 -->				 
				</div> <!-- header.html闭合DIV -->
			<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
		</div>	
	</div>
 </body>
</html>

