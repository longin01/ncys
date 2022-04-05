<div class="navbar">
<div class="container">
<div class="panel-control-right"><a href="#" data-activates="slide-out-right" class="sidenav-control-right"><i class="fa fa-bars"></i></a></div>
<div class="site-title"><a href="<?php echo $this->value['WEBUrl']; ?>"><h1>Jevin<i class="fa fa-play-circle"></i>APP</h1></a></div>
</div>
</div>
<div class="panel-control-right">
<ul id="slide-out-right" class="side-nav collapsible" data-collapsible="accordion">
<li><div class="photos"><h3><?php echo $this->value['WebTitle']; ?></h3></div></li>
<li class="top-list"><a href="<?php echo $this->value['WEBUrl']; ?>"><i class="fa fa-home"></i>首页</a></li>
{NCCMS-If:condiciton=WebUserLimit}
<li class="top-list"><a href="<?php echo $this->value['UserUrl']; ?>"><i class="fa fa-user"></i> 账号</a></li>
{/NCCMS-If}
<li><div class="collapsible-header"><i class="fa fa fa-language"></i> 选择语言<span><i class="fa fa-chevron-right"></i></span></div>
<div class="collapsible-body">
<ul class="side-nav-panel">
<li><a href="#" onclick="googleTranslate('en|af');">南非语</a></li>
<li><a href="#" onclick="googleTranslate('en|sq');">阿尔巴尼亚语</a></li>
<li><a href="#" onclick="googleTranslate('en|ar');">阿拉伯</a></li>
<li><a href="#" onclick="googleTranslate('en|hy');">亚美尼亚人</a></li>
<li><a href="#" onclick="googleTranslate('en|az');">阿塞拜疆</a></li>
<li><a href="#" onclick="googleTranslate('en|eu');">巴斯克</a></li>
<li><a href="#" onclick="googleTranslate('en|be');">白俄罗斯语</a></li>
<li><a href="#" onclick="googleTranslate('en|bg');">保加利亚语</a></li>
<li><a href="#" onclick="googleTranslate('en|ca');">加泰罗尼亚语</a></li>
<li><a href="#" onclick="googleTranslate('en|zh-CN');">简体中文</a></li>
<li><a href="#" onclick="googleTranslate('en|zh-TW');">繁体中文</a></li>
<li><a href="#" onclick="googleTranslate('en|hr');">克罗地亚语</a></li>
<li><a href="#" onclick="googleTranslate('en|cs');">捷克文</a></li>
<li><a href="#" onclick="googleTranslate('en|da');">丹麦文</a></li>
<li><a href="#" onclick="googleTranslate('en|nl');">荷兰语</a></li>
<li><a href="#" onclick="googleTranslate('en|en');">英语</a></li>
<li><a href="#" onclick="googleTranslate('en|et');">爱沙尼亚语</a></li>
<li><a href="#" onclick="googleTranslate('en|tl');">菲律宾语</a></li>
<li><a href="#" onclick="googleTranslate('en|fi');">芬兰</a></li>
<li><a href="#" onclick="googleTranslate('en|fr');">法文</a></li>
<li><a href="#" onclick="googleTranslate('en|gl');">加利西亚人</a></li>
<li><a href="#" onclick="googleTranslate('en|ka');">格鲁吉亚人</a></li>
<li><a href="#" onclick="googleTranslate('en|de');">德语</a></li>
<li><a href="#" onclick="googleTranslate('en|el');">希腊语</a></li>
<li><a href="#" onclick="googleTranslate('en|ht');">海地克里奥尔语</a></li>
<li><a href="#" onclick="googleTranslate('en|iw');">希伯来语</a></li>
<li><a href="#" onclick="googleTranslate('en|hi');">印地语</a></li>
<li><a href="#" onclick="googleTranslate('en|hu');">匈牙利</a></li>
<li><a href="#" onclick="googleTranslate('en|is');">冰岛</a></li>
<li><a href="#" onclick="googleTranslate('en|id');">印度尼西亚</a></li>
<li><a href="#" onclick="googleTranslate('en|ga');">爱尔兰人</a></li>
<li><a href="#" onclick="googleTranslate('en|it');">意大利文</a></li>
<li><a href="#" onclick="googleTranslate('en|ja');">日本</a></li>
<li><a href="#" onclick="googleTranslate('en|ko');">韩语</a></li>
<li><a href="#" onclick="googleTranslate('en|lv');">拉脱维亚语</a></li>
<li><a href="#" onclick="googleTranslate('en|lt');">立陶宛语</a></li>
<li><a href="#" onclick="googleTranslate('en|mk');">马其顿语</a></li>
<li><a href="#" onclick="googleTranslate('en|ms');">马来语</a></li>
<li><a href="#" onclick="googleTranslate('en|mt');">马耳他语</a></li>
<li><a href="#" onclick="googleTranslate('en|no');">挪威</a></li>
<li><a href="#" onclick="googleTranslate('en|fa');">波斯语</a></li>
<li><a href="#" onclick="googleTranslate('en|pl');">抛光</a></li>
<li><a href="#" onclick="googleTranslate('en|pt');">葡萄牙语</a></li>
<li><a href="#" onclick="googleTranslate('en|ro');">罗马尼亚语</a></li>
<li><a href="#" onclick="googleTranslate('en|ru');">俄语</a></li>
<li><a href="#" onclick="googleTranslate('en|sr');">塞尔维亚</a></li>
<li><a href="#" onclick="googleTranslate('en|sk');">斯洛伐克文</a></li>
<li><a href="#" onclick="googleTranslate('en|sl');">斯洛文尼亚文</a></li>
<li><a href="#" onclick="googleTranslate('en|es');">西班牙文</a></li>
<li><a href="#" onclick="googleTranslate('en|sw');">斯瓦希里语</a></li>
<li><a href="#" onclick="googleTranslate('en|sv');">瑞典</a></li>
<li><a href="#" onclick="googleTranslate('en|th');">泰国</a></li>
<li><a href="#" onclick="googleTranslate('en|tr');">土耳其</a></li>
<li><a href="#" onclick="googleTranslate('en|uk');">乌克兰</a></li>
<li><a href="#" onclick="googleTranslate('en|ur');">乌尔都语</a></li>
<li><a href="#" onclick="googleTranslate('en|vi');">越南文</a></li>
<li><a href="#" onclick="googleTranslate('en|cy');">威尔士语</a></li>
<li><a href="#" onclick="googleTranslate('en|yi');">意第绪语</a></li>
<div id="google_translate_element2"></div>
</ul>
</div>
</li>
<li><div class="collapsible-header"><i class="fa fa-play-circle-o"></i> 视频一区<span><i class="fa fa-chevron-right"></i></span></div>
<div class="collapsible-body">
<ul class="side-nav-panel">
<?php $vodtypes=(array)$this->value['数据分类'];$shuzu='1,2,3,4,5,6';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> 
<li><a href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>" title="<?php echo $name?>"><?php echo $name?></a></li>
<?php } ?>
</ul>
</div>
</li>
<li><div class="collapsible-header"><i class="fa fa-play-circle"></i> 视频二区<span><i class="fa fa-chevron-right"></i></span></div>
<div class="collapsible-body">
<ul class="side-nav-panel">
<?php $vodtypes=(array)$this->value['数据分类'];$shuzu='7,8,9,10,11,12';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> 
<li><a href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>" title="<?php echo $name?>"><?php echo $name?></a></li>
<?php } ?>
</ul>
</div>
</li>
<li><div class="collapsible-header"><i class="fa fa fa-play"></i> 视频三区<span><i class="fa fa-chevron-right"></i></span></div>
<div class="collapsible-body">
<ul class="side-nav-panel">
<?php $vodtypes=(array)$this->value['数据分类'];$shuzu='13,14,15,16,17';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> 
<li><a href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>" title="<?php echo $name?>"><?php echo $name?></a></li>
<?php } ?>

</ul>
</div>
</li>
<li><div class="collapsible-header"><i class="fa fa-link"></i> 合作伙伴<span><i class="fa fa-chevron-right"></i></span></div>
<div class="collapsible-body">
<ul class="side-nav-panel">
<?php  $IeUrl=(array)$this->value['IeUrl']; $Count=Count($IeUrl); for ($x=0; $x<=$Count-1; $x++) {  $IeUrls=$IeUrl[$x];  ?>
<li><a href="<?php 	echo  $IeUrls['IeUrlWebUrl'] ?>" title="<?php 	echo  $IeUrls['IeUrlName'] ?>" target="_blank"><?php 	echo  $IeUrls['IeUrlName'] ?></a></li>
<?php  } ?>
</ul>
</div>
</li>
<li><div class="collapsible-header"><i class="fa fa-tag"></i> 今日热搜<span><i class="fa fa-chevron-right"></i></span></div>
<div class="collapsible-body">
<ul class="side-nav-panel">
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
</ul>
</div>
</li>
<li><div class="form-list"><form><input type="search" name="search" placeholder="视频搜索"><button class="button"><i class="fa fa-search"></i></button></form></div></li>
</ul>
</div>