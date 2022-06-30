
<?php
    try
    {
        // Connection at MySQL
        // My database is data_contact
        $mydb = new PDO('mysql:host=localhost;dbname=data_contact;charset=utf8', 'root', 'root'); 
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    }
    catch(Exception $e)
    {
        // If there is an error, stop the process
            die('Error : '.$e->getMessage());
    }

    if(isset($_POST['validate'])){ 
        if(!empty($_POST['email']) AND !empty($_POST['fname']) AND !empty($_POST['loan_amount']) AND !empty($_POST['gross_income']) AND !empty($_POST['monthly_budget']) AND !empty($_POST['house_price']) AND !empty($_POST['woz_value']) AND !empty($_POST['age_retirement'])){
   
       // Writing the resquest
       // Here we want to put the data of the form in our table named contact_form
   
       $sqlQuery = 'INSERT INTO optimal_hypotheek(fname, email, loan_amount,gross_income,monthly_budget,house_price,woz_value,age_retirement ) VALUES (:fname, :email, :loan_amount, :gross_income, :monthly_budget, :house_price, :woz_value, :age_retirement)';
       // Preparation
       $insertContact = $mydb->prepare($sqlQuery);
   
       // Execution - Data our now in my database
       $insertContact->execute([
           'fname' => htmlspecialchars($_POST['fname']),
           'email' => htmlspecialchars($_POST['email']),
           'loan_amount' => htmlspecialchars($_POST['loan_amount']),
           'gross_income' => htmlspecialchars($_POST['gross_income']),
           'monthly_budget'=>htmlspecialchars($_POST['monthly_budget']), 
           'house_price' => htmlspecialchars($_POST['house_price']),
           'woz_value'=>htmlspecialchars($_POST['woz_value']), 
           'age_retirement' => htmlspecialchars($_POST['age_retirement'])
       ]);
       

        // Creation of the file with all of the information
       $fichier = fopen($_POST['fname'].'_optimalhypotheek.txt', 'c+b');
        fwrite($fichier, "Name : ".$_POST['fname']);
        fwrite($fichier, "\nEmail : ".$_POST['email']);
        fwrite($fichier, "\nLoan Amount : ".$_POST['loan_amount']);
        fwrite($fichier, "\nGross Income : ".$_POST['gross_income']);
        fwrite($fichier, "\nMonthly Budget : ".$_POST['monthly_budget']);
        fwrite($fichier, "\nValue of the House : ".$_POST['house_price']);
        fwrite($fichier, "\nWOZ value of the House : ".$_POST['woz_value']);
        fwrite($fichier, "\nAge of Retirement : ".$_POST['age_retirement']);



    $user_email =  'lnapierala@quickfacts.nl'; //receiver of the mail (put the email of the data scientist)
    $subject = "Optimal Hypotheek";
    $message = "Attached the data for the Optimal Hypotheek.\n Below also all of the informations";
    $message.= "Name : ".$_POST['fname']."\nEmail : ".$_POST['email']."\nLoan Amount : ".$_POST['loan_amount']."\nGross Income : ".$_POST['gross_income']."\nMonthly Budget : ".$_POST['monthly_budget']."\nValue of the House : ".$_POST['house_price']."\nWOZ value of the House : ".$_POST['woz_value']."\nAge of Retirement : ".$_POST['age_retirement'] ;

    $email_from = "info@hypotheekvitaal.nl";
    $nom = "Hypotheekvitaal";
    $passage_ligne = "\n";
    $boundary = md5(rand()); // clé aléatoire de limite
    $headers = "From: ".$nom." <".$email_from.">" . $passage_ligne; //Emetteur
    $headers.= "Reply-to: ".$nom." <".$email_from.">" . $passage_ligne; //Emetteur
    $headers.= "MIME-Version: 1.0" . $passage_ligne; //Version de MIME
    $headers.= 'Content-Type: multipart/mixed; boundary='.$boundary .' '. $passage_ligne; 

    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }

    $nom_fichier = $_POST['fname'].'_optimalhypotheek.txt';
    $email_message = '--' . $boundary . $passage_ligne; //Séparateur d'ouverture
    $email_message .= "Content-Type: text/plain; charset=utf-8" . $passage_ligne; //Type du contenu
    $email_message .= "Content-Transfer-Encoding: 8bit" . $passage_ligne; //Encodage
    $email_message .= $passage_ligne .clean_string($message). $passage_ligne; //Contenu du message

    $handle = fopen($nom_fichier, 'r'); //Ouverture du fichier  
    $content = fread($handle, filesize($nom_fichier) ); //Lecture du fichier
    $encoded_content = chunk_split(base64_encode($content)); //Encodage
    $f = fclose($handle); //Fermeture du fichier
            
    $email_message .= $passage_ligne . "--" . $boundary . $passage_ligne; //Deuxième séparateur d'ouverture
    $email_message .= 'Content-type:'.'txt'.';name="'.$nom_fichier.'"'. $passage_ligne; //Type de contenu (application/pdf ou image/jpeg)
    $email_message .='Content-Disposition: attachment; filename="'.$nom_fichier.'"'. $passage_ligne; //Précision de pièce jointe
    $email_message .= 'Content-transfer-encoding:base64'. $passage_ligne; //Encodage
    $email_message .= $passage_ligne; //Ligne blanche. IMPORTANT !
    $email_message .= $encoded_content. $passage_ligne; //Pièce jointe
    $email_message .= $passage_ligne . "--" . $boundary . "--" . $passage_ligne; //Séparateur de fermeture
    
    mail($user_email, $subject, $email_message, $headers, "-f".$email_from);

    unlink($nom_fichier);//delete the file from the serveur

    $_SESSION['fname'] = $_POST['fname'];
    Header('Location:opt_hypo_verzonden.php');
   
   }
}
   