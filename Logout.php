<?php session_start();?>
<?php require('Action/log_out.php'); ?>
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

  
  <!-- Icon image -->
  <link rel="icon" href="images/LogoHyp.svg">
  
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
  <p class="title1">Wilt u de verbinding verbreken? </p>
  <!-- Button -->
  <form method="post" >
  <button  class="button" type="submit" name="logout" >LogOut</button>
  </form>
  </div>

  </div>
   <!--Footer-->
  <?php include('Action/footer.php'); ?>

</body>
</html>