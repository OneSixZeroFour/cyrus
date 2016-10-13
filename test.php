<?php  
    //echo 'amy'
    echo $_GET['callback']."(".json_encode(array('a'=>'b')).")";
?>