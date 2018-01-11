<?php
session_start();
$cat=$_POST["category"];

$desc=$_POST["comment"];

$title=$_POST["title"];

$email=$_SESSION["email"];
require 'class/class.php';
$obj=new database();
$res=$obj->questioninsert($title,$desc,$cat,$email);
if($res===true)
{
    header('location:1.php');
}
else
{
    echo 'something went wrong plese go back';
}

?>