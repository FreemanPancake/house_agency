<!--Controller.php-->
<?php 
class Controller
{
	function __construct()
	{
		@session_start();
		// if (!isset($_SESSION['admin'])) {
		// 	$this->redirect('admin.php?c=user&m=adminloginview','无权限，请登录');
		// 	exit();
		// }
	}

	function checksession(){
		if (!isset($_SESSION['admin'])) {
			$this->redirect('admin.php?c=user&m=adminloginview','无权限，请登录');
			exit();
		}
	}
	
	function redirect($url, $msg)
	{
		echo $msg.'<a href="'.$url.'">if Browser is not skip, please click to skip</a>';
		header("refresh:2;url=$url");
	}
}
?>
