<?php session_start();?>
<?php require('Action/pwd_wijzig.php');?>
<!DOCTYPE html>
<html lang="NL">

<head>	
	<title> Hypotheekvitaal - Wachtwoord wijzig </title>	
	<META	NAME="author"	CONTENT="Kocak Derya">	
	<META	NAME="description"	CONTENT="Login">	
	<META	NAME="geography"	CONTENT="Rotterdam,	South-Holland,	Nertheland">	
	<META	NAME="keywords"	CONTENT="Rotterdam, Hypotheekready">	
	<META	NAME="subject"	CONTENT="Login">	

  <!-- CSS link -->
	<link rel="stylesheet" href="css/Login_Menu.css">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
</head>	

<body>
  
  <!-- Header -->

  <?php include_once('Action/header.php'); ?>

  
  <!--Login Formulier -->

  <div class="formulier">
    <h2 > Wachtwoord wijzig </h2>
    <form class=container method="post">

      <label for="password"> Password <img src="images/eye_hide.png" id="eye" onClick="change()"/></label>
      <input type="password" id="old_password" name="passOld" placeholder="Old Password placeholder"  required>
      
      <label for="password"> New Password </label>
      <input type="password"  id="passOne" name="passOne" placeholder="Password placeholder" title='Minstens 8 tekens inclusief een getal, een hoofdletter, een kleine letter en een symbool (!@#$%^&*=+-_)' pattern='^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}$' required />
      
      <label for="password"> Confirm new Password </label>
      <input type="password"  id="passTwo" name="passTwo" placeholder="Password placeholder" required/>
      
      <button type="submit"  name='validate'> Wijzig </button>
      <?php if(isset($error)){echo '<p style="color:red;font-size:200%;"> <br/><br/>'.$error.'</a>';}?>
    </form>
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
