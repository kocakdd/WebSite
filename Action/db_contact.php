
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
        if(!empty($_POST['email']) AND !empty($_POST['fname']) AND !empty($_POST['tel']) AND !empty($_POST['text']) AND !empty($_POST['time']) AND !empty($_POST['date'])){
   
       // Writing the resquest
       // Here we want to put the data of the form in our table named contact_form
   
       $sqlQuery = 'INSERT INTO contact_form(fname, email, num,reason,Day ,Time) VALUES (:fname, :email, :num,:reason, :date, :time)';
       // Preparation
       $insertContact = $mydb->prepare($sqlQuery);
   
       // Execution - Data our now in my database
       $insertContact->execute([
           'fname' => htmlspecialchars($_POST['fname']),
           'email' => htmlspecialchars($_POST['email']),
           'num' => htmlspecialchars($_POST['tel']),
           'reason' => htmlspecialchars($_POST['text']),
           'date'=>htmlspecialchars($_POST['date']), 
           'time' => htmlspecialchars($_POST['time'])
       ]);
       
       $_SESSION['fname'] = $_POST['fname'];
       Header('Location:formulier_verzonden.php');
   
   }}
   
// No closing because only php code
// Avoid to have error in the html code