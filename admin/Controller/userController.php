<!--userController.php-->
<?php 
require 'admin/Controller/Controller.php';
require 'admin/Model/userModel.php';
/**
* UserController
*/
class UserController extends Controller
{
	
	// function __construct()
	// {
		
	// }
	
	function listuser(){

		$usermodel = new UserModel();
		$userdata = $usermodel->dolistuser();

		include 'admin/View/userlist.php';
	}

	function adminloginview(){
		include 'admin/View/adminlogin.php';
	}

	function adminlogin(){

		$admin = $_POST['admin'];
		$password = $_POST['password'];
		$usermodel = new userModel();
        $result = $usermodel->doadminlogin($admin,$password);
        //echo $result."<br/>";
        if($result) {
            $_SESSION["admin"] = $admin;
            setcookie("user",$admin,time()+3600*24);
            parent::redirect("admin.php","登录成功！");
        } else {
            parent::redirect("admin.php?c=user&m=adminloginview","登录失败！");
        }
	}

	function logout(){
        if(isset($_SESSION['admin'])){
            unset($_SESSION['admin']);
        }
        parent::redirect("index.php","注销成功！");
    }
}
 ?>