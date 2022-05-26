<?php if (!defined('THINK_PATH')) exit(); /*a:9:{s:38:"template/mytheme/html/label/zhibo.html";i:1653471608;s:58:"/usr/local/html/cms/template/mytheme/html/public/data.html";i:1653471608;s:61:"/usr/local/html/cms/template/mytheme/html/public/include.html";i:1653471608;s:59:"/usr/local/html/cms/template/mytheme/html/public/style.html";i:1653471608;s:56:"/usr/local/html/cms/template/mytheme/html/diy/style.html";i:1653471608;s:58:"/usr/local/html/cms/template/mytheme/html/public/head.html";i:1653471608;s:63:"/usr/local/html/cms/template/mytheme/html/block/qrcode_box.html";i:1653471608;s:58:"/usr/local/html/cms/template/mytheme/html/public/foot.html";i:1653471608;s:62:"/usr/local/html/cms/template/mytheme/html/user/ajax_login.html";i:1653471608;}*/ ?>
<?php 
	$incPath = dirname(APP_PATH); 
	$incPath .= ''.$maccms[path_tpl].'admin/data/mydata.php'; 
	require_once($incPath); 
	$my = parse_ini_file(substr($maccms['path_tpl'], strlen($maccms['path'])).'info.ini');
	if(!isset($mytheme)){
		$mytheme = g();
	}
	if($mytheme[web][close]){
		echo ($mytheme[web][close_tips]);
		exit;
	}
if($mytheme['site']['debug']): ?><!--当前文件路径（仅主题调试模式下可见）<?php echo $maccms[path_tpl]; ?>label/zhibo.html--><?php endif; ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>电视直播-<?php echo $mytheme['site']['title']; ?></title>
    <meta name="keywords" content="<?php echo $mytheme['site']['keywords']; ?>" />
    <meta name="description" content="<?php echo $mytheme['site']['description']; ?>" />  
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="shortcut icon" href="<?php echo $mytheme['site']['ico']; ?>" type="image/x-icon" />					
<link rel="stylesheet" href="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/css/mytheme-font.css?v=<?php echo $my['version']; ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/css/mytheme-ui.css?v=<?php echo $my['version']; ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/css/mytheme-site.css?v=<?php echo $my['version']; ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/css/<?php echo $mytheme['style']['default']; ?>.css?v=<?php echo $my['version']; ?>" type="text/css" name="default" />
<?php if($mytheme['skin']['is'] && !$mytheme['color']['is']): $_628e2e046344a=explode(',',''.$mytheme['skin']['style'].''); if(is_array($_628e2e046344a) || $_628e2e046344a instanceof \think\Collection || $_628e2e046344a instanceof \think\Paginator): if( count($_628e2e046344a)==0 ) : echo "" ;else: foreach($_628e2e046344a as $key=>$vo): ?>
<link rel="stylesheet" href="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/css/<?php echo $vo; ?>.css?v=<?php echo $my['version']; ?>" type="text/css" name="skin" disabled/>
<?php endforeach; endif; else: echo "" ;endif; endif; ?>
<script> 
	var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};
	var myui={"tpl":"<?php echo $maccms['path_tpl']; ?>","shortapi":"<?php echo $mytheme['short']['api']; ?>","bdapi":"<?php echo $mytheme['bdshare']['api']; ?>","thunderurl":"<?php echo $mytheme['downlist']['api']; ?>","language":"<?php echo $mytheme['language']['trans']; ?>"};
