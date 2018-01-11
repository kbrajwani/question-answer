<?php 
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
$_email1="";  
    $_password1="";

$_email1=$_POST["email"];
$_password1=$_POST["password"];

$_flag="";
if(($_email1=="admin@gmail.com")&&($_password1=="admin"))
{
  header('location:AdminLTE-2.3.11/AdminLTE-2.3.11/pages/layout/kumaradmin.php');
}
else{
require 'class/loginclass.php';
$obj=new loginclass();
$_result=$obj->getlogin($_email1);
    $row=$_result->fetch_assoc();
    if($row["password"]===$_password1){
        $_flag="a"; 
    }

if($_flag==="a")
{
    if($row["verify"]==1)
    {
    $_SESSION["email"]=$_email1;
header('location:1.php');
    }
    else
    {
    
        echo 'please look your gmail account we have sent you a verification link ,if you did not get it please <a href="resendemail.php?email='.$_email1.' ">click me</a>';
    }
}
else
{
    echo "no records found";
}
}
	}
?>