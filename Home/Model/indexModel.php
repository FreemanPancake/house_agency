<?php
/**
 * Created by PhpStorm.
 * User: yushifan
 * Date: 16/8/31
 * Time: 上午9:19
 */
require 'Model.php';
class indexModel extends Model
{
    function __construct()
    {
        parent::__construct();
    }
    function indexlogin(){

    }
    function indexHotRent(){
        $sql="select * from house ORDER BY rent  DESC limit 0,3";
        $result = $this->conn->query($sql);
        return $result;
    }
    function indexHotSale(){
        $sql="select * from house ORDER BY price DESC limit 0,3";
        $result=$this->conn->query($sql);
        return $result;
    }


}