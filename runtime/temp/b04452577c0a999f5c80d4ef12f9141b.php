<?php if (!defined('THINK_PATH')) exit(); /*a:24:{s:37:"template/mytheme/html/vod/detail.html";i:1653471608;s:58:"/usr/local/html/cms/template/mytheme/html/public/data.html";i:1653471608;s:61:"/usr/local/html/cms/template/mytheme/html/seo/vod_detail.html";i:1653471608;s:61:"/usr/local/html/cms/template/mytheme/html/public/include.html";i:1653471608;s:59:"/usr/local/html/cms/template/mytheme/html/public/style.html";i:1653471608;s:56:"/usr/local/html/cms/template/mytheme/html/diy/style.html";i:1653471608;s:58:"/usr/local/html/cms/template/mytheme/html/public/head.html";i:1653471608;s:62:"/usr/local/html/cms/template/mytheme/html/vod/detail_data.html";i:1653471608;s:55:"/usr/local/html/cms/template/mytheme/html/vod/desc.html";i:1653471608;s:60:"/usr/local/html/cms/template/mytheme/html/vod/play_list.html";i:1653471608;s:66:"/usr/local/html/cms/template/mytheme/html/block/vod_play_list.html";i:1653471608;s:60:"/usr/local/html/cms/template/mytheme/html/vod/down_list.html";i:1653471608;s:55:"/usr/local/html/cms/template/mytheme/html/vod/like.html";i:1653471608;s:60:"/usr/local/html/cms/template/mytheme/html/block/vod_box.html";i:1653471608;s:55:"/usr/local/html/cms/template/mytheme/html/vod/look.html";i:1653471608;s:67:"/usr/local/html/cms/template/mytheme/html/block/vod_box_active.html";i:1653471608;s:58:"/usr/local/html/cms/template/mytheme/html/vod/comment.html";i:1653471608;s:54:"/usr/local/html/cms/template/mytheme/html/vod/hot.html";i:1653471608;s:66:"/usr/local/html/cms/template/mytheme/html/block/vod_box_media.html";i:1653471608;s:65:"/usr/local/html/cms/template/mytheme/html/block/vod_box_rank.html";i:1653471608;s:60:"/usr/local/html/cms/template/mytheme/html/block/art_rel.html";i:1653471608;s:60:"/usr/local/html/cms/template/mytheme/html/block/art_hot.html";i:1653471608;s:58:"/usr/local/html/cms/template/mytheme/html/public/foot.html";i:1653471608;s:62:"/usr/local/html/cms/template/mytheme/html/user/ajax_login.html";i:1653471608;}*/ ?>
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
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $obj['vod_name']; ?>详情介绍-<?php echo $obj['vod_name']; ?>在线观看-<?php echo $obj['vod_name']; ?>迅雷下载 - <?php echo $mytheme['site']['title']; ?></title>
<meta name="keywords" content="<?php echo $obj['vod_name']; ?>在线收看,<?php echo $obj['vod_name']; ?>迅雷下载" />
<meta name="description" content="<?php echo $obj['vod_name']; ?>剧情:<?php echo $obj['vod_blurb']; ?>" />   
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="shortcut icon" href="<?php echo $mytheme['site']['ico']; ?>" type="image/x-icon" />					
<link rel="stylesheet" href="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/css/mytheme-font.css?v=<?php echo $my['version']; ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/css/mytheme-ui.css?v=<?php echo $my['version']; ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/css/mytheme-site.css?v=<?php echo $my['version']; ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/css/<?php echo $mytheme['style']['default']; ?>.css?v=<?php echo $my['version']; ?>" type="text/css" name="default" />
<?php if($mytheme['skin']['is'] && !$mytheme['color']['is']): $_628f0a11f00df=explode(',',''.$mytheme['skin']['style'].''); if(is_array($_628f0a11f00df) || $_628f0a11f00df instanceof \think\Collection || $_628f0a11f00df instanceof \think\Paginator): if( count($_628f0a11f00df)==0 ) : echo "" ;else: foreach($_628f0a11f00df as $key=>$vo): ?>
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
                    <?php endforeach; endif; else: echo "" ;endif; if($mytheme['subnav']['is']): $__FOR_START_1146704801__=1;$__FOR_END_1146704801__=5;for($i=$__FOR_START_1146704801__;$i <= $__FOR_END_1146704801__;$i+=1){ if($mytheme['subnav']['url'.$i.'']): ?><li class="<?php if($GLOBALS['type_id'] == $mytheme['subnav']['id'.$i.''] || $maccms['aid'] == $mytheme['subnav']['id'.$i.'']): ?>active<?php endif; ?> hidden-md hidden-sm hidden-xs"><a href="<?php echo $mytheme['subnav']['url'.$i.'']; ?>"><?php echo $mytheme['subnav']['text'.$i.'']; ?></a></li><?php endif; } endif; if($maccms['aid'] == 15): ?>
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
			                    <?php endforeach; endif; else: echo "" ;endif; if($mytheme['subnav']['is']): $__FOR_START_2141000559__=1;$__FOR_END_2141000559__=5;for($i=$__FOR_START_2141000559__;$i <= $__FOR_END_2141000559__;$i+=1){ if($mytheme['subnav']['url'.$i.'']): ?><li class="col-lg-5 col-md-5 col-sm-5 col-xs-3"><a  class="btn btn-sm btn-block btn-default" href="<?php echo $mytheme['subnav']['url'.$i.'']; ?>"><?php echo $mytheme['subnav']['text'.$i.'']; ?></a></li><?php endif; } endif; ?>
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
							<?php $_628f0a11efcdc=explode(',',''.$mytheme['search'][hot].''); if(is_array($_628f0a11efcdc) || $_628f0a11efcdc instanceof \think\Collection || $_628f0a11efcdc instanceof \think\Paginator): if( count($_628f0a11efcdc)==0 ) : echo "" ;else: foreach($_628f0a11efcdc as $key=>$vo): ?>
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
					<?php endif; if($mytheme['nav1']['is']): $__FOR_START_428871709__=1;$__FOR_END_428871709__=3;for($i=$__FOR_START_428871709__;$i <= $__FOR_END_428871709__;$i+=1){ if($mytheme['nav1']['url'.$i.'']): ?><li><a href="<?php echo $mytheme['nav1']['url'.$i.'']; ?>" title="<?php echo $mytheme['nav1']['text'.$i.'']; ?>"><i class="fa <?php echo $mytheme['nav1']['icon'.$i.'']; ?>"></i></a></li><?php endif; } endif; if($maccms['user_status'] == 1): if($user['group']['group_id'] == 1): ?>
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
	
    <div class="container">
        <div class="row">
            <div class="<?php if($mytheme['detail']['side']): ?>col-lg-wide-75 col-md-wide-7 <?php endif; ?>col-xs-1 padding-0">	
            	
            	<!-- 详细信息-->
