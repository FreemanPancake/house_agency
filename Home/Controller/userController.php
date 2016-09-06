<?php
require 'Controller.php';
require 'Home/Model/userModel.php';
class userController extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function UserAdd(){
        $u_model=new userModel();
        $result=$u_model->adduser();
        if($result)
        {
            echo "添加成功";
            echo "<a href='index.php?c=user&m=listusers'>返回列表</a>";
        }
        else
        {
            echo "失败";
            echo "<a href='index.php?c=user&m=userform'>返回</a>";
        }
    }

    function UserLoginview(){
        require 'Home/View/userLogin.php';
    }

    function UserRegview(){
        require 'Home/View/userReg.php';
    }

    function userlogin(){

        $uname = $_POST['name'];
        $password = $_POST['password'];
        $usermodel = new userModel();
        $result = $usermodel->douserlogin($uname,$password);
        //echo $result."<br/>";
        if($result) {
            $_SESSION["user"] = $uname;
            //setcookie("user",$uname,time()+3600*24);
            parent::redirect("index.php","登录成功！");
        } else {
            parent::redirect("index.php","登录失败！");
        }
    }

    function userlogout(){
        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
        }
        parent::redirect("index.php","注销成功！");
    }
}
?>