<?php
$err = NULL;
if(isset($_GET['err'])){
    if($_GET['err'] == 1){
        $err = "Image is not a JPG file";
    }
    elseif($_GET['err'] == 2){
        $err = "Image is above 15kb";
    }
    elseif($_GET['err'] == 3){
        $err = "Email already exists";
    }
    else{
        $errpic = NULL;
    }
}
?>