</script>
<script type="text/javascript" src="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/js/jquery.min.js?v=3.3.1"></script>
<script type="text/javascript" src="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/js/layer/layer.js?v3.1.1"></script>
<script type="text/javascript" src="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/js/mytheme-site.js?v=<?php echo $my['version']; ?>"></script>
<script type="text/javascript" src="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/js/mytheme-ui.js?v=<?php echo $my['version']; ?>"></script>
<script type="text/javascript" src="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/js/mytheme-cms.js?v=<?php echo $my['version']; ?>"></script>
<?php echo $mytheme['site']['sub_static']; ?>
<style type="text/css">
	body{ font-family:<?php echo $mytheme['style']['font']; ?>;<?php if($mytheme['nav']['fixed']): ?> padding-top: 90px;<?php endif; ?>}
	.myui-header__top{<?php if($mytheme['nav']['fixed']): ?> position: fixed;<?php else: ?> position: relative; margin-bottom: 30px;<?php endif; ?>}
	<?php if($mytheme['nav']['fixed']): ?> body.active{padding-top: 60px;}<?php else: ?> body.active .myui-header__top{ margin-bottom: 0;}<?php endif; ?>
	[class*=col-],.myui-content__list li,.myui-vodlist__media.col li{ padding: <?php echo $mytheme['main']['col']; ?>px}
	.btn{ border-radius: <?php echo $mytheme['main']['btn_radius']; ?>px;}
	.myui-vodlist__thumb{ border-radius:<?php echo $mytheme['main']['pic_radius']; ?>px; padding-top:<?php echo $mytheme['pic']['high']; ?>%; background: url(<?php echo $mytheme['pic']['load1']; ?>) no-repeat;}
	.myui-vodlist__thumb.square{ padding-top: <?php echo $mytheme['pic']['square_high']; ?>%; background: url(<?php echo $mytheme['pic']['load3']; ?>) no-repeat;}
	.myui-vodlist__thumb.wide{ padding-top: <?php echo $mytheme['pic']['wide_high']; ?>%; background: url(<?php echo $mytheme['pic']['load2']; ?>) no-repeat;}
	.myui-vodlist__thumb.actor{ padding-top: <?php echo $mytheme['pic']['actor_high']; ?>%;}
	.flickity-prev-next-button.previous{ left: <?php echo $mytheme['main']['col']; ?>px;}
	.flickity-prev-next-button.next{ right: <?php echo $mytheme['main']['col']; ?>px;}
	.myui-sidebar{ padding: 0 0 0 <?php echo $mytheme['main']['block']; ?>px;}
	.myui-panel{ margin-bottom: <?php echo $mytheme['main']['block']; ?>px; border-radius: <?php echo $mytheme['main']['block_radius']; ?>px;}
	.myui-panel-mb{ margin-bottom: <?php echo $mytheme['main']['block']; ?>px;}
	.myui-player__item .fixed{ width: <?php echo $mytheme['player']['fixed_wide']; ?>px;}
	.myui-vodlist__text li a,.myui-vodlist__media li{ padding: <?php echo $mytheme['main']['col']; ?>px 0;}
	.myui-screen__list{ padding: <?php echo $mytheme['main']['col']; ?>px <?php echo $mytheme['main']['col']; ?>px 0;}
	.myui-screen__list li{ margin-bottom: <?php echo $mytheme['main']['col']; ?>px; margin-right: <?php echo $mytheme['main']['col']; ?>px;}
	.myui-page{ padding: 0 <?php echo $mytheme['main']['col']; ?>px;}
	.myui-extra{ right: <?php echo $mytheme['nav2']['right']; ?>px; bottom: <?php echo $mytheme['nav2']['bottom']; ?>px;}
	@media (min-width: 1200px){
		.container{ max-width: <?php echo $mytheme['page']['lg_wide']; ?>px;}
		.container{ padding-left: <?php echo $mytheme['page']['margin']; ?>px;  padding-right: <?php echo $mytheme['page']['margin']; ?>px;}
		.container.min{ width: <?php echo $mytheme['page']['md_wide']; ?>px; padding: 0;}
	}
	@media (max-width: 767px){
		body,body.active{ <?php if($mytheme['tabbar']): ?>padding-bottom: 50px;<?php endif; ?>}
		[class*=col-],.myui-panel,.myui-content__list li{ padding: <?php echo $mytheme['main']['xs_col']; ?>px}
		.flickity-prev-next-button.previous{ left: <?php echo $mytheme['main']['xs_col']; ?>px;}
		.flickity-prev-next-button.next{ right: <?php echo $mytheme['main']['xs_col']; ?>px;}
		.myui-vodlist__text li a,.myui-vodlist__media li{ padding: <?php echo $mytheme['main']['col']; ?>px 0;}
		.myui-screen__list{ padding: <?php echo $mytheme['main']['col']; ?>px <?php echo $mytheme['main']['xs_col']; ?>px 0;}
		.myui-screen__list li{ margin-bottom: <?php echo $mytheme['main']['xs_col']; ?>px; margin-right: <?php echo $mytheme['main']['xs_col']; ?>px;}
		.myui-extra{ right: <?php echo $mytheme['nav2']['right2']; ?>px; bottom: <?php echo $mytheme['nav2']['bottom2']; ?>px;}
		.myui-page{ padding: 0 <?php echo $mytheme['main']['xs_col']; ?>px;}}
		.myui-topbg{ position: absolute; top: 0; left: 0; right: 0; width: 100%; <?php echo $mytheme['nav']['bg']; ?>
	}
