<!--UserModel.php-->
<?php
require 'admin/Model/Model.php';

class UserModel extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function dolistuser(){

    	$sql = "select * from user";
    	$result = $this->conn->query($sql);

		return $result;
    }

    function doadminlogin($admin,$password){
        
        $sql = "select * from admin where admin = '$admin' and password ='$password'";
        $result = $this->conn->query($sql);

        return $result;
    }
}
?>