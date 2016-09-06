<?php

$c=isset($_GET['c'])?$_GET['c']:'index'; //c是类名
$m=isset($_GET['m'])?$_GET['m']:'getindex';
$clsName = ucfirst($c).'Controller';
require "Controller/{$clsName}.php";
$ctrl = new $clsName;
$ctrl->$m();