</style>
<?php if($mytheme['site']['bodystyle']): ?><style type="text/css"><?php echo $mytheme['site']['bodystyle']; ?></style><?php endif; if($mytheme['color']['is']): ?><style type="text/css">
	body{ background: <?php echo $mytheme['color']['bg']; ?>; color: <?php echo $mytheme['color']['text']; ?>;}
	a,h1, h2, h3, h4, h5, h6,h1 a, h2 a, h3 a, h4 a, h5 a, h6 a{ color: <?php echo $mytheme['color']['link']; ?>;}
	a:hover{ color: <?php echo $mytheme['color']['text_on']; ?>;}
	.text-muted{ color: <?php echo $mytheme['color']['text_sub']; ?>;}
	.form-control{ background-color: <?php echo $mytheme['color']['form_bg']; ?>; color: <?php echo $mytheme['color']['form_text']; ?>; border: 1px solid <?php echo $mytheme['color']['form_line']; ?>;}
	.form-control:focus{ border-color: <?php echo $mytheme['color']['text_on']; ?>;}
	.split-line{ background-color: <?php echo $mytheme['color']['line']; ?>;}
	.top-line:before,.bottom-line:after,.top-line-dot:before,.bottom-line-dot:before{ border-color: <?php echo $mytheme['color']['line']; ?>;}
	.nav li.active a{ border-color: <?php echo $mytheme['color']['text_on']; ?>; color: <?php echo $mytheme['color']['text_on']; ?>;}
	.myui-panel-bg{background-color: <?php echo $mytheme['color']['block']; ?>;}
	.myui-panel-bg2,.myui-vodlist__bg,.myui-screen__item,.myui-vodlist__text.striped .striped-head,.myui-vodlist__text.to-color li:nth-of-type(odd),.myui-extra li a{ background-color:  <?php echo $mytheme['color']['sub_bg']; ?>;}
	.myui-vodlist__bg:hover{ box-shadow: 0 3px 5px rgba(0,0,0,.08);}.myui-foot{ background-color: <?php echo $mytheme['color']['block']; ?>;}<?php echo $mytheme['color']['diy']; ?>
</style><?php endif; ?>
<!--[if lt IE 9]>
<script src="https://cdn.staticfile.org/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
	<script type="text/javascript">
		var MacPlayer = {"PlayUrl":"http://ivi.bupt.edu.cn/hls/cctv1hd.m3u8"};
	</script>
	
