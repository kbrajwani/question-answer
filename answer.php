<?php
session_start();
require 'class/class.php';
$obj=new database();
$answer=$_POST["post_content"];
$qid=$_GET["id"];
$email=$_SESSION["email"];
$res=$obj->answerinsert($answer,$qid,$email);
if($res===true)
{
    header('location:1.php');
}
else
{
    echo 'something went wrong plese go back';
}
?>