<?php

session_start();

if (
    (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    || (!isset($_POST['num']) || empty($_POST['num']))
    ) 
{
    echo('Error - You need a valide email to sent the formulier.');
    return;
} ?> <!-- if the form isn't complete or have a wrong email-->
<?php 
    try
    {
        // Connection at MySQL
        // My database is data_contact
        $mydb = new PDO('mysql:host=localhost;dbname=data_contact;charset=utf8;', "root", "root"); 
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
    $sqlQuery = 'INSERT INTO hypotheek_form(max_hypo, monthly_cost, rente, email, num) VALUES (:max_hypo, :monthly_cost, :rente, :email, :num)';
    // Preparation
    $insertContact = $mydb->prepare($sqlQuery);

    // Execution - Data our now in my database
    $insertContact->execute([
        'max_hypo' => $_SESSION['max_hypo'],
        'repayment' => $_SESSION['repayment'],
        'interest' => $_SESSION['interest'],
        'email' => htmlspecialchars($_POST['email']),
        'num' => $_POST['num'], 
    ]);

// No closing because only php code
// Avoid to have error in the html code