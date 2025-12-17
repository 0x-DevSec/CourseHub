<?php
include_once("database.php");

function check_login()
{
    if(empty($_SESSION[user_information])){
        header("Location: index.php");
        exit;
    }
}

?>