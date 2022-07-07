<?php session_start();?>
<?php require('Action/sUp.php');?>
<!DOCTYPE html>
<html lang="NL">

<head>	
	<title> Hypotheekvitaal - Modify </title>	
	<META	NAME="author"	CONTENT="Kocak Derya">	
	<META	NAME="description"	CONTENT="SignUp">	
	<META	NAME="geography"	CONTENT="Rotterdam,	South-Holland,	Nertheland">	
	<META	NAME="keywords"	CONTENT="Rotterdam, Hypotheekready">	
	<META	NAME="subject"	CONTENT="Signup">	
  <META  charset="UTF-8">
  <META name="viewport" content="width=device-width, initial-scale=1">



  <!-- Icon image -->
  <link rel="icon" href="images/LogoHyp.svg">
	

  <!-- CSS link -->
	<link rel="stylesheet" href="css/SignUp.css">

</head>	

<body>
    <!-- Header -->
  <?php $nav_en_cours = 'Account'; ?>
  <?php require('Action/header.php'); ?>

  
  <!--Login Formulier -->

  <div class="formulier2">
    <h2 > Persoonsgegevens </h2>
    <?php if(isset($error)){echo '<p style="color:red;font-size:150%;">    '.$error.'</a>';}?>
    <div class="row">  
    <div class="col">
    <form class=container method="post">
  
      <label for="fname"> Voornaam </label><br>
      <input type="text" name="fname" style="font-size:80%;color:grey;" value=<?= htmlspecialchars($_SESSION['voornaam']) ?>  required><br>

      <label for="lname"> Achternaam </label><br>
      <input type="text" name="lname" style="font-size:80%;color:grey;" value=<?= htmlspecialchars($_SESSION['achternaam']) ?>  required><br>
      <label for="Telefonnummer"> Telefonnummer </label><br>
      <input type="number" name="telefonnummer" style="font-size:80%;color:grey;" value=<?= htmlspecialchars($_SESSION['telefonnummer']) ?>  required><br>
      <label for="email"> Email </label><br>
      <input type="email" name="email" style="font-size:80%;color:grey;"  value=<?= htmlspecialchars($_SESSION['email'])?>  required><br>
      
      <label for="Adres"> Adres </label>
      <input type="text" name="adres" style="font-size:80%;color:grey;" value=<?= htmlspecialchars($_SESSION['adres'])?>  >
      
      <label for="Woonplaats"> Woonplaats </label>
      <input type="text" name="woonplaats" style="font-size:80%;color:grey;" value=<?= htmlspecialchars($_SESSION['woonplaats'])?>>

      <label for="Postcode"> Postcode </label>
      <input type="text" name="postcode" style="font-size:80%;color:grey;" value=<?= htmlspecialchars($_SESSION['postcode'])?>>
      </form>  
      </div>
      <div class="col two">
      <form class=container method="post">
      <label for="Leeftijd"> Leeftijd </label>
      <input type="number" name="leeftijd" style="font-size:80%;color:grey;" value=<?= htmlspecialchars($_SESSION['leeftijd'])?>>

      <label for="Loon"> Loon </label>
      <input type="number" name="loon" style="font-size:80%;color:grey;" value=<?= htmlspecialchars($_SESSION['loon'])?>>

      <label for="partner_fname"> Partner Voornaam </label>
      <input type="text" name="partner_fname" style="font-size:80%;color:grey;" value=<?= htmlspecialchars($_SESSION['pvoornaam'])?>>

      <label for="partner_lname"> Partner Achternaam </label>
      <input type="text" name="partner_lname" style="font-size:80%;color:grey;" value=<?= htmlspecialchars($_SESSION['pachternaam'])?>>

      <label for="Status"> Status <p class="info" style="font-size:70%;color:grey;line-height:7px;">Getrouwd / Samewonenend</p></label>
      <input type="text" name="status" style="font-size:80%;color:grey;" value=<?= htmlspecialchars($_SESSION['status'])?>>

      <label for="hypotheek"> Hypotheek  <p class="info"style="font-size:70%;color:grey;line-height:7px">geen/ lopende/ afgestolen</p></label>
      <input type="text" name="hypotheek" style="font-size:80%;color:grey;" value=<?= htmlspecialchars($_SESSION['hypotheek'])?> >
      
    </form> 
    </div> 
    
  </div> 
  <div class="row">
    <div class="col last-row">
  <button type="submit"  name='validate' >Modify</button>
</div>
  <div class="col last-row">
  <button type="submit"  name='back' >Cancel</button>
</div>  
</div>
</div>
  
<?php include('Action/footer.php'); ?>

</html>