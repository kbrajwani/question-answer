<!doctype html>
<html>
<script type='text/javascript' src='jquery-3.2.1.min.js'></script>
<?php
$e=1;
?>
<input type="button" id="like">
<span id="liken"><?php echo $e;?>
</span>
<script>
$(document).ready(function(){
    $("#like").click(function(){
        $('#liken').html(function(i,val){return val*1+1});
    });
});</script>
</html>