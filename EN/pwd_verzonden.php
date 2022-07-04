<?php session_start();?>
<!DOCTYPE html>
<html lang="EN">

<head>	
	<title> Hypotheekvitaal - Hypotheek </title>	
	<META	NAME="author"	CONTENT="Kocak Derya">	
	<META	NAME="description"	CONTENT="Hypotheek">	
	<META	NAME="geography"	CONTENT="Rotterdam,	South-Holland,	Nertheland">	
	<META	NAME="keywords"	CONTENT="Rotterdam, Hypotheek">	
	<META	NAME="subject"	CONTENT="Hypotheek">	

  <!-- CSS link -->
	<link rel="stylesheet" href="../css/hypotheek_verzonden.css">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
</head>	

<body>

    <!-- Header -->
  <?php $nav_en_cours = 'login'; ?>
  <?php require('header.php'); ?>

  <!-- PHP - Link with the DataBase-->
  <?php require('../Action/db_contact.php'); ?>


  <!-- Body -->
  <!-- htmlspecialchars allow to have the character < and no execution of html code -->
  <div class ="block">
  <p class="title1">  <br/> <br/> We sended your password    </p>
  <!-- Button -->
  <button onclick="window.location.href='Account.php';" class="button"  role="button" >Return to Account </button>
  
  </div>

  <div id="container">
   <div id="main"></div>

   <!--Footer-->
  <?php include('footer.php'); ?>
</div>
</body>
</html>
