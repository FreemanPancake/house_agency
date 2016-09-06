<!--ConnDB.php-->
<?php

class ConnDB{

    private $conn;

    public function __construct($host,$user,$pwd,$dbname,$charset){
        $this->conn=@mysql_connect($this->host,$this->user,$this->pwd,$this->dbname,$this->charset) or die('数据库连接失败'.mysql_error());
        @mysql_select_db($dbname) or die('数据库连接失败'.mysql_error());
        @mysql_set_charset($charset);
    }

    //执行查询语句 有结果集 返回数组
    function query($sql){
        //截取SQL语句前6个字符
        $sqltype=strtolower(substr(trim($sql),0,6));
        $result=mysql_query($sql,$this->conn) or die('查询失败!'.mysql_error());
        //定义二位数组存储select查询结果
        $callback_array=array();
        //判断类型
        if("select"==$sqltype){
            if($result==false){
                return false;
            }
            else if(0==mysql_num_rows($result)){
                return false;
            }
            else if(1==mysql_num_rows($result)){
                return mysql_fetch_assoc($result);
            }
            else{
                while($result_array=mysql_fetch_assoc($result)) {
                    array_push($callback_array,$result_array);
                }
                return $callback_array;
            }
        }
        else if("update"==$sqltype||"insert"==$sqltype||"delete"==$sqltype){
            if($result){
                return true;
            }
            else{
                return false;
            }
        }
        function __destruct(){
            mysql_colse($this->coon);
        }
    }
}