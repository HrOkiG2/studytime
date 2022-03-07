<?php
    ini_set('display_errors', "On");
    require_once "dataEditing.php";

    $de = new dataEditing();
    $result = $de->selectDB();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>生涯独学</title>
        <script src="sTime.js"></script>
    </head> 
    
    <body>
        <h2>今日の勉強時間</h2>
        <p id="endtime"></p>
        
    </body>
</html>