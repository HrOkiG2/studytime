<?php
class myDB{

    // public $db;

    // public function __construct(){
    //     $dsn      = 'mysql:dbname=study;host=localhost;charset=utf8mb4';
    //     $user     = 'root';
    //     $password = 'root';

    //     // DBへ接続
    //     try{
    //         $db = new PDO($dsn, $user, $password);
    //         //メンバ変数へ格納
    //         $this->db = $db;
    //     }catch(PDOException $e){
    //         return "データベースの接続に失敗しました".$e->getMessage();
            
    //     }
    // }

    public function conDB(){
        $dsn      = 'mysql:dbname=study;host=localhost;charset=utf8mb4';
        $user     = 'root';
        $password = 'root';

        // DBへ接続
        $db = new PDO($dsn, $user, $password);
        try{
            return $db;
        }catch(PDOException $e){
            return "データベースの接続に失敗しました".$e->getMessage();
            
        }
        var_dump($this->db);
    }
}

?>