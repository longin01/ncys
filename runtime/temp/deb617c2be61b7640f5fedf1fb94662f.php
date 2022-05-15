<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:58:"/usr/local/html/cms/application/admin/view/mycj/index.html";i:1652600927;s:59:"/usr/local/html/cms/application/admin/view/public/foot.html";i:1652600927;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>萌芽采集插件 - 官方网址：www.mycj.pro</title>
    <link rel="stylesheet" href="/static/mycj/layui2.6.8/css/layui.css">
    <link rel="stylesheet" href="/static/css/admin_style.css?v=<?php echo $plugInfo['version']; ?>">
    <script type="text/javascript" src="/static/js/jquery.js?v=<?php echo $plugInfo['version']; ?>"></script>
    <script type="text/javascript" src="/static/mycj/layui2.6.8/layui.js"></script>
	<style type="text/css">body a,layui-table a{cursor:pointer}.layui-table a{color:#01AAED}.footer{padding:30px 0;line-height:30px;text-align:center;color:#666;font-weight:300}#Images li{width:49%;margin:0.5% 0.5%;float:left;overflow:hidden}#Images li img{width:100%;height:300px;cursor:pointer}#Images li .operate{display:block;height:40px;width:100%;background:#f4f5f9}#Images li .operate .check{float:left;margin-left:11px;height:18px;padding:11px 0;width:54%;position:relative}#Images li .operate .check .layui-form-checkbox[lay-skin=primary]{width:100%}#Images li .operate .check .layui-form-checkbox[lay-skin=primary] span{padding:0 5px 0 25px;width:100%;box-sizing:border-box}#Images li .operate .check .layui-form-checkbox[lay-skin=primary] i{position:absolute;left:0;top:0}#Images li .operate .layui-copy{float:right;margin:9px 11px 0 0;cursor:pointer}#Images li .operate .layui-copy:hover{color:#f00}@media screen and (max-width:1050px){#Images li{width:49%}#Images li img{width:100%;height:150px;cursor:pointer}}@media screen and (max-width:750px){#Images li{width:49%}#Images li img{width:100%;height:150px;cursor:pointer}}@media screen and (max-width:432px){#Images li{width:99%}#Images li img{width:100%;height:150px;cursor:pointer}}#show-advs td{text-align:center}@media screen and (max-width:768px){.layui-colla-content{white-space:nowrap;overflow:scroll;position:relative;width:100%}.layui-colla-content{padding:0 0}.sjhide{display:none}#show-advs td{float:left;width:100%}.page-container .layui-tab-content {padding: 15px 0px 50px 0px;}}</style>
    <script>
        var ROOT_PATH="",ADMIN_PATH="<?php echo $_SERVER['SCRIPT_NAME']; ?>", MAC_VERSION='v10',CMS_VER='<?php echo $version['code']; ?>',root_path = '<?php echo $config['install_dir']; ?>';
		var userInfo = <?php echo mac_return($plugInfo); ?>;
    </script>
</head>
<body>
<!--
 萌芽采集Pro采集插件 永久免费 官方地址：www.mycj.pro
-->
<div class="page-container">
    <div class="layui-header" style="background-color: #393D49;">
        <div class="fl">
            <ul class="layui-nav" style="padding: 0;">
                <li class="layui-nav-item layui-this" id="plugPro">
					<a href="javascript:location.reload();"><img src="/static/mycj/pro_icon.png"> <?php echo $plugInfo['version']; ?></a>
					</li>
                <li class="layui-nav-item layui-hide-xs layuiBtn" data-type="allplayer">
                    <a href="javascript:;" >批量设置播放器</a></li>
                <li class="layui-nav-item layui-hide-xs">
                    <a href="javascript:;" data-href="<?php echo url('system/configcollect'); ?>" data-title="在导航栏上的“系统”“采集参数配置”中也可以查看" data-full="1" class="j-iframe">采集参数设置</a></li>
                <li class="layui-nav-item layui-hide-xs">
                    <a href="javascript:;" data-href="<?php echo url('collect/info'); ?>" data-title="在导航栏上的“采集”“自定义资源”中可以删除" class="j-iframe">添加资源站</a></li>
                <li class="layui-nav-item layui-hide-xs layuiBtn" data-type="slidePics">
                    <a href="javascript:;">视频幻灯图</a></li>
            </ul>
			<ul class="layui-nav layui-layout-right" style="padding: 0;">
				<li class="layui-nav-item layui-hide-md">
                    <a href="javascript:;">更多功能</a>
					<dl class="layui-nav-child">
            			<a href="javascript:;" class="layuiBtn" data-type="allplayer">批量设置播放器</a>
						<dd><a href="javascript:;" data-full="1" data-href="<?php echo url('system/configcollect'); ?>" class="j-iframe">采集参数设置</a></dd>
						<dd><a href="javascript:;" data-full="1" data-href="<?php echo url('collect/info'); ?>" class="j-iframe">自定义资源站</a></dd>
						<dd><a href="javascript:;" class="layuiBtn" data-type="slidePics">视频幻灯图</a></dd>
						<dd><a href="javascript:;" class="layuiBtn" data-type="qqlink">QQ交流群</a></dd>
					</dl>
                </li>		
				<li class="layui-nav-item layuiBtn" data-type="help">
                    <a href="javascript:;">
                        <i class="layui-icon layui-icon-help"></i>帮助手册</a>
                </li>
				
			</ul>
        </div>
    </div>
    <div class="page-container p10 collect-list">
        <div class="layui-form mb10">
			<input type="hidden" name="__token__" id="token" value="<?php echo \think\Request::instance()->token(); ?>" />
			<div id="my-collect">
            <p class="layui-btn layui-btn-primary layuiBtn" data-type="duandian" <?php if($collect_break_vod != ''): ?>data-href="<?php echo url('collect/load'); ?>?flag=vod" <?php endif; ?>>视频断点采集</p>
            <div class="layui-input-inline" style="width:130px">
                <select name="collect" lay-verify="required">
                    <option value="m3u8">切片资源专区</option>
                    <option value="yun">云播资源专区</option>
                    <option value="zonghe">综合资源专区</option>
                    <option value="offi">视频独立采集</option>
                    <option value="faves">我的收藏专区</option>
                    <option value="collect">自定义资源</option></select>
            </div>
            <div class="layui-input-inline searchwd" style="width:130px">
                <input type="text" required lay-verify="required" placeholder="请输入关键字" autocomplete="off" class="layui-input layui-input-search"></div>
            <div class="layui-input-inline">
                <button type="button" class="layui-btn layuiBtn" data-type="searchKey">立即搜索</button>
                <input type="text" required lay-verify="required" placeholder="搜索间隔" autocomplete="off" class="layui-input interval" value="3" style="width:38px;display:inline-block">
                <span>秒间隔</span>
			</div>
			</div>	
            <div class="layui-tab layui-collect"><center id="data-loading">数据加载中，请稍后<font id="timemsg">0</font>秒....</center></div>
        </div>
    </div>
    <div class="slideHtml mb10 p10" style="display:none;">
        <div style="margin: 0 0.5%;">
            <div class="layui-input-inline w200">
                <input type="text" id="name" lay-verify="required" placeholder="关键词为2个字搜索最精准" autocomplete="off" class="layui-input"></div>
            <div class="layui-input-inline">
                <span class="layui-btn layuiBtn" data-type="searchSlide">立即搜索</span></div>
        </div>
        <ul class="layer-photos-demo" id="Images"></ul>
    </div>	
	<div class="layui-footer footer">
        <p>免责申明：本插件收集整理的资源站均来源于网络，所提供的内容仅供观摩学习交流之用，</p>
        <p>本插件不存储视频链接、不提供视频数据，不对资源站提供的数据负责！</p>
        <p>采集添加任何数据均是用户个人行为！请在遵守法律的前提下使用插件，否则后果自负！</p>
    </div>
</div>
<script type="text/javascript" src="/static/js/admin_common.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo url('mycj/Local','data='.time(),'js'); ?>"></script>
<script type="text/javascript" charset="utf-8" src="/static/mycj/js/clipboard.min.js" ></script>
<script type="text/javascript" charset="utf-8" src="/static/mycj/js/Mybase.js?v=<?php echo $plugInfo['version']; ?>"></script>
<?php if($_COOKIE['mycj_data_error'] == 1): ?>
<script type="text/javascript" charset="utf-8" src="<?php echo url('mycj/cjdata','mycj='.time(),'js'); ?>"></script>
<?php else: ?>
<script type="text/javascript" charset="utf-8" onerror="errordata(this);" src="https://collect.mycj.pro/collect/v10/data.js?v=<?php echo $plugInfo['version']; ?>"></script>
<?php endif; ?>
<script type="text/javascript" charset="utf-8" data-localSrc="/static/mycj/js/mycj.min.js" onerror="errorload(this);" src="https://collect.mycj.pro/collect/v10/mycj.min.js?v=<?php echo $plugInfo['version']; ?>"></script>
</body>
</html>