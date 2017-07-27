<?php
session_start();
include("./controller/_pdo.php");
include("./db_connect/db_connect.php");
include("./controller/login.php");
$idCheck = new PageCheck("./index.php?err=2");
$userId = $_SESSION['user_id'];
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $letterId = $_GET['id'];
    $query = "SELECT * FROM letterDetail WHERE userId = :id AND id = :letterId";
    $queryExecute = PDO_FetchAll($query,array("id"=>$userId,"letterId"=>$letterId));
    $search = array("(nl)","(:nl)");
    $replace = array("<p>","</p>");
}
else{
    header("Location:./records.php");
    ;
}
?>