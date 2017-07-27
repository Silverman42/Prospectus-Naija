<?php
if(file_exists("../db_connect/register.db")){
    $db_file = "../db_connect/register.db";
}
else{
    $db_file = "./db_connect/register.db";
}
PDO_Connect("sqlite:$db_file");
?>