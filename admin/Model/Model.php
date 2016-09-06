<!--Model.php-->
<?php
require 'Common/Config.php';
require 'Common/ConnDB.php';
class Model{

    protected $conn;

    function __construct()
    {
        $this->conn=new ConnDB(DB_HOST,DB_USER,DB_PWD,DB_NAME,DB_CHARSET);
    }

    function uploadfile($filename,$filepath='asset/images/',$allowtype=array("jpg","jpeg","png","gif","bmp","flv")) {
        if($_FILES["$filename"]["error"]>0) {
            switch($_FILES["$filename"]["error"]){
                case 1: echo "文件尺寸超过了配置文件的最大值";  exit;
                case 3: echo "部分文件上传";	exit;
                case 4: echo "没有选择文件！";  break;
                default: echo "未知错误";  exit;
            }
        }else{
            $suffix = strrchr($_FILES["$filename"]["name"], '.');
            if(!in_array(ltrim($suffix, '.'),$allowtype)) {
                echo "文件类型为".$suffix."！<br/>";
                echo "文件类型不正确！只能选择扩展名为jpg,jpeg,png,gif,Bmp,flv类型的文件！";  exit;
            }
            $newname=date("YmdHis").$suffix;
            if (!move_uploaded_file($_FILES["$filename"]["tmp_name"],$filepath.$newname)) {
            }else {
                return $newname;
            }
        }
    }
}
?>