</head>
<body>

	<header class="myui-header__top<?php if($maccms['aid'] == 15): ?> hiddex-xs<?php endif; ?> clearfix" id="header-top">
	<div class="container">	
		<div class="row">
			<div class="myui-header_bd clearfix">					
			    <div class="myui-header__logo">			    	
					<a class="logo" href="<?php echo $maccms['path']; ?>">
						<img class="img-responsive hidden-xs" src="<?php echo $mytheme['site']['logo']; ?>"/>
						<img class="img-responsive visible-xs" src="<?php echo $mytheme['site']['wap_logo']; ?>"/>
					</a>					
				</div>
				<ul class="myui-header__menu nav-menu">
					<li class="<?php if($maccms['aid'] == 1): ?> active<?php endif; ?> hidden-sm hidden-xs"><a href="<?php echo $maccms['path']; ?>">首页</a></li>
					<?php $__TAG__ = '{"num":"all","order":"asc","by":"sort","ids":"'.$mytheme['nav']['id'].'","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                    <li class="<?php if(($vo['type_id'] == $GLOBALS['type_id'] || $vo['type_id'] == $GLOBALS['type_pid'])): ?> active<?php endif; ?> hidden-sm hidden-xs"><a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; if($mytheme['subnav']['is']): $__FOR_START_525929498__=1;$__FOR_END_525929498__=5;for($i=$__FOR_START_525929498__;$i <= $__FOR_END_525929498__;$i+=1){ if($mytheme['subnav']['url'.$i.'']): ?><li class="<?php if($GLOBALS['type_id'] == $mytheme['subnav']['id'.$i.''] || $maccms['aid'] == $mytheme['subnav']['id'.$i.'']): ?>active<?php endif; ?> hidden-md hidden-sm hidden-xs"><a href="<?php echo $mytheme['subnav']['url'.$i.'']; ?>"><?php echo $mytheme['subnav']['text'.$i.'']; ?></a></li><?php endif; } endif; if($maccms['aid'] == 15): ?>
					<li class="visible-xs">
						<a href="<?php echo $maccms['path']; ?>"> 首页</a>
					</li>
					<?php else: ?>
					<li class="dropdown-hover<?php if(!$mytheme['nav']['more']): ?> visible-sm visible-xs<?php endif; ?>">
						<a href="javascript:;">频道 <i class="fa fa-angle-down"></i></a>
						<div class="dropdown-box bottom fadeInDown clearfix">
							<ul class="item nav-list clearfix">
								<li class="col-lg-5 col-md-5 col-sm-5 col-xs-3"><a class="btn btn-sm btn-block<?php if($maccms['aid'] == 1): ?> btn-warm<?php else: ?> btn-default<?php endif; ?>" href="<?php echo $maccms['path']; ?>">首页</a></li>
								<?php $__TAG__ = '{"num":"all","order":"asc","by":"sort","ids":"'.$mytheme['nav']['more_id'].'","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			                    <li class="col-lg-5 col-md-5 col-sm-5 col-xs-3"><a class="btn btn-sm btn-block<?php if(($vo['type_id'] == $GLOBALS['type_id'])): ?> btn-warm<?php else: ?> btn-default<?php endif; ?>" href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a></li>
			                    <?php endforeach; endif; else: echo "" ;endif; if($mytheme['subnav']['is']): $__FOR_START_1539202714__=1;$__FOR_END_1539202714__=5;for($i=$__FOR_START_1539202714__;$i <= $__FOR_END_1539202714__;$i+=1){ if($mytheme['subnav']['url'.$i.'']): ?><li class="col-lg-5 col-md-5 col-sm-5 col-xs-3"><a  class="btn btn-sm btn-block btn-default" href="<?php echo $mytheme['subnav']['url'.$i.'']; ?>"><?php echo $mytheme['subnav']['text'.$i.'']; ?></a></li><?php endif; } endif; ?>
							</ul>
						</div>
					</li>
					<?php endif; ?>
				</ul>
				<?php if($mytheme['search']['is']): if($mytheme['search']['auto']): ?><script type="text/javascript" src="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/js/jquery.autocomplete.js"></script><?php endif; ?>
				<div class="myui-header__search search-box"> 
					<?php if($mytheme['search']['select']): ?>
					<a class="search-select dropdown-hover" href="javascript:;">
						<span class="text">视频</span> <i class="fa fa-caret-down"></i>
						<div class="dropdown-box bottom fadeInDown">
							<ul class="item">
								<li class="vod" data-action="<?php echo mac_url('vod/search'); ?>">视频</li>
								<?php if($mytheme['search']['art']): ?><li class="news" data-action="<?php echo mac_url('art/search'); ?>">资讯</li><?php endif; if($mytheme['search']['actor']): ?><li class="actor" data-action="<?php echo mac_url('actor/search'); ?>">明星</li><?php endif; ?>
							</ul>
						</div>
					</a>
					<?php endif; ?>
					
			        <form id="search" name="search" method="get" action="<?php echo mac_url('vod/search'); ?>" onSubmit="return qrsearch();">
    					<input type="text" id="wd" name="wd" class="search_wd form-control" value="<?php echo $param['wd']; ?>" placeholder="<?php echo $mytheme['search']['text']; ?>" autocomplete="off" style="<?php if($mytheme['search']['select']): ?> padding-left: 72px; <?php endif; ?>"/>
						<button class="submit search_submit" id="searchbutton" type="submit" name="submit"><i class="fa fa-search"></i></button>							
					</form>
					<a class="search-close visible-xs" href="javascript:;"><i class="fa fa-close"></i></a>
					<?php if($mytheme['search']['hot']): ?>
					<div class="search-dropdown-hot dropdown-box bottom fadeInDown">
						<div class="item">
							<p class="text-muted">
								热门搜索
							</p>
							<?php $_628e2e0463269=explode(',',''.$mytheme['search'][hot].''); if(is_array($_628e2e0463269) || $_628e2e0463269 instanceof \think\Collection || $_628e2e0463269 instanceof \think\Paginator): if( count($_628e2e0463269)==0 ) : echo "" ;else: foreach($_628e2e0463269 as $key=>$vo): ?>
							<p><a class="text-333" href="<?php echo mac_url('vod/search',['wd'=>$vo]); ?>" title=""><span class="badge<?php if($key+1 == 1): ?> badge-first<?php endif; if($key+1 == 2): ?> badge-second<?php endif; if($key+1 == 3): ?> badge-third<?php endif; ?>"><?php echo $key+1; ?></span> <?php echo $vo; ?></a></p>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
					<?php endif; ?>
			    </div>
			    <?php endif; ?>
				<ul class="myui-header__user">	
					<li class="visible-xs">
						<a class="open-search" href="javascript:;"><i class="fa fa-search"></i></a>
					</li>
					
					<?php if($mytheme['history']['style'] == pic): ?>
					<li>
						<a href="javascript:;" onclick="MyTheme.Other.Popup('#history')"><i class="fa fa-clock-o"></i></a>
					</li>
					<?php else: ?>
					<li class="dropdown-hover">
						<a href="javascript:;" title="播放记录"> <i class="fa fa-clock-o"></i></a>
						<div class="dropdown-box fadeInDown">
							<div class="item clearfix">					
								<p class="text-muted">
									<a class="text-red pull-right" href="javascript:;" onclick="MyTheme.Cookie.Del('history','您确定要清除记录吗？');">[清空]</a>
									播放记录 
								</p>
								<div class="history-list clearfix">
									<script type="text/javascript">
										var history_get = MyTheme.Cookie.Get("history");
										if(history_get){
										    var json=eval("("+history_get+")");
										    for(i=0;i<json.length;i++){
										        document.write("<p><a class='text-333' href='"+json[i].link+"' title='"+json[i].name+"'><span class='pull-right text-red'>"+json[i].part+"</span>"+json[i].name+"</a></p>");
										    }
										} else {
											document.write("<p style='padding: 80px 0; text-align: center'>您还没有看过影片哦</p>");
									    }
									</script>
								</div>
								
							</div>
						</div>	
					</li>
					<?php endif; if($mytheme['nav1']['is']): $__FOR_START_1258775707__=1;$__FOR_END_1258775707__=3;for($i=$__FOR_START_1258775707__;$i <= $__FOR_END_1258775707__;$i+=1){ if($mytheme['nav1']['url'.$i.'']): ?><li><a href="<?php echo $mytheme['nav1']['url'.$i.'']; ?>" title="<?php echo $mytheme['nav1']['text'.$i.'']; ?>"><i class="fa <?php echo $mytheme['nav1']['icon'.$i.'']; ?>"></i></a></li><?php endif; } endif; if($maccms['user_status'] == 1): if($user['group']['group_id'] == 1): ?>
					<li>
						<a href="javascript:;" onclick="Myui.User.Login();"><i class="fa fa-user"></i></a>
					</li>
					<?php else: ?>
					<li class="menu dropdown-hover">
						<a href="javascript:;"><i class="fa fa-user"></i></a>
						<div class="dropdown-box fadeInDown">
							<ul class="item clearfix">		
								<li><a class="text-333" href="<?php echo mac_url('user/index'); ?>">会员中心</a></li>
								<li><a class="text-333" href="<?php echo mac_url('user/favs'); ?>">我的收藏</a></li>
								<li><a class="text-333" href="<?php echo mac_url('user/plays'); ?>">播放记录</a></li>
								<li><a class="text-333" href="<?php echo mac_url('user/reward'); ?>">我的分销</a></li>
								<li><a class="text-333" href="<?php echo mac_url('user/logout'); ?>">退出</a></li>
							</ul>
						</div>
					</li>
					<?php endif; endif; ?>
				</ul>
		  	</div>		
		</div>						    
	</div>
