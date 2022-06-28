
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
       
       $_SESSION['fname'] = $_POST['fname'];
       Header('Location:opt_hypo_verzonden.php');
   
   }}
   