<?php 
include_once "db_conn.php";//载入数据库
$sql="SELECT*FROM tb_member WHERE name='".$_POST['name']."'";//根据输入的用户名查询数据库
$num=$conne->getRowsNum($sql);//获取查询结果的记录数
if($num==1){   //如果有记录数
    echo '1';
}
else if($num==0){   //如果没有记录数
    echo '0';
}
else{
    echo $conne->msg_error();
}
?>