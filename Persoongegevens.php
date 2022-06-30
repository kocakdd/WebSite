
<!DOCTYPE html>
<html lang="NL">

<head>	
	<title> Hypotheekvitaal - Persoonsgegevens </title>	
	<META	NAME="author"	CONTENT="Kocak Derya">	
	<META	NAME="description"	CONTENT="Hypotheek">	
	<META	NAME="geography"	CONTENT="Rotterdam,	South-Holland,	Nertheland">	
	<META	NAME="keywords"	CONTENT="Rotterdam, Hypotheek">	
	<META	NAME="subject"	CONTENT="Hypotheek">	

  <!-- CSS link -->
	<link rel="stylesheet" href="css/Persoongegevens.css">

  
	
</head>	

<body>

    <!-- Header -->

  <!-- PHP - Link with the DataBase-->
  <?php require('Action/db_contact.php'); ?>


   <!-- Body  -->
<div class="container">
  <!-- htmlspecialchars allow to have the character < and no execution of html code -->
  <div class ="user_info">
    
    <p class="label1"> Persoonsgegevens </p>
    <div class="row">
    <div class="col">
      <ul>
    <li><p class="label2"> Naam </p></li>
    <li><p class="info"><?= htmlspecialchars($_SESSION['voornaam'])." ".htmlspecialchars($_SESSION['achternaam']) ?></p></li>

    <li><p class="label2"> Adres </p></li>
    <li><p class="info"><?= htmlspecialchars($_SESSION['adres'])."  ".htmlspecialchars($_SESSION['woonplaats'])."  ".htmlspecialchars($_SESSION['postcode']) ?></p></li>

    <li><p class="label2"> E-mail adres </p></li>
    <li><p class="info"><?= htmlspecialchars($_SESSION['email'])?></p><li>
  </ul></div>
    <div class="col">
    <ul>
    <li><p class="label2"> Leeftijd </p></li>
    <li><p class="info"><?= htmlspecialchars($_SESSION['leeftijd']) ?></p></li>

    <li><p class="label2"> Loon </p></li>
    <li><p class="info"><?= htmlspecialchars($_SESSION['loon']) ?></p></li>

    <li><p class="label2"> Telefoonnummer </p></li>
    <li><p class="info"><?= htmlspecialchars($_SESSION['telefonnummer']) ?></p></li>
    </ul>
  </div>

    <div class="col">
      <ul>
    <li><p class="label2"> Naam Partner </p></li>
    <li><p class="info"><?=htmlspecialchars( $_SESSION['pvoornaam'])."  ".htmlspecialchars($_SESSION['pachternaam']) ?></p></li>

    <li><p class="label2"> Status Partner </p></li>
    <li><p class="info"><?= htmlspecialchars($_SESSION['status']) ?></p></li>

    <li><p class="label2"> Hypotheek </p></li>
    <li><p class="info"><?= htmlspecialchars($_SESSION['hypotheek']) ?></p></li>
</ul>
    </div>
    </div>
    <div class="row button">
      <div class="col">
          <p onclick="window.location.href='wachtwoord_wijzig.php';" class="link"> Wijzig uw wachtwoord </p>
      </div>
      <div class="col">
          <p onclick="window.location.href='Logout.php';" class="link"> LogOut </p>
      </div>
    </div>
    
</div>
  </div>


</body>