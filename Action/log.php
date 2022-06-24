<?php 
require("db_client.php");


//check the button 
if(isset($_POST['validate'])){ 

    //check if everything is complete
    if(!empty($_POST['email'] AND !empty($_POST['password']))){
        // users data
        $user_email= htmlspecialchars($_POST['email']);
        $user_password= htmlspecialchars($_POST['password']);

        //check if the users exists
        $checkIfUserExists=$bdd->prepare('SELECT * FROM users WHERE email= ?');
        $checkIfUserExists->execute(array($user_email));

        if($checkIfUserExists->rowCount() > 0){

            //check the password
            $usersInfos= $checkIfUserExists->fetch();
            if(password_verify($user_password,$usersInfos['password'])){
                //log in user
                $_SESSION['connexion']=true;
                $_SESSION['id']=$usersInfos['id'];
                $_SESSION['email']=$usersInfos['email'];
                $_SESSION['voornaam']=$usersInfos['Voornaam'];
                $_SESSION['achternaam']=$usersInfos['Achternaam'];
                $_SESSION['adres']=$usersInfos['Adres'];
                $_SESSION['woonplaats']=$usersInfos['Woonplaats'];
                $_SESSION['postcode']=$usersInfos['Postcode'];
                $_SESSION['leeftijd']=$usersInfos['Leeftijd'];
                $_SESSION['loon']=$usersInfos['Loon'];
                $_SESSION['telefonnummer']=$usersInfos['Telefonnummer'];
                $_SESSION['pvoornaam']=$usersInfos['Partner_Voornaam'];
                $_SESSION['pachternaam']=$usersInfos['Partner_Achternaam'];
                $_SESSION['status']=$usersInfos['Status'];
                $_SESSION['hypotheek']=$usersInfos['Hypotheek'];
                
                //redirect user to the home page
                header('Location: Account.php');
            }
            else{
                $error="Wrong password";
            }


        }else{
            $error= "Wrong email address";
        }


    } else{
        $error='complete all the form';
    }
}
?>