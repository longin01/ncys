<!DOCTYPE html>
<html lang="zxx">
<head>
<meta charset="UTF-8">
<title><?php echo $this->value['WebTitle']; ?>-<?php echo $this->value['ListName']; ?>-<?php echo $this->value['Name']; ?></title>
<meta name="author" content="<?php echo $this->value['WebTitle']; ?>">
<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>,<?php echo $this->value['ListName']; ?>,<?php echo $this->value['Name']; ?>">
<meta name="description" content="<?php echo $this->value['WebDescription']; ?>,<?php echo $this->value['ListName']; ?>,<?php echo $this->value['Name']; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="True">
<link rel="shortcut icon" href="<?php echo $this->value['StylePath']; ?>/img/favicon.png">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/materialize.min.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/slick.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/slick-theme.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/owl.carousel.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/owl.theme.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/owl.transitions.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/fakeLoader.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/lightbox.min.css">
<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/style.css">
</head>
<body>
<!-- 页头 开始 -->
<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
<!-- 页头 结束 -->
<div class="blog-single app-pages app-section">
<div class="container">
<div class="entry">
<a href="<?php echo $this->value['CUrl']; ?>" title="<?php echo $this->value['Name']; ?>"><img src="<?php echo $this->value['Pic']; ?>" alt="<?php echo $this->value['Name']; ?>" class="imgPlay" style="height:280px;object-fit:cover;"></a>
<div class="user-date">
<ul>
<li><a href="<?php echo $this->value['CUrl']; ?>"><i class="fa fa-tag"></i> <?php echo $this->value['ListName']; ?></a></li>
<li><a href="<?php echo $this->value['CUrl']; ?>"><i class="fa fa-clock-o"></i> <?php echo $this->value['Time']; ?></a></li>
</ul>
</div>
<h5><?php echo $this->value['Name']; ?></h5>
<p><?php echo $this->value['overview']; ?>......</p>
<p><button class="button" onClick="location.href='<?php echo $this->value['CUrl']; ?>';">在线阅读</button></p>
<?php $Video=(array)$this->value['VideoWebAd'];$Video_count=count($Video);for ($x=0; $x<=$Video_count-1; $x++) {$VideoWeb=$Video[$x];$VideoWebUrl=$VideoWeb['VideoWebUrl'];$VideoRemarks=$VideoWeb['VideoRemarks'];$VideoPicUrl=$VideoWeb['VideoPicUrl'];$VideoState=$VideoWeb['VideoState'];$VideoPicUrlWidth=$VideoWeb['VideoPicUrlWidth'];$VideoPicUrlHeight=$VideoWeb['VideoPicUrlHeight'];;?> 
<p style="margin:5px 0;"><a href="<?php echo $VideoWebUrl?>" target="_blank"><img style="width:<?php echo $VideoPicUrlWidth?>;height:<?php echo $VideoPicUrlHeight?>;" src="<?php echo $VideoPicUrl?>"></a></p>
<?php } ?>
<div class="share">
<ul>
<li><h6>热搜:</h6></li>
<li><a href="/?m=video_search*舔*1" target="_blank">舔</a></li>
<li><a href="/?m=video_search*91*1" target="_blank">91</a></li>
<li><a href="/?m=video_search*3P*1" target="_blank">3P</a></li>
<li><a href="/?m=video_search*SM*1" target="_blank">SM</a></li>
<li><a href="/?m=video_search*ktv*1" target="_blank">ktv</a></li>
<li><a href="/?m=video_search*COS*1" target="_blank">COS</a></li>
<li><a href="/?m=video_search*插b*1" target="_blank">插b</a></li>
<li><a href="/?m=video_search*1pon*1" target="_blank">1pon</a></li>
<li><a href="/?m=video_search*Paco*1" target="_blank">Paco</a></li>
<li><a href="/?m=video_search*Carib*1" target="_blank">Carib</a></li>
<li><a href="/?m=video_search*淫穴*1" target="_blank">淫穴</a></li>
<li><a href="/?m=video_search*另类*1" target="_blank">另类</a></li>
<li><a href="/?m=video_search*全裸*1" target="_blank">全裸</a></li>
<li><a href="/?m=video_search*宅男*1" target="_blank">宅男</a></li>
<li><a href="/?m=video_search*医院*1" target="_blank">医院</a></li>
<li><a href="/?m=video_search*淑女*1" target="_blank">淑女</a></li>
<li><a href="/?m=video_search*姐姐*1" target="_blank">姐姐</a></li>
<li><a href="/?m=video_search*初恋*1" target="_blank">初恋</a></li>
<li><a href="/?m=video_search*女友*1" target="_blank">女友</a></li>
<li><a href="/?m=video_search*素人*1" target="_blank">素人</a></li>
<li><a href="/?m=video_search*灌醉*1" target="_blank">灌醉</a></li>
<li><a href="/?m=video_search*骚逼*1" target="_blank">骚逼</a></li>
<li><a href="/?m=video_search*长腿*1" target="_blank">长腿</a></li>
<li><a href="/?m=video_search*妹纸*1" target="_blank">妹纸</a></li>
<li><a href="/?m=video_search*嫩逼*1" target="_blank">嫩逼</a></li>
<li><a href="/?m=video_search*厕所*1" target="_blank">厕所</a></li>
<li><a href="/?m=video_search*无码*1" target="_blank">无码</a></li>
<li><a href="/?m=video_search*露脸*1" target="_blank">露脸</a></li>
<li><a href="/?m=video_search*纹身*1" target="_blank">纹身</a></li>
<li><a href="/?m=video_search*电车*1" target="_blank">电车</a></li>
<li><a href="/?m=video_search*情趣*1" target="_blank">情趣</a></li>
<li><a href="/?m=video_search*淫水*1" target="_blank">淫水</a></li>
<li><a href="/?m=video_search*捆绑*1" target="_blank">捆绑</a></li>
<li><a href="/?m=video_search*搭讪*1" target="_blank">搭讪</a></li>
<li><a href="/?m=video_search*自慰*1" target="_blank">自慰</a></li>
<li><a href="/?m=video_search*肤白*1" target="_blank">肤白</a></li>
<li><a href="/?m=video_search*表姐*1" target="_blank">表姐</a></li>
<li><a href="/?m=video_search*白丝*1" target="_blank">白丝</a></li>
<li><a href="/?m=video_search*约炮*1" target="_blank">约炮</a></li>
<li><a href="/?m=video_search*高挑*1" target="_blank">高挑</a></li>
<li><a href="/?m=video_search*后门*1" target="_blank">后门</a></li>
<li><a href="/?m=video_search*透明*1" target="_blank">透明</a></li>
<li><a href="/?m=video_search*18岁*1" target="_blank">18岁</a></li>
<li><a href="/?m=video_search*国产*1" target="_blank">国产</a></li>
<li><a href="/?m=video_search*借贷*1" target="_blank">借贷</a></li>
<li><a href="/?m=video_search*欧美*1" target="_blank">欧美</a></li>
<li><a href="/?m=video_search*自拍*1" target="_blank">自拍</a></li>
<li><a href="/?m=video_search*偷拍*1" target="_blank">偷拍</a></li>
<li><a href="/?m=video_search*萝莉*1" target="_blank">萝莉</a></li>
<li><a href="/?m=video_search*学妹*1" target="_blank">学妹</a></li>
<li><a href="/?m=video_search*情侣*1" target="_blank">情侣</a></li>
<li><a href="/?m=video_search*空姐*1" target="_blank">空姐</a></li>
<li><a href="/?m=video_search*模特*1" target="_blank">模特</a></li>
<li><a href="/?m=video_search*护士*1" target="_blank">护士</a></li>
<li><a href="/?m=video_search*丝袜*1" target="_blank">丝袜</a></li>
<li><a href="/?m=video_search*乱伦*1" target="_blank">乱伦</a></li>
<li><a href="/?m=video_search*双飞*1" target="_blank">双飞</a></li>
<li><a href="/?m=video_search*人妻*1" target="_blank">人妻</a></li>
<li><a href="/?m=video_search*迷奸*1" target="_blank">迷奸</a></li>
<li><a href="/?m=video_search*强奸*1" target="_blank">强奸</a></li>
<li><a href="/?m=video_search*巨乳*1" target="_blank">巨乳</a></li>
<li><a href="/?m=video_search*制服*1" target="_blank">制服</a></li>
<li><a href="/?m=video_search*剧情*1" target="_blank">剧情</a></li>
<li><a href="/?m=video_search*网红*1" target="_blank">网红</a></li>
<li><a href="/?m=video_search*主播*1" target="_blank">主播</a></li>
<li><a href="/?m=video_search*肛交*1" target="_blank">肛交</a></li>
<li><a href="/?m=video_search*足交*1" target="_blank">足交</a></li>
<li><a href="/?m=video_search*口交*1" target="_blank">口交</a></li>
<li><a href="/?m=video_search*动漫*1" target="_blank">动漫</a></li>
<li><a href="/?m=video_search*同事*1" target="_blank">同事</a></li>
<li><a href="/?m=video_search*超模*1" target="_blank">超模</a></li>
<li><a href="/?m=video_search*少妇*1" target="_blank">少妇</a></li>
<li><a href="/?m=video_search*大奶*1" target="_blank">大奶</a></li>
<li><a href="/?m=video_search*直播*1" target="_blank">直播</a></li>
<li><a href="/?m=video_search*嫩妹*1" target="_blank">嫩妹</a></li>
<li><a href="/?m=video_search*美胸*1" target="_blank">美胸</a></li>
<li><a href="/?m=video_search*无套*1" target="_blank">无套</a></li>
<li><a href="/?m=video_search*后入*1" target="_blank">后入</a></li>
<li><a href="/?m=video_search*尤物*1" target="_blank">尤物</a></li>
<li><a href="/?m=video_search*美腿*1" target="_blank">美腿</a></li>
<li><a href="/?m=video_search*高跟*1" target="_blank">高跟</a></li>
<li><a href="/?m=video_search*少女*1" target="_blank">少女</a></li>
<li><a href="/?m=video_search*金发*1" target="_blank">金发</a></li>
<li><a href="/?m=video_search*御姐*1" target="_blank">御姐</a></li>
<li><a href="/?m=video_search*偷情*1" target="_blank">偷情</a></li>
<li><a href="/?m=video_search*乳交*1" target="_blank">乳交</a></li>
<li><a href="/?m=video_search*拳交*1" target="_blank">拳交</a></li>
<li><a href="/?m=video_search*下药*1" target="_blank">下药</a></li>
<li><a href="/?m=video_search*做爱*1" target="_blank">做爱</a></li>
<li><a href="/?m=video_search*上司*1" target="_blank">上司</a></li>
<li><a href="/?m=video_search*援交*1" target="_blank">援交</a></li>
<li><a href="/?m=video_search*学生*1" target="_blank">学生</a></li>
<li><a href="/?m=video_search*野外*1" target="_blank">野外</a></li>
<li><a href="/?m=video_search*萌妹*1" target="_blank">萌妹</a></li>
<li><a href="/?m=video_search*黑人*1" target="_blank">黑人</a></li>
<li><a href="/?m=video_search*大秀*1" target="_blank">大秀</a></li>
<li><a href="/?m=video_search*丰满*1" target="_blank">丰满</a></li>
<li><a href="/?m=video_search*唯美*1" target="_blank">唯美</a></li>
<li><a href="/?m=video_search*另类*1" target="_blank">另类</a></li>
<li><a href="/?m=video_search*特写*1" target="_blank">特写</a></li>
<li><a href="/?m=video_search*爆菊*1" target="_blank">爆菊</a></li>
<li><a href="/?m=video_search*炮友*1" target="_blank">炮友</a></li>
<li><a href="/?m=video_search*白虎*1" target="_blank">白虎</a></li>
<li><a href="/?m=video_search*女儿*1" target="_blank">女儿</a></li>
<li><a href="/?m=video_search*孙女*1" target="_blank">孙女</a></li>
<li><a href="/?m=video_search*滴蜡*1" target="_blank">滴蜡</a></li>
<li><a href="/?m=video_search*高潮*1" target="_blank">高潮</a></li>
<li><a href="/?m=video_search*酒店*1" target="_blank">酒店</a></li>
<li><a href="/?m=video_search*变态*1" target="_blank">变态</a></li>
<li><a href="/?m=video_search*性虐*1" target="_blank">性虐</a></li>
<li><a href="/?m=video_search*抽插*1" target="_blank">抽插</a></li>
<li><a href="/?m=video_search*外围*1" target="_blank">外围</a></li>
<li><a href="/?m=video_search*女神*1" target="_blank">女神</a></li>
<li><a href="/?m=video_search*学院*1" target="_blank">学院</a></li>
<li><a href="/?m=video_search*黑丝*1" target="_blank">黑丝</a></li>
<li><a href="/?m=video_search*淫乱*1" target="_blank">淫乱</a></li>
<li><a href="/?m=video_search*90后*1" target="_blank">90后</a></li>
<li><a href="/?m=video_search*会所*1" target="_blank">会所</a></li>
<li><a href="/?m=video_search*肥臀*1" target="_blank">肥臀</a></li>
<li><a href="/?m=video_search*喷潮*1" target="_blank">喷潮</a></li>
<li><a href="/?m=video_search*美眉*1" target="_blank">美眉</a></li>
<li><a href="/?m=video_search*粉嫩*1" target="_blank">粉嫩</a></li>
<li><a href="/?m=video_search*国语*1" target="_blank">国语</a></li>
<li><a href="/?m=video_search*虐待*1" target="_blank">虐待</a></li>
<li><a href="/?m=video_search*大屌*1" target="_blank">大屌</a></li>
<li><a href="/?m=video_search*妹妹*1" target="_blank">妹妹</a></li>
<li><a href="/?m=video_search*妈妈*1" target="_blank">妈妈</a></li>
<li><a href="/?m=video_search*爸爸*1" target="_blank">爸爸</a></li>
<li><a href="/?m=video_search*迷药*1" target="_blank">迷药</a></li>
<li><a href="/?m=video_search*吹箫*1" target="_blank">吹箫</a></li>
<li><a href="/?m=video_search*爆乳*1" target="_blank">爆乳</a></li>
<li><a href="/?m=video_search*泳池*1" target="_blank">泳池</a></li>
<li><a href="/?m=video_search*尾随*1" target="_blank">尾随</a></li>
<li><a href="/?m=video_search*推油*1" target="_blank">推油</a></li>
<li><a href="/?m=video_search*迷晕*1" target="_blank">迷晕</a></li>
<li><a href="/?m=video_search*大胸*1" target="_blank">大胸</a></li>
<li><a href="/?m=video_search*处女*1" target="_blank">处女</a></li>
<li><a href="/?m=video_search*调教*1" target="_blank">调教</a></li>
<li><a href="/?m=video_search*教室*1" target="_blank">教室</a></li>
<li><a href="/?m=video_search*秘书*1" target="_blank">秘书</a></li>
<li><a href="/?m=video_search*极品*1" target="_blank">极品</a></li>
<li><a href="/?m=video_search*勾引*1" target="_blank">勾引</a></li>
<li><a href="/?m=video_search*双穴*1" target="_blank">双穴</a></li>
<li><a href="/?m=video_search*苗条*1" target="_blank">苗条</a></li>
<li><a href="/?m=video_search*闺蜜*1" target="_blank">闺蜜</a></li>
<li><a href="/?m=video_search*大学*1" target="_blank">大学</a></li>
<li><a href="/?m=video_search*高中*1" target="_blank">高中</a></li>
<li><a href="/?m=video_search*道具*1" target="_blank">道具</a></li>
<li><a href="/?m=video_search*初恋*1" target="_blank">初恋</a></li>
<li><a href="/?m=video_search*诱惑*1" target="_blank">诱惑</a></li>
<li><a href="/?m=video_search*浴室*1" target="_blank">浴室</a></li>
<li><a href="/?m=video_search*猛插*1" target="_blank">猛插</a></li>
<li><a href="/?m=video_search*儿子*1" target="_blank">儿子</a></li>
<li><a href="/?m=video_search*发情*1" target="_blank">发情</a></li>
<li><a href="/?m=video_search*开放*1" target="_blank">开放</a></li>
<li><a href="/?m=video_search*宾馆*1" target="_blank">宾馆</a></li>
<li><a href="/?m=video_search*嫩穴*1" target="_blank">嫩穴</a></li>
<li><a href="/?m=video_search*表妹*1" target="_blank">表妹</a></li>
<li><a href="/?m=video_search*姐夫*1" target="_blank">姐夫</a></li>
<li><a href="/?m=video_search*翘臀*1" target="_blank">翘臀</a></li>
<li><a href="/?m=video_search*淫叫*1" target="_blank">淫叫</a></li>
<li><a href="/?m=video_search*多水*1" target="_blank">多水</a></li>
<li><a href="/?m=video_search*内射*1" target="_blank">内射</a></li>
<li><a href="/?m=video_search*气质*1" target="_blank">气质</a></li>
<li><a href="/?m=video_search*喝酒*1" target="_blank">喝酒</a></li>
<li><a href="/?m=video_search*天使*1" target="_blank">天使</a></li>
<li><a href="/?m=video_search*啪啪*1" target="_blank">啪啪</a></li>
<li><a href="/?m=video_search*面具*1" target="_blank">面具</a></li>
<li><a href="/?m=video_search*骚女*1" target="_blank">骚女</a></li>
<li><a href="/?m=video_search*淫荡*1" target="_blank">淫荡</a></li>
<li><a href="/?m=video_search*宅男*1" target="_blank">宅男</a></li>
<li><a href="/?m=video_search*病房*1" target="_blank">病房</a></li>
<li><a href="/?m=video_search*房东*1" target="_blank">房东</a></li>
<li><a href="/?m=video_search*针孔*1" target="_blank">针孔</a></li>
<li><a href="/?m=video_search*打炮*1" target="_blank">打炮</a></li>
<li><a href="/?m=video_search*鲜肉*1" target="_blank">鲜肉</a></li>
<li><a href="/?m=video_search*对白*1" target="_blank">对白</a></li>
<li><a href="/?m=video_search*家里*1" target="_blank">家里</a></li>
<li><a href="/?m=video_search*颜值*1" target="_blank">颜值</a></li>
<li><a href="/?m=video_search*土豪*1" target="_blank">土豪</a></li>
<li><a href="/?m=video_search*淫乱*1" target="_blank">淫乱</a></li>
<li><a href="/?m=video_search*销魂*1" target="_blank">销魂</a></li>
<li><a href="/?m=video_search*开档*1" target="_blank">开档</a></li>
<li><a href="/?m=video_search*无套*1" target="_blank">无套</a></li>
<li><a href="/?m=video_search*白领*1" target="_blank">白领</a></li>
<li><a href="/?m=video_search*爱液*1" target="_blank">爱液</a></li>
<li><a href="/?m=video_search*娇嫩*1" target="_blank">娇嫩</a></li>
<li><a href="/?m=video_search*呻吟*1" target="_blank">呻吟</a></li>
<li><a href="/?m=video_search*屁眼*1" target="_blank">屁眼</a></li>
<li><a href="/?m=video_search*女王*1" target="_blank">女王</a></li>
<li><a href="/?m=video_search*咪咪*1" target="_blank">咪咪</a></li>
<li><a href="/?m=video_search*不雅*1" target="_blank">不雅</a></li>
<li><a href="/?m=video_search*清纯*1" target="_blank">清纯</a></li>
<li><a href="/?m=video_search*精油*1" target="_blank">精油</a></li>
<li><a href="/?m=video_search*淋浴*1" target="_blank">淋浴</a></li>
<li><a href="/?m=video_search*一本道*1" target="_blank">一本道</a></li>
<li><a href="/?m=video_search*摄像头*1" target="_blank">摄像头</a></li>
<li><a href="/?m=video_search*一字马*1" target="_blank">一字马</a></li>
<li><a href="/?m=video_search*办公室*1" target="_blank">办公室</a></li>
<li><a href="/?m=video_search*连衣裙*1" target="_blank">连衣裙</a></li>
<li><a href="/?m=video_search*按摩器*1" target="_blank">按摩器</a></li>
<li><a href="/?m=video_search*粉木耳*1" target="_blank">粉木耳</a></li>
<li><a href="/?m=video_search*更衣室*1" target="_blank">更衣室</a></li>
<li><a href="/?m=video_search*卫生间*1" target="_blank">卫生间</a></li>
<li><a href="/?m=video_search*富二代*1" target="_blank">富二代</a></li>
<li><a href="/?m=video_search*牛仔裤*1" target="_blank">牛仔裤</a></li>
<li><a href="/?m=video_search*小姨子*1" target="_blank">小姨子</a></li>
<li><a href="/?m=video_search*俱乐部*1" target="_blank">俱乐部</a></li>
<li><a href="/?m=video_search*拜金女*1" target="_blank">拜金女</a></li>
<li><a href="/?m=video_search*小媳妇*1" target="_blank">小媳妇</a></li>
</ul>
</div>
<div class="comment">
<h6>相关推荐</h6>
<?php  $BookType=$this->value['BookType']; $MYSQLVOD=(array)$this->value['BookTypeNCSQL'];shuffle($MYSQLVOD);  $Count=6;for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVODs=$MYSQLVOD[$x];  ?>
<div class="content"><a href="<?php 	echo  $Host1.'book_detail'.$Host2.$MYSQLVODs['a_id'].$Host3.$BookType.$Host4; ?>" title="<?php 	echo  $MYSQLVODs['a_name'] ?>"><img src="<?php 	echo  $MYSQLVODs['a_pic'] ?>" alt="<?php 	echo  $MYSQLVODs['a_name'] ?>" class="imgPlay" style="height:200px;object-fit:cover;"></a></div>
<?php  } ?>
</div>
<div class="post-comment">
<h6>视频搜索</h6>
<div class="content">
<form>
<div class="input-field"><input type="text" class="validate" name="search" placeholder="视频搜索"></div>
<button class="button">搜索</button>
</form>
</div>
</div>
</div>
</div>
</div>
<!-- 页尾 开始 -->
<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
<!-- 页尾 结束 -->
<script src="<?php echo $this->value['StylePath']; ?>/js/materialize.min.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/slick.min.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/custom.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/language.js"></script>
</body>
</html>