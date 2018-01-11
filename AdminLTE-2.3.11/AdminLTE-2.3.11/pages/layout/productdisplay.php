<html>
    <header class="main-header">
    <?php include 'adminmenu.php'; ?>
</header>
     <body class="hold-transition skin-blue layout-top-nav">
         <script type="text/javascript">
$(document).ready(function(){
    $('#myTable').DataTable();
});
</script>
<?php
require 'kumarhandloom/class.php';
$obj=new database();
$res=$obj->getdata();
/*if($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
        echo $row["news_title"] ."<br>";
    }
}
else
{
    echo "no records found";
}*/

?>
<div class="container bg-info">
<center><h2>product table</h2></center>
</div>
<form method="post" style="border:3px solid blue" action="productdelete.php">
<table class="table"  id="myTable">
<thead>
<th>title</th>
<th>desc</th>
<th>image</th>
<th>user</th>
<th>date</th>
<th>category</th>
<th>action</th>
</thead>
<?php
while($row=$res->fetch_assoc())
{
    echo "<tr>";

echo '<td>'.$row["qtitle"].'</td>';
echo '<td>'.$row["qdisc"].'</td>';
echo '<td>'.$row["qimg"].'</td>';
echo '<td><img src=../../../../'.$row["qimg"].' width="150px"/></td>';
echo '<td>'.$row["fk_email"].'</td>';
echo '<td>'.$row["fk_cat_id"].'</td>';
echo '<td>'.$row["qdate"].'</td>';
echo '<td>
<input type="checkbox" name="chk[]" value="'.$row["qid"].'"> |
<a href="productdelete.php?id='.$row["qid"].'"><span class="glyphicon glyphicon-trash"></span></a> |
<a href="productupdate.php?id='.$row["qid"].'"><span class="glyphicon glyphicon-edit"></span></a> |
<a class="btn btn-info" href="single1.php?id='.$row["qid"].'">answer</a>
</td>';
}
?>
</table>
<input type="submit" class="nav nav-fix-top" value="delete">
</form>
     </body>
</html>