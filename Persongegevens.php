<!DOCTYPE html>
<html lang="NL">

<head>	
	<title> Hypotheekvitaal - Persongegevens </title>	
	<META	NAME="author"	CONTENT="Kocak Derya">	
	<META	NAME="description"	CONTENT="Hypotheek">	
	<META	NAME="geography"	CONTENT="Rotterdam,	South-Holland,	Nertheland">	
	<META	NAME="keywords"	CONTENT="Rotterdam, Hypotheek">	
	<META	NAME="subject"	CONTENT="Hypotheek">	

  <!-- CSS link -->
	<link rel="stylesheet" href="css/Persongegevens.css">

  
	
</head>	

<body>

    <!-- Header -->
  <?php require('Action/header.php'); ?>

  <!-- PHP - Link with the DataBase-->
  <?php require('Action/db_contact.php'); ?>


   <!-- Body  -->
<div class="body">
  <!-- htmlspecialchars allow to have the character < and no execution of html code -->
  <div class ="block">
    
    <p class="label1"> Persoonsgegevens </p>
    <div class="row">
    <div class="col">
    <p class="label2"> Naam </p>
    <p class="content"><?= htmlspecialchars($_SESSION['voornaam'])." ".htmlspecialchars($_SESSION['achternaam']) ?></p>

    <p class="label2"> Adres </p>
    <p class="content"><?= htmlspecialchars($_SESSION['adres'])."  ".htmlspecialchars($_SESSION['woonplaats'])."  ".htmlspecialchars($_SESSION['postcode']) ?></p>

    <p class="label2"> E-mail adres </p>
    <p class="content"><?= htmlspecialchars($_SESSION['email'])?></p>
    </div>
    <div class="col">
    <p class="label2"> Leeftijd </p>
    <p class="content"><?= htmlspecialchars($_SESSION['leeftijd']) ?></p>

    <p class="label2"> Loon </p>
    <p class="content"><?= htmlspecialchars($_SESSION['loon']) ?></p>

    <p class="label2"> Telefoonnummer </p>
    <p class="content"><?= htmlspecialchars($_SESSION['telefonnummer']) ?></p>
    </div>

    <div class="col">
    <p class="label2"> Naam Partner </p>
    <p class="content"><?=htmlspecialchars( $_SESSION['pvoornaam'])."  ".htmlspecialchars($_SESSION['pachternaam']) ?></p>

    <p class="label2"> Status Partner </p>
    <p class="content"><?= htmlspecialchars($_SESSION['status']) ?></p>

    <p class="label2"> Hypotheek </p>
    <p class="content"><?= htmlspecialchars($_SESSION['hypotheek']) ?></p>
    </div>
    </div>
    <p class="label2"> Wachtwoord </p>
    <a href="wachtwoord_wijzig.php"><p class="link"> Wijzig uw wachtwoord </p></a>

    </div>
  </div>

  <?php include('Action/footer.php'); ?>

</div>