<div class="myui-panel myui-panel-bg clearfix">
	<div class="myui-panel-box clearfix">
		<div class="col-xs-1">
			<span class="text-muted">当前位置：</span>
			<a href="<?php echo $mytheme['site']['url']; ?>">首页</a> <i class="fa fa-angle-right text-muted"></i>
			<a href="<?php echo mac_url_type($obj['type']['type_id'],['id'=>$obj['type_id']],'show'); ?>"><?php echo $obj['type']['type_name']; ?></a> <i class="fa fa-angle-right text-muted"></i>
			<span class="text-muted"><?php echo $obj['vod_name']; ?></span>
		</div>
		<div class="col-xs-1">	
			<div class="myui-content__thumb">									
				<a class="myui-vodlist__thumb picture" href="<?php echo mac_url_vod_play($obj); ?>" title="<?php echo $obj['vod_name']; ?>">
					<img class="lazyload" src="<?php echo $mytheme['pic']['load1']; ?>" data-original="<?php echo mac_url_img($obj['vod_pic']); ?>"/>
					<span class="play hidden-xs"></span>
				</a>
				<?php if($mytheme['bdshare']['is']): ?>
				<div class="bdshare bdsharebuttonbox text-center hidden-sm hidden-xs" style="margin-top: 10px; width: 220px;">
					<span class="bds_shere"></span>
					<?php $_628f0a11efb8e=explode(',',''.$mytheme['bdshare']['btn'].''); if(is_array($_628f0a11efb8e) || $_628f0a11efb8e instanceof \think\Collection || $_628f0a11efb8e instanceof \think\Paginator): if( count($_628f0a11efb8e)==0 ) : echo "" ;else: foreach($_628f0a11efb8e as $key=>$vo): ?>
					<a class="bds_<?php echo $vo; ?>" data-cmd="<?php echo $vo; ?>"></a>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<?php endif; ?>
			</div>
			<div class="myui-content__detail">
				<?php if($mytheme['player']['code'] && $mytheme['qrcode']['is']): ?>
				<a class="btn btn-default dropdown-hover pull-right visible-lg" href="javascript:;">
					<div class="dropdown-box bottom fadeInDown clearfix" style="display: block;">
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
					<i class="fa fa-mobile" style="font-size: 24px; vertical-align: -4px;"></i> 手机观看
				</a>
				<?php endif; ?>
				
				<h1 class="title"><?php echo $obj['vod_name']; ?></h1>
				
				<!-- 评分 -->
			    <div id="rating" class="score" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>" data-score="<?php echo ceil($obj['vod_score']/2); ?>">
			    	<span class="left text-muted">评分：</span>
			    	<ul class="rating">
				        <li title="很差" val="1"><i class="fa fa-star<?php if($obj['vod_score'] < 0): ?>-o<?php endif; ?>"></i></li>
				        <li title="较差" val="2"><i class="fa fa-star<?php if($obj['vod_score'] < 2): ?>-o<?php endif; ?>"></i></li>
				        <li title="还行" val="3"><i class="fa fa-star<?php if($obj['vod_score'] < 4): ?>-o<?php endif; ?>"></i></li>
				        <li title="推荐" val="4"><i class="fa fa-star<?php if($obj['vod_score'] < 6): ?>-o<?php endif; ?>"></i></li>
				        <li title="力荐" val="5"><i class="fa fa-star<?php if($obj['vod_score'] < 8): ?>-o<?php endif; ?>"></i></li>
				    </ul>
				    <span class="branch"><?php echo $obj['vod_score']; ?></span>
				    <span class="text-muted" id="ratewords">
					    <?php if($obj['vod_score'] > 8): ?>力荐<?php elseif($obj['vod_score'] > 6): ?>推荐<?php elseif($obj['vod_score'] > 4): ?>还行<?php elseif($obj['vod_score'] > 2): ?>较差<?php else: ?>很差<?php endif; ?>
				    </span>
				</div>
				<p class="data">
					<span class="text-muted">分类：</span><a href="<?php echo mac_url_type($obj['type']['type_id'],['id'=>$obj['type_id']],'show'); ?>"><?php echo $obj['type']['type_name']; ?></a>
					<span class="split-line"></span>
					<span class="text-muted hidden-xs">地区：</span><a href="<?php echo mac_url_type($obj['type']['type_id'],['id'=>$obj['type_id'],'area'=>$obj['vod_area']],'show'); ?>"><?php echo mac_default($obj['vod_area'],'未知'); ?></a>
					<span class="split-line"></span>
					<span class="text-muted hidden-xs">年份：</span><a href="<?php echo mac_url_type($obj['type']['type_id'],['id'=>$obj['type_id'],'year'=>$obj['vod_year']],'show'); ?>"><?php echo mac_default($obj['vod_year'],'未知'); ?>	</a>				
				</p>
				<p class="data hidden-sm"><span class="text-muted">更新：</span><span class="text-red"><?php if($obj['vod_remarks'] != ''): ?><?php echo $obj['vod_remarks']; ?>/<?php endif; ?><?php echo date('Y-m-d H:i:s',$obj['vod_time']); ?></span></p>		
				<p class="data"><span class="text-muted">主演：</span><?php echo mac_default(mac_url_create(mac_substring($obj['vod_actor'],25),'actor'),'未知'); ?></p>
				<p class="data"><span class="text-muted">导演：</span><?php echo mac_default(mac_url_create($obj['vod_director'],'director'),'未知'); ?></p>
																
				<p class="data hidden-xs">
					<span class="text-muted">简介：</span><?php echo mac_substring(mac_filter_html($obj['vod_content']),40); ?>...<a href="#desc">详情 <i class="fa fa-angle-right"></i></a>
				</p>	
			</div>
			<div class="myui-content__operate">
				<?php if(!(empty($obj['vod_play_list']) || (($obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator ) && $obj['vod_play_list']->isEmpty()))): $count=1; if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $play=>$vo): if($count==1): ?>
				<a class="btn btn-warm" href="<?php echo mac_url_vod_play($obj,['sid'=>$vo['sid'],'nid'=>1]); ?>"><i class="fa fa-play"></i> 立即播放</a>
				<?php endif; $count++; endforeach; endif; else: echo "" ;endif; endif; if($mytheme['downlist']['is']): if(!(empty($obj['vod_down_list']) || (($obj['vod_down_list'] instanceof \think\Collection || $obj['vod_down_list'] instanceof \think\Paginator ) && $obj['vod_down_list']->isEmpty()))): ?>
				<a class="btn btn-primary hidden-xs" href="<?php echo mac_url_vod_down($obj); ?>"><i class="fa fa-download"></i> 立即下载</a>
				<?php endif; endif; if($mytheme['reward']['is']): ?>
				<a class="btn btn-info" href="javascript:;" onclick="MyTheme.Layer.Img('打赏','<?php echo $mytheme['reward']['code']; ?>','<?php echo $mytheme['reward']['text']; ?>')"><i class="fa fa-cny"></i> 打赏</a>					
				<?php endif; if($maccms['user_status'] == 1): if($user['group']['group_id'] == 1): ?>
				<a class="btn btn-danger" href="javascript:;" onclick="Myui.User.Login();"><i class="fa fa-star"></i> 收藏</a>
				<?php else: ?>
				<a href="javascript:void(0);" class="btn btn-danger favorite" data-type="2" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>"><i class="fa fa-star"></i> 收藏</a>
				<?php endif; endif; ?>
			</div>
		</div>
	</div>
