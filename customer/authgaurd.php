<?php

session_start();

if($_SESSION['login_status']==false){
    echo "Unautherised Access 401";
    die;
}

if($_SESSION['usertype']!= 'Customer'){
    echo "Forbidden Access 403";
    die;
}
?>