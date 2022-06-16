<?php
// require('db_client.php');

if(isset($_POST['validate'])){ 
    // $user_email= htmlspecialchars($_POST['email']);

    // $checkIfUserExists=$bdd->prepare('SELECT * FROM users WHERE email= ?');
    // $checkIfUserExists->execute(array($user_email));


    // if($checkIfUserExists->rowCount() > 0){

    //     $password = uniqid();
    //     $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    //     $subject = 'Wachtwoord vergeten';
    //     $message = "Hallo! Hier is uw nieuwe wachtwoord: $password";
    //     $headers = 'Content-Type: text/plain; charset="UTF-8"';

    //     if (mail($user_email, $subject, $message, $headers)) {
    //         $stmt = $bdd->prepare("UPDATE users SET password = ? WHERE email = ?");
    //         $stmt->execute([$hashedPassword, $_POST['email']]);
    //         header('Location: Wachtwoord_verzonden.php');
    //     } else {
    //         $error= 'An error happened, try again later';
    //     }
    // } else{
    //     $error= 'No account with this email address was found';
    // }
    $error= 'No account with this email address was found';
}

?>