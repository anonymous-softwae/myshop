<?php 
//数据库连接及数据统计
include("db_conn.php");
$data1=date("Y-m-d h:m:s");
$data2=date("Y-m-d");
//获取IP
function getip(){ 
  if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) 
      $ip = getenv("HTTP_CLIENT_IP"); 
  else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) 
      $ip = getenv("HTTP_X_FORWARDED_FOR"); 
  else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) 
      $ip = getenv("REMOTE_ADDR"); 
  else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")) 
      $ip = $_SERVER['REMOTE_ADDR']; 
  else 
      $ip = "unknown"; 
  return($ip); 
} 
$ip=getip();
//利用session避免重复计数
if(@$_SESSION['temp']==""){
  $sql="SELECT*FROM tb_count01 WHERE ip='$ip'";
  $query=$conne->mysql_query_rst($sql);
  $result=$conne->getRowsNum($sql);
  if($result>0){
    $sql_01="UPDATE tb_count01 set counts=counts+1,data1='$data1',data2='$data2'WHERE ip='$ip'";
    $query_01=$conne->mysql_query_rst($sql_01);
  }
  else{
    $sql_02="insert into tb_count01(counts,data1,data2,ip) values('1','$data1','$data2','$ip')";
    $result_01=$conne->mysql_query_rst($sql_02);
  }
  $_SESSION['temp']=1;
}
//图形化输出数据库计数记录
$sql_03="SELECT SUM(counts) as total FROM tb_count01";
$result_02=$conne->mysql_query_rst($sql_03);
if($result_02){
  $fwl=mysqli_fetch_assoc($result_02);
  $final_res=$fwl['total'];
}
else{
  echo "no data";
}
$len=strlen($final_res);
$str=str_repeat("0",6-$len);
for($i=0;$i<strlen($str);$i++)
{
  $results=$str[$i];
  $results='<img src=images/numbers/0.png height=10>';
  echo $results;
}
for($i=0;$i<strlen($final_res);$i++){
  $results_01=$final_res[$i];
  switch($results_01){
    case"0";$ret[$i]="0";break;
    case"1";$ret[$i]="1";break;
    case"2";$ret[$i]="2";break;
    case"3";$ret[$i]="3";break;
    case"4";$ret[$i]="4";break;
    case"5";$ret[$i]="5";break;
    case"6";$ret[$i]="6";break;
    case"7";$ret[$i]="7";break;
    case"8";$ret[$i]="8";break;
    case"9";$ret[$i]="9";break;
  }
  $results_02="<img src=images/numbers/".$ret[$i].".png height=10>";
  echo $results_02;
}
?>
