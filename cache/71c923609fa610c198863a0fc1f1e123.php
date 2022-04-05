<div id="nav" class="nav-wrap">
<div class="area">
<dl>
<dt><span class="logo"><a href="<?php echo $this->value['WEBUrl']; ?>"><?php echo $this->value['WebTitle']; ?></a></span></dt>
<dd class="mt"><a href="<?php echo $this->value['WEBUrl']; ?>"><i class="icon-home"></i></a></dd>
<dd style="margin-right:60px;">
<form>
<input type="text" style="background-color:#FFF;padding:10px;border:0;color:#F00;" name="search" placeholder="视频搜索">
</form>
</dd>
</dl>
</div>
</div>
<div id="sliderBox"></div>
<div id="menu" class="menu-wrap">
<div class="area">
<dl class="first">
<dt><a href="#">一区</a></dt>
<?php $vodtypes=(array)$this->value['数据分类'];$shuzu='1,2,3,4,5,6';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> 
<dd><a href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></dd>
<?php } ?>
</dl>
<dl class="first">
<dt><a href="#">二区</a></dt>
<?php $vodtypes=(array)$this->value['数据分类'];$shuzu='13,14,15,16,17';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> 
<dd><a href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></dd>
<?php } ?>
</dl>

</dl>
<dl class="first" style="overflow-y:auto;height:80px;">
<dt><a href="#">赞助广告</a></dt>
<dd><a href="#" onclick="">广告1</a></dd>
<dd><a href="#" onclick="">广告2</a></dd>
<dd><a href="#" onclick="">广告3</a></dd>
<dd><a href="#" onclick="">广告4</a></dd>
<dd><a href="#" onclick="">广告5</a></dd>
<dd><a href="#" onclick="">广告6</a></dd>


<div id="google_translate_element2"></div>
</dl>
<div id="subMenuBox"></div>
</div>
</div>