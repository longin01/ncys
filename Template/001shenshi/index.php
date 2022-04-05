<!DOCTYPE html>
<html>

<head>
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>
	<meta charset='utf-8'>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' name='viewport'>
	<title>
		{cms_title}
	</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
	<link href="{cms_template}/font/iconfont.css" rel="stylesheet">
	<link href="{cms_template}/css/uikit.min.css" rel="stylesheet">
	<link href="{cms_template}/css/style.css" rel="stylesheet">
	<link href="{cms_template}/css/common.css" rel="stylesheet">
	<script src="{cms_template}/js/jquery.js"></script>
	<script src="{cms_template}/js/uikit.min.js"></script>
</head>

<body>
	{include file="header.php"}
	<div class='page-with-sidebar' id='page-container'>
		<div class='content'>






            {video_hot}
                <h1 class='page-header'><i class='fa fa-pagelines'></i>
                    {type_name}
                    <div class='page-header-menu'></div>
                </h1>
                <div class='row' style='position: relative'>
                    {video_list:8}
                        <a class='col-md-3 item-video-container' href="{list_view}">
                            <div class='item-video'>
                                <div class="item-cove">
                                    <img src="{list_pic}">
                                </div>
                                <div class='title'>
                                    {list_name}
                                </div>
                            </div>
                        </a>
                    {/video_list}
                </div>
            {/video_hot}

            {if $cms_config['live_status']=='1'}
            <h1 class='page-header'><i class='fa fa-pagelines'></i>直播推荐<div class='page-header-menu'></div></h1>
                <div class='row' style='position: relative'>
                    {live_hot_list:8}
                        <a class='col-md-3 item-video-container' href="{list_view}">
                            <div class='item-video'>
                                <div class="item-cove">
                                    <img src='{list_pic}'>
                                </div>
                                <div class='title'>
                                    {list_name}
                                </div>
                            </div>
                        </a>
                    {/live_hot_list}
                </div>
            {/if}

			

			<h1 class='page-header'><i class='fa fa-pagelines'></i>友情链接<div class='page-header-menu'></div>
			</h1>
			<div class='row' style='position: relative'>
				<ul class="f-links">
					{cms_link}
				</ul>
			</div>
		</div>

	</div>

	{include file="footer.php"}

</body>

</html>