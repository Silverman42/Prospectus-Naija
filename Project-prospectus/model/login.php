<?php
include("../controller/_pdo.php");
include("../db_connect/db_connect.php");
include("../controller/login.php");
if(isset($_POST['submit'])){
    $sessionStart = new Login;
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $query = "SELECT * FROM userProfile WHERE email = :email ";
    $query .= "AND password = :password";
    $queryExecute = PDO_NumRow($query, array("email"=>$email,"password"=>$password),'id'); 
    if($queryExecute[0] == 1){
        foreach($queryExecute[1] as $output){
            $id = $output['id'];
        }
        $sessionStart->UserId = $id;
        $sessionStart->DBCheck = 1;
    }
    else{
        $sessionStart->DBCheck = 0;
    }
    $otput = $sessionStart->CreateSession($sessionStart->DBCheck);
    $sessionStart->CheckStatus("../sign-in.php","../view.php");
}
?>