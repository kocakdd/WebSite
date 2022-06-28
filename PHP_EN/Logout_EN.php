<?php session_start();?>
<?php require('log_out_EN.php'); ?>
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
  <?php require('header_EN.php'); ?>

  <!-- PHP - Link with the DataBase-->
  <?php require('../Action/db_contact.php'); ?>


  <!-- Body -->
  <!-- htmlspecialchars allow to have the character < and no execution of html code -->
  <div class ="block_text">
  <p class="title1">Do you want to Logout ? </p>
  <!-- Button -->
  <form method="post" >
  <button  class="button" type="submit" name="logout" >LogOut</button>
  </form>
  </div>

  <div id="container">
   <div id="main"></div>

   <!--Footer-->
  <?php include('footer_EN.php'); ?>
</div>
</body>
</html>