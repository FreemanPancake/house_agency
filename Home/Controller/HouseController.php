<?php
/**
 * Created by PhpStorm.
 * User: yushifan
 * Date: 16/8/31
 * Time: 上午9:19
 */
require 'Controller.php';
require 'Home/Model/HouseModel.php';
class HouseController extends Controller{
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
    
    function HouseAdd(){
        $h_model=new HouseModel();
        $result=$h_model->addhouse();
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

}