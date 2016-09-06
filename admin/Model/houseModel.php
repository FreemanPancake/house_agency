<!--houseModel.php-->
<?php 
require 'admin/Model/Model.php';
/**
* houseModel
*/
class HouseModel extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function dogethouse(){

		$sql = "select * from house";
		$result = $this->conn->query($sql);

		return $result;
	}

	function dodelhouse($id){

		$sql = "delete from house where id = '$id'";
		$result = $this->conn->query($sql);

		return $result;
	}
}
 ?>