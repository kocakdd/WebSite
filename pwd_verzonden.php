<?php session_start();?>
<!DOCTYPE html>
<html lang="NL">

<head>	
	<title> Hypotheekvitaal - Hypotheek </title>	
	<META	NAME="author"	CONTENT="Kocak Derya">	
	<META	NAME="description"	CONTENT="Hypotheek">	
	<META	NAME="geography"	CONTENT="Rotterdam,	South-Holland,	Nertheland">	
	<META	NAME="keywords"	CONTENT="Rotterdam, Hypotheek">	
	<META	NAME="subject"	CONTENT="Hypotheek">	

  <!-- CSS link -->
	<link rel="stylesheet" href="css/formulier_verzonden.css">


</head>	

<body>

    <!-- Header -->
    <?php $nav_en_cours = 'account'; ?>
  <?php require('Action/header.php'); ?>

  <!-- PHP - Link with the DataBase-->
  <?php require('Action/db_contact.php'); ?>

<div class="content">
  <!-- Body -->
  <!-- htmlspecialchars allow to have the character < and no execution of html code -->
  <div class ="block_text">
  <p class="title1">  <br/> <br/> Uw wachtwoord is gewijzigd  </p>
  <!-- Button -->
  <a href="Account.php"><button class="button"  role="button" >Terug naar Account </button></a>
  
  </div>

</div>

   <!--Footer-->
  <?php include('Action/footer.php'); ?>

</body>
</html>
