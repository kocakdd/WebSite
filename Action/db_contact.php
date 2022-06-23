
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

    // If everything if alright, we continue
    // Writing the resquest
    // Here we want to put the data of the formulier in our table named contact_form
    $sqlQuery = 'INSERT INTO contact_form(fname, email, num,reason,Day ,Time) VALUES (:fname, :email, :num,:reason, :date, :time)';
    // Preparation
    $insertContact = $mydb->prepare($sqlQuery);

    // For the transition between the english page and the original one
    if(isSet($_POST["fname"] )) $_SESSION['fname'] = $_POST['fname'];
    if(isSet($_POST["email"] )) $_SESSION['email'] = $_POST['email'];
    if(isSet($_POST["tel"] )) $_SESSION['tel'] = $_POST['tel'];
    if(isSet($_POST["text"] )) $_SESSION['text'] = $_POST['text'];
    if(isSet($_POST["date"] )) $_SESSION['date'] = $_POST["date"];
    if(isSet($_POST["time"] )) $_SESSION['time'] = $_POST['time'];

    // Execution - Data our now in my database
    $insertContact->execute([
        'fname' => htmlspecialchars($_SESSION['fname']),
        'email' => htmlspecialchars($_SESSION['email']),
        'num' => htmlspecialchars($_SESSION['tel']),
        'reason' => htmlspecialchars($_SESSION['text']),
        'date'=>htmlspecialchars($_SESSION['date']), 
        'time' => htmlspecialchars($_SESSION['time'])
    ]);


// No closing because only php code
// Avoid to have error in the html code