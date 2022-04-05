<div class="mod-title">
<div id="link" class="block"><div id="title">合作伙伴</div></div>
</div>
<div class="mod-row col5 clearfix">
<ul>
<li><a href="<?php echo $this->value['UserUrl']; ?>" title="会员中心">会员中心</a></li>
<?php  $IeUrl=(array)$this->value['IeUrl']; $Count=Count($IeUrl); for ($x=0; $x<=$Count-1; $x++) {  $IeUrls=$IeUrl[$x];  ?>
<li><a href="<?php 	echo  $IeUrls['IeUrlWebUrl'] ?>" title="<?php 	echo  $IeUrls['IeUrlName'] ?>" target="_blank"><?php 	echo  $IeUrls['IeUrlName'] ?></a></li>
<?php  } ?>
<div class="clear"></div>
</ul>
</div>
<p style="margin:10px 0; text-align:center;">&copy; Copyright <?php echo $this->value['WebTitle']; ?> 2021. All rights Reserved . 9Ccms By</p>
<?php echo $this->value['WebAdS']; ?>