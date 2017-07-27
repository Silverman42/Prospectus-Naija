<?php
/**
 * desc: 
 * auth: Nkeze_Sylvester
 */
class logout
{
    static function ItselfTo($login_page)
    {   
            session_destroy();
            header("Location:".$login_page);
    }
}
?>