</header>

<?php if($mytheme['nav']['fixed']): ?>
<script type="text/javascript">
	MyTheme.Other.Headroom();
</script>
<?php endif; if($mytheme['history']['style'] == pic): ?>
<div class="popup <?php echo $mytheme['history']['face']; ?>" id="history" style="width: <?php echo $mytheme['history']['wide']; ?>px; height: 100%;">
	<div class="popup-head">
		<a class="pull-right close-popup" href="javascript:;"><i class="fa fa-close"></i></a>
		<h5 class="title">播放记录 <small><a class="text-muted" href="javascript:;" onclick="MyTheme.Cookie.Del('history','您确定要清除记录吗？');">清空</a></small></h5>
	</div>
	<div class="popup-body">
		<div class="myui-panel clearfix">
			<div class="myui-panel-box clearfix">
				<ul class="myui-vodlist__media history-list">
					<script type="text/javascript">
						var history_get = MyTheme.Cookie.Get("history");
						if(history_get){
						    var json=eval("("+history_get+")");
						    for(i=0;i<json.length;i++){
						        document.write("<li><div class='thumb'><a class='myui-vodlist__thumb img-xs-80' href='"+json[i].link+"' style='background: url("+json[i].pic+");'></a></div><div class='detail'><h5 class='title'><a href='"+json[i].link+"'>"+json[i].name+"</a></h5><p class='font-12'>播放至：<span class='text-red'>"+json[i].part+"<span></p><p><a class='btn btn-xs btn-primary' href='"+json[i].link+"'>继续观看</a></p></div></li>");
						    }
						}
						else
						{
							document.write("<p style='padding: 80px 0; text-align: center'>您还没有看过影片哦</p>");
					    }
					</script>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

	<div class="myui-player clearfix">
		<div class="container">
        	<div class="row">		
				<div class="myui-player__item clearfix" style="background-color: <?php echo $mytheme['player']['sidebar_bg']; ?>;">
					<div class="col-md-wide-75 padding-0 relative clearfix" id="player-left">
						<div class="myui-player__box<?php if($mytheme['player']['fixed']): ?> player-fixed<?php endif; ?>">
							<?php if($mytheme['player']['fixed']): ?><a class="player-fixed-off" href="javascript:;" style="display: none;"><i class="fa fa-close"></i></a><?php endif; ?>
							<div class="myui-player__video<?php if($mytheme['player']['self']): ?> embed-responsive<?php endif; ?> clearfix">
								<iframe src="http://ivi.bupt.edu.cn/player.html?channel=cctv1hd" width="100%" id="myiframe" scrolling="no" frameborder="0" allowfullscreen="true"></iframe>
							</div>
						</div>
						<ul class="myui-player__operate" style="background-color: <?php echo $mytheme['player']['operate_bg']; ?>;">	
							
							<?php if($mytheme['player']['spinner']): ?>
							<li>
								<a href="javascript:;" onclick="window.location.reload()"><i class="fa fa-spinner"></i> 刷新重试</a>
							</li>
							<?php endif; if($mytheme['reward']['is']): ?>
							<li class="dropdown-hover hidden-xs">
								<a href="javascript:;"><i class="fa fa-cny"></i> 打赏站长</a>
								<div class="dropdown-box top fadeInDown clearfix">
									<div class="item text-center">
										<p><?php echo $mytheme['reward']['text']; ?></p>
										<div class="qrcode-box">
											<img class="img-responsive" src="<?php echo $mytheme['reward']['code']; ?>" />
										</div>
									</div>
								</div>
							</li>
							<?php endif; if($mytheme['player']['share_text']): ?>
							<li class="dropdown-hover">
								<a href="javascript:;"><i class="fa fa-share font14"></i> 复制分享</a>
								<div class="dropdown-box bottom fadeInDown clearfix" style="margin-left: -130px;">
									<div class="item text-center" style="width: 260px;">
										<div class="col-pd" class="">
											<p>复制下方内容粘贴给好友</p>
											<p><textarea class="form-control content" rows="2"><?php echo $mytheme['player']['share_text']; ?></textarea></p>
											<a class="btn btn-xs btn-primary myui-copy-html" href="javascript:;">复制到剪切板</a>
										</div>
									</div>
								</div>
							</li>
							<?php endif; if($mytheme['player']['code'] && $mytheme['qrcode']['is']): ?>
							<li class="dropdown-hover hidden-xs">
								<a href="javascript:;"><i class="fa fa-qrcode font14"></i> 手机观看</a>
								<div class="dropdown-box bottom fadeInDown clearfix">
	<div class="item text-center" style="padding: 15px 10px;">
		<?php if($mytheme['qrcode']['img']): ?>
		<div class="qrcode-box">
			<img class="img-responsive" src="<?php echo $mytheme['qrcode']['img']; ?>" />
		</div>
		<?php else: ?>
		<div class="qrcode-box" style="background-color: <?php echo $mytheme['qrcode']['light']; ?>;">
			<img class="icon" src="<?php echo $mytheme['site']['ico']; ?>" width="25" height="25" />
			<span id="qrcode" data-link="0" data-dark="<?php echo $mytheme['qrcode']['dark']; ?>" data-light="<?php echo $mytheme['qrcode']['light']; ?>"></span>
		</div>
		<?php endif; ?>
		<p class="margin-0"><?php echo $mytheme['qrcode']['text']; ?></p>
	</div>
