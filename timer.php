<?php    
    $contents = $_POST["study"];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>生涯独学</title>
        
    </head>

    <body>
        <h2>学習内容</h2>
        <h3><?php echo $contents ?></h3>

        <h2>勉強時間</h2>
            <h3 id="sTime"></h3>
        <div>
            <p>勉強を終了する</p>
            <p>
                <form action="studyEnd.php" method="POST">
                    <button type="submit" name="end" value="end">終了</button>
                </form></form>
            </p>
        </div>

        <!-- JS -->
        <script src="sTime.js"></script>
    </body>
</html>