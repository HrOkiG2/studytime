<?php
    ini_set('display_errors', "On");
    require_once "dataEditing.php";

    $de = new dataEditing();
    $result = $de->selectDB();
?>
<p>
    <?php
        foreach($result as $rr){
            foreach($rr as $a => $z){
                echo $z;
            }
            echo "<br>";
        }
    ?>
</p>