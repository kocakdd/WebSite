<?php session_start();?>
<!DOCTYPE html>
<html lang="NL">

<head>	
	<title> Hypotheekvitaal - Formulier </title>	
	<META	NAME="author"	CONTENT="NAPIERALA Lisa">	
	<META	NAME="description"	CONTENT="Hypotheek">	
	<META	NAME="geography"	CONTENT="Rotterdam,	South-Holland,	Nertheland">	
	<META	NAME="keywords"	CONTENT="Rotterdam, Hypotheek">	
	<META	NAME="subject"	CONTENT="Hypotheek">	

  <!-- CSS link -->
	<link rel="stylesheet" href="css/formulier_verzonden.css">

  <!-- Icon image -->
  <link rel="icon" href="images/LogoHyp.svg">
	
</head>	

<body>

  <!-- Header -->
  <?php $nav_en_cours = 'bereken'; ?>
  <?php require('Action/header.php'); ?>



  <!-- Body -->

  <div class="content">
  <!-- htmlspecialchars allow to have the character < and no execution of html code -->
  <div class ="block_text">
  <p class="title1"> <?= htmlspecialchars($_SESSION['fname'].'') ?> Uw aanvraag is ontvangen</p>
  <p class="title2"> U ontvangt op werkdagen binnen ~30 minuten een mail met de optimalisatie berekening ! </p>
  <!-- Button -->
  <button onclick="window.location.href='Home.php';" class="button"  role="button" >Terug naar Home</button>
  
  </div>
  </div>
   <!--Footer-->
  <?php include('Action/footer.php'); ?>
</div>
</body>
</html>
