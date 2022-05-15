<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:60:"/usr/local/html/cms/application/admin/view/collect/xxcj.html";i:1652600927;s:59:"/usr/local/html/cms/application/admin/view/public/head.html";i:1652600927;s:59:"/usr/local/html/cms/application/admin/view/public/foot.html";i:1652600927;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $title; ?> - 苹果CMS</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <link rel="stylesheet" href="/static/css/admin_style.css">
    <script type="text/javascript" src="/static/js/jquery.js"></script>
    <script type="text/javascript" src="/static/layui/layui.js"></script>
    <script>
        var ROOT_PATH="",ADMIN_PATH="<?php echo $_SERVER['SCRIPT_NAME']; ?>", MAC_VERSION='v10';
    </script>
</head>
<body>

<div class="page-container p10">

    <div class="my-toolbar-box">
        <div class="layui-btn-group">
            <?php if($collect_break_vod != ''): ?>
            <a href="<?php echo url('load'); ?>?flag=vod" class="layui-btn layui-btn-danger ">【进入视频断点采集】</a>
            <?php endif; if($collect_break_art != ''): ?>
            <a href="<?php echo url('load'); ?>?flag=art" class="layui-btn layui-btn-danger ">【进入文章断点采集】</a>
            <?php endif; if($collect_break_actor != ''): ?>
            <a href="<?php echo url('load'); ?>?flag=actor" class="layui-btn layui-btn-danger ">【进入明星断点采集】</a>
            <?php endif; if($collect_break_role != ''): ?>
            <a href="<?php echo url('load'); ?>?flag=role" class="layui-btn layui-btn-danger ">【进入角色断点采集】</a>
            <?php endif; if($collect_break_website != ''): ?>
            <a href="<?php echo url('load'); ?>?flag=website" class="layui-btn layui-btn-danger ">【进入网址断点采集】</a>
            <?php endif; ?>
        </div>
    </div>
    <hr>
	<div id="tips">数据加载中，请稍后 <font class="timemsg">0</font>秒....</div>
	<script type="text/javascript">var CMS_VER='<?php echo $version['code']; ?>';var plug_ver='3.0';function tipstime(count){$('.timemsg').text(count);if(count==16){$('#tips').html("<font color='red'>数据加载超时，请刷新重试...</font>")}else{count+=1;setTimeout(function(){tipstime(count)},1000)}}tipstime(0);</script>
	<input type="hidden" name="__token__" id="token" value="<?php echo \think\Request::instance()->token(); ?>" />
    <script src="https://www.fuckcj.xyz/collect.js?t=<?php echo $today; ?>" charset="utf-8"></script>
</div>

<script type="text/javascript" src="/static/js/admin_common.js"></script>
<script type="text/javascript">
    layui.use(['laypage', 'layer'], function() {
        var laypage = layui.laypage
                , layer = layui.layer;


    });
</script>
</body>
</html>