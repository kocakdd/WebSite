<?php session_start();?>
<?php include_once('Action/db_contact.php'); ?>
<!DOCTYPE html>
<html lang="NL">

<head>	
	<title> Hypotheekvitaak - Contact </title>	
	<META	NAME="author"	CONTENT="NAPIERALA Lisa">	
	<META	NAME="description"	CONTENT="Home">	
	<META	NAME="geography"	CONTENT="Rotterdam,	South-Holland,	Nertheland">	
	<META	NAME="keywords"	CONTENT="Rotterdam, Home">	
	<META	NAME="subject"	CONTENT="Home">	
  <META  charset="UTF-8">
  <META name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS link -->
  <link rel="stylesheet" href="css/Contact.css">
  
	<!-- Icon image -->
  <link rel="icon" href="images/LogoHyp.svg">
</head>	


    <!--Header-->    
<body>  
  <?php $nav_en_cours = 'contact'; ?>
  <?php include_once('Action/header.php'); ?>

  <!-- Content -->  
<div class="content">
  <img class="desk-image" src="images/hypotheekAdvies.png" alt="Font Image">

  <div class="first-text-block">
    <h1 class="bigTitle1">Contact</h1>
    <h2 class="bigTitle2">Get in touch</h2>
  </div>

  <div class="second-text-block">
    <h2> Neem contact op </h2>
    <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At 
    vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit 
    amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et 
    justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
  </div>



  <div class="formulier">
    <h2 > ContactFormulier </h2>

    <form method="post">

    <label for="fname"> Voor- & Achternaam </label><br>
      <input type="text" name="fname" placeholder="Voornaam placeholder" pattern="[a-zA-Z- ]{1,60}" required><br>

      <label for="email"> E-mailadres </label><br>
      <input type="email" name="email" placeholder="E-mail placeholder" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}" required><br>

      <label for="tel"> Telefoonnummer </label><br>
      <input type="tel" name="tel" placeholder="Telefoonnummer placeholder" pattern="^(?:0|\(?\+31\)?\s?)[1-9](?:[\.\-\s]?\d\d){4}$" required><br>

      <label for="text"> Redeen voor contact </label><br>
      <textarea rows="3" name="text" placeholder="Textarea placeholder" required></textarea><br>

      <label for="time"> Selecteer een dag en tijdvak</label> <br>
      <input type="date" id="datefield" name="date"  placeholder="Date" min="<?= date('Y-m-d',strtotime("+1 day")); ?>" required><br>

      <select id="time" name="time" class="time"  required>
        <optgroup class="opt" >
      <option value=""  disabled selected><h1>Selecteer</h1></option>
      <option value="9-12">9:00-12:00</option>
      <option value="12-15">12:00-15:00</option>
      <option value="15-18">15:00-18:00</option>
      <option value="18-20">18:00-20:00</option>
        </optgroup>
    </select> <br>

      <input type="submit" name="validate" value="Verstuur Formulier"> 
    </form>
  </div>
  

</div>
   <!--Footer-->   
   <?php include('Action/footer.php'); ?> 

</body>
</html>