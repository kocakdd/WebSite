
<!DOCTYPE html>
<html lang="EN">

<head>	
	<title> Hypotheekvitaal - Personal Information </title>	
	<META	NAME="author"	CONTENT="Kocak Derya">	
	<META	NAME="description"	CONTENT="Hypotheek">	
	<META	NAME="geography"	CONTENT="Rotterdam,	South-Holland,	Nertheland">	
	<META	NAME="keywords"	CONTENT="Rotterdam, Hypotheek">	
	<META	NAME="subject"	CONTENT="Hypotheek">	

  <!-- CSS link -->
	<link rel="stylesheet" href="../css/Persoongegevens.css">

  
	
</head>	

<body>

    <!-- Header -->

  <!-- PHP - Link with the DataBase-->
  <?php require('../Action/db_contact.php'); ?>


   <!-- Body  -->
  <div class="container">
  <!-- htmlspecialchars allow to have the character < and no execution of html code -->
  <div class ="user_info">
    
    <p class="label1"> Personal Informations <a href="modify.php"><img style="height:100%;opacity:0.8;" src="images/modify.png"/></a></p>
    <div class="row">
    <div class="col">
      <ul>
    <li><p class="label2"> Name</p></li>
    <li><p class="info"><?= htmlspecialchars($_SESSION['voornaam'])." ".htmlspecialchars($_SESSION['achternaam']) ?></p></li>

    <li><p class="label2"> Address </p></li>
    <li><p class="info"><?= htmlspecialchars($_SESSION['adres'])."  ".htmlspecialchars($_SESSION['woonplaats'])."  ".htmlspecialchars($_SESSION['postcode']) ?></p></li>

    <li><p class="label2"> E-mail  </p></li>
    <li><p class="info"><?= htmlspecialchars($_SESSION['email'])?></p><li>
  </ul></div>
    <div class="col">
    <ul>
    <li><p class="label2"> Age </p></li>
    <li><p class="info"><?= htmlspecialchars($_SESSION['leeftijd']) ?></p></li>

    <li><p class="label2"> Salary </p></li>
    <li><p class="info"><?= htmlspecialchars($_SESSION['loon']) ?></p></li>

    <li><p class="label2"> Phone number </p></li>
    <li><p class="info"><?= htmlspecialchars($_SESSION['telefonnummer']) ?></p></li>
  </ul>
  </div>
  <div class="col">
      <ul>
    <li><p class="label2"> Partner's name </p></li>
    <li><p class="info"><?=htmlspecialchars( $_SESSION['pvoornaam'])."  ".htmlspecialchars($_SESSION['pachternaam']) ?></p></li>

    <li><p class="label2"> Partner's Status </p></li>
    <li><p class="info"><?= htmlspecialchars($_SESSION['status']) ?></p></li>

    <li><p class="label2"> Mortgage </p></li>
    <li><p class="info"><?= htmlspecialchars($_SESSION['hypotheek']) ?></p></li>
</ul>
    </div>
    </div>
    <div class="row button">
      <div class="col">
          <p onclick="window.location.href='wachtwoord_wijzig.php';" class="link"> Change your password </p>
      </div>
      <div class="col">
          <p onclick="window.location.href='Logout.php';" class="link"> LogOut </p>
      </div>
    </div>
    
  </div>
  </div>


</body>