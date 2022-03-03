<?php

?>
	
<!DOCTYPE html>
<html>
    <head>
        <title>生涯独学</title>
    </head> 
    
    <body>
        <h1>今日の勉強</h1>
        <h2>さぁ始めよう</h2>
        <form action="timer.php" method="post">

            <select name="study">
                <option value="---">---</option>
                <option value="PHP">PHP</option>
                <option value="SQL">SQL</option>
                <option value="Git">git</option>
            </select>

            <br>

            <button type="submit" name="start" value="ok" onclick="studying()">start</button>
        </form>
        
    </body>
</html>
