<html>
<?php



if($_SERVER["REQUEST_METHOD"]=="POST")
{
$hostname="localhost";
$user="root";
$pass="";
$dbname="qa";
$conn=new mysqli($hostname,$user,$pass,$dbname);
if($conn->connect_error){
    echo "connection error";
}

$_qtitle=$_qdesc=$_qimg=$_qcat="";
$_qtitle=$_POST["txtqtitle"];
$_qdesc=$_POST["txtqdesc"];
$target_dir="../../../../images/";
$target_file=$target_dir . basename($_FILES["txtpimg"]["name"]);
echo $target_file;
if(move_uploaded_file($_FILES["txtpimg"]["tmp_name"],$target_file))
{
    echo 'file uploaded';
}
$_qimg="images/".basename($_FILES["txtpimg"]["name"]);

$_qcat=$_POST["fk_cat_id"];
$_sql="insert into question values('". null ."','". $_qtitle ."','". $_qdesc ."','". $_qimg ."','". admin ."','". $_qcat ."','". date(d) ."')";
if($conn->query($_sql)===true)
{
    echo 'insert';
       // header('location:productdisplay.php');
}
else
{
    echo "not successfull";
    
}
}
?>    
    <header class="main-header">
    <?php include 'adminmenu.php'; ?>
</header>   
     <body class="hold-transition skin-blue layout-top-nav">

     <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>" enctype="multipart/form-data">
     <table class="table container">
     
     <tr><td><input type="text" name="txtqtitle" placeholder="title" /><br>
     <tr><td><input type="text" name="txtqdesc" placeholder="description" /><br>
    
     <tr><td> <input type="file" name="txtpimg" placeholder="image" /><br>
    
<tr><td>
<select name="fk_cat_id">
<?php 
$hostname="localhost";
$user="root";
$pass="";
$dbname="qa";
$conn=new mysqli($hostname,$user,$pass,$dbname);
if($conn->connect_error){
    echo "connection error";
}
$result=$conn->query("select * from cat");
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
    echo '<option value="'.$row["cat_id"].'">'.$row["cat_name"].'</option>';
}

}
?>
</select></td></tr>
     <tr><td><input type="submit" name="btinsert" value="insert"/>
     </table>
     </form>

</body>
</html>