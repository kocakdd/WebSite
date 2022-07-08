<?php
    require('db_client.php');
    if(isset($_POST['back'])){
        header('Location: Account.php');
    }
    //verrifie que l'utilisateur a cliqué sur le bouton validé
    if(isset($_POST['validate'])){ 
        if(!isset($_POST['email'])){
            $user_email=$_SESSION['email'];
        }
        else{
            $user_email= htmlspecialchars($_POST['email']);}
            
            // check new email
            $checkIfUserAlreadyExists=$bdd->prepare('SELECT email FROM users WHERE (email = ? AND id !=?)');
            $checkIfUserAlreadyExists->execute(array($user_email,$_SESSION['id']));
            //be sure mail don't already exists
            if($checkIfUserAlreadyExists->rowCount()==0){ 
                //check if everything is complete
                if(!empty($_POST['lname'])){

                    $user_achternaam= htmlspecialchars($_POST['lname']);
                }
                else{
                    $user_achternaam=$_SESSION['achternaam'];
                }

                if(!empty($_POST['fname'])){
                    $user_voornaam= htmlspecialchars($_POST['fname']);
                }
                else{
                    $user_voornaam=$_SESSION['voornaam'];
                }

                if(!empty($_POST['telefonnummer'])){
                    $user_tel= htmlspecialchars($_POST['telefonnummer']);
                }
                else{
                    $user_tel=$_SESSION['telefonnummer'];
                }

                if(!empty($_POST['adres'])){
                    $user_adres= htmlspecialchars($_POST['adres']);
                }
                else{
                    $user_adres=$_SESSION['adres'];
                }

                if(!empty($_POST['woonplaats'])){
                    $user_woonplaats= htmlspecialchars($_POST['woonplaats']);
                }
                else{
                    $user_woonplaats=$_SESSION['woonplaats'];
                }

                if(!empty($_POST['postcode'])){
                    $user_postcode=htmlspecialchars($_POST['postcode']); 
                }
                else{
                    $user_postcode=$_SESSION['postcode'];
                }

                if(!empty($_POST['leeftijd'])){
                    $user_leeftijd=htmlspecialchars($_POST['leeftijd']);
                }
                else{
                    $user_leeftijd=$_SESSION['leeftijd'];
                }

                if(!empty($_POST['loon'])){
                    $user_loon=htmlspecialchars($_POST['loon']);
                }
                else{
                    $user_loon=$_SESSION['loon'];
                }

                if(!empty($_POST['partner_fname'])){
                    $user_pfname=htmlspecialchars($_POST['partner_fname']);
                }
                else{
                    $user_pfname=$_SESSION['pvoornaam'];
                }

                if(!empty($_POST['partner_lname'])){
                    $user_plname= htmlspecialchars($_POST['partner_lname']);
                }
                else{
                    $user_plname=$_SESSION['pachternaam'];
                }

                if(!empty($_POST['status'])){
                    $user_status= htmlspecialchars($_POST['status']);
                }
                else{
                    $user_status=$_SESSION['status'];
                }

                if(!empty($_POST['hypotheek'])){
                    $user_hypotheek= htmlspecialchars($_POST['hypotheek']);
                }
                else{
                    $user_hypotheek=$_SESSION['hypotheek'];
                }


                

                //$checkIfEmailAlreadyUsed=$bdd->prepare('SELECT id FROM users WHERE email= ?');
                //be sure not already exists
                $modif=$bdd->prepare("UPDATE users SET email= ?, Voornaam= ?, Achternaam= ?, Adres= ?, Woonplaats= ?, Postcode= ?, Leeftijd= ?, Loon= ?, Telefonnummer= ?, Partner_Voornaam= ?, Partner_Achternaam= ?, Status= ?, Hypotheek= ? WHERE id=?");
                if($modif->execute(array($user_email,$user_voornaam,$user_achternaam, $user_adres ,$user_woonplaats ,$user_postcode, $user_leeftijd, $user_loon, $user_tel, $user_pfname, $user_plname, $user_status, $user_hypotheek, $_SESSION['id']))){
                    
                

                //get user's data 
                $getInfosOfThisUserReq=$bdd->prepare("SELECT * FROM users WHERE id =? ");
                $getInfosOfThisUserReq->execute(array($_SESSION['id']));
                $usersInfos =$getInfosOfThisUserReq->fetch(); //we keep all the data 

                //log in user
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
                $error='informations are successfully changed';
            } else{ 
                $error='somes difficulties happened, try it later';}

            }else{
                $error="The email is already used";
            }

        } 
