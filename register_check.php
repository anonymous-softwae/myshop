<?php
//免激活用户注册
include_once('db_conn.php');
$date_1=date("Y-m-d h:m:s");
$sql="INSERT INTO tb_member(name,password,telephone,_date,active)VALUES('".trim($_POST['name'])."','".md5(trim($_POST['pwd_1']))."','".($_POST['phone'])."','$date_1','1')";
$num=$conne->uidRst($sql);
if($num==1){
    echo '1';
}
else if($num==0){
    echo '2';
}
?>