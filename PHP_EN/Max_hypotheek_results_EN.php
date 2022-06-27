<?php session_start();?>
<!DOCTYPE html>
<html lang="NL">

<head>	
	<title> Hypotheekvitaal - Max Mortgage Results</title>	
	<META	NAME="author"	CONTENT="NAPIERALA Lisa">	
	<META	NAME="description"	CONTENT="Max Hypotheek">	
	<META	NAME="geography"	CONTENT="Rotterdam,	South-Holland,	Nertheland">	
	<META	NAME="keywords"	CONTENT="Rotterdam, Hypotheekready">	
	<META	NAME="subject"	CONTENT="Max Hypotheek">	

  <!-- CSS link -->
	<link rel="stylesheet" href="../css/max_hypotheek_2.css">

	<!-- Icon image -->
  <link rel="icon" href="../images/LogoHyp.svg">
  
</head>	

<body>

  <!-- Header -->
  <?php $nav_en_cours = 'bereken'; ?>
  <?php include_once('header_EN.php'); ?>

  <!-- Content --> 

  <!-- Calcul of the max hypotheek -->
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
    // Check if your table in table 3
    $Query = $mydb -> prepare('SELECT * FROM `table 3`');
    $Query -> execute();
    $myArray = $Query->fetchAll();
    $Query->closeCursor();
    

    if(isSet($_POST["salary"] )) $_SESSION['salary'] = $_POST['salary'];
    if(isSet($_POST["choice"] )) $_SESSION['type_mortgage'] = $_POST['choice'];

    if(isSet($_POST['linear'] )) $_SESSION['linear'] = $_POST['linear'];
    if(isSet($_POST["annuitei"] )) $_SESSION['annuitei'] = $_POST['annuitei'];
    if(isSet($_POST["interest"] )) $_SESSION['interest'] = $_POST['interest'];

    foreach($myArray as $cle => $value){
      if (intval($value[0]) > $_SESSION['salary']*0.001){
         // [9] because the toetsrente is 5% 
        $woonquote = floatval( str_replace(",", ".", $myArray[$cle-1][9]) );
        break;
      }
    }
    if ( $_SESSION['salary'] > 110000){
      $woonquote = str_replace(",", ".", $myArray[97][9]);
    }   
        // Percentage interest
        // To change according to the actual interest
        $jaarrente = 0.033;
        $annuitei = ($jaarrente/12) *pow(($jaarrente/12)+1,360) / ( pow(($jaarrente/12)+1,360) -1);
        $_SESSION['max_hypo'] = round( (($_SESSION['salary'] * $woonquote*0.01)/12 )/$annuitei, 2); 
       

        // Calcul of repayment and interest according to the choice made
        if ( $_SESSION['type_mortgage']==='Annuiteitenlening'){
          
          $_SESSION['interest']= round( ($_SESSION['max_hypo']*$jaarrente) /12, 2);
          $_SESSION['repayment'] = round( $_SESSION['max_hypo']*$annuitei- $_SESSION['interest'], 2);
        }
        elseif ($_SESSION['type_mortgage']==='Lineaire lening') {
          $_SESSION['repayment'] = round( $_SESSION['max_hypo']/360, 2);
          $_SESSION['interest'] = round( ($_SESSION['max_hypo']*$jaarrente) /12, 2);
        } 
        else {
          $interest_annuitei = round( ($_SESSION['max_hypo']*$jaarrente) /12, 2);
          $_SESSION['repayment'] = round( $_SESSION['linear']*0.01*($_SESSION['max_hypo']/360) + $_SESSION['annuitei']*0.01*($_SESSION['max_hypo']*$annuitei- $interest_annuitei), 2);

          $_SESSION['interest'] = round( ($_SESSION['max_hypo']*$jaarrente)*$_SESSION['interest']*0.01 + $_SESSION['linear']*0.01*($_SESSION['max_hypo']*$jaarrente) /12 + $_SESSION['annuitei']*0.01*($_SESSION['max_hypo']*$jaarrente) /12, 2);
        }
  
  ?>
<div class="content">
  <div class="results">
    <div class="results-content">
    <h2> <?php echo $_SESSION['type_mortgage'] ?> <h2>
    <h1> Your maximal mortgage </h1>
    <p> € <?php echo number_format($_SESSION['max_hypo'],2,".", " ")?> </p>
    <h2> Repayement </h2>
    <p> € <?php echo number_format($_SESSION['repayment'],2,"."," ") ?> </p>
    <h2> Interest </h2>
    <p> € <?php echo number_format($_SESSION['interest'],2,".", " ") ?> </p>
    <h2> Monthly Cost </h2>
    <p> € <?php echo number_format($_SESSION['interest']+$_SESSION['repayment'],2,".", " ") ?> </p>
    </div>
  </div>

  <!--Formulier -->

  <div class="formulier">
    <!--
    <h2 > Verstuur gegevens </h2>
    <form method="post" action="hypotheek_verzonden.php">
      <label for="email"> E-mailadres </label><br>
      <input type="email" id="frame" name="email" placeholder="Placeholder" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}" autofocus required><br>

      <label for="num"> Telefoonnummer </label><br>
      <input type="number" id="frame" name="num" placeholder="Placeholder" pattern="^(?:0|\(?\+31\)?\s?)[1-9](?:[\.\-\s]?\d\d){4}$" required>

      <input type="submit" value="Verstuur gegevens">

    </form>
  -->
  <?php include('SignUp_EN.php'); ?>
  </div>
</div>
   <!--Footer-->    
  <?php include('footer_EN.php'); ?>

</body>
</html>