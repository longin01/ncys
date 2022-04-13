<?php
//echo $GetMb_id;
//$GetMb_page


if (file_exists('./TTSQL/Home/'.$GetMb_id.'.txt')) {
    $MYSQLVODS = json_decode(file_get_contents('./TTSQL/Home/'.$GetMb_id.'.txt'),true);
}else{
    $MYSQLVODS =[];
}
$count=count($MYSQLVODS)-1;
$tpl->assign('BookTypeTTSQL', $MYSQLVODS);
$tpl->assign('BookTypePage', $GetMb_page);
$tpl->assign('BookTypeId', $GetMb_page);


$BookType=$vodtype[$GetMb_id];
$BookTypeId=$BookType['id'];
$BookTypeName=$BookType['name'];
$tpl->assign('BookTypeId', $BookTypeId);
$tpl->assign('BookTypeName', $BookTypeName);

$tpl->show($this_WebMoban.'/html/'.$GetMb_tmp);

?>