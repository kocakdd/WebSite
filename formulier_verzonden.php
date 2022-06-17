<!DOCTYPE html>
<html lang="NL">

<head>	
	<title> Hypotheekvitaal - Formulier </title>	
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
  <?php require('Action/header.php'); ?>

  <!-- PHP - Link with the DataBase-->
  <?php require('Action/db_contact.php'); ?>


  <!-- Body -->

  <div class="content">
  <!-- htmlspecialchars allow to have the character < and no execution of html code -->
  <div class ="block_text">
  <p class="title1"> <?= htmlspecialchars($_SESSION['fname']) ?> uw formulier is verzonden</p>
  <p class="title2"> Wij nemen zo snel mogelijk contact met u op ! </p>
  <!-- Button -->
  <a href="Home.php"><button class="button"  role="button" >Terug naar Home</button></a>
  
  </div>
  </div>

   <!--Footer-->
  <?php include('Action/footer.php'); ?>
</div>
</body>
</html>