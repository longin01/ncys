<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:38:"template/mytheme/html/public/jump.html";i:1653471608;s:58:"/usr/local/html/cms/template/mytheme/html/public/data.html";i:1653471608;s:61:"/usr/local/html/cms/template/mytheme/html/public/include.html";i:1653471608;s:59:"/usr/local/html/cms/template/mytheme/html/public/style.html";i:1653471608;s:56:"/usr/local/html/cms/template/mytheme/html/diy/style.html";i:1653471608;s:59:"/usr/local/html/cms/template/mytheme/html/user/include.html";i:1653471608;}*/ ?>
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
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title>系统提示......</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="shortcut icon" href="<?php echo $mytheme['site']['ico']; ?>" type="image/x-icon" />					
<link rel="stylesheet" href="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/css/mytheme-font.css?v=<?php echo $my['version']; ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/css/mytheme-ui.css?v=<?php echo $my['version']; ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/css/mytheme-site.css?v=<?php echo $my['version']; ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo mac_default($mytheme['site']['static'],''.$maccms['path_tpl'].''); ?>statics/css/<?php echo $mytheme['style']['default']; ?>.css?v=<?php echo $my['version']; ?>" type="text/css" name="default" />
<?php if($mytheme['skin']['is'] && !$mytheme['color']['is']): $_628e094fa1890=explode(',',''.$mytheme['skin']['style'].''); if(is_array($_628e094fa1890) || $_628e094fa1890 instanceof \think\Collection || $_628e094fa1890 instanceof \think\Paginator): if( count($_628e094fa1890)==0 ) : echo "" ;else: foreach($_628e094fa1890 as $key=>$vo): ?>
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
    <script src="<?php echo $maccms['path']; ?>static/js/jquery.imageupload.js"></script>
<style type="text/css">.myui-user__head .btn-default{padding:15px}.myui-user__head .fa{font-size:16px;vertical-align:-1px}.myui-user__name{border-radius:5px;margin-bottom:20px;position:relative;padding:50px 30px;background-image:linear-gradient(135deg,#f761a1 10%,#8c1bab 100%)}.myui-user__name dt{float:left}.myui-user__name dd{margin-left:70px;padding-top:5px}.myui-user__name .logout{position:absolute;top:0;right:15px;margin-top:20px}.myui-user__form p{margin:0;padding:15px 0}.myui-user__form .xiang{display:inline-block;width:120px;padding-right:15px;text-align:right;color:#999}.myui-user__form input.form-control{display:inline-block;width:200px;margin-right:10px}.myui-login__form{width:350px;padding:30px;margin: 80px auto; box-shadow:0 2px 5px rgba(0,0,0,.1)}.myui-login__form li{margin:20px 0}@media (max-width:767px){.myui-user__head .btn-default{padding:15px 5px}.myui-user__name{padding:20px}.myui-user__name h3{margin:3px 0 5px;font-size:15px}.myui-user__head li a,.myui-vodlist__text li a{font-size:14px}.stui_login__form,.stui_login__form.active{width:100%;margin:0;padding:0}.myui-user__form p{padding:10px;font-size:14px}.myui-user__form .xiang.active{display:inline-block;width:auto;text-align:left}.myui-user__form input.form-control{width:100%;}.myui-user__form input.form-control.active{ width: 80%;}.myui-user__form p #btn_submit{width:120px}.myui-user__form .btn_unbind{display:inline-block;margin-top:5px}}</style>
</head>
<body style="background-color: #fff;">
<div class="container">
	<div class="row">
		<div class="myui-msg__form text-center clearfix">
			<div class="myui-panel clearfix">
				<div class="myui-panel-box clearfix">		
					<div class="myui-panel_bd">
						<div class="myui-msg__head">
							<p><i class="fa fa-warning"></i></p>
							<h4><?php echo $msg; ?></h4>
						</div>
						<div class="myui-msg__body">
							页面<span class="text-red" id="wait"><?php echo($wait);?></span> 秒后自动 <a class="text-link" id="href" href="<?php echo($url);?>">跳转</a>，返回 <a class="text-link" href="<?php echo $maccms['path']; ?>">首页</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
    // (function(){
    //     var wait = document.getElementById('wait'),
    //             href = document.getElementById('href').href;
    //     var interval = setInterval(function(){
    //         var time = --wait.innerHTML;
    //         if(time <= 0) {
    //             location.href = href;
    //             clearInterval(interval);
    //         };
    //     }, 1000);
    // })();
</script>
</body>
</html>