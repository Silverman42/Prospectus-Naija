<?php
include("../controller/_pdo.php");
include("../db_connect/db_connect.php");
include("../controller/file_validator.php");
include("../controller/string_format.php");
if(isset($_POST['submit'])){
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
            $StringFormat = new StringFormat;
            $surname = $StringFormat->Uppercase($_POST['surname']);
            $firstname = $StringFormat->Uppercase($_POST['first-name']);
            $othername = $StringFormat->Uppercase($_POST['othername']);
            $arrname = array($surname,$firstname,$othername);
            $fullname = $StringFormat->Concatenate($arrname);
            $email = $_POST['e-mail'];
            $passport = $ValidateImage->fileName;
            $password = md5($_POST['password']);
            $address = $_POST['address'];
            $dob = $_POST['dob'];
            $nationality = $_POST['nationality'];
            $phoneNumber = $_POST['phonenumber'];
            $check_info = "SELECT * FROM userProfile WHERE email = :email";
            $query_execute = PDO_NumRow($check_info,array("email"=>$email),'id');
            if ($query_execute[0] < 1) {
                $insert_query = "INSERT INTO userProfile (fullname, email, password, address, dob, nationality, phoneNumber, passport) ";
                $insert_query .= "VALUES (:fullname, :email, :password, :address, :dob, :nationality, :phoneNumber, :passport)";
                $queryExecute2 = PDO_Execute($insert_query, array("fullname"=>$fullname,"email"=>$email,"password"=>$password,"address"=>$address,"dob"=>$dob,"nationality"=>$nationality,"phoneNumber"=>$phoneNumber,"passport"=>$passport));
                $ValidateImage->Success();
                header("Location:../confirmation.php"); 
            }
            else{
                $err = "3";
                header("Location:../sign-up.php?err={$err}"); 
            }
        }
        else{
            header("Location:../sign-up.php?err={$ValidateImage->ErrMessage}");
        }  
    }
    else{
        header("Location:../sign-up.php?err={$ValidateImage->ErrMessage}");
    }    
    
}
?>