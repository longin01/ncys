<html>
<head>
	<title><?php echo $this->value['WebTitle']; ?>-<?php  echo $this->value['PicTypeName']; ?>套图分类页</title>
	<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>,<?php  echo $this->value['PicTypeName']; ?>" />
	<meta name="description" content="<?php echo $this->value['WebDescription']; ?>,<?php  echo $this->value['PicTypeName']; ?>" />
	<link rel="icon" type="image/png" href="<?php echo $this->value['StylePath']; ?>/img/logo.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="index, follow" />
	<meta name="revisit-after" content="1 days" />
	<script src="<?php echo $this->value['StylePath']; ?>/js/jquery.min.js"></script>
	<script src="<?php echo $this->value['StylePath']; ?>/js/uikit.min.js"></script>
	<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->value['StylePath']; ?>/css/iconfont.css" /> 
	<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/m.style.css">
</head>
<body>
<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
<div class="v-type " style="margin-top: 0rem; ">
    <div class="v-type-title uk-clearfix"><div><h3 class="type-h3">套图<?php  echo $this->value['PicTypeName']; ?>列表</h3></div></div>
            <ul class="v-list uk-clearfix uk-display-block">
			<?php  $MYSQLVODS=(array)$this->value['PicTypeNCSQL'];$PicTypeId=$this->value['PicTypeId'];$GetMb_page=$this->value['PicTypePage']; $Count=8;$MYSQLVODS=PAGE($MYSQLVODS,$GetMb_page,$Count);  foreach($MYSQLVODS['source'] as $s){  ?>
                <li class="v-item v-item">
                    <a href="<?php 	echo  $Host1.'pic_detail'.$Host2.$s['a_id'].$Host3.$PicTypeId.$Host4; ?>" class="uk-display-block">
                        <div class="v-cover lazy" data-original="<?php 	echo  $s['a_remarks'] ?>"></div>
                        <h3 class="v-title"><?php 	echo  $s['a_name'] ?></h3>
                        <div class="uk-clearfix v-icon">
                            <p class="uk-float-left uk-margin-right">
                                <i class="icon iconfont icon-play"></i>
                                <span><?php 	echo   rand(5, 10000); ?></span>
                            </p>
                            <p class="uk-float-left uk-margin-top-remove">
                                <i class="icon iconfont icon-zan"></i>
                                <span>欣赏套图乐趣无限</span>
                            </p>
                        </div>
                    </a>
                </li>						
			<?php  } ?>
            </ul>
            <div id="wr-page"></div>
            <script src="<?php echo $this->value['StylePath']; ?>/js/page.js?t=1"></script>
            <script type="text/javascript">
                $("#wr-page").wrpage({
                    pagesize: '<?php 	echo $MYSQLVODS['total']; ?>',
                    wr_current: '<?php 	echo $GetMb_page; ?>',
                    baseUrl: '<?php 	echo $Host1.'pic_list'.$Host2.$PicTypeId.$Host3.'currentPage'.$Host4; ?>',
                })
            </script>
</div>
<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
 </body>
</html>