</div>

<?php if($mytheme['detail']['score']): ?><script type="text/javascript"> Myui.Score();</script><?php endif; if($mytheme['detail']['ad'] && $mytheme['detail']['ad2']): ?>
<div class="myui-panel myui-panel-bg clearfix">
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_bd">
			<div class="col-xs-1">
				<?php echo $mytheme['detail']['ad2']; ?>
			</div>
		</div>
	</div>				
</div>
<?php endif; ?>

<!-- end 详细信息--><!-- 详细信息-->
				
				<?php if($mytheme['playpage']['desc']): ?>
<div class="myui-panel myui-panel-bg clearfix" id="desc">
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_hd">
			<div class="myui-panel__head active bottom-line clearfix">
				<h3 class="title">
					剧情简介
				</h3>	
				<?php if($obj['vod_plot'] == 1): ?><a class="more text-muted" href="<?php echo mac_url_vod_plot($obj); ?>">查看分集剧情  <i class="fa fa-angle-right"></i></a><?php endif; ?>
			</div>																		
		</div>
		<div class="myui-panel_bd">
			<div class="col-pd text-collapse content">
				<?php if($maccms['aid'] == 15): ?>
				<p><span class="text-muted">导演：</span><?php echo mac_default(mac_url_create($obj['vod_director'],'director'),'未知'); ?></p>
				<p><span class="text-muted">主演：</span><?php echo mac_default(mac_url_create($obj['vod_actor'],'actor'),'未知'); ?></p>
				<?php endif; if($obj['vod_tag']): ?><p class="myui-content__tag">关键词：<?php echo mac_url_create($obj['vod_tag'],'tag'); ?></p><?php endif; ?>
				<span class="sketch content"><?php echo mac_substring(mac_filter_html(mac_default($obj['vod_content'],'暂无简介')),100); ?></span>
				<span class="data" style="display: none;"><?php echo mac_default($obj['vod_content'],'暂无简介'); ?></span>
				<a class="details" href="javascript:;">详情 <i class="fa fa-angle-down"></i></a>
			</div>
		</div>			
	</div>
