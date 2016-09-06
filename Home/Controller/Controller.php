<?php
class Controller{
    function __construct()
    {
    	@session_start();
    }

    function redirect($url, $msg)
	{
		echo $msg.'<a href="'.$url.'">if Browser is not skip, please click to skip</a>';
		header("refresh:2;url=$url");
	}
}
?>