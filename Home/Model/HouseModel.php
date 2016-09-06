<?php
/**
 * Created by PhpStorm.
 * User: yushifan
 * Date: 16/8/31
 * Time: 上午9:18
 */
require 'Model.php';
class HouseModel extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function addhouse()
    {
        $type = $_POST['type'];
        $housetype=$_POST['housetype'];
        $builddate=$_POST['builddate'];
        $address=$_POST['address'];
        $area=$_POST['area'];
        $floor=$_POST['floor'];
        $allfloor=$_POST['allfloor'];
        $region=$_POST['region'];
        $price=$_POST['price'];
        $rent=$_POST['rent'];
        $contact=$_POST['contact'];
        $tel=$_POST['tel'];
        $demo=$_POST['demo'];
        if(!empty($_FILES["pic"]["name"])){
            $pic = parent::uploadfile('pic');
        }
        else{
            $pic='';
        }
        $sql = "insert into house values
        (null,'$type','$address','$builddate','$area','$housetype','$floor','$allfloor','$region','$price','$rent',
        '$contact','$tel','$demo','0','$pic',NULL)";
        $result=$this->conn->query($sql);
        return $result;
    }
}