</div>
<?php endif; ?><!-- 剧情简介-->

				<?php if($mytheme['playlist']['is']): if($mytheme['playlist']['style'] == 'list'): if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>
		<div class="myui-panel myui-panel-bg clearfix">
			<div class="myui-panel-box clearfix">
				<div class="myui-panel_hd">
					<div class="myui-panel__head bottom-line active clearfix">
						<?php if($mytheme['playlist']['sort']): ?><a class="more sort-button pull-right" href="javascript:;"><i class="fa fa-sort-amount-asc"></i> 排序</a><?php endif; ?>
						<h3 class="title">
							<?php echo $vo['player_info']['show']; ?>
						</h3>	
						<?php if($mytheme['playlist']['tip']): ?>
						<span class="more text-muted"><?php echo $vo['player_info']['tip']; ?></span>
						<?php endif; ?>
					</div>																		
				</div>
				<div class="myui-panel_bd clearfix">
					<ul class="myui-content__list scrollbar sort-list clearfix" <?php if($mytheme['playlist']['high'] > 0): ?>style="max-height: <?php echo $mytheme['playlist']['high']; ?>px; overflow: auto;"<?php endif; ?>>
	<?php if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key=>$vo2): ?>
	<li class="<?php if($obj['type_1']['type_name']=='电影'||$obj['type']['type_name']=='电影'||$obj['type_1']['type_name']=='综艺'||$obj['type']['type_name']=='综艺'): ?>col-lg-7 col-md-6 col-sm-4  col-xs-2<?php else: ?>col-lg-10 col-md-8 col-sm-6 col-xs-4<?php endif; ?>"><a class="btn <?php if($param['sid'] == $vo['sid'] && $param['nid'] == $vo2['nid']): ?>btn-warm<?php else: ?>btn-default<?php endif; ?>" href="<?php if($mytheme['playlist']['link']): ?><?php echo $vo2['url']; else: ?><?php echo mac_url_vod_play($obj,['sid'=>$vo['sid'],'nid'=>$vo2['nid']]); endif; ?>"><?php echo $vo2['name']; ?></a></li>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
				</div>
			</div>
		</div>
		<?php endforeach; endif; else: echo "" ;endif; elseif($mytheme['playlist']['style'] == 'btn'): if(!(empty($obj['vod_play_list']) || (($obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator ) && $obj['vod_play_list']->isEmpty()))): ?>
		<div class="myui-panel myui-panel-bg clearfix">
			<div class="myui-panel-box clearfix">
				<div class="myui-panel_hd">
					<div class="myui-panel__head active bottom-line clearfix">
						<?php if($mytheme['playlist']['sort']): ?><a class="more sort-button pull-right" href="javascript:;"><i class="fa fa-sort-amount-asc"></i> 排序</a><?php endif; ?>
						<h3 class="title">
							<?php echo $mytheme['playlist']['title']; ?>
						</h3>
					</div>	
					<div class="mt15 bottom-line" style="padding: 8px 0;">
						<ul class="nav nav-btn clearfix">
							<?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>	
							<li<?php if($param['sid'] == $vo['sid']): ?> class="active"<?php endif; ?>><a href="#playlist<?php echo $key; ?>" data-toggle="tab"><?php echo $vo['player_info']['show']; ?></a></li>
							<?php endforeach; endif; else: echo "" ;endif; ?>								
						</ul>
					</div>																	
				</div>
				<div class="tab-content myui-panel_bd">
					<?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>	
					<div id="playlist<?php echo $key; ?>" class="tab-pane fade in<?php if($param['sid'] == $vo['sid']): ?> active<?php endif; ?> clearfix">
						<?php if($mytheme['playlist']['tip']): ?>
						<p class="text-muted col-pd">
							<?php echo $vo['player_info']['tip']; ?> 
						</p>
						<?php endif; ?>
						<ul class="myui-content__list scrollbar sort-list clearfix" <?php if($mytheme['playlist']['high'] > 0): ?>style="max-height: <?php echo $mytheme['playlist']['high']; ?>px; overflow: auto;"<?php endif; ?>>
	<?php if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key=>$vo2): ?>
	<li class="<?php if($obj['type_1']['type_name']=='电影'||$obj['type']['type_name']=='电影'||$obj['type_1']['type_name']=='综艺'||$obj['type']['type_name']=='综艺'): ?>col-lg-7 col-md-6 col-sm-4  col-xs-2<?php else: ?>col-lg-10 col-md-8 col-sm-6 col-xs-4<?php endif; ?>"><a class="btn <?php if($param['sid'] == $vo['sid'] && $param['nid'] == $vo2['nid']): ?>btn-warm<?php else: ?>btn-default<?php endif; ?>" href="<?php if($mytheme['playlist']['link']): ?><?php echo $vo2['url']; else: ?><?php echo mac_url_vod_play($obj,['sid'=>$vo['sid'],'nid'=>$vo2['nid']]); endif; ?>"><?php echo $vo2['name']; ?></a></li>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
					</div>															
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		</div>	
		<?php if($param['sid'] == 0): ?>
		<script type="text/javascript">
			$(".tab-pane:first,.nav-btn li:first").addClass("active");
		</script>
		<?php endif; endif; elseif($mytheme['playlist']['style'] == 'tab'): if(!(empty($obj['vod_play_list']) || (($obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator ) && $obj['vod_play_list']->isEmpty()))): ?>
		<div class="myui-panel myui-panel-bg clearfix">
			<div class="myui-panel-box clearfix">
				<div class="myui-panel_hd">
					<div class="myui-panel__head active bottom-line clearfix">
						<?php if($mytheme['playlist']['sort']): ?><a class="more sort-button pull-right" href="javascript:;"><i class="fa fa-sort-amount-asc"></i> 排序</a><?php endif; ?>
						<h3 class="title">
							<?php echo $mytheme['playlist']['title']; ?>
						</h3>
						<ul class="nav nav-tabs active">
							<?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>	
							<li<?php if($param['sid'] == $vo['sid']): ?> class="active"<?php endif; ?>><a href="#playlist<?php echo $key; ?>" data-toggle="tab"><?php echo $vo['player_info']['show']; ?></a></li>
							<?php endforeach; endif; else: echo "" ;endif; ?>								
						</ul>
					</div>																		
				</div>
				<div class="tab-content myui-panel_bd">
					<?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>	
					<div id="playlist<?php echo $key; ?>" class="tab-pane fade in<?php if($param['sid'] == $vo['sid']): ?> active<?php endif; ?> clearfix">
						<?php if($mytheme['playlist']['tip']): ?>
						<p class="text-muted col-pd">
							<?php echo $vo['player_info']['tip']; ?> 
						</p>
						<?php endif; ?>
						<ul class="myui-content__list scrollbar sort-list clearfix" <?php if($mytheme['playlist']['high'] > 0): ?>style="max-height: <?php echo $mytheme['playlist']['high']; ?>px; overflow: auto;"<?php endif; ?>>
	<?php if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key=>$vo2): ?>
	<li class="<?php if($obj['type_1']['type_name']=='电影'||$obj['type']['type_name']=='电影'||$obj['type_1']['type_name']=='综艺'||$obj['type']['type_name']=='综艺'): ?>col-lg-7 col-md-6 col-sm-4  col-xs-2<?php else: ?>col-lg-10 col-md-8 col-sm-6 col-xs-4<?php endif; ?>"><a class="btn <?php if($param['sid'] == $vo['sid'] && $param['nid'] == $vo2['nid']): ?>btn-warm<?php else: ?>btn-default<?php endif; ?>" href="<?php if($mytheme['playlist']['link']): ?><?php echo $vo2['url']; else: ?><?php echo mac_url_vod_play($obj,['sid'=>$vo['sid'],'nid'=>$vo2['nid']]); endif; ?>"><?php echo $vo2['name']; ?></a></li>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
					</div>															
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		</div>	
		<?php if($param['sid'] == 0): ?>
		<script type="text/javascript">
			$(".tab-pane:first,.nav-tabs li:first").addClass("active");
		</script>
		<?php endif; endif; elseif($mytheme['playlist']['style'] == 'down'): if(!(empty($obj['vod_play_list']) || (($obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator ) && $obj['vod_play_list']->isEmpty()))): ?>
		<div class="myui-panel myui-panel-bg clearfix">
			<div class="myui-panel-box clearfix">
				<div class="myui-panel_hd">
					<div class="myui-panel__head active bottom-line clearfix">
						<?php if($mytheme['playlist']['sort']): ?><a class="more sort-button pull-right" href="javascript:;"><i class="fa fa-sort-amount-asc"></i> 排序</a><?php endif; ?>
						<h3 class="title">
							<?php echo $mytheme['playlist']['title']; ?>
						</h3>
						<ul class="nav nav-tabs">		
							<li class="dropdown pb10">
								<a href="javascript:;" data-toggle="dropdown">切换线路 <i class="fa fa-angle-down"></i></a>
								<div class="dropdown-box bottom fadeInDown">
									<ul class="item">
										<?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo1): ?>
										<li><a href="#play_down<?php echo $key; ?>" tabindex="-1" data-toggle="tab"><?php echo $vo1['player_info']['show']; ?></a></li>
										<?php endforeach; endif; else: echo "" ;endif; ?>
									</ul>
								</div>
							</li>
						</ul>
					</div>																		
				</div>
				<div class="tab-content myui-panel_bd">
					<?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>	
					<div id="play_down<?php echo $key; ?>" class="tab-pane fade in<?php if($param['sid'] == $vo['sid']): ?> active<?php endif; ?> clearfix">
						<?php if($mytheme['playlist']['tip']): ?>
						<p class="text-muted col-pd">
							<?php echo $vo['player_info']['show']; ?>-<?php echo $vo['player_info']['tip']; ?> 
						</p>
						<?php endif; ?>
						<ul class="myui-content__list scrollbar sort-list clearfix" <?php if($mytheme['playlist']['high'] > 0): ?>style="max-height: <?php echo $mytheme['playlist']['high']; ?>px; overflow: auto;"<?php endif; ?>>
	<?php if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key=>$vo2): ?>
	<li class="<?php if($obj['type_1']['type_name']=='电影'||$obj['type']['type_name']=='电影'||$obj['type_1']['type_name']=='综艺'||$obj['type']['type_name']=='综艺'): ?>col-lg-7 col-md-6 col-sm-4  col-xs-2<?php else: ?>col-lg-10 col-md-8 col-sm-6 col-xs-4<?php endif; ?>"><a class="btn <?php if($param['sid'] == $vo['sid'] && $param['nid'] == $vo2['nid']): ?>btn-warm<?php else: ?>btn-default<?php endif; ?>" href="<?php if($mytheme['playlist']['link']): ?><?php echo $vo2['url']; else: ?><?php echo mac_url_vod_play($obj,['sid'=>$vo['sid'],'nid'=>$vo2['nid']]); endif; ?>"><?php echo $vo2['name']; ?></a></li>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
					</div>															
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		</div>
		<?php if($param['sid'] == 0): ?>
		<script type="text/javascript">
			$(".tab-pane:first").addClass("active");
		</script>
		<?php endif; endif; endif; endif; if($mytheme['detail']['ad'] && $mytheme['detail']['ad3']): ?>
