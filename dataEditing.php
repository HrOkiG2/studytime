<?php
require_once "conDB.php";
require_once "study.php";

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

    public function insertContents(String $cont){
        
        $myDB = new myDB;
        $con = $myDB->conDB();

        //最大値取得
        $no = "SELECT MAX(no) FROM studycontents";

        $result = $con->prepare($no);
        $result->execute();
        $result_no = $result->fetch(PDO::FETCH_COLUMN);
        // return $result_no;

        //登録
        $ins = "INSERT INTO studyContents(no,name) VALUES (:no,:name)";
        
        $result_no = $result_no + 1; //プラス1で最新の最大値

        $insert = $con->prepare($ins);
        $insert->bindValue(":no",$result_no,PDO::PARAM_INT);
        $insert->bindValue(":name",$cont,pdo::PARAM_STR);

        $a = $insert->execute();

        return $a;
            
            
    }

    public function selectContents(){
        $sql = "SELECT name FROM studyContents";
            $myDB = new myDB;
            $con = $myDB->conDB();
            $result = $con->prepare($sql);
            $result->execute();

            $resultset = $result->fetchall(PDO::FETCH_ASSOC);

            return $resultset;
    }
}
?>