</div>

							</li>
							<?php endif; ?>
							
						</ul>
						<style type="text/css"> .embed-responsive{ padding-bottom: <?php echo $mytheme['player']['high']; ?>%;} </style>
					</div>
					<div class="col-md-wide-25 padding-0" id="player-sidebar">
						<div class="myui-panel active clearfix">
							<div class="myui-panel-box clearfix">
								<div class="col-pd clearfix">
									<div class="myui-panel__head active clearfix">
										<h3 class="title text-fff">
											电视直播频道
										</h3>	
									</div>
								</div>
								<div class="myui-panel-bd">
									<ul class="myui-content__list playlist clearfix" id="playlist">
										<li class="col-md-2 col-sm-5 col-xs-3 active">
											<a class="btn btn-min btn-warm btnplay" href="javascript:;" data-url="http://ivi.bupt.edu.cn/player.html?channel=cctv1hd">
												CCTV-1高清
											</a>
										</li>
										<li class="col-md-2 col-sm-5 col-xs-3">
											<a class="btn btn-min btn-gray btnplay" href="javascript:;" data-url="http://ivi.bupt.edu.cn/player.html?channel=cctv3hd">
												CCTV-3高清
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>					
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(".btnplay").each(function(){
			$(this).click(function() {
				var url=$(this).attr("data-url");
				$("#myiframe").attr("src",url);
				$(this).addClass("btn-warm").removeClass("btn-gray");
				$(this).parent().addClass("active");
				$(this).parent().siblings().removeClass("active");
				$(this).parent().siblings().find("a").removeClass("btn-warm").addClass("btn-gray");
				MyTheme.Other.Player();
			});
		});
	</script>
	<div class="myui-foot clearfix">
	<div class="container min">
		<div class="row">
			<div class="col-pd text-center">
				<p><?php echo $mytheme['site']['foot_tips']; ?></p>	
				<p class="hidden-xs">
					<a target="_blank" href="<?php echo mac_url('map/index'); ?>">网站地图</a><span class="split-line"></span>
					<a target="_blank" href="<?php echo mac_url('rss/index'); ?>">RSS订阅</a><span class="split-line"></span>
					<a target="_blank" href="<?php echo mac_url('rss/baidu'); ?>">百度蜘蛛</a><span class="split-line"></span>
					<a target="_blank" href="<?php echo mac_url('rss/google'); ?>">谷歌地图</a><span class="split-line"></span>
					<a target="_blank" href="<?php echo mac_url('rss/bing'); ?>">必应地图</a><span class="split-line"></span>
					<a target="_blank" href="<?php echo mac_url('rss/so'); ?>">360地图</a><span class="split-line"></span>
					<a target="_blank" href="<?php echo mac_url('rss/sogou'); ?>">搜狗地图</a>
				</p>	
				<p class="margin-0">
					<?php echo $mytheme['site']['copyright']; ?>
				</p>	
				<div class="tongji"><?php echo $mytheme['site']['stats_code']; ?></div>
			</div>
		</div>
	</div>
