<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $this->value['WebTitle']; ?>-<?php  echo $this->value['BookTypeName']; ?>-小说分类列表</title>
	<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>,<?php  echo $this->value['BookTypeName']; ?>" />
	<meta name="description" content="<?php echo $this->value['WebDescription']; ?>,<?php  echo $this->value['BookTypeName']; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/uikit.min.css" />
    <link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/common.min.css" />
    <link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/font/iconfont.css" />
    <script src="<?php echo $this->value['StylePath']; ?>/js/jquery.js"></script>
    <script src="<?php echo $this->value['StylePath']; ?>/js/uikit.min.js"></script>
	<script src="<?php echo $this->value['StylePath']; ?>/js/accordion.min.js"></script>
	<link rel="icon" type="image/png" href="<?php echo $this->value['StylePath']; ?>/images/logo.ico">
	<style type="text/css">
	
		.book_wz_two{
					position: absolute;
			 top: 40%;
    width: 100%;
    text-align: center;
    font-size: 18px;
    color: #fff;
		}
	</style>
</head>
<body>
    <div class="w1200 uk-clearfix">
			<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
				<div class="right-container">
					<!-- 视频分类 -->
					<div class="list-videos uk-margin-top uk-margin-bottom">
						<div class="video-head uk-clearfix"><h3 class="h3-color uk-float-left">小说<?php  echo $this->value['BookTypeName']; ?>列表</h3></div>
                   <div class="video-content uk-grid uk-grid-small">	
                     
						<?php  $MYSQLVODS=(array)$this->value['BookTypeNCSQL'];$BookTypeId=$this->value['BookTypeId'];$GetMb_page=$this->value['BookTypePage']; $Count=9;$MYSQLVODS=PAGE($MYSQLVODS,$GetMb_page,$Count);  foreach($MYSQLVODS['source'] as $s){  ?>	
								<div class="uk-width-1-3 uk-margin-bottom" style="position:relative">
								<a href="<?php 	echo  $Host1.'book_detail'.$Host2.$s['a_id'].$Host3.$BookTypeId.$Host4; ?>" class="video-pic uk-display-block">
									<span class="live-tag"></span>
									<img src="<?php 	echo  $s['a_pic'] ?>" alt="<?php 	echo  $s['a_name'] ?>">
									<a href="#" class="uk-margin-small-bottom uk-margin-small-top uk-display-block book_wz_two">
										<strong >
											<?php 	echo  $s['a_name'] ?>
										</strong>
									</a>
								</a>
								<div class="video-title">
									<div class="uk-clearfix uk-margin-small-top">
										<p class="video-play uk-float-left">
											<i class="icon iconfont icon-play"></i>
											<span><?php 	echo   rand(5, 10000); ?></span>
										</p>
										<p class="video-like uk-float-left uk-margin-left">
											<i class="icon iconfont icon-like"></i>
											<span><?php 	echo   rand(5, 10000); ?></span>
										</p>
									</div>
								</div>
							</div>				
						<?php  } ?>
                    </div>						

					</div>
				 <!-- 视频结束 -->
                 <!-- 分页 -->
                <div id="wr-page"></div>
                <script src="<?php echo $this->value['StylePath']; ?>/js/page.js?t=1"></script>
                <script type="text/javascript">
                    $("#wr-page").wrpage({
                        pagesize: '<?php 	echo $MYSQLVODS['total']; ?>',
                        wr_current: '<?php 	echo $GetMb_page; ?>',
                        baseUrl: '<?php 	echo $Host1.'book_list'.$Host2.$BookTypeId.$Host3.'currentPage'.$Host4; ?>',
                    })
                </script>
				</div> <!-- header.html闭合DIV -->
			<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
		</div>	
	</div>
 </body>
</html>

