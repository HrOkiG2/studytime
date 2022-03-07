<?php
    require_once "dataEditing.php";

    //プルダウンのループ
    $de = new dataEditing();
    $result = $de->selectContents();

    //contentsの追加
    $add = $_POST["add"];    
    if($add != null){
        $is = new dataEditing();
        $is->insertContents($add);
        $_POST["add"] = null; //初期化
    }
?>
	
<!DOCTYPE html>
<html>
    <head>
        <title>生涯独学</title>
        
    </head> 
    
    <body>
        <h1>今日の勉強</h1>
        <h2>さぁ始めよう</h2>
        <form method="post">

            <select name="study">
                <option value="---">---</option>
                <?php for($i=0; $i<count($result); $i++){?>
                <option value="<?php echo $result[$i]['name']?>">
                    <?php echo $result[$i]['name']?>
                </option>
                <?php }?>
            </select>

            <button type="submit" formaction="timer.php"  name="start" value="ok" id="start">start</button>

            <br>
            
            <!--追加-->
            <div>
                <h3>コンテンツの追加</h3>
                <input type="text" for="add" name="add">
                <button type="submit" formaction="" id="add">追加する</button>
            </div>
        </form>
        <button id="test">test</button>
        <!-- JS -->
        <script src="main.js" type="module"></script>
    </body>
</html>