<div class="myui-panel myui-panel-bg clearfix">
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_bd">
			<div class="col-xs-1">
				<?php echo $mytheme['detail']['ad3']; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<!-- 播放地址-->

				<?php if(is_array($obj['vod_down_list']) || $obj['vod_down_list'] instanceof \think\Collection || $obj['vod_down_list'] instanceof \think\Paginator): if( count($obj['vod_down_list'])==0 ) : echo "" ;else: foreach($obj['vod_down_list'] as $key=>$vo): if($vo['from'] == $mytheme['downlist']['from']): ?>
<div class="myui-panel myui-panel-bg clearfix">
	<div class="myui-panel-box">
		<div class="myui-panel_hd">
			<div class="myui-panel__head bottom-line active clearfix">
				<?php if($mytheme['downlist']['sort']): ?><a class="more sort-button pull-right" href="javascript:;"><i class="fa fa-sort-amount-asc"></i> 排序</a><?php endif; ?>
				<h3 class="title">
					<?php echo $vo['player_info']['show']; ?>
				</h3>	
				<?php if($mytheme['downlist']['tip']): ?><span class="more text-muted"><?php echo $vo['player_info']['tip']; ?> </span><?php endif; ?>
			</div>																		
		</div>					
		<div class="myui-panel_bd downlist clearfix">
			<ul class="myui-down__list scrollbar sort-list col-pd clearfix" <?php if($mytheme['downlist']['high'] > 0): ?>style="max-height: <?php echo $mytheme['downlist']['high']; ?>px; overflow: auto;"<?php endif; ?>>
				<?php if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key=>$vo2): ?>
				<li class="bottom-line clearfix">
					<span class="text"><input type="checkbox" name="down_url_list_<?php echo $key; ?>" value="<?php echo $vo2['url']; ?>" class="down_url"/> <a class="common_down" href="javascript:;"><?php echo $vo2['name']; ?></a><input class="hide" type="text" name="" value="<?php echo $vo2['url']; ?>" /></span>
					<span class="operate">
						<a class="thunder btn common_down" href="javascript:;"><img src="<?php echo $maccms['path_tpl']; ?>statics/img/icon_xunlei.png"/> 迅雷下载</a>
						<a class="btn bendi" href="<?php echo $vo2['url']; ?>"><img src="<?php echo $maccms['path_tpl']; ?>statics/img/icon_down.png"/> 本地下载</a>
						<a class="btn copy Codyurl" href="javascript:;" data-text="<?php echo $vo2['url']; ?>"><img src="<?php echo $maccms['path_tpl']; ?>statics/img/icon_url.png"/> 复制地址</a>
						<a class="thunderkk btn hidden-sm hidden-xs" href="javascript:;"><img src="<?php echo $maccms['path_tpl']; ?>statics/img/icon_video.png"/> 看看播放</a>
					</span>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<ul class="myui-down__list col-pd clearfix">
				<li class="clearfix">
					<span class="text"><input type="checkbox" name="checkall" /> 全选  &nbsp;&nbsp;<a class="text-red thunder_down_all" href="javascript:;" >迅雷下载选中文件</a></span>
					<span class="operate text-muted hidden-xs">没有安装迅雷？<a target="_blank" href="http://dl.xunlei.com/">点击这里下载最新版迅雷 &gt;</a></span>
				</li>
			</ul>
		</div>
	</div>
</div>
<?php endif; endforeach; endif; else: echo "" ;endif; ?><!-- 下载地址-->

				<?php if($mytheme['like']['is']): ?>
