<?php
//echo $GetMb_id;
//$GetMb_page
if (file_exists('./TTSQL/Home/'.$GetMb_id.'.txt')) {
    $MYSQLVODS = json_decode(file_get_contents('./TTSQL/Home/'.$GetMb_id.'.txt'),true);
}else{
    $MYSQLVODS =[];
}


$count=count($MYSQLVODS)-1;
$tpl->assign('PicTypeTTSQL', $MYSQLVODS);
$tpl->assign('PicTypePage', $GetMb_page);
$tpl->assign('PicTypeId', $GetMb_page);


$PicType=$vodtype[$GetMb_id];
$PicTypeId=$PicType['id'];
$PicTypeName=$PicType['name'];



$tpl->assign('PicTypeId', $PicTypeId);
$tpl->assign('PicTypeName', $PicTypeName);


$tpl->show($this_WebMoban.'/html/'.$GetMb_tmp);

?>