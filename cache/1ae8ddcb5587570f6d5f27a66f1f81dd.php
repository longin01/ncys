       <!-- 头部 开始-->
        <div class="head uk-clearfix">
            <a href="/" class="logo  uk-float-left"><img src="<?php echo $this->value['WebLogo']; ?>" alt="<?php echo $this->value['WebTitle']; ?>"></a>
            <div class="search uk-float-left uk-clearfix">
                <form id="ffsearch" name="ffsearch" method="GET" action="">
                    <input class="uk-float-left uk-display-block" type="text" name="search" id="wd"  placeholder="影片名 / 演员名 / 导演">
					 <button class="submit uk-float-left uk-display-block icon iconfont icon-sousuo" type="submit"></button>
                </form>
            </div>
        </div>
        <!--头部 结束 -->
        <!-- 导航 开始 -->
        <div class="nav-warp" >
            <ul class="nav">
                <li class="active"><a href="/" >首页</a></li>
                <li class="nav-parent"><a href="javascript:;" >视频一区</a></li>
                <li class="nav-parent"><a href="javascript:;" >视频二区</a></li>
				<li class="nav-parent"><a href="javascript:;" >视频三区</a></li>
                <li class="nav-parent"><a href="javascript:;" >小说专区</a></li>
                <li class="nav-parent"><a href="javascript:;" >图片专区</a></li>
				 <li class="nav-parent"><a href="javascript:;" >电台种子</a></li>

            </ul>
            <div class="nav-child-box">
                <ul class="nav-child uk-margin-remove uk-clearfix"><?php $vodtypes=(array)$this->value['数据分类'];$shuzu='1,2,3,4,5,6';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a  href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?></ul>
                <ul class="nav-child uk-margin-remove uk-clearfix"><?php $vodtypes=(array)$this->value['数据分类'];$shuzu='7,8,9,10,11,12';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a  href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?></ul>
                <ul class="nav-child uk-margin-remove uk-clearfix"><?php $vodtypes=(array)$this->value['数据分类'];$shuzu='13,14,15,16,17,18';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a  href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?> </ul>
                <ul class="nav-child uk-margin-remove uk-clearfix"><?php $vodtypes=(array)$this->value['数据分类'];$shuzu='19,20,21,22,23,24';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a  href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?></ul>
                <ul class="nav-child uk-margin-remove uk-clearfix"><?php $vodtypes=(array)$this->value['数据分类'];$shuzu='25,26,27,28,29,30';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a  href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?></ul>	
                <ul class="nav-child uk-margin-remove uk-clearfix"><?php $vodtypes=(array)$this->value['数据分类'];$shuzu='31,32,33,34,35,36';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a  href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?></ul>					
            </div>
            
        </div>
        <!-- 导航 结束 -->
		<div class="v-type " id="v-type-nav">
				<center>	
					<?php $AdminTop=(array)$this->value['TopWebAd'];$AdminTop_count=count($AdminTop);for ($x=0; $x<=$AdminTop_count-1; $x++) {$TopWeb=$AdminTop[$x];$TopWebUrl=$TopWeb['TopWebUrl'];$TopRemarks=$TopWeb['TopRemarks'];$TopPicUrl=$TopWeb['TopPicUrl'];$TopState=$TopWeb['TopState'];$TopPicUrlWidth=$TopWeb['TopPicUrlWidth'];$TopPicUrlHeight=$TopWeb['TopPicUrlHeight'];;?> 
						<li><a target="_blank"  href="<?php echo $TopWebUrl?>" ><img style="width:<?php echo $TopPicUrlWidth?>;height:<?php echo $TopPicUrlHeight?>;margin-bottom:2px;" src="<?php echo $TopPicUrl?>"></a></li> 
					 <?php } ?>		
				</center>
		</div>

