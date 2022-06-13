<?php
require('db_client.php');
session_start();
if(isset($_POST['validate'])){ 
    $oldpass=$_POST['passOld'];
    $user_email=$_SESSION['email'];

    $users_infos_req=$bdd->prepare('SELECT * FROM users WHERE email=?');
    $users_infos_req->execute(array($user_email));

    $users_infos=$users_infos_req->fetch();

    if(password_verify($oldpass,$users_infos['password'])){
        $hashedPassword=password_hash($_POST['passOne'],PASSWORD_DEFAULT);
        $stmt = $bdd->prepare("UPDATE users SET password = ? WHERE email = ?");
        $stmt->execute(array($hashedPassword,$user_email));

        
        header("Location: pwd_verzonden.php");
        } else {
            $error= 'Wrong actual password';
        }
    }


?>