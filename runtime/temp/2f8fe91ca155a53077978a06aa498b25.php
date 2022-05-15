<?php if (!defined('THINK_PATH')) exit(); /*a:13:{s:38:"template/mytheme/html/index/index.html";i:1652587231;s:58:"/usr/local/html/cms/template/mytheme/html/public/data.html";i:1652587231;s:56:"/usr/local/html/cms/template/mytheme/html/seo/index.html";i:1652587231;s:61:"/usr/local/html/cms/template/mytheme/html/public/include.html";i:1652587231;s:59:"/usr/local/html/cms/template/mytheme/html/public/style.html";i:1652587231;s:58:"/usr/local/html/cms/template/mytheme/html/public/head.html";i:1652587231;s:58:"/usr/local/html/cms/template/mytheme/html/index/slide.html";i:1652587231;s:56:"/usr/local/html/cms/template/mytheme/html/index/hot.html";i:1652587231;s:60:"/usr/local/html/cms/template/mytheme/html/block/vod_box.html";i:1652587231;s:57:"/usr/local/html/cms/template/mytheme/html/index/list.html";i:1652587231;s:58:"/usr/local/html/cms/template/mytheme/html/public/foot.html";i:1652587231;s:57:"/usr/local/html/cms/template/mytheme/html/index/link.html";i:1652587231;s:62:"/usr/local/html/cms/template/mytheme/html/user/ajax_login.html";i:1652587231;}*/ ?>
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
<title><?php echo $mytheme['site']['title']; ?></title>
<meta name="keywords" content="<?php echo $mytheme['site']['keywords']; ?>" />
<meta name="description" content="<?php echo $mytheme['site']['description']; ?>" />
   
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="shortcut icon" href="<?php echo $mytheme['img']['ico']; ?>" type="image/x-icon" />					
<link rel="stylesheet" href="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/css/mytheme-font.css?v=<?php echo $my['version']; ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/css/mytheme-ui.css?v=<?php echo $my['version']; ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/css/mytheme-site.css?v=<?php echo $my['version']; ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/css/<?php echo $mytheme['style']['default']; ?>.css?v=<?php echo $my['version']; ?>" type="text/css" name="default" />
<?php if($mytheme['style']['skin'] && !$mytheme['color']['is']): $_6280800c00d14=explode(',',''.$mytheme['style']['skin_style'].''); if(is_array($_6280800c00d14) || $_6280800c00d14 instanceof \think\Collection || $_6280800c00d14 instanceof \think\Paginator): if( count($_6280800c00d14)==0 ) : echo "" ;else: foreach($_6280800c00d14 as $key=>$vo): ?>
<link rel="stylesheet" href="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/css/<?php echo $vo; ?>.css?v=<?php echo $my['version']; ?>" type="text/css" name="skin" disabled/>
<?php endforeach; endif; else: echo "" ;endif; endif; ?>
<script> 
	var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};
	var myui={"tpl":"<?php echo $maccms['path_tpl']; ?>","short":"<?php echo $mytheme['short']['is']; ?>","shortapi":"<?php echo $mytheme['short']['api']; ?>","bdapi":"<?php echo $mytheme['bdshare']['api']; ?>","thunderurl":"<?php echo $mytheme['site']['xunlei']; ?>"};
