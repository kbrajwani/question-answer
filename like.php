<?php		
    $i=$_POST["i"];
    $j=$_POST["j"];
	require 'class/class.php';
	$obj=new database();
    $res=$obj->increselike($j,$i);
?>