</div>

<!--登录弹窗开始-->
<div class="myui-msg__form ajax_login" style="display: none; width: 290px; padding: 50px 30px 20px; margin: 0; box-shadow: none;">
	<div class="myui-panel clearfix">
		<div class="myui-panel-box clearfix">		
			<div class="myui-panel_bd">
				<div class="myui-msg__head text-center">
					<p>登录账号</p>
				</div>
				<form class="mac_login_form">
					<p>
						<input type="text" class="form-control" name="user_name" placeholder="手机/登录账号">
					</p>
					<p>
						<input type="password" class="form-control" name="user_pwd" placeholder="登录密码">
					</p>
					<?php if($GLOBALS['config']['user']['login_verify'] == 1): ?>
					<p>
						<img class="mac_verify_img pull-right" src="<?php echo mac_url('verify/index'); ?>" height="35" onclick="this.src = this.src+'?'">
						<input type="text" class="form-control" name="verify" placeholder="验证码" style="display: inline-block; width: 100px;">
					</p>
					<?php endif; ?>
					<p>
						<a href="javascript:;" class="btn btn-block btn-primary login_form_submit">登录</a>
					</p>
					<p>
						<a class="pull-right" href="<?php echo mac_url('user/reg'); ?>">注册</a>
						<a href="<?php echo mac_url('user/findpass'); ?>">忘记密码</a>
					</p>
				</form>
				<?php if($GLOBALS['config']['connect']['qq']['status'] == 1 || $GLOBALS['config']['connect']['weixin']['status'] == 1): ?>
				<div class="text-center top-line">
					<p class="text-muted pt10">第三方快捷登录</p>
					<?php if($GLOBALS['config']['connect']['qq']['status'] == 1): ?>
					<a href="<?php echo mac_url('user/oauth'); ?>?type=qq"><img src="<?php echo $maccms['path_tpl']; ?>statics/img/qq.png" width="35" alt="QQ登录"/></a>&nbsp;&nbsp;
					<?php endif; if($GLOBALS['config']['connect']['weixin']['status'] == 1): ?>
					<a href="<?php echo mac_url('user/oauth'); ?>?type=weixin"><img src="<?php echo $maccms['path_tpl']; ?>statics/img/weixin.png" width="35" alt="微信登录"/></a>
					<?php endif; ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<!--登录弹窗结束-->

<?php if($mytheme['tabbar']['is']): ?>
<div class="myui-nav__tabbar">
	<?php $__FOR_START_478796551__=1;$__FOR_END_478796551__=6;for($i=$__FOR_START_478796551__;$i <= $__FOR_END_478796551__;$i+=1){ if($mytheme['tabbar']['url'.$i.'']): ?>
	<a class="item" href="<?php echo $mytheme['tabbar']['url'.$i.'']; ?>">
		<img class="icon-img" src="<?php echo $maccms[path_tpl]; ?>statics/icon/<?php echo $mytheme['tabbar']['img'.$i.'']; if($GLOBALS['type_id'] == $mytheme['tabbar']['id'.$i.''] || $maccms['aid'] == $mytheme['tabbar']['id'.$i.'']): ?>_on<?php endif; ?>.png"/><p class="title"><?php echo $mytheme['tabbar']['title'.$i.'']; ?></p>
		</a>
	<?php endif; } ?>
</div>
<?php endif; if($mytheme['nav2']['is']): ?>
<ul class="myui-extra clearfix">
	<li>
		<a class="backtop" href="javascript:scroll(0,0)" title="返回顶部" style="display: none;"><i class="fa fa-angle-up"></i></a>
	</li>
	<?php if($mytheme['language']['is']): ?>
	<li>
		<a href="javascript:;" class="language" title="简繁体切换"><i class="fa <?php echo $mytheme['language']['icon']; ?>"></i></a>
	</li>
	<?php endif; if($mytheme['skin']['is'] && !$mytheme['color']['is']): ?>
	<li>
		<a class="btnskin" href="javascript:;" title="切换皮肤"><i class="fa <?php echo $mytheme['skin']['icon']; ?>"></i></a>
	</li>
	<?php endif; ?>
	<li class="visible-xs">
		<a class="open-share" href="javascript:;" title="分享给朋友"><i class="fa fa-share-alt"></i></a>
	</li>
	<?php if($mytheme['nav2']['wx']): ?>
	<li class="dropdown-hover hidden-xs">
		<a href="javascript:;" title="关注我们" onclick="MyTheme.Layer.Img('关注我们','<?php echo $mytheme['site']['weixin_img']; ?>','扫一扫关注我们')"><i class="fa <?php echo $mytheme['nav2']['wx_icon']; ?>"></i></a>
		<div class="dropdown-box right fadeInDown clearfix">
			<div class="item text-center">
				<div class="qrcode-box">
					<img src="<?php echo $mytheme['site']['weixin_img']; ?>" width="120" />
				</div>
				<p>扫一扫关注我们</p>
			</div>
		</div>
	</li>
	<?php endif; if($mytheme['nav2']['sub']): $__FOR_START_408997688__=1;$__FOR_END_408997688__=3;for($i=$__FOR_START_408997688__;$i <= $__FOR_END_408997688__;$i+=1){ if($mytheme['nav2']['url'.$i.'']): ?><li><a href="<?php echo $mytheme['nav2']['url'.$i.'']; ?>" title="<?php echo $mytheme['nav2']['text'.$i.'']; ?>"><i class="fa <?php echo $mytheme['nav2']['icon'.$i.'']; ?>"></i></a></li><?php endif; } endif; ?>
