<?php
session_start();
include("../controller/_pdo.php");
include("../db_connect/db_connect.php");
include("../controller/file_validator.php");
include("../controller/string_format.php");
if(isset($_POST['submit1'])){
    $ValidateImage = new FileValidate;
    $ValidateImage->fileName = $_FILES['passport']['name'];
    $ValidateImage->fileTempName = $_FILES['passport']['tmp_name'];
    $ValidateImage->fileSize = $_FILES['passport']['size'];
    $ValidateImage->directory = "../uploads/";
    $ValidateImage->ByName();
    $ValidateImage->BySize();
    if ($ValidateImage->status==1) {
        $ValidateImage->ByType();
        if ($ValidateImage->status==1) {
            $passport = $ValidateImage->fileName;
            $insert_query = "UPDATE userProfile SET passport = :passport WHERE id = :id";
            $queryExecute2 = PDO_Execute($insert_query, array("passport"=>$passport,"id"=>$_SESSION['user_id']));
            $ValidateImage->Success();
            header("Location:../edit-user-profile.php?success=1");
        }
        else{
            header("Location:../edit-user-profile.php?errpic={$ValidateImage->ErrMessage}");
        }  
    }
    else{
        header("Location:../edit-user-profile.php?errpic={$ValidateImage->ErrMessage}");
    }    
    
}
if(isset($_POST['submit2'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['e-mail'];
    $password = md5($_POST['password']);
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $nationality = $_POST['nationality'];
    $phoneNumber = $_POST['phonenumber'];
    $check_info = "SELECT * FROM userProfile WHERE email = :email AND id != :id";
    $query_execute = PDO_NumRow($check_info,array("email"=>$email, "id"=>$_SESSION['user_id']),'id');

    if ($query_execute[0] == 0) {
        $update_query = "UPDATE userProfile SET fullname = :fullname, email=:email, password = :password, address = :address, ";
        $update_query .= "dob = :dob, nationality = :nationality, phoneNumber = :phoneNumber WHERE id = :id";
        $queryExecute2 = PDO_Execute($update_query, array("fullname"=>$fullname,"email"=>$email,"password"=>$password,"address"=>$address,"dob"=>$dob,"nationality"=>$nationality,"phoneNumber"=>$phoneNumber,"id" => $_SESSION['user_id']));
        header("Location:../edit-user-profile.php?success=2"); 
    }
    elseif($query_execute[0] >= 1){
        $err = "1";
        header("Location:../edit-user-profile.php?err={$err}"); 
    }
}
?>