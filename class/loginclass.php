<?php
class loginclass{
private static $con=null;
private static function connect()
{
    self::$con=mysqli_connect('localhost','root','','qa');
    return self::$con;

}
private static function disconnect()
{
    mysqli_close(self::$con);
     self::$con=null;
    
}
public function getlogin($_email1)
{
    $con=loginclass::connect();
    $res=$con->query("select * from user where email='".$_email1."'"  );
    
    return $res;

    loginclass::disconnect();

}
public function insert($_email,$_password,$_image1)
{
    $con=loginclass::connect();
    $_sql="insert into user values('". $_email ."','". $_password ."','". $_image1 ."','". 1 ."','". null ."','". null ."')";
    
    $res=$con->query($_sql);
    return $res;
    loginclass::disconnect();

}
public function update($_email,$_name,$_mobile,$_address,$_gender,$_image1,$_image)
{
    $con=loginclass::connect();
    if($_image1==null)
    {
        $_sql="update user_table set name='". $_name ."',mobile='". $_mobile ."',address='". $_address ."',gender='". $_gender ."' where email='".$_email."'";
    }
    else
    {
        unlink($_image);
    $_sql="update user_table set name='". $_name ."',mobile='". $_mobile ."',address='". $_address ."',gender='". $_gender ."',image='". $_image1 ."' where email='".$_email."'";
    }
    $res=$con->query($_sql);
    return $res;
    loginclass::disconnect();

}
public function updatepass($_email1,$_password,$_newpass)
{
    $con=loginclass::connect();
    $result=$con->query("select * from user_table where email= '".$_email1."' and password='".$_password."' ");
    if($result->num_rows==1)
    {
        $_sql="update user_table set password='". $_newpass ."' where email='".$_email1."'";
        $res=$con->query($_sql);
    }
    else
    {
    $res="old password is wrong";
    }

    return $res;
    loginclass::disconnect();

}
public function updatepassforgot($_email1,$_newpass,$token)
{
$con=loginclass::connect();
    $result=$con->query("select * from user_table where email= '".$_email1."' and token2='".$token."'");
    if($result->num_rows==1)
    {
        $_sql="update user_table set password='". $_newpass ."' where email='".$_email1."'";
        $res=$con->query($_sql);
    }
    return $res;
    loginclass::disconnect();

}
public function verify($_email1,$token)
{
$con=loginclass::connect();
    $result=$con->query("select * from user_table where email= '".$_email1."' and token1='".$token."'");
    if($result->num_rows==1)
    {
        $_sql="update user_table set verify=1 where email='".$_email1."'";
        $res=$con->query($_sql);
    }
    return $res;
    loginclass::disconnect();

}
public function userview($_email1)
{
    $con=loginclass::connect();
    $res=$con->query("select * from user_table where email=" . "'$_email1'");
    return $res;
    loginclass::disconnect();

}

}
?>