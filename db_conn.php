<?php
class opmysql{
//变量初始化
  private $host='bdm72186770.my3w.com';
  private $name='bdm72186770';
  private $pwd='Chenyincao@19860726';
  private $dBase='bdm72186770_db';
  private $conn='';
  private $result='';
  private $msg='';
  private $fields;
  private $fieldsNum=0;
  private $rowsNum=0;
  public $rowsRst='';
  private $fieldsArray=array();
  private $rowsArray=array();
//构造函数
function _construct($host='',$name='',$pwd='',$dBase=''){
  if($host!='')
  $this->host=$host;
  if($name!='')
  $this->name=$name;
  if($pwd!='')
  $this->pwd=$pwd;
  if($dBase!='')
  $this->dBase=$dBase;
  $this->init_conn();
}
//连接数据库
function init_conn(){
  $this->conn=@ mysqli_connect($this->host,$this->name,$this->pwd);
  @mysqli_select_db($this->conn,$this->dBase);
  mysqli_query($this->conn,"set names gb2312");
  }
//查询结果
function mysql_query_rst($sql){
  if($this->conn==''){
    $this->init_conn();
  }
  $this->result=@mysqli_query($this->conn,$sql);
  return $this->result;
}
//返回查询记录数函数
function getRowsNum($sql){
  $this->mysql_query_rst($sql);
  if(@mysqli_errno()==0){
    return @mysqli_num_rows($this->result);
  }
  else{
      return'';
    }
  }
//取得记录数组函数
function getRowsRst($sql){
  $this->mysql_query_rst($sql);
  if(@mysqli_errno()==0){
    $this->rowsRst=@mysqli_fetch_array($this->result,MYSQLI_ASSOC);
    return $this->rowsRst;
  }
  else{
    return'';
  }
}
//取得记录数组函数（多条记录）
function getRowsArray($sql){
  $this->mysql_query_rst($sql);
  if(@mysqli_errno()==0){
    while($row=@mysqli_fetch_array($this->result,MYSQLI_ASSOC)){
      $this->rowsArray[]=$row;
    }
    return $this->rowsArray;
  }
  else{
    return'';
  }
}
//返回更新、删除、添加的记录函数
function uidRst($sql){
  if($this->conn==''){
    $this->init_conn();
    }
    @mysqli_query($this->conn,$sql);
    $this->rowsNum=@mysqli_affected_rows($this->conn);
    if(@mysqli_errno()==0){
      return $this->rowsNum;
    }
    else{
      return'';
    }
}
//释放结果集函数
function close_rst(){
  mysqli_free_result($this->result);
  $this->msg='';
  $this->fieldsNum=0;
  $this->rowsNum=0;
  $this->fieldsArray='';
  $this->rowsArray='';
}
//关闭数据库函数
function close_conn(){
  $this->close_rst();
  mysqli_close($this->conn);
  $this->conn='';
}

function show(){
  echo $this->rowsRst;
}

}
//实例类
$conne=new opmysql();
?>