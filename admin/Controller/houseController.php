<?php
require 'admin/Model/houseModel.php';
require 'admin/Controller/Controller.php';
/**
* houseController
*/
class HouseController extends Controller
{
	
	// function __construct()
	// {
		
	// }

	function gethouse(){
		
		$housemodel = new HouseModel();
		$housedata = $housemodel->dogethouse();
		parent::checksession();

		include 'admin/View/house.php';
	}

	function housedel(){

		$id = $_GET['id'];
		$housemodel = new HouseModel();
		$result = $housemodel->dodelhouse($id);
		parent::checksession();

		if ($result) {
			parent::redirect('admin.php?c=house&m=gethouse', 'Delete successed！');
		}else {
			parent::redirect('admin.php?c=house&m=gethouse', 'Delete failed！');
		}
	}
}
?>