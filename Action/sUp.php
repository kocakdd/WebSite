<?php

    require('db_client.php');
    
    //verrifie que l'utilisateur a cliqué sur le bouton validé
    if(isset($_POST['validate'])){ 

        //check if everything is complete
        if(!empty($_POST['email']) AND !empty($_POST['password'])){
            // users data
            $user_email= htmlspecialchars($_POST['email']);
            $user_password= password_hash($_POST['password'],PASSWORD_DEFAULT);
            $user_voornaam= htmlspecialchars($_POST['fname']);
            $user_achternaam= htmlspecialchars($_POST['lname']);
            $user_tel= htmlspecialchars($_POST['telefonnummer']);
            

            $user_adres= ' ';
            $user_woonplaats= ' ';
            $user_postcode= ' ';
            $user_leeftijd= '0';
            $user_loon= '0';
            $user_pfname= ' ';
            $user_plname= ' ';
            $user_status= ' ';
            $user_hypotheek= ' ';


            // check if user already exist
            $checkIfUserAlreadyExists=$bdd->prepare('SELECT email FROM users WHERE email = ?');
            $checkIfUserAlreadyExists->execute(array($user_email));
            //be sure not already exists
            if($checkIfUserAlreadyExists->rowCount()==0){ 
                $insertUserOnWebsite=$bdd->prepare("INSERT INTO users(email, password, Voornaam, Achternaam, Adres, Woonplaats, Postcode, Leeftijd, Loon, Telefonnummer, Partner_Voornaam, Partner_Achternaam, Status, Hypotheek) VALUES(?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?)");
                $insertUserOnWebsite->execute(array($user_email, $user_password, $user_voornaam,$user_achternaam, $user_adres ,$user_woonplaats ,$user_postcode, $user_leeftijd, $user_loon, $user_tel, $user_pfname, $user_plname, $user_status, $user_hypotheek));

                //get user's data 
                $getInfosOfThisUserReq=$bdd->prepare("SELECT * FROM users WHERE email =? ");
                $getInfosOfThisUserReq->execute(array($user_email));

                $usersInfos =$getInfosOfThisUserReq->fetch(); //we keep all the data 

                //log in user
                $_SESSION['auth']=true;
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

            }else{
                $error="The email is already used";
            }

        } else{
            $error='complete all the form';
        }

    }
