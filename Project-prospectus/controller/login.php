<?php
/*
desc: login parameters
auth: Nkeze_Sylvester
 */
class Login
{
    public $DbCheck;
    public $UserId;
    public $status;
    public function CreateSession($string)
    {
        $this->DbCheck = $string;
        if($this->DbCheck == 1){
            $this->status = 1;
            //return  $this->status;
        }
        else{
            $this->status = 0;
        }
    }
    public function CheckStatus($login_page,$succes_page)
    {
        if($this->status == 1){
            session_start();
            $_SESSION['user_id'] = $this->UserId;
            header("Location:".$succes_page);
        }
        else{
            header("Location:".$login_page."?err=1");
        }
    }
}

class PageCheck extends Login
{
    function __construct($login_page)
    {
        if(empty($_SESSION['user_id'])){
            header("Location:".$login_page);
        }  
    }
}
?>