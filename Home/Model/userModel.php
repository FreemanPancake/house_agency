<?php
require 'Model.php';
class userModel extends Model{
    function __construct()
    {
        parent::__construct();
    }

    function adduser(){

        $uname = $_POST['uname'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $age=$_POST['age'];
        $flag=$_POST['flag'];
        if(!empty($_FILES["pic"]["name"])){
            $pic = parent::uploadfile('pic');
        }
        else{
            $pic='';
        }
        $tel=$_POST['tel'];
        $sql = "insert into user values
        (null,'$uname','$password','$gender','$age','$flag','$pic','$tel')";
        $result=$this->conn->query($sql);

        return $result;
    }

    function douserlogin($uname,$password){
        
        $sql = "select * from user where uname = '$uname' and password ='$password'";
        $result = $this->conn->query($sql);

        return $result;
    }
}
?>