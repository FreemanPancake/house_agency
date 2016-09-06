<?php
/**
 * Created by PhpStorm.
 * User: yushifan
 * Date: 16/8/31
 * Time: 上午9:19
 */
require 'Controller.php';
require 'Home/Model/indexModel.php';
class indexController extends Controller{
    function __construct()
    {
        parent::__construct();
    }
    function getindex(){
        $h_model=new indexModel();
        $h_data=$h_model->indexHotRent();
        $p_model=new indexModel();
        $p_data=$p_model->indexHotSale();
        require 'Home/View/index1.php';
    }
}