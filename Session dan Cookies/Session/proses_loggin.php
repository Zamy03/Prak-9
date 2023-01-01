<?php
session_start();
if(isset($HTTP_SESSION_VARS))
{
    echo "<pre>";
    echo "User Name : <b>".$HTTP_SESSION_VARS["session_user"]."</b><br>";
    echo "User Password : <b>".$HTTP_SESSION_VARS["session_password"]."</b><br>";
    echo "Click <a href=\"loggout.php\">Loggout</a> untuk keluar !";
    echo "</pre>";
}else 
{
    header("Location: loggin.php");
    exit;
}
?>