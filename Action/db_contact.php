<?php
if (
    (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    || (!isset($_POST['fname']) || empty($_POST['fname']))
    || (!isset($_POST['lname']) || empty($_POST['lname']))
    || (!isset($_POST['tel']) || empty($_POST['tel']))
    ) 
{
    echo('Error - You need a valide email to sent the formulier.');
    return;
} ?> <!-- if the form isn't complete or have a wrong email -->
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
    $sqlQuery = 'INSERT INTO contact_form(fname, lname, email, num,Day ,Time) VALUES (:fname, :lname, :email, :num, :date, :time)';
    // Preparation
    $insertContact = $mydb->prepare($sqlQuery);

    // Execution - Data our now in my database
    $insertContact->execute([
        'fname' => htmlspecialchars($_POST['fname']),
        'lname' => htmlspecialchars($_POST['lname']),
        'email' => htmlspecialchars($_POST['email']),
        'num' => htmlspecialchars($_POST['tel']),
        'date'=>htmlspecialchars($_POST['date']), 
        'time' => htmlspecialchars($_POST['time'])
    ]);

// No closing because only php code
// Avoid to have error in the html code