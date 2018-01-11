<?php
class database{
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
public function increselike($aid,$_id )
{
    $con=database::connect();
    $res=$con->query("update answer set alike='". $_id ."' where aid='".$aid."' " );
    return $res;
    database::disconnect();

}
public function getall()
{
    $con=database::connect();
    $res=$con->query("select q.*,c.*,u.* from user u,question q,cat c where q.fk_cat_id=c.cat_id and q.fk_email=u.email ");
    return $res;
    database::disconnect();

}
public function getall1($id)
{
    $con=database::connect();
    $res=$con->query("select q.*,c.*,u.* from user u,question q,cat c where q.fk_cat_id=c.cat_id and q.fk_email=u.email and q.qtitle like '%".$id."%' ");

    return $res;
    database::disconnect();

}
public function useranswer($user)
{
    $con=database::connect();
    $res=$con->query("select q.*,a.* from question q,answer a where a.fk_qid=q.qid and a.fk_email='".$user."'  ");
    return $res;
    database::disconnect();

}
public function userquestion($user)
{
    $con=database::connect();
    $res=$con->query("select q.*,c.* from question q,cat c where q.fk_cat_id=c.cat_id and q.fk_email='".$user."' ");
    return $res;
    database::disconnect();

}
public function getcategory($cat)
{
    $con=database::connect();
    $res=$con->query("select q.*,u.* from question q,user u where q.fk_cat_id=$cat and q.fk_email=u.email ");
    return $res;
    database::disconnect();

}
public function allcategory()
{
    $con=database::connect();
    $res=$con->query("select * from cat ");
    return $res;
    database::disconnect();
}
public function getanswer($_id)
{
    $con=database::connect();
    $res=$con->query("select * from answer where fk_qid=$_id");
    return $res;
    database::disconnect();
}
public function questioninsert($_qtitle,$_qdesc,$_cat,$_email)
{
    $con=database::connect();
    $date=date('d-m-y');
    $res=$con->query("insert into question values('". null ."','". $_qtitle."','". $_qdesc ."','". null ."','". $_email ."','". $_cat."','". $date ."' )");
    return $res;
    database::disconnect();

}
public function answerinsert($_adesc,$qid,$_email)
{
    $con=database::connect();
    $res=$con->query("insert into answer values('". null ."','". $_adesc ."','". null ."','". $qid ."','". $_email ."','". date('d-m-y') ."','". null ."' )");
    return $res;
    database::disconnect();

}
public function categorydelete($_id)
{
    $con=database::connect();
    $res=$con->query("delete from cat where cat_id in($_id)");
    return $res;
    database::disconnect();

}

public function categoryupdate($_id)
{
    $con=database::connect();
    $res=$con->query("select * from cat where cat_id=" .$_id);
    return $res;
    database::disconnect();

}
public function categoryupdate1($_id,$_cname)
{
    $con=database::connect();
    $res=$con->query("update cat set cat_name='". $_cname ."' where cat_id=" .$_id);
    return $res;
    database::disconnect();

}
public function getuser($email)
{
    $con=database::connect();
       $res=$con->query("select * from user where email ='".$email."'" );
    return $res;
    database::disconnect();
}
public function userinsert($_email, $_password, $_image,$_verify,$_captcha )
{
    $con=database::connect();
    $res=$con->query("insert into user values('".$_email."','". $_password ."' ,'". $_image."','". 1 ."','". null ."','". $_captcha."'  )");
    return $res;
    database::disconnect();

}
public function productdelete($id)
{
    $con=database::connect();
    $sql="select * from question where qid in($id)";
$res=$con->query($sql);
$row=$res->fetch_assoc();

$image="../../../../../".$row["image"];
echo $image;
if($image!="")
{
unlink($image);
}
$res=$con->query("delete  from question where qid in($id)" );

return $res;
database::disconnect();
}
public function userdelete($_id)
{
    $con=database::connect();
    $arr=explode(",",$_id);
    $length=count($arr);
    for($i=0;$i<$length;$i++)
            {
$sql="select * from user where email ='".$arr[$i]."' ";
$res=$con->query($sql);
$row=$res->fetch_assoc();
$image="../../../../".$row["image"];

if($image!="../../../../")
{
unlink($image);
}

    $res=$con->query("delete from user where email ='".$arr[$i]."'"  );
}
return $res;
database::disconnect();
}
public function userupdate($email)
{
    $con=database::connect();
    $res=$con->query("select * from user where email='".$email."'");
    return $res;
    database::disconnect();
}
public function userupdate1($_image )
{
    $con=database::connect();
    $res=$con->query("update user set image='". $_image ."' where email=" . "'$_email'");
    return $res;
    database::disconnect();

}
public function getlogin($_email1)
{
    $con=loginclass::connect();
    $res=$con->query("select * from user_table where email=" . "'$_email1'");
    return $res;
    loginclass::disconnect();

}
}
?>