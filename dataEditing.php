<?php
require_once "conDB.php";

class dataEditing{

    // public function selectDB(){
    //     $sql = "SELECT * FROM studyContents";
        
    //     //インスタンス化及びメンバ変数の確認
    //     $myDB = new myDB;
    //     $con = $myDB->db;
        
    //     $result = $con->prepare($sql);
    //     $result->execute();

    //     $resultset = $result->fetchAll(PDO::FETCH_ASSOC);

    //     return $resultset;
    // }

    public function selectDB(){
        $sql = "SELECT * FROM studyContents";
            $myDB = new myDB;
            $con = $myDB->conDB();
            $result = $con->prepare($sql);
            $result->execute();

            $resultset = $result->fetchAll(PDO::FETCH_ASSOC);

            return $resultset;
    }
}
?>