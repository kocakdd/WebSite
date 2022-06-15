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
  <link rel="stylesheet" href="../css/Contact.css">
	
  <!-- Icon image -->
  <link rel="icon" href="../images/LogoHyp.svg">
</head>	


    <!--Header-->    
<body>  
  <?php include_once('header_EN.php'); ?>

  <!-- Content -->  
<div class="content">
  <img class="desk-image" src="../images/hypotheekAdvies.png" alt="Font Image">

  <div class="first-text-block">
    <h1 class="bigTitle1">Contact</h1>
    <h2 class="bigTitle2">Get in touch</h2>
  </div>

  <div class="second-text-block">
    <h2> Contact us </h2>
    <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At 
    vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit 
    amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et 
    justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
  </div>



  <div class="formulier">
    <h2 > Contact Form </h2>

    <form action="formulier_verzonden.php" method="post">

    <label for="fname"> First- & Last Name </label><br>
      <input type="text" name="fname" placeholder="Name placeholder" pattern="[a-zA-Z- ]{1,60}" autofocus required><br>

      <label for="email"> E-mail </label><br>
      <input type="email" name="email" placeholder="E-mail placeholder" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}" required><br>

      <label for="tel"> Phone number </label><br>
      <input type="tel" name="tel" placeholder="Phone number placeholder" pattern="^(?:0|\(?\+31\)?\s?)[1-9](?:[\.\-\s]?\d\d){4}$" required><br>

      <label for="text"> Redeen voor contact </label><br>
      <textarea rows="3" name="text" placeholder="Textarea placeholder" required></textarea><br>

      <label for="time"> Selecteer een dag en tijdvak</label> <br>
      <input type="date" id="datefield" name="date"  placeholder="Date" min="<?= date('Y-m-d'); ?>" required><br>

      <select id="time" name="time" class="time"  required>
        <optgroup class="opt" >
      <option value=""  disabled selected><h1>Selecteer</h1></option>
      <option value="9-12">9:00-12:00</option>
      <option value="12-15">12:00-15:00</option>
      <option value="15-18">15:00-18:00</option>
      <option value="18-20">18:00-20:00</option>
        </optgroup>
    </select> <br>

      <input type="submit" value="Verstuur Formulier"> <!-- Lien vers Formulier_verdonzen-->
    </form>
  </div>
  
  <div class="form-end">
    <img class="form-image" src="../images/group.png" alt="Font Image">
  </div>
  </div>

   <!--Footer-->   
   <?php include('footer_EN.php'); ?> 

</body>
</html>