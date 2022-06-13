<?php
session_start();
if(isset($_POST['logout'])){
    $_SESSION=[];
    session_destroy();
    header('Location: Login_Menu.php');
}
?>