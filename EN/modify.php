<?php session_start();?>
<?php require('../Action/modif.php');?>
<!DOCTYPE html>
<html lang="EN">

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
  <link rel="icon" href="../images/LogoHyp.svg">
	

  <!-- CSS link -->
	<link rel="stylesheet" href="../css/SignUp.css">

</head>	

<body>
    <!-- Header -->
  <?php $nav_en_cours = 'Account'; ?>
  <?php require('header.php'); ?>

  
  <!--Login Formulier -->

  <div class="formulier2">
  <form class=container method="post">  
  <h2 > Personal Informations </h2>
    <?php if(isset($error)){echo '<p style="color:red;font-size:80%;">    '.$error.'</a>';}?>
    <div class="row">  
    <div class="col">
    
  
      <label for="fname"> First name </label><br>
      <input type="text" name="fname" style="font-size:80%;color:grey;" value='<?= htmlspecialchars($_SESSION['voornaam']) ?>'  required><br>

      <label for="lname"> Last name </label><br>
      <input type="text" name="lname" style="font-size:80%;color:grey;" value='<?= htmlspecialchars($_SESSION['achternaam']) ?>'  required><br>
      <label for="Telefonnummer"> Phone number </label><br>
      <input type="number" name="telefonnummer" style="font-size:80%;color:grey;" value='<?= htmlspecialchars($_SESSION['telefonnummer']) ?>'  required><br>
      <label for="email"> Email </label><br>
      <input type="email" name="email" style="font-size:80%;color:grey;"  value='<?= htmlspecialchars($_SESSION['email'])?>'  required><br>
      
      <label for="Adres"> Adres </label>
      <input type="text" name="adres" style="font-size:80%;color:grey;" value='<?= htmlspecialchars($_SESSION['adres'])?>'  >
      
      <label for="Woonplaats"> City </label>
      <input type="text" name="woonplaats" style="font-size:80%;color:grey;" value='<?= htmlspecialchars($_SESSION['woonplaats'])?>'>

      <label for="Postcode"> Postcode </label>
      <input type="text" name="postcode" style="font-size:80%;color:grey;" value='<?= htmlspecialchars($_SESSION['postcode'])?>'>
      
      </div>
      <div class="col two">
      
      <label for="Leeftijd"> Age </label>
      <input type="number" name="leeftijd" style="font-size:80%;color:grey;" value='<?= htmlspecialchars($_SESSION['leeftijd'])?>'>

      <label for="Loon"> Salary </label>
      <input type="number" name="loon" style="font-size:80%;color:grey;" value='<?= htmlspecialchars($_SESSION['loon'])?>'>

      <label for="partner_fname"> Partner First Name </label>
      <input type="text" name="partner_fname" style="font-size:80%;color:grey;" value='<?= htmlspecialchars($_SESSION['pvoornaam'])?>'>

      <label for="partner_lname"> Partner Last Name </label>
      <input type="text" name="partner_lname" style="font-size:80%;color:grey;" value='<?= htmlspecialchars($_SESSION['pachternaam'])?>'>

      <label for="Status"> Status <p class="info" style="font-size:70%;color:grey;line-height:7px;">Getrouwd / Samewonenend</p></label>
      <input type="text" name="status" style="font-size:80%;color:grey;" value='<?= htmlspecialchars($_SESSION['status'])?>'>

      <label for="hypotheek"> Mortgage  <p class="info"style="font-size:70%;color:grey;line-height:7px">geen/ lopende/ afgestolen</p></label>
      <input type="text" name="hypotheek" style="font-size:80%;color:grey;" value='<?= htmlspecialchars($_SESSION['hypotheek'])?> '>
      
    
    </div> 
    
  </div> 

  <div class="row">
  <div class="col last-row">
  
    <button type="submit"  name='back' >Back to Account</button>
  
  </div>  
  <div class="col last-row">
 
    <button type="submit"  name='validate' >Save</button>
  
</div>
</div>
</form>
</div>
  
<?php include('footer.php'); ?>

</html>