</ul>
<?php endif; if($mytheme['notice']['is']): ?>
<div class="noticetext hide">
	<?php echo $mytheme['notice']['html']; ?>
</div>
<?php endif; if($mytheme['language']['is']): ?>
<script type="text/javascript" src="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/js/language.js"></script>
<script type="text/javascript">MyTheme.Other.Language();</script>
<?php endif; if($mytheme['ad']['float']): ?><?php echo $mytheme['ad']['float_html']; endif; ?>

<script type="text/javascript">
	<?php if($mytheme['qrcode']['is']): ?>MyTheme.Images.Qrcode.Init();<?php endif; if($mytheme['skin']['is'] && !$mytheme['color']['is']): ?>MyTheme.Other.Skin();<?php endif; if($mytheme['notice']['is']): ?>MyTheme.Layer.Popbody('allpop','.noticetext',<?php echo $mytheme['notice']['day']; ?>,'<?php echo $mytheme['notice']['wide']; ?>','<?php echo $mytheme['notice']['high']; ?>');<?php endif; ?>
</script>

<?php if($mytheme['click']['is']): ?>
<script type="text/javascript">
	<?php $_628e2e046307e=explode(',',''.$mytheme['click']['url'].''); if(is_array($_628e2e046307e) || $_628e2e046307e instanceof \think\Collection || $_628e2e046307e instanceof \think\Paginator): if( count($_628e2e046307e)==0 ) : echo "" ;else: foreach($_628e2e046307e as $key=>$vo): ?>
	MyTheme.Ajax('<?php echo $vo; ?>','get','json','',function(){});
	<?php endforeach; endif; else: echo "" ;endif; ?>
</script>
<?php endif; if($mytheme['bdshare']['is']): ?>
<script type="text/javascript">
	if(".bdshare".length){
		window._bd_share_config = {
			common: {
				bdText: '',
				bdDesc: '',
				bdUrl: '',
				bdPic: ''
			},
			share: [{
				"bdSize": 24,
				bdCustomStyle: myui.tpl+'statics/css/mytheme-share.css'
			}]
		}
		with(document)0[(getElementsByTagName("head")[0]||body).appendChild(createElement('script')).src=''+myui.bdapi+'?cdnversion='+~(-new Date()/36e5)];
	}
</script>
<?php endif; if($mytheme['safe']['is']): ?>
<script type="text/javascript">   
	document.onkeydown=function(){
		var e = window.event||arguments[0];
		<?php if($mytheme['safe']['f12']): ?>
			if(e.keyCode==123){
				alert('<?php echo $mytheme['safe']['tips']; ?>');
				return false;
			}
		<?php endif; if($mytheme['safe']['ctrl']): ?>
		if((e.ctrlKey)&&(e.shiftKey)&&(e.keyCode==73)){
			alert('<?php echo $mytheme['safe']['tips']; ?>');
			return false;
		}
		if((e.ctrlKey)&&(e.keyCode==85)){
			alert('<?php echo $mytheme['safe']['tips']; ?>');
			return false;
		}
		if((e.ctrlKey)&&(e.keyCode==83)){
		   alert('<?php echo $mytheme['safe']['tips']; ?>');
		   return false;
		}
		<?php endif; ?>
	}
	<?php if($mytheme['safe']['right']): ?>
	document.oncontextmenu=function(){
		alert('<?php echo $mytheme['safe']['tips']; ?>');
		return false;
	}
	<?php endif; if($mytheme['safe']['mode']): ?>
	var threshold = 160;
	window.setInterval(function() {  
	    if (window.outerWidth - window.innerWidth > threshold ||   
	    window.outerHeight - window.innerHeight > threshold) {  
			function disableDebugger() {
				debugger;
			}
			$(document).ready(function () {
				disableDebugger();
			});
	    }  
	}, 1e3);
	<?php endif; ?>
</script>
<?php endif; ?>

</body>
</html>
