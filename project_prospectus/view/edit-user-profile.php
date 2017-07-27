<?php
session_start();
include("./controller/_pdo.php");
include("./db_connect/db_connect.php");
include("./controller/login.php");
$idCheck = new PageCheck("./index.php?err=2");
$userId = $_SESSION['user_id'];
$query = "SELECT * FROM userProfile WHERE id = :id";
$queryExecute = PDO_FetchAll($query,array("id"=>$userId));
$success1=NULL;
$success2=NULL;
$errpic = NULL;
$err = NULL;
if(isset($_GET['success'])){
    if($_GET['success'] == 1){
        $success1 = "Profile Pic Updated";
    }
    elseif($_GET['success'] == 2){
        $success2 = "User Profile updated";
    }
    else{
        $success1 = NULL;
        $success2 = NULL;
    }
}
elseif(isset($_GET['errpic'])){
    if($_GET['errpic'] == 1){
        $errpic = "Image is not a JPG file";
    }
    elseif($_GET['errpic'] == 2){
        $errpic = "Image is above 15kb";
    }
    else{
        $errpic = NULL;
    }
}
elseif(isset($_GET['err'])){
    if($_GET['err'] == 1){
        $err = "Email already exists";
    }
    else{
        $err = NULL;
    }
}
?>