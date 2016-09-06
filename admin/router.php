<?php
$c=isset($_GET['c'])?$_GET['c']:'house'; //c是类名
$m=isset($_GET['m'])?$_GET['m']:'gethouse';
$clsName = ucfirst($c).'Controller';
require "Controller/{$clsName}.php";
$ctrl = new $clsName;
$ctrl->$m();
?>