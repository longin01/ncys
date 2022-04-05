<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<title>正在直播中.... {cms_title}</title>
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
<h1 class='page-header'><i class='fa fa-pagelines'></i>本直播为实时直播！<div class='page-header-menu'></div></h1>
<div class="row" style="position: relative">
<div class="m-l-15 m-r-15 alert alert-warning alert-dismissible" role="alert">
    {cmsobj_content}


</div>


</div>
{cms_banner_b}

</div>




</div>


{include file="footer.php"}
 
</body>
</html>