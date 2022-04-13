<?php


error_reporting(0);

//$GetMb_id
//$GetMb_page
$uubb=array();
$x=[1,2,3,4,5,6,7,10,11,12,13,14,15,16,19,20,21,22,23,24,25,26,27,28,29,30,34];
foreach ($x as $k => $v) {

    $search = json_decode(file_get_contents('./TTSQL/Home/'.$v.'.txt'),true);
    if($search){
        $uubb=array_merge($uubb,$search);
    }

    

}

$GetMb_id = clean_xss($GetMb_id,true);

function search($uubb,$GetMb_id) {
$a=$uubb;
$arr=$result=array();
foreach ($a as $key => $value) {

foreach ($value as $valu) {

if(strstr($valu, $GetMb_id) !== false)
{


    array_push($arr, $key);
} 
} 
}



foreach ($arr as $key => $value) {

if(array_key_exists($value,$a)){

array_push($result, $a[$value]);
}
}
return $result; 
}

$MYSQLVODS=search($uubb,$GetMb_id);
if($MYSQLVODS ==NULL){
    echo '<script>alert("抱歉！无'.$GetMb_id.'搜索结果！点击确定返回首页！");window.location.href="?"</script>';    exit();
}


//$MYSQLVODS=PAGE($MYSQLVODS,$GetMb_page,'5');
$count=count($MYSQLVODS)-1;
$tpl->assign('SearchTypeTTSQL', $MYSQLVODS);
$tpl->assign('SearchTypePage', $GetMb_page);

$tpl->assign('SearchTypeId', $GetMb_id);
$tpl->assign('SearchTypeName', $GetMb_id);

$tpl->show($this_WebMoban.'/html/'.$GetMb_tmp);

?>