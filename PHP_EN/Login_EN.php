<?php session_start();?>
<?php require('log_EN.php');?>
<!DOCTYPE html>
<html lang="EN">

<head>	
	<title> Hypotheekvitaal - Login </title>	
	<META	NAME="author"	CONTENT="Kocak Derya">	
	<META	NAME="description"	CONTENT="Login">	
	<META	NAME="geography"	CONTENT="Rotterdam,	South-Holland,	Nertheland">	
	<META	NAME="keywords"	CONTENT="Rotterdam, Hypotheekready">	
	<META	NAME="subject"	CONTENT="Login">	
  <META  charset="UTF-8">
  <META name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS link -->
	<link rel="stylesheet" href="../css/Login.css">

  <!-- Icon image -->
  <link rel="icon" href="../images/LogoHyp.svg">
	
</head>	

<body>
  
  <!-- Header -->

  <?php include_once('header_EN.php'); ?>


  <!--Login Formulier -->
<div class="content">
  <div class="formulier">
    <h2 > Login </h2>
    <form class=container method="post">

      <label for="email"> Email </label><br>
      <input type="email" name="email" placeholder="Email placeholder" required><br>

      <label for="password"> Password <!--img src="../images/eye_hide.png" id="eye" onClick="change()"/--></label><br>
      <input type="password" id="password" name="password" placeholder="Password placeholder"  required><br>
      

      <button type="submit"  name='validate'>Log in</button>
      <a href='wachtwoord_vergeten_EN.php'> Forgot your password? </a>
      <?php if(isset($error)){echo '<p style="color:red;font-size:200%;"> <br/>'.$error.'</p>';}?>
    </form>
  </div> 
</div>
<script>
  e=true;
  function change(){
    if(e){
      document.getElementById("password").setAttribute("type","text");
      document.getElementById("eye").src="../images/eye.png";
      e=false;

    }
    else{
      document.getElementById("password").setAttribute("type","password");
      document.getElementById("eye").src="../images/eye_hide.png";
      e=true;

    }
  }
</script>

  
  <?php include('footer_EN.php'); ?>

</body>
</html>
