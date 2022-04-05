<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>
        {cms_title}-文章列表
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
			<h1 class='page-header'><i class='fa fa-pagelines'></i>
				小说专区-{type_name}
				<div class='page-header-menu'></div>
			</h1>
			<div>
				<div class="video-content">
                    <ul class="art-list">
                        {book_list:20}
                        <li>
                            <p>
                                <a href="{list_view}" target="_blank">
                                    {list_name}
                                </a>
                            </p>
                            <span>{list_time}</span>
                        </li>
                        {/book_list}
    
                    </ul>
                </div>

        <!-- 分页 -->
        <div class='pagination-container text-center'>
                <ul class='pagination'>
                    <li><a href="{cms_page:first}">首页</a></li>
                    <li><a href="{cms_page:prev}">上一页</a></li>
                    <li><a href="javascript:;">共{cms_page:count}页</a></li>
                    <li><a href="javascript:;">当前{cms_page:current}页</a></li>
                    <li><a href="{cms_page:next}">下一页</a> </li>
                    <li><a href="{cms_page:last}">尾页</a> </li>
                </ul>
        </div>
            
        </div>
		</div>

    </div>
    


    </div>

    </div>
    {include file="footer.php"}

</body>
</html>