<div class="myui-panel myui-panel-bg clearfix">
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_hd">
			<div class="myui-panel__head active bottom-line clearfix">
				<h3 class="title">
					<?php echo $mytheme['like']['title']; ?>
				</h3>		
				<ul class="nav nav-tabs active">	
					<li class="active"><a href="#type" data-toggle="tab">同类型</a></li>
					<?php if($mytheme['like']['actor']): ?><li><a href="#actor" data-toggle="tab">同主演</a></li><?php endif; if($mytheme['like']['year']): ?><li><a href="#year" data-toggle="tab">同年份</a></li><?php endif; if($obj['vod_tag']): ?><li><a href="#tag" data-toggle="tab">同TAG</a></li><?php endif; ?>
				</ul>
			</div>																		
		</div>
		<div class="tab-content myui-panel_bd">
			<ul id="type" class="myui-vodlist__bd tab-pane fade in active clearfix">
				<?php $__TAG__ = '{"num":"'.$mytheme['like']['num'].'","type":"'.$mytheme['like']['type'].'","order":"desc","by":"'.$mytheme['like']['by'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li class="col-lg-<?php echo $mytheme['like']['col']; ?> col-md-<?php echo $mytheme['col']['md']; ?> col-sm-<?php echo $mytheme['col']['sm']; ?> col-xs-<?php echo $mytheme['col']['xs']; if($key > $mytheme['like']['xs']): ?> hidden-xs<?php endif; if($key > $mytheme['like']['sm']): ?> hidden-sm<?php endif; ?>">
					<div class="myui-vodlist__box">
	<a class="myui-vodlist__thumb lazyload"<?php if($mytheme['site']['link']): ?> href="<?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?>"<?php else: ?> href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">
		<span class="play hidden-xs"></span>
		<span class="pic-tag pic-tag-<?php echo $mytheme['pic']['tag_seat']; ?>">
			<?php if($mytheme['pic']['tag']): ?><span class="tag" style="background-color: <?php echo $mytheme['pic']['tag_bg']; ?>;"><?php echo $vo[''.$mytheme['pic']['tag_data'].'']; ?><?php echo $mytheme['pic']['tag_text']; ?></span><?php endif; if($mytheme['pic']['tag2']): ?><span class="tag" style="background-color: <?php echo $mytheme['pic']['tag_bg2']; ?>;"><?php echo $vo[''.$mytheme['pic']['tag_data2'].'']; ?></span><?php endif; ?>
		</span>
		<?php if($mytheme['pic']['text']): ?><span class="pic-text text-<?php echo $mytheme['pic']['text_face']; ?>"><?php echo $vo[''.$mytheme['pic']['text_data'].'']; ?></span><?php endif; ?>
	</a>									
	<div class="myui-vodlist__detail">
		<h4 class="title text-overflow"><a<?php if($mytheme['site']['link']): ?> href="<?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?>"<?php else: ?> href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h4>
		<?php if($mytheme['pic']['sub']): ?><p class="text text-overflow text-muted <?php echo $mytheme['pic']['sub_self']; ?>"><?php echo $mytheme['pic']['sub_text']; ?><?php echo mac_default($vo[''.$mytheme['pic']['sub_data'].''],'内详'); ?></p><?php endif; ?>
	</div>										
</div>										
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<?php if($mytheme['like']['actor']): ?>
			<ul id="actor" class="myui-vodlist__bd tab-pane fade in clearfix">
				<?php $__TAG__ = '{"num":"'.$mytheme['like']['num'].'","actor":"'.$obj['vod_actor'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li class="col-lg-<?php echo $mytheme['like']['col']; ?> col-md-<?php echo $mytheme['col']['md']; ?> col-sm-<?php echo $mytheme['col']['sm']; ?> col-xs-<?php echo $mytheme['col']['xs']; if($key > $mytheme['like']['xs']): ?> hidden-xs<?php endif; if($key > $mytheme['like']['sm']): ?> hidden-sm<?php endif; ?>">
					<div class="myui-vodlist__box">
	<a class="myui-vodlist__thumb lazyload"<?php if($mytheme['site']['link']): ?> href="<?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?>"<?php else: ?> href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">
		<span class="play hidden-xs"></span>
		<span class="pic-tag pic-tag-<?php echo $mytheme['pic']['tag_seat']; ?>">
			<?php if($mytheme['pic']['tag']): ?><span class="tag" style="background-color: <?php echo $mytheme['pic']['tag_bg']; ?>;"><?php echo $vo[''.$mytheme['pic']['tag_data'].'']; ?><?php echo $mytheme['pic']['tag_text']; ?></span><?php endif; if($mytheme['pic']['tag2']): ?><span class="tag" style="background-color: <?php echo $mytheme['pic']['tag_bg2']; ?>;"><?php echo $vo[''.$mytheme['pic']['tag_data2'].'']; ?></span><?php endif; ?>
		</span>
		<?php if($mytheme['pic']['text']): ?><span class="pic-text text-<?php echo $mytheme['pic']['text_face']; ?>"><?php echo $vo[''.$mytheme['pic']['text_data'].'']; ?></span><?php endif; ?>
	</a>									
	<div class="myui-vodlist__detail">
		<h4 class="title text-overflow"><a<?php if($mytheme['site']['link']): ?> href="<?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?>"<?php else: ?> href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h4>
		<?php if($mytheme['pic']['sub']): ?><p class="text text-overflow text-muted <?php echo $mytheme['pic']['sub_self']; ?>"><?php echo $mytheme['pic']['sub_text']; ?><?php echo mac_default($vo[''.$mytheme['pic']['sub_data'].''],'内详'); ?></p><?php endif; ?>
	</div>										
</div>	
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<?php endif; if($mytheme['like']['year']): ?>
			<ul id="year" class="myui-vodlist__bd tab-pane fade in clearfix">
				<?php $__TAG__ = '{"num":"'.$mytheme['like']['num'].'","type":"'.$mytheme['like']['type'].'","order":"desc","by":"'.$mytheme['like']['by'].'","year":"'.$obj['vod_year'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li class="col-lg-<?php echo $mytheme['like']['col']; ?> col-md-<?php echo $mytheme['col']['md']; ?> col-sm-<?php echo $mytheme['col']['sm']; ?> col-xs-<?php echo $mytheme['col']['xs']; if($key > $mytheme['like']['xs']): ?> hidden-xs<?php endif; if($key > $mytheme['like']['sm']): ?> hidden-sm<?php endif; ?>">
					<div class="myui-vodlist__box">
	<a class="myui-vodlist__thumb lazyload"<?php if($mytheme['site']['link']): ?> href="<?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?>"<?php else: ?> href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">
		<span class="play hidden-xs"></span>
		<span class="pic-tag pic-tag-<?php echo $mytheme['pic']['tag_seat']; ?>">
			<?php if($mytheme['pic']['tag']): ?><span class="tag" style="background-color: <?php echo $mytheme['pic']['tag_bg']; ?>;"><?php echo $vo[''.$mytheme['pic']['tag_data'].'']; ?><?php echo $mytheme['pic']['tag_text']; ?></span><?php endif; if($mytheme['pic']['tag2']): ?><span class="tag" style="background-color: <?php echo $mytheme['pic']['tag_bg2']; ?>;"><?php echo $vo[''.$mytheme['pic']['tag_data2'].'']; ?></span><?php endif; ?>
		</span>
		<?php if($mytheme['pic']['text']): ?><span class="pic-text text-<?php echo $mytheme['pic']['text_face']; ?>"><?php echo $vo[''.$mytheme['pic']['text_data'].'']; ?></span><?php endif; ?>
	</a>									
	<div class="myui-vodlist__detail">
		<h4 class="title text-overflow"><a<?php if($mytheme['site']['link']): ?> href="<?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?>"<?php else: ?> href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h4>
		<?php if($mytheme['pic']['sub']): ?><p class="text text-overflow text-muted <?php echo $mytheme['pic']['sub_self']; ?>"><?php echo $mytheme['pic']['sub_text']; ?><?php echo mac_default($vo[''.$mytheme['pic']['sub_data'].''],'内详'); ?></p><?php endif; ?>
	</div>										
</div>											
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<?php endif; if($obj['vod_tag']): ?>
			<ul id="tag" class="myui-vodlist__bd tab-pane fade in clearfix">
				<?php $__TAG__ = '{"num":"'.$mytheme['like']['num'].'","type":"all","tag":"'.$obj['vod_tag'].'","order":"desc","by":"'.$mytheme['like']['by'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li class="col-lg-<?php echo $mytheme['like']['col']; ?> col-md-<?php echo $mytheme['col']['md']; ?> col-sm-<?php echo $mytheme['col']['sm']; ?> col-xs-<?php echo $mytheme['col']['xs']; if($key > $mytheme['like']['xs']): ?> hidden-xs<?php endif; if($key > $mytheme['like']['sm']): ?> hidden-sm<?php endif; ?>">
					<div class="myui-vodlist__box">
	<a class="myui-vodlist__thumb lazyload"<?php if($mytheme['site']['link']): ?> href="<?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?>"<?php else: ?> href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">
		<span class="play hidden-xs"></span>
		<span class="pic-tag pic-tag-<?php echo $mytheme['pic']['tag_seat']; ?>">
			<?php if($mytheme['pic']['tag']): ?><span class="tag" style="background-color: <?php echo $mytheme['pic']['tag_bg']; ?>;"><?php echo $vo[''.$mytheme['pic']['tag_data'].'']; ?><?php echo $mytheme['pic']['tag_text']; ?></span><?php endif; if($mytheme['pic']['tag2']): ?><span class="tag" style="background-color: <?php echo $mytheme['pic']['tag_bg2']; ?>;"><?php echo $vo[''.$mytheme['pic']['tag_data2'].'']; ?></span><?php endif; ?>
		</span>
		<?php if($mytheme['pic']['text']): ?><span class="pic-text text-<?php echo $mytheme['pic']['text_face']; ?>"><?php echo $vo[''.$mytheme['pic']['text_data'].'']; ?></span><?php endif; ?>
	</a>									
	<div class="myui-vodlist__detail">
		<h4 class="title text-overflow"><a<?php if($mytheme['site']['link']): ?> href="<?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?>"<?php else: ?> href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h4>
		<?php if($mytheme['pic']['sub']): ?><p class="text text-overflow text-muted <?php echo $mytheme['pic']['sub_self']; ?>"><?php echo $mytheme['pic']['sub_text']; ?><?php echo mac_default($vo[''.$mytheme['pic']['sub_data'].''],'内详'); ?></p><?php endif; ?>
	</div>										
</div>											
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<?php endif; ?>
		</div>		
	</div>						
</div>
<?php if($mytheme['detail']['ad'] && $mytheme['detail']['ad5']): ?>
<div class="myui-panel myui-panel-bg clearfix">
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_bd">
			<div class="col-xs-1">
				<?php echo $mytheme['detail']['ad5']; ?>
			</div>
		</div>
	</div>				
</div>
<?php endif; endif; ?>


<!-- 猜你喜欢-->
				
				<?php if($mytheme['look']['is']): ?>
<div class="myui-panel myui-panel-bg clearfix">
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_hd">
			<div class="myui-panel__head clearfix">
				<h3 class="title">
					<?php echo $mytheme['look']['title']; ?>
				</h3>		
			</div>													
		</div>
		<div class="myui-panel_bd">
			<ul class="myui-vodlist__bd clearfix">
				<?php $__TAG__ = '{"num":"'.$mytheme['look']['num'].'","type":"'.$mytheme['look']['type'].'","order":"desc","by":"'.$mytheme['look']['by'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li class="col-md-<?php echo $mytheme['look']['col']; ?> col-sm-<?php echo $mytheme['col']['sm_wide']; ?> col-xs-<?php echo $mytheme['col']['xs_wide']; ?>">
					<div class="myui-vodlist__box">
	<a class="myui-vodlist__thumb wide lazyload" href="<?php echo mac_url_vod_play($vo); ?>" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">					
		<span class="play hidden-xs"></span>		
		<?php if($mytheme['pic']['text']): ?><span class="pic-text text-<?php echo $mytheme['pic']['text_face']; ?>"><?php echo $vo[''.$mytheme['pic']['text_data2'].'']; ?></span><?php endif; ?>
	</a>									
	<div class="myui-vodlist__detail">
		<h4 class="title text-overflow"><a href="<?php echo mac_url_vod_play($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h4>
		<?php if($mytheme['pic']['sub']): ?><p class="text text-overflow text-muted <?php echo $mytheme['pic']['sub_self']; ?>"><?php echo $mytheme['pic']['sub_text2']; ?><?php echo $vo[''.$mytheme['pic']['sub_data2'].'']; ?></p><?php endif; ?>
	</div>
</div>
			
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>	
		</div>		
	</div>	
</div>
<?php if($mytheme['detail']['ad'] && $mytheme['detail']['ad6']): ?>
<div class="myui-panel myui-panel-bg clearfix">
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_bd">
			<div class="col-xs-1">
				<?php echo $mytheme['detail']['ad6']; ?>
			</div>
		</div>
	</div>				
</div>
<?php endif; endif; ?>
<!-- 大家在看-->
				
				<?php if($mytheme['detail']['comment']): ?>
<div class="myui-panel myui-panel-bg clearfix">
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_bd">
			<div class="myui-panel_hd">
				<div class="myui-panel__head clearfix">
					<h3 class="title">
						影片评论
					</h3>						
				</div>																		
			</div>
			<div class="myui-panel_bd">
				
				<script>
			        $(function(){
			            MAC.Comment.Login = <?php echo $comment['login']; ?>;
			           	MAC.Comment.Verify = <?php echo $comment['verify']; ?>;
			            Myui.Comment.Show(1);
				    });
			    </script>
			    <div class="myui_comment" data-id="<?php echo $obj['vod_id']; ?>" data-mid="<?php echo $maccms['mid']; ?>" ></div>
			</div>
		</div>
	</div>					
</div>		
<?php endif; ?><!-- 评论-->

			</div>
			<?php if($mytheme['detail']['side']): ?>
			<div class="col-lg-wide-25 col-md-wide-3 col-xs-1 myui-sidebar <?php echo $mytheme['detail']['side_self']; ?>">
					
				
<?php if($mytheme['side']['hot_is']): ?>
<div class="myui-panel myui-panel-bg clearfix">
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_hd">
			<div class="myui-panel__head clearfix">
				<h3 class="title">
					<?php echo $obj['type']['type_name']; ?><?php echo $mytheme['side']['hot_title']; ?>
				</h3>	
				<a class="more text-muted" href="<?php echo mac_url_type($obj['type_id'],['id'=>$obj['type_id'],'by'=>'hits'],'show'); ?>">更多  <i class="fa fa-angle-right"></i></a>
			</div>																		
		</div>
		<div class="myui-panel_bd">
			<ul class="myui-vodlist__media active col-pd clearfix">
				<?php $__TAG__ = '{"num":"1","type":"'.$mytheme['side']['hot_id'].'","order":"desc","by":"'.$mytheme['side']['hot_by'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
	<div class="thumb">
		<a class="myui-vodlist__thumb img-xs-70 lazyload"<?php if($mytheme['site']['link']): ?> href="<?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?>"<?php else: ?> href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>"></a>
	</div>
	<div class="detail detail-side">
		<h4 class="title"><a<?php if($mytheme['site']['link']): ?> href="<?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?>"<?php else: ?> href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?>><i class="fa fa-angle-right text-muted pull-right"></i> <?php echo mac_substring($vo['vod_name'],8); ?></a></h4>
		<p class="font-12"><span class="text-muted">类型：</span><?php echo $vo['type']['type_name']; ?>，<span class="text-muted">地区：</span><?php echo $vo['vod_area']; ?></p>		
		<p class="font-12 margin-0"><span class="text-muted">主演：</span><?php echo mac_substring($vo['vod_actor'],12); ?></p>
	</div>																										
</li>	
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<ul class="myui-vodlist__text col-pd clearfix">
				<?php $__TAG__ = '{"num":"'.$mytheme['side']['hot_num'].'","type":"'.$mytheme['side']['hot_id'].'","order":"desc","by":"'.$mytheme['side']['hot_by'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
	<a<?php if($mytheme['site']['link']): ?> href="<?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?>"<?php else: ?> href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>">
		<?php if($mytheme['rank']['is']): ?><span class="pull-right <?php if(!$mytheme['rank']['color']): ?> text-muted<?php endif; ?>" style="color: <?php echo $mytheme['rank']['color']; ?>;"><?php echo mac_substring($vo[''.$mytheme['rank']['data'].''],8); ?></span><?php endif; ?>
		<span class="badge<?php if($key == 1): ?> badge-first<?php endif; if($key == 2): ?> badge-second<?php endif; if($key == 3): ?> badge-third<?php endif; ?>"><?php echo $key; ?></span><?php echo mac_substring($vo['vod_name'],8); ?>
	</a>
</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>	
		</div>
	</div>
</div>
<?php endif; ?>



<!-- 热播-->
				
				<?php if($obj['vod_rel_art']): ?>
<div class="myui-panel myui-panel-bg clearfix">
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_hd">
			<div class="myui-panel__head clearfix">
				<h3 class="title">
					相关资讯
				</h3>	
			</div>																		
		</div>
		<div class="myui-panel_bd clearfix">											
			<ul class="myui-vodlist__media col-pd clearfix">
				<?php $__TAG__ = '{"num":"5","ids":"'.$obj['vod_rel_art'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li>
					<div class="detail detail-left">
						<h5 class="title"><a href="<?php echo mac_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>"><?php echo mac_substring($vo['art_name'],20); ?></a></h5>										
						<p class="margin-0 text-muted font-12"><?php echo $vo['type']['type_name']; ?><span class="split-line"></span><?php echo date('Y-m-d',$vo['art_time']); ?></p>
					</div>
					<?php if($vo['art_pic']): ?>
					<div class="thumb">
						<a class="myui-vodlist__thumb wide img-xs-110" href="<?php echo mac_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>" style="background: url(<?php echo mac_url_img($vo['art_pic']); ?>);">
							<span class="play-v"></span>
						</a>
					</div>
					<?php endif; ?>
				</li>																	
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</div>
</div>
<?php endif; ?><!-- 相关资讯-->
				
				<?php if($mytheme['side']['art']): ?>
<div class="myui-panel myui-panel-bg clearfix">
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_hd">
			<div class="myui-panel__head clearfix">
				<h3 class="title">
					<?php echo $mytheme['side']['art_title']; ?>
				</h3>	
			</div>																		
		</div>
		<div class="myui-panel_bd clearfix">											
			<ul class="myui-vodlist__media col-pd clearfix">
				<?php $__TAG__ = '{"num":"'.$mytheme[side][art_num].'","type":"'.$mytheme[side][art_id].'","order":"desc","by":"'.$mytheme[side][art_by].'","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li>
					<div class="detail detail-left">
						<h5 class="title"><a href="<?php echo mac_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>"><?php echo mac_substring($vo['art_name'],20); ?></a></h5>										
						<p class="margin-0 text-muted font-12"><?php echo $vo['type']['type_name']; ?><span class="split-line"></span><?php echo date('Y-m-d',$vo['art_time']); ?></p>
					</div>
					<div class="thumb">
						<a class="myui-vodlist__thumb wide img-xs-110 lazyload" href="<?php echo mac_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>" data-original="<?php echo mac_url_img($vo['art_pic']); ?>">
							<span class="play-v"></span>
						</a>
					</div>
				</li>																	
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</div>
</div>
<?php endif; ?><!-- 资讯-->

				<?php if($mytheme['detail']['ad'] && $mytheme['detail']['ad8']): ?>
				<div class="myui-panel myui-panel-bg clearfix">
					<div class="myui-panel-box clearfix">
						<div class="myui-panel_bd">
							<div class="col-xs-1">
								<?php echo $mytheme['detail']['ad8']; ?>
							</div>
						</div>
					</div>
				</div>
				<?php endif; ?>

			</div>
			<?php endif; ?>
        </div>
    </div>

	<span class="mac_hits hits hide" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?><?php echo $obj['art_id']; ?><?php echo $obj['topic_id']; ?>" data-type="hits"></span>
	<span class="mac_ulog_set hide" data-type="4" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>" data-sid="<?php echo $param['sid']; ?>" data-nid="<?php echo $param['nid']; ?>"></span>
	    
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
	<?php $__FOR_START_1302906644__=1;$__FOR_END_1302906644__=6;for($i=$__FOR_START_1302906644__;$i <= $__FOR_END_1302906644__;$i+=1){ if($mytheme['tabbar']['url'.$i.'']): ?>
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
	<?php endif; if($mytheme['nav2']['sub']): $__FOR_START_875901999__=1;$__FOR_END_875901999__=3;for($i=$__FOR_START_875901999__;$i <= $__FOR_END_875901999__;$i+=1){ if($mytheme['nav2']['url'.$i.'']): ?><li><a href="<?php echo $mytheme['nav2']['url'.$i.'']; ?>" title="<?php echo $mytheme['nav2']['text'.$i.'']; ?>"><i class="fa <?php echo $mytheme['nav2']['icon'.$i.'']; ?>"></i></a></li><?php endif; } endif; ?>
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
	<?php $_628f0a11eddb5=explode(',',''.$mytheme['click']['url'].''); if(is_array($_628f0a11eddb5) || $_628f0a11eddb5 instanceof \think\Collection || $_628f0a11eddb5 instanceof \think\Paginator): if( count($_628f0a11eddb5)==0 ) : echo "" ;else: foreach($_628f0a11eddb5 as $key=>$vo): ?>
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
