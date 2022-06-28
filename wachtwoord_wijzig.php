<?php session_start();?>
<?php require('Action/pwd_wijzig.php');?>
<!DOCTYPE html>
<html lang="NL">

<head>	
	<title> Hypotheekvitaal - Wachtwoord wijzig  </title>	
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <META	NAME="author"	CONTENT="Kocak Derya">	
	<META	NAME="description"	CONTENT="wachtwoord">	
	<META	NAME="geography"	CONTENT="Rotterdam,	South-Holland,	Nertheland">	
	<META	NAME="keywords"	CONTENT="Rotterdam, Hypotheekready">	
	<META	NAME="subject"	CONTENT="Login">	
  <META  charset="UTF-8">
  

  <!-- CSS link -->
	<link rel="stylesheet" href="css/wachtwoord_wijzig.css">

  <!-- Icon image -->
  <link rel="icon" href="images/LogoHyp.svg">
	
</head>	

<body>
  <!-- Header -->
  <?php $nav_en_cours = 'account'; ?>
  <?php include_once('Action/header.php'); ?>
  
  <!--Login Formulier -->
  <div class="content">
  <div class="formulier">
    <h2 > Wachtwoord wijzig </h2>
    <form class=container method="post">

      <label for="password"> Password <!--<img src="images/eye_hide.png" id="eye" onClick="change()"/>--></label><br>
      <input class="holder" type="password" id="old_password" name="passOld" placeholder="Old Password placeholder"  required><br>
      
      <label for="password"> New Password </label><br>
      <input class="holder" type="password"  id="passOne" name="passOne" placeholder="Password placeholder" title='Minstens 8 tekens inclusief een getal, een hoofdletter, een kleine letter en een symbool (!@#$%^&*=+-_)' pattern='^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}$' required ><br>
      
      <label for="password"> Confirm new Password </label><br>
      <input class="holder" type="password"  id="passTwo" name="passTwo" placeholder="Password placeholder" required><br>
      
      <button type="submit"  name='validate'> Wijzig </button>
      <?php if(isset($error)){echo '<p style="color:red;font-size:200%;"> <br/><br/>'.$error.'</a>';}?><br>
    </form>
  </div> 
  </div>
<script>
  var password = document.getElementById("passOne")
  , confirm_password = document.getElementById("passTwo");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

e=true;
  function change(){
    if(e){
      document.getElementById("old_password").setAttribute("type","text");
      document.getElementById("eye").src="images/eye.png";
      e=false;

    }
    else{
      document.getElementById("old_password").setAttribute("type","password");
      document.getElementById("eye").src="images/eye_hide.png";
      e=true;

    }
  }

</script>
 
 <!-- footer -->
  
  <?php include('Action/footer.php'); ?>

</body>
</html>