</script>
<script type="text/javascript" src="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/js/jquery.min.js?v=3.3.1"></script>
<script type="text/javascript" src="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/js/layer/layer.js?v3.1.1"></script>
<script type="text/javascript" src="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/js/mytheme-site.js?v=<?php echo $my['version']; ?>"></script>
<script type="text/javascript" src="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/js/mytheme-ui.js?v=<?php echo $my['version']; ?>"></script>
<script type="text/javascript" src="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/js/mytheme-cms.js?v=<?php echo $my['version']; ?>"></script>
<?php echo $mytheme['site']['sub_static']; ?>
<style type="text/css">body{font-family:<?php echo $mytheme['style']['font']; ?>;}[class*=col-],.myui-content__list li,.myui-vodlist__media.col li{ padding: <?php echo $mytheme['main']['col']; ?>px}.btn{ border-radius: <?php echo $mytheme['main']['btn_radius']; ?>px;}.myui-vodlist__thumb{ border-radius:<?php echo $mytheme['main']['pic_radius']; ?>px; padding-top:<?php echo $mytheme['pic']['high']; ?>%; background: url(<?php echo $mytheme['img']['load1']; ?>) no-repeat;}.myui-vodlist__thumb.square{ padding-top: <?php echo $mytheme['pic']['square_high']; ?>%; background: url(<?php echo $mytheme['img']['load3']; ?>) no-repeat;}.myui-vodlist__thumb.wide{ padding-top: <?php echo $mytheme['pic']['wide_high']; ?>%; background: url(<?php echo $mytheme['img']['load2']; ?>) no-repeat;}.myui-vodlist__thumb.actor{ padding-top: <?php echo $mytheme['pic']['actor_high']; ?>%;}.flickity-prev-next-button.previous{ left: <?php echo $mytheme['main']['col']; ?>px;}.flickity-prev-next-button.next{ right: <?php echo $mytheme['main']['col']; ?>px;}.myui-sidebar{ padding: 0 0 0 <?php echo $mytheme['main']['block']; ?>px;}.myui-panel{ margin-bottom: <?php echo $mytheme['main']['block']; ?>px; border-radius: <?php echo $mytheme['main']['block_radius']; ?>px;}.myui-panel-mb{ margin-bottom: <?php echo $mytheme['main']['block']; ?>px;}.myui-player__item .fixed{ width: <?php echo $mytheme['player']['fixed_wide']; ?>px;}.myui-vodlist__text li a,.myui-vodlist__media li{ padding: <?php echo $mytheme['main']['col']; ?>px 0;}.myui-screen__list{ padding: <?php echo $mytheme['main']['col']; ?>px <?php echo $mytheme['main']['col']; ?>px 0;}.myui-screen__list li{ margin-bottom: <?php echo $mytheme['main']['col']; ?>px; margin-right: <?php echo $mytheme['main']['col']; ?>px;}.myui-page{ padding: 0 <?php echo $mytheme['main']['col']; ?>px;}.myui-extra{ right: <?php echo $mytheme['nav2']['right']; ?>px; bottom: <?php echo $mytheme['nav2']['bottom']; ?>px;}@media (min-width: 1200px){.container{ max-width: <?php echo $mytheme['page']['lg_wide']; ?>px;}.container{ padding-left: <?php echo $mytheme['page']['margin']; ?>px;  padding-right: <?php echo $mytheme['page']['margin']; ?>px;}.container.min{ width: <?php echo $mytheme['page']['md_wide']; ?>px; padding: 0;}}@media (max-width: 767px){body,body.active{ <?php if($mytheme['tabbar']): ?>padding-bottom: 50px;<?php endif; ?>}[class*=col-],.myui-panel,.myui-content__list li{ padding: <?php echo $mytheme['main']['xs_col']; ?>px}.flickity-prev-next-button.previous{ left: <?php echo $mytheme['main']['xs_col']; ?>px;}.flickity-prev-next-button.next{ right: <?php echo $mytheme['main']['xs_col']; ?>px;}.myui-vodlist__text li a,.myui-vodlist__media li{ padding: <?php echo $mytheme['main']['col']; ?>px 0;}.myui-screen__list{ padding: <?php echo $mytheme['main']['col']; ?>px <?php echo $mytheme['main']['xs_col']; ?>px 0;}.myui-screen__list li{ margin-bottom: <?php echo $mytheme['main']['xs_col']; ?>px; margin-right: <?php echo $mytheme['main']['xs_col']; ?>px;}.myui-extra{ right: <?php echo $mytheme['nav2']['right2']; ?>px; bottom: <?php echo $mytheme['nav2']['bottom2']; ?>px;}.myui-page{ padding: 0 <?php echo $mytheme['main']['xs_col']; ?>px;}}.myui-topbg{ position: absolute; top: 0; left: 0; right: 0; width: 100%; <?php echo $mytheme['nav']['bg']; ?>}</style>
<?php if($mytheme['web']['style']): ?><style type="text/css"><?php echo $mytheme['web']['bodystyle']; ?></style><?php endif; ?>
<!--[if lt IE 9]>
<script src="https://cdn.ceshifile.org/html5shiv/r29/html5.min.js"></script>
<script src="https://cdn.ceshifile.org/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
	<body class="active">
		
		
		<header class="myui-header__top clearfix" id="header-top">
	<div class="container">	
		<div class="row">				
			<div class="myui-header__logo">			    	
				<a class="logo" href="<?php echo $maccms['path']; ?>">
					<img class="img-responsive hidden-xs" src="<?php echo $mytheme['img']['logo']; ?>"/>
					<img class="img-responsive visible-xs" src="<?php echo $mytheme['img']['wap_logo']; ?>"/>
				</a>					
			</div>
			<ul class="myui-header__menu">
				<?php if($mytheme['nav']['all']): if($maccms['aid'] == 15): ?>
				<li class="search-ul dropdown-hover">
					<a class="text-fff" href="<?php echo $maccms['path']; ?>"><i class="fa fa-home"></i></a>
				</li>
				<?php else: ?>
				<li class="search-ul dropdown-hover">
					<a href="javascript:;"><i class="fa fa-reorder"></i></a>
					<div class="dropdown-box bottom fadeInDown clearfix">
						<ul class="item nav-list clearfix">
							<li class="col-lg-5 col-md-5 col-sm-5 col-xs-3"><a class="btn btn-sm btn-block<?php if($maccms['aid'] == 1): ?> btn-warm<?php else: ?> btn-default<?php endif; ?>" href="<?php echo $maccms['path']; ?>">首页</a></li>
							<?php $__TAG__ = '{"num":"all","order":"asc","by":"sort","ids":"'.$mytheme['nav']['all_id'].'","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
							<li class="col-lg-5 col-md-5 col-sm-5 col-xs-3"><a class="btn btn-sm btn-block<?php if(($vo['type_id'] == $GLOBALS['type_id'])): ?> btn-warm<?php else: ?> btn-default<?php endif; ?>" href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a></li>
							<?php endforeach; endif; else: echo "" ;endif; if($mytheme['subnav']['is']): $__FOR_START_1989553885__=1;$__FOR_END_1989553885__=5;for($i=$__FOR_START_1989553885__;$i <= $__FOR_END_1989553885__;$i+=1){ if($mytheme['subnav']['url'.$i.'']): ?><li class="col-lg-5 col-md-5 col-sm-5 col-xs-3"><a class="btn btn-sm btn-block btn-default" href="<?php echo $mytheme['subnav']['url'.$i.'']; ?>"><?php echo $mytheme['subnav']['text'.$i.'']; ?></a></li><?php endif; } endif; ?>
						</ul>
					</div>
				</li>
				<?php endif; endif; ?>
				<li class="<?php if($maccms['aid'] == 1): ?> active<?php endif; ?> hidden-sm hidden-xs"><a href="<?php echo $maccms['path']; ?>">首页</a></li>
				<?php $__TAG__ = '{"num":"all","order":"asc","by":"sort","ids":"'.$mytheme['nav']['id'].'","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li class="<?php if(($vo['type_id'] == $GLOBALS['type_id'] || $vo['type_id'] == $GLOBALS['type_pid'])): ?> active<?php endif; ?> dropdown-hover hidden-sm hidden-xs">
					<a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a>
					<?php if($vo['childids']): ?>
					<div class="dropdown-box bottom fadeInDown clearfix" style="padding-top: 0;">
					 	<ul class="item nav-list clearfix" style="width: 190px;">
							 <?php $__TAG__ = '{"parent":"'.$vo['type_id'].'","order":"asc","by":"sort","id":"vo2","key":"key2"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
							 <li class="col-md-2 col-sm-2 col-xs-1" style="padding: 6px;"><a class="btn btn-sm btn-block btn-default" href="<?php echo mac_url_type($vo2,[],'show'); ?>"><?php echo $vo2['type_name']; ?></a></li>
							 <?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
					<?php endif; ?>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; if($mytheme['subnav']['is']): $__FOR_START_998267957__=1;$__FOR_END_998267957__=5;for($i=$__FOR_START_998267957__;$i <= $__FOR_END_998267957__;$i+=1){ if($mytheme['subnav']['url'.$i.'']): ?><li class="<?php if($GLOBALS['type_id'] == $mytheme['subnav']['id'.$i.''] || $maccms['aid'] == $mytheme['subnav']['id'.$i.'']): ?>active<?php endif; ?> hidden-md hidden-sm hidden-xs"><a href="<?php echo $mytheme['subnav']['url'.$i.'']; ?>"><?php echo $mytheme['subnav']['text'.$i.'']; ?></a></li><?php endif; } endif; ?>
				
				
			</ul>
			
			<ul class="myui-header__user">	
				<li class="visible-xs">
					<a class="open-search" href="javascript:;"><i class="fa fa-search"></i></a>
				</li>
				<?php if($mytheme['history']['is']): ?>
				<li class="hist dropdown-hover">
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
				<?php endif; if($mytheme['nav1']['is']): $__FOR_START_1526383009__=1;$__FOR_END_1526383009__=3;for($i=$__FOR_START_1526383009__;$i <= $__FOR_END_1526383009__;$i+=1){ if($mytheme['nav1']['url'.$i.'']): ?><li><a href="<?php echo $mytheme['nav1']['url'.$i.'']; ?>" title="<?php echo $mytheme['nav1']['text'.$i.'']; ?>"><i class="fa <?php echo $mytheme['nav1']['icon'.$i.'']; ?>"></i></a></li><?php endif; } endif; if($maccms['user_status'] == 1 && $mytheme['site']['user']): if($user['group']['group_id'] == 1): ?>
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
			<?php if($mytheme['search']['is']): if($mytheme['search']['auto']): ?><script type="text/javascript" src="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/js/jquery.autocomplete.js"></script><?php endif; ?>			
			<ul class="myui-header__search search-box">
				<?php if($mytheme['search']['select']): ?>
				<li class="search-select dropdown-hover" href="javascript:;">
					<span class="text">视频</span> <i class="fa fa-caret-down text-666"></i>
					<div class="dropdown-box bottom fadeInDown">
						<div class="item">
							<p class="vod" data-action="<?php echo mac_url('vod/search'); ?>">视频</p>
							<?php if($mytheme['search']['art']): ?><p class="news" data-action="<?php echo mac_url('art/search'); ?>">资讯</p><?php endif; if($mytheme['search']['actor']): ?><p class="actor" data-action="<?php echo mac_url('actor/search'); ?>">明星</p><?php endif; ?>
						</div>
					</div>
				</li>
				<?php endif; ?>
				<li class="search-item dropdown-hover" href="javascript:;">
					<form id="search" name="search" method="get" action="<?php echo mac_url('vod/search'); ?>" onSubmit="return qrsearch();">
						<input type="text" id="wd" name="wd" class="search_wd form-control" value="<?php echo $param['wd']; ?>" placeholder="<?php echo $mytheme['search']['text']; ?>" autocomplete="off"/>
						<button class="submit search_submit" id="searchbutton" type="submit" name="submit"><i class="fa fa-search"></i></button>							
					</form>
					<?php if($mytheme['search']['hot']): ?>
					<div class="search-hot dropdown-box bottom fadeInDown">
						<div class="item">
							<p class="text-muted">
								热门搜索
							</p>
							<?php $_6280800c00b7e=explode(',',''.$mytheme['search'][hot].''); if(is_array($_6280800c00b7e) || $_6280800c00b7e instanceof \think\Collection || $_6280800c00b7e instanceof \think\Paginator): if( count($_6280800c00b7e)==0 ) : echo "" ;else: foreach($_6280800c00b7e as $key=>$vo): ?>
							<p><a class="text-333" href="<?php echo mac_url('vod/search',['wd'=>$vo]); ?>" title=""><span class="badge<?php if($key+1 == 1): ?> badge-first<?php endif; if($key+1 == 2): ?> badge-second<?php endif; if($key+1 == 3): ?> badge-third<?php endif; ?>"><?php echo $key+1; ?></span> <?php echo $vo; ?></a></p>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
					<?php endif; ?>
				</li>
				<a class="search-close visible-xs" href="javascript:;"><i class="fa fa-close"></i></a>
			</ul>
			<?php endif; ?>			
		</div>
	</div>
		    
