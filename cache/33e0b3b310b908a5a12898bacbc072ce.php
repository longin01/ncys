<div class="statusbar-overlay"></div>
<div class="panel-overlay"></div>
<div class="panel panel-left panel-cover panel-control">
<ul>
<li><div class="photos"><img src="<?php echo $this->value['WebLogo']; ?>" alt="<?php echo $this->value['WebTitle']; ?>"><h3><?php echo $this->value['WebTitle']; ?></h3></div></li>
<li><a href="<?php echo $this->value['WEBUrl']; ?>" class="external"><i class="fa fa-home"></i>首页</a></li>
<li><a href="<?php echo $this->value['UserUrl']; ?>" class="external"><i class="fa fa-user"></i>会员</a></li>
<li><div class="list-block accordion-list"><div class="accordion-item"><a href="#" class="item-content item-link"><div class="item-inner"><i class="fa fa-play"></i>视频一区</div></a>
<div class="accordion-item-content">
<ul>
<?php $vodtypes=(array)$this->value['数据分类'];$shuzu='1,2,3,4,5,6';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> 
<li><a href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>" title="<?php echo $name?>" class="external"><i class="fa fa-angle-right"></i> <?php echo $name?></a></li>
<?php } ?>
</ul>
</div>
</div>
</div>	
</li>
<li><div class="list-block accordion-list"><div class="accordion-item"><a href="#" class="item-content item-link"><div class="item-inner"><i class="fa fa-play"></i>视频二区</div></a>
<div class="accordion-item-content">
<ul>
<?php $vodtypes=(array)$this->value['数据分类'];$shuzu='7,8,9,10,11,12';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> 
<li><a href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>" title="<?php echo $name?>" class="external"><i class="fa fa-angle-right"></i> <?php echo $name?></a></li>
<?php } ?>
</ul>
</div>
</div>
</div>	
</li>
<li><div class="list-block accordion-list"><div class="accordion-item"><a href="#" class="item-content item-link"><div class="item-inner"><i class="fa fa-play"></i>视频三区</div></a>
<div class="accordion-item-content">
<ul>
<?php $vodtypes=(array)$this->value['数据分类'];$shuzu='13,14,15,16,17';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> 
<li><a href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>" title="<?php echo $name?>" class="external"><i class="fa fa-angle-right"></i> <?php echo $name?></a></li>
<?php } ?>
</ul>
</div>
</div>
</div>	
</li>
<li>
<div class="list-block accordion-list"><div class="accordion-item"><a href="#" class="item-content item-link"><div class="item-inner"><i class="fa fa-headphones"></i>电台收听</div></a>
<div class="accordion-item-content">
<ul>
<?php $vodtypes=(array)$this->value['数据分类'];$shuzu='31,32,33,34';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> 
<li><a href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>" title="<?php echo $name?>" class="external"><i class="fa fa-angle-right"></i> <?php echo $name?></a></li>
<?php } ?>
</ul>
</div>
</div>
</div>	
</li>
<li><div class="list-block accordion-list"><div class="accordion-item"><a href="#" class="item-content item-link"><div class="item-inner"><i class="fa fa-cloud-download"></i>种子下载</div></a>
<div class="accordion-item-content">
<ul>
<?php $vodtypes=(array)$this->value['数据分类'];$shuzu='35,36';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> 
<li><a href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>" title="<?php echo $name?>" class="external"><i class="fa fa-angle-right"></i> <?php echo $name?></a></li>
<?php } ?>
</ul>
</div>
</div>
</div>	
</li>
<li><div class="list-block accordion-list"><div class="accordion-item"><a href="#" class="item-content item-link"><div class="item-inner"><i class="fa fa-image"></i>美图专区</div></a>
<div class="accordion-item-content">
<ul>
<?php $vodtypes=(array)$this->value['数据分类'];$shuzu='25,26,27,28,29,30';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> 
<li><a href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>" title="<?php echo $name?>" class="external"><i class="fa fa-angle-right"></i> <?php echo $name?></a></li>
<?php } ?>
</ul>
</div>
</div>
</div>	
</li>
<li><div class="list-block accordion-list"><div class="accordion-item"><a href="#" class="item-content item-link"><div class="item-inner"><i class="fa fa-book"></i>小说资源</div></a>
<div class="accordion-item-content">
<ul>
<?php $vodtypes=(array)$this->value['数据分类'];$shuzu='19,20,21,22,23,24';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> 
<li><a href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>" title="<?php echo $name?>" class="external"><i class="fa fa-angle-right"></i> <?php echo $name?></a></li>
<?php } ?>
</ul>
</div>
</div>
</div>	
</li>
<li><div class="list-block accordion-list"><div class="accordion-item"><a href="#" class="item-content item-link"><div class="item-inner"><i class="fa fa-link"></i>合作伙伴</div></a>
<div class="accordion-item-content">
<ul>
<?php  $IeUrl=(array)$this->value['IeUrl']; $Count=Count($IeUrl); for ($x=0; $x<=$Count-1; $x++) {  $IeUrls=$IeUrl[$x];  ?>
<li><a href="<?php 	echo  $IeUrls['IeUrlWebUrl'] ?>" title="<?php 	echo  $IeUrls['IeUrlName'] ?>" target="_blank" class="external"><i class="fa fa-angle-right"></i> <?php 	echo  $IeUrls['IeUrlName'] ?></a></li>
<?php  } ?>
</ul>
</div>
</div>
</div>	
</li>
</ul>
</div>
<div class="panel panel-right panel-cover panel-control">
<ul>
<li class="first"><h6>选择语言</h6></li>
<li><a href="#" onclick="googleTranslate('en|af');" class="external close-panel"><i class="fa fa-language"></i> 南非语</a></li>
<li><a href="#" onclick="googleTranslate('en|sq');" class="external close-panel"><i class="fa fa-language"></i> 阿尔巴尼亚语</a></li>
<li><a href="#" onclick="googleTranslate('en|ar');" class="external close-panel"><i class="fa fa-language"></i> 阿拉伯</a></li>
<li><a href="#" onclick="googleTranslate('en|hy');" class="external close-panel"><i class="fa fa-language"></i> 亚美尼亚人</a></li>
<li><a href="#" onclick="googleTranslate('en|az');" class="external close-panel"><i class="fa fa-language"></i> 阿塞拜疆</a></li>
<li><a href="#" onclick="googleTranslate('en|eu');" class="external close-panel"><i class="fa fa-language"></i> 巴斯克</a></li>
<li><a href="#" onclick="googleTranslate('en|be');" class="external close-panel"><i class="fa fa-language"></i> 白俄罗斯语</a></li>
<li><a href="#" onclick="googleTranslate('en|bg');" class="external close-panel"><i class="fa fa-language"></i> 保加利亚语</a></li>
<li><a href="#" onclick="googleTranslate('en|ca');" class="external close-panel"><i class="fa fa-language"></i> 加泰罗尼亚语</a></li>
<li><a href="#" onclick="googleTranslate('en|zh-CN');" class="external close-panel"><i class="fa fa-language"></i> 简体中文</a></li>
<li><a href="#" onclick="googleTranslate('en|zh-TW');" class="external close-panel"><i class="fa fa-language"></i> 繁体中文</a></li>
<li><a href="#" onclick="googleTranslate('en|hr');" class="external close-panel"><i class="fa fa-language"></i> 克罗地亚语</a></li>
<li><a href="#" onclick="googleTranslate('en|cs');" class="external close-panel"><i class="fa fa-language"></i> 捷克文</a></li>
<li><a href="#" onclick="googleTranslate('en|da');" class="external close-panel"><i class="fa fa-language"></i> 丹麦文</a></li>
<li><a href="#" onclick="googleTranslate('en|nl');" class="external close-panel"><i class="fa fa-language"></i> 荷兰语</a></li>
<li><a href="#" onclick="googleTranslate('en|en');" class="external close-panel"><i class="fa fa-language"></i> 英语</a></li>
<li><a href="#" onclick="googleTranslate('en|et');" class="external close-panel"><i class="fa fa-language"></i> 爱沙尼亚语</a></li>
<li><a href="#" onclick="googleTranslate('en|tl');" class="external close-panel"><i class="fa fa-language"></i> 菲律宾语</a></li>
<li><a href="#" onclick="googleTranslate('en|fi');" class="external close-panel"><i class="fa fa-language"></i> 芬兰</a></li>
<li><a href="#" onclick="googleTranslate('en|fr');" class="external close-panel"><i class="fa fa-language"></i> 法文</a></li>
<li><a href="#" onclick="googleTranslate('en|gl');" class="external close-panel"><i class="fa fa-language"></i> 加利西亚人</a></li>
<li><a href="#" onclick="googleTranslate('en|ka');" class="external close-panel"><i class="fa fa-language"></i> 格鲁吉亚人</a></li>
<li><a href="#" onclick="googleTranslate('en|de');" class="external close-panel"><i class="fa fa-language"></i> 德语</a></li>
<li><a href="#" onclick="googleTranslate('en|el');" class="external close-panel"><i class="fa fa-language"></i> 希腊语</a></li>
<li><a href="#" onclick="googleTranslate('en|ht');" class="external close-panel"><i class="fa fa-language"></i> 海地克里奥尔语</a></li>
<li><a href="#" onclick="googleTranslate('en|iw');" class="external close-panel"><i class="fa fa-language"></i> 希伯来语</a></li>
<li><a href="#" onclick="googleTranslate('en|hi');" class="external close-panel"><i class="fa fa-language"></i> 印地语</a></li>
<li><a href="#" onclick="googleTranslate('en|hu');" class="external close-panel"><i class="fa fa-language"></i> 匈牙利</a></li>
<li><a href="#" onclick="googleTranslate('en|is');" class="external close-panel"><i class="fa fa-language"></i> 冰岛</a></li>
<li><a href="#" onclick="googleTranslate('en|id');" class="external close-panel"><i class="fa fa-language"></i> 印度尼西亚</a></li>
<li><a href="#" onclick="googleTranslate('en|ga');" class="external close-panel"><i class="fa fa-language"></i> 爱尔兰人</a></li>
<li><a href="#" onclick="googleTranslate('en|it');" class="external close-panel"><i class="fa fa-language"></i> 意大利文</a></li>
<li><a href="#" onclick="googleTranslate('en|ja');" class="external close-panel"><i class="fa fa-language"></i> 日本</a></li>
<li><a href="#" onclick="googleTranslate('en|ko');" class="external close-panel"><i class="fa fa-language"></i> 韩语</a></li>
<li><a href="#" onclick="googleTranslate('en|lv');" class="external close-panel"><i class="fa fa-language"></i> 拉脱维亚语</a></li>
<li><a href="#" onclick="googleTranslate('en|lt');" class="external close-panel"><i class="fa fa-language"></i> 立陶宛语</a></li>
<li><a href="#" onclick="googleTranslate('en|mk');" class="external close-panel"><i class="fa fa-language"></i> 马其顿语</a></li>
<li><a href="#" onclick="googleTranslate('en|ms');" class="external close-panel"><i class="fa fa-language"></i> 马来语</a></li>
<li><a href="#" onclick="googleTranslate('en|mt');" class="external close-panel"><i class="fa fa-language"></i> 马耳他语</a></li>
<li><a href="#" onclick="googleTranslate('en|no');" class="external close-panel"><i class="fa fa-language"></i> 挪威</a></li>
<li><a href="#" onclick="googleTranslate('en|fa');" class="external close-panel"><i class="fa fa-language"></i> 波斯语</a></li>
<li><a href="#" onclick="googleTranslate('en|pl');" class="external close-panel"><i class="fa fa-language"></i> 抛光</a></li>
<li><a href="#" onclick="googleTranslate('en|pt');" class="external close-panel"><i class="fa fa-language"></i> 葡萄牙语</a></li>
<li><a href="#" onclick="googleTranslate('en|ro');" class="external close-panel"><i class="fa fa-language"></i> 罗马尼亚语</a></li>
<li><a href="#" onclick="googleTranslate('en|ru');" class="external close-panel"><i class="fa fa-language"></i> 俄语</a></li>
<li><a href="#" onclick="googleTranslate('en|sr');" class="external close-panel"><i class="fa fa-language"></i> 塞尔维亚</a></li>
<li><a href="#" onclick="googleTranslate('en|sk');" class="external close-panel"><i class="fa fa-language"></i> 斯洛伐克文</a></li>
<li><a href="#" onclick="googleTranslate('en|sl');" class="external close-panel"><i class="fa fa-language"></i> 斯洛文尼亚文</a></li>
<li><a href="#" onclick="googleTranslate('en|es');" class="external close-panel"><i class="fa fa-language"></i> 西班牙文</a></li>
<li><a href="#" onclick="googleTranslate('en|sw');" class="external close-panel"><i class="fa fa-language"></i> 斯瓦希里语</a></li>
<li><a href="#" onclick="googleTranslate('en|sv');" class="external close-panel"><i class="fa fa-language"></i> 瑞典</a></li>
<li><a href="#" onclick="googleTranslate('en|th');" class="external close-panel"><i class="fa fa-language"></i> 泰国</a></li>
<li><a href="#" onclick="googleTranslate('en|tr');" class="external close-panel"><i class="fa fa-language"></i> 土耳其</a></li>
<li><a href="#" onclick="googleTranslate('en|uk');" class="external close-panel"><i class="fa fa-language"></i> 乌克兰</a></li>
<li><a href="#" onclick="googleTranslate('en|ur');" class="external close-panel"><i class="fa fa-language"></i> 乌尔都语</a></li>
<li><a href="#" onclick="googleTranslate('en|vi');" class="external close-panel"><i class="fa fa-language"></i> 越南文</a></li>
<li><a href="#" onclick="googleTranslate('en|cy');" class="external close-panel"><i class="fa fa-language"></i> 威尔士语</a></li>
<li><a href="#" onclick="googleTranslate('en|yi');" class="external close-panel"><i class="fa fa-language"></i> 意第绪语</a></li>
<div id="google_translate_element2"></div>
</ul>
</div>