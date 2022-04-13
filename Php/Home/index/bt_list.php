<?php
//$GetMb_id
//$GetMb_page
if (file_exists('./TTSQL/Home/'.$GetMb_id.'.txt')) {
    $MYSQLVODS = json_decode(file_get_contents('./TTSQL/Home/'.$GetMb_id.'.txt'),true);
}else{
    $MYSQLVODS =[];
}
//$MYSQLVODS=PAGE($MYSQLVODS,$GetMb_page,'5');
$count=count($MYSQLVODS)-1;
$tpl->assign('BtTypeTTSQL', $MYSQLVODS);
$tpl->assign('BtTypePage', $GetMb_page);
$tpl->assign('BtTypeId', $GetMb_page);


$BtType=$vodtype[$GetMb_id];
$BtTypeId=$BtType['id'];
$BtTypeName=$BtType['name'];
$tpl->assign('BtTypeId', $BtTypeId);
$tpl->assign('BtTypeName', $BtTypeName);

$tpl->show($this_WebMoban.'/html/'.$GetMb_tmp);

?>