</header>


		<div class="myui-container-bg">
			<div class="container">
				<div class="row">
					<?php if($mytheme['home_slide']['is']): ?>
<div class="myui-panel margin-0 clearfix">	
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_bd clearfix">								
			<ul class="myui-vodlist clearfix">
				<li class="<?php if($mytheme['home_slide']['xs']): ?>col-md-wide-4 <?php endif; ?>col-sm-1 col-xs-1">
					<div class="flickity center clearfix" data-align="left" data-next="1"<?php if($mytheme['home_slide']['play']): ?> data-play="<?php echo $mytheme['home_slide']['play_time']; ?>"<?php endif; ?>>
						<?php $__TAG__ = '{"num":"'.$mytheme['home_slide']['num'].'","type":"'.$mytheme['home_slide']['id'].'","order":"desc","by":"'.$mytheme['home_slide']['by'].'","level":"'.$mytheme['home_slide']['level'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
						<div class="col-xs-1 padding-0">
							<a class="myui-vodlist__thumb wide"<?php if($mytheme['site']['link']): ?> href="<?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?>"<?php else: ?> href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" style="background: url(<?php echo mac_url_img($vo['vod_pic_slide']); ?>); <?php if($mytheme['home_slide']['xs']): ?>padding-top: 61.5%;<?php else: ?>padding-top: 35%;<?php endif; ?>">
								<span class="play hidden-xs"></span>		
								<span class="pic-text text-center" style="padding: 10px; font-size: 15px;"><?php echo $vo['vod_name']; ?></span>
							</a>										
						</div>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</li>
				<?php if($mytheme['home_slide']['xs']): $__TAG__ = '{"num":"'.$mytheme['home_slide']['xs_num'].'","type":"'.$mytheme['home_slide']['xs_type'].'","order":"desc","by":"'.$mytheme['home_slide']['xs_by'].'","level":"'.$mytheme['home_slide']['xs_level'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li class="col-md-5 col-sm-<?php echo $mytheme['col']['sm']; ?> col-xs-<?php echo $mytheme['col']['xs_wide']; if($key > $mytheme['home_hot']['xs']): ?> hidden-xs<?php endif; if($key > $mytheme['home_hot']['sm']): ?> hidden-sm<?php endif; ?>">
					<div class="myui-vodlist__box">
						<a class="myui-vodlist__thumb wide lazyload" href="<?php echo mac_url_vod_play($vo); ?>" title="<?php echo $vo['vod_name']; ?>" data-original="<?php if($mytheme['home_slide']['xs_img']): ?><?php echo mac_url_img($vo['vod_pic_slide']); else: ?><?php echo mac_url_img($vo['vod_pic']); endif; ?>">					
							<span class="play hidden-xs"></span>		
							<span class="pic-text text-left"><?php echo $vo['vod_name']; ?></span>
						</a>									
					</div>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; endif; ?>
			</ul>											
		</div>
	</div>
</div>
<?php endif; ?><!-- 推荐如需商用建议支持正版-源码有三岁半资源网分享https://www.sansuib.com -->
				</div>
			</div>
		</div>
	    <div class="container">
	        <div class="row">
				
				<?php if($mytheme['home_tips']['is']): ?>
				<div class="myui-panel active myui-panel-bg2 clearfix">
					<div class="myui-panel-box clearfix">
						<div class="col-xs-1">
							<?php if($mytheme['home_tips']['play']): ?>
							<marquee scrollamount="3"><?php echo $mytheme['home_tips']['text']; ?></marquee>
							<?php else: ?>
							<div class="clearfix">
								<?php echo $mytheme['home_tips']['text']; ?>
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<?php endif; if($mytheme['home_hot']['is']): ?>
<div class="myui-panel myui-panel-bg clearfix">	
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_hd">
			<div class="myui-panel__head clearfix">			
				<span class="text-muted more pull-right">今日更新“<?php echo mac_data_count(0,'today','vod'); ?>”<?php if($mytheme['label']['new']): ?><span class="split-line"></span><a href="<?php echo mac_url('label/new'); ?>">最近更新  <i class="fa fa-angle-right"></i></a><?php endif; ?></span>
				<h3 class="title">
					<?php echo $mytheme['home_hot']['title']; ?>
				</h3>	
			</div>																			
		</div>	
		<div class="myui-panel_bd clearfix">								
			<ul class="myui-vodlist clearfix">
				<?php $__TAG__ = '{"num":"'.$mytheme['home_hot']['num'].'","type":"'.$mytheme['home_hot']['type'].'","order":"desc","by":"'.$mytheme['home_hot']['by'].'","level":"'.$mytheme['home_hot']['level'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li class="col-lg-<?php echo $mytheme['home_hot']['col']; ?>  col-md-<?php echo $mytheme['home_hot']['col']; ?> col-sm-<?php echo $mytheme['col']['sm']; ?> col-xs-<?php echo $mytheme['col']['xs']; if($key > $mytheme['home_hot']['xs']): ?> hidden-xs<?php endif; if($key > $mytheme['home_hot']['sm']): ?> hidden-sm<?php endif; ?>">
					<div class="myui-vodlist__box">
	<a class="myui-vodlist__thumb lazyload"<?php if($mytheme['site']['link']): ?> href="<?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?>"<?php else: ?> href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">
		<span class="play hidden-xs"></span>
		<?php if($mytheme['pic']['tag']): ?><span class="pic-tag pic-tag-<?php echo $mytheme['pic']['tag_seat']; ?>" style="background-color: <?php echo $mytheme['pic']['tag_bg']; ?>;"><?php echo $vo[''.$mytheme['pic']['tag_data'].'']; ?><?php echo $mytheme['pic']['tag_text']; ?></span><?php endif; if($mytheme['pic']['text']): ?><span class="pic-text text-<?php echo $mytheme['pic']['text_face']; ?>"><?php echo $vo[''.$mytheme['pic']['text_data'].'']; ?></span><?php endif; ?>
	</a>									
	<div class="myui-vodlist__detail">
		<h4 class="title text-overflow"><a<?php if($mytheme['site']['link']): ?> href="<?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?>"<?php else: ?> href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h4>
		<?php if($mytheme['pic']['sub']): ?><p class="text text-overflow text-muted <?php echo $mytheme['pic']['sub_self']; ?>"><?php echo $mytheme['pic']['sub_text']; ?><?php echo mac_default($vo[''.$mytheme['pic']['sub_data'].''],'内详'); ?></p><?php endif; ?>
	</div>										
</div>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</div>
</div>
<?php if($mytheme['home']['ad'] && $mytheme['home']['ad1']): ?>
<div class="myui-panel myui-panel-bg clearfix">
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_bd">
			<div class="col-xs-1">
				<?php echo $mytheme['home']['ad1']; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; endif; ?>
<!-- 推荐 -->
				
	        	<?php if($mytheme['home_list']['is']): $__TAG__ = '{"order":"asc","by":"sort","ids":"'.$mytheme['home_list']['id'].'","id":"vo1","key":"key1","flag":"vod"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>
<div class="myui-panel myui-panel-bg clearfix">
	<div class="myui-panel-box clearfix">		
		<div class="myui-panel_bd clearfix">
			<div class="myui-panel_hd">
				<div class="myui-panel__head clearfix">				
					<h3 class="title">
						<?php echo $mytheme['home_list']['title']; ?><?php echo $vo1['type_name']; ?>
					</h3>	
					<a class="more text-muted" href="<?php echo mac_url_type($vo1); ?>">更多 <i class="fa fa-angle-right"></i></a>
				</div>																			
			</div>	
			<ul class="myui-vodlist clearfix">
				<?php $__TAG__ = '{"num":"'.$mytheme['home_list']['num'].'","type":"'.$vo1['type_id'].'","order":"desc","by":"'.$mytheme['home_list']['by'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li class="col-lg-<?php echo $mytheme['home_list']['col']; ?> col-md-<?php echo $mytheme['col']['md']; ?> col-sm-<?php echo $mytheme['col']['sm']; ?> col-xs-<?php echo $mytheme['col']['xs']; if($key > $mytheme['home_list']['xs']): ?> hidden-xs<?php endif; if($key > $mytheme['home_list']['sm']): ?> hidden-sm<?php endif; ?>">
					<div class="myui-vodlist__box">
	<a class="myui-vodlist__thumb lazyload"<?php if($mytheme['site']['link']): ?> href="<?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?>"<?php else: ?> href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">
		<span class="play hidden-xs"></span>
		<?php if($mytheme['pic']['tag']): ?><span class="pic-tag pic-tag-<?php echo $mytheme['pic']['tag_seat']; ?>" style="background-color: <?php echo $mytheme['pic']['tag_bg']; ?>;"><?php echo $vo[''.$mytheme['pic']['tag_data'].'']; ?><?php echo $mytheme['pic']['tag_text']; ?></span><?php endif; if($mytheme['pic']['text']): ?><span class="pic-text text-<?php echo $mytheme['pic']['text_face']; ?>"><?php echo $vo[''.$mytheme['pic']['text_data'].'']; ?></span><?php endif; ?>
	</a>									
	<div class="myui-vodlist__detail">
		<h4 class="title text-overflow"><a<?php if($mytheme['site']['link']): ?> href="<?php echo mac_url_vod_play($vo,['sid'=>1,'nid'=>1]); ?>"<?php else: ?> href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h4>
		<?php if($mytheme['pic']['sub']): ?><p class="text text-overflow text-muted <?php echo $mytheme['pic']['sub_self']; ?>"><?php echo $mytheme['pic']['sub_text']; ?><?php echo mac_default($vo[''.$mytheme['pic']['sub_data'].''],'内详'); ?></p><?php endif; ?>
	</div>										
</div><!-- 列表 -->										
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>						
	</div>
</div>
<?php endforeach; endif; else: echo "" ;endif; endif; ?>
<!-- 列表 -->
	        </div>
	    </div>
		
		<div class="myui-foot clearfix">
	<div class="container">
		<div class="row">
			<?php if($maccms['aid'] == 1): if($mytheme['home_link']['is']): ?>
<div class="myui-panel <?php echo $mytheme['home_link']['self']; ?> clearfix">
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_hd">
			<div class="myui-panel__head clearfix">                                                                                                                                                                                                                                                       
				<h3 class="title">
					友情链接
				</h3>								
			</div>																		
		</div>
		<div class="myui-panel_bd clearfix">
			<div class="col-xs-1">
				<ul class="myui-link__text clearfix">
					<?php $__TAG__ = '{"num":"'.$mytheme['home_link']['num'].'","type":"font","id":"vo","key":"key"}';$__LIST__ = model("Link")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li><a class="text-muted" href="<?php echo $vo['link_url']; ?>" title="<?php echo $vo['link_name']; ?>" target="_blank"><?php echo $vo['link_name']; ?></a></li>								
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>								
			</div>																		
		</div>
	</div>
</div>
<?php endif; ?>
<!-- 友链  如需商用建议支持正版-源码有三岁半资源网分享https://www.sansuib.com -->
			<?php endif; ?>
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

<?php if($maccms['user_status'] == 1 && $mytheme['site']['user']): ?>
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
<?php endif; if($mytheme['nav2']['is']): ?>
<ul class="myui-extra clearfix">
	<li>
		<a class="backtop" href="javascript:scroll(0,0)" title="返回顶部" style="display: none;"><i class="fa fa-angle-up"></i></a>
	</li>
	<?php if($mytheme['style']['skin'] && !$mytheme['color']['is']): ?>
	<li>
		<a class="btnskin" href="javascript:;" title="切换皮肤"><i class="fa fa-windows"></i></a>
	</li>
	<?php endif; ?>
	<li class="visible-xs">
		<a class="open-share" href="javascript:;" title="分享给朋友"><i class="fa fa-share-alt"></i></a>
	</li>
	<?php if($mytheme['img']['weixin_img']): ?>
	<li class="dropdown-hover hidden-xs">
		<a href="javascript:;" title="关注我们" onclick="MyTheme.Layer.Img('关注我们','<?php echo $mytheme['img']['weixin_img']; ?>','扫一扫关注我们')"><i class="fa fa-wechat"></i></a>
		<div class="dropdown-box right fadeInDown clearfix">
			<div class="item text-center">
				<div class="qrcode-box">
					<img class="img-responsive" src="<?php echo $mytheme['img']['weixin_img']; ?>" />
				</div>
				<p>扫一扫关注我们</p>
			</div>
		</div>
	</li>
	<?php endif; if($mytheme['nav2']['sub']): $__FOR_START_722432239__=1;$__FOR_END_722432239__=3;for($i=$__FOR_START_722432239__;$i <= $__FOR_END_722432239__;$i+=1){ if($mytheme['nav2']['url'.$i.'']): ?><li><a href="<?php echo $mytheme['nav2']['url'.$i.'']; ?>" title="<?php echo $mytheme['nav2']['text'.$i.'']; ?>"><i class="fa <?php echo $mytheme['nav2']['icon'.$i.'']; ?>"></i></a></li><?php endif; } endif; ?>
</ul>
<?php endif; if($mytheme['ad']['float']): ?><?php echo $mytheme['ad']['float_html']; endif; if($mytheme['notice']['is']): ?><div class="noticetext hide"><?php echo $mytheme['notice']['html']; ?></div><?php endif; ?>
<script type="text/javascript">
	<?php if($mytheme['qrcode']['is']): ?>MyTheme.Images.Qrcode.Init();<?php endif; if($mytheme['style']['skin'] && !$mytheme['color']['is']): ?>MyTheme.Other.Skin();<?php endif; if($mytheme['notice']['is']): ?>MyTheme.Layer.Popbody('allpop','<?php echo $mytheme['notice']['title']; ?>','.noticetext',<?php echo $mytheme['notice']['day']; ?>,'<?php echo $mytheme['notice']['wide']; ?>','<?php echo $mytheme['notice']['high']; ?>');<?php endif; if($mytheme['bdshare']['is']): ?>
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
	<?php endif; ?>
</script>

<?php if($mytheme['click']['is']): ?>
<script type="text/javascript">
	<?php $_6280800c00927=explode(',',''.$mytheme['click']['url'].''); if(is_array($_6280800c00927) || $_6280800c00927 instanceof \think\Collection || $_6280800c00927 instanceof \think\Paginator): if( count($_6280800c00927)==0 ) : echo "" ;else: foreach($_6280800c00927 as $key=>$vo): ?>
	MyTheme.Ajax('<?php echo $vo; ?>','get','json','',function(){});
	<?php endforeach; endif; else: echo "" ;endif; ?>
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

<?php
	$path = 'application/data/config/quickmenu.txt';
	$info = ''.$my[name].','.$maccms[path_tpl].'admin/index.php'; 
	if (stristr(file_get_contents($path), $info)){
		return true;
	}
	elseif (file_put_contents($path, chr(13) . chr(10) . $info, FILE_APPEND)){
		echo('<script>layer.msg("后台菜单添加成功");</script>');
	}
?>
