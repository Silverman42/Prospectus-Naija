<?php
include("../controller/_pdo.php");
include("../db_connect/db_connect.php");
if(isset($_POST['letterTitle'])){
        $senderAdd = $_POST['senderAdd'];
        $recieverAdd = $_POST['recieverAdd'];
        $header = $_POST['header'];
        $letterBody = $_POST['letterBody'];
        $conclusion = $_POST['conclusion'];
        $letterTitle = $_POST['letterTitle'];
        $userId = $_POST['ui'];
        $compliment = $_POST['compliment'];
        $query = "INSERT INTO letterDetail (letterName,senderAdd,recieverAdd,header,letterBody,conclusion,docCreateDate,userId,compliment)";
        $query .=" VALUES (:letterName,:senderAdd,:recieverAdd,:header,:letterBody,:conclusion,:docCreateDate,:userId,:compliment)"; 
        //$input = 
        $execute = PDO_Execute($query,array("letterName"=>$letterTitle,"senderAdd"=>$senderAdd,"recieverAdd"=>$recieverAdd,"header"=>$header,"letterBody"=>$letterBody,"conclusion"=>$conclusion,"docCreateDate"=>date('d-m-Y H:i:s', time()),"userId"=>$userId,"compliment"=>$compliment));
        if(!$execute){
            echo "Submit Unsuccessful";
        }
        else{
            echo "Submit Successful";    
        }
}
else{
    echo "No input Made";
}
?>