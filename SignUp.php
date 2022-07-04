
<?php require('Action/sUp.php');?>
<!DOCTYPE html>
<html lang="NL">

<head>	


  <!-- CSS link -->
	<link rel="stylesheet" href="css/SignUp.css">

</head>	


  
  <!--Login Formulier -->

  <div class="formulier2">
    <h2 > SUSCRIBE </h2>
    <?php if(isset($error)){echo '<p style="color:red;font-size:150%;">    '.$error.'</a>';}?>
    <form class=container method="post">

      <label for="fname"> Voornaam </label><br>
      <input type="text" name="fname" placeholder="Voornaam placeholder" required><br>

      <label for="lname"> Achternaam </label><br>
      <input type="text" name="lname" placeholder="Achternaam placeholder" required><br>
      <label for="Telefonnummer"> Telefonnummer </label><br>
      <input type="number" name="telefonnummer" placeholder="Telefonnummer placeholder" required><br>

      <label for="email"> Email </label><br>
      <input type="email" name="email" placeholder="Email placeholder" required><br>

      <label for="password"> Password <!-- <img src="images/eye_hide.png" id="eye" onClick="changepass()"/> --></label><br>
      <input type="password" id="password" name="password" placeholder="Password placeholder" title='Minstens 8 tekens inclusief een getal, een hoofdletter, een kleine letter en een symbool (!@#$%^&*=+-_)' pattern='^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}$' required />

      
      <!--!
      <label for="Adres"> Adres </label>
      <input type="text" name="adres" placeholder="Adres placeholder" required>
      -->
      
      <!--
      <label for="Woonplaats"> Woonplaats </label>>
      <input type="text" name="woonplaats" placeholder="Achternaam placeholder" required>

      <label for="Postcode"> Postcode </label>>
      <input type="text" name="postcode" placeholder="Postcode placeholder" required>

      <label for="Leeftijd"> Leeftijd </label>>
      <input type="number" name="leeftijd" placeholder="Leeftijd placeholder" required>

      <label for="Loon"> Loon </label>>
      <input type="number" name="loon" placeholder="Loon placeholder" required>

      <label for="partner_fname"> Partner Voornaam </label>
      <input type="text" name="partner_fname" placeholder="Partner Voornaam placeholder" >

      <label for="partner_lname"> Partner Achternaam </label>
      <input type="text" name="partner_lname" placeholder="Partner Achternaam placeholder" >

      <label for="Status"> Status  </label>
      <input type="text" name="status" placeholder="(Getrouwd / Samewonenend)" >

      <label for="hypotheek"> Hypotheek  </label>
      <input type="text" name="hypotheek" placeholder="(geen/ lopende/ afgestolen)" >
      -->
      <button type="submit"  name='validate' >Suscribe</button>
      
    </form>
  </div> 
  <script>
    e=true;
    function changepass(){
      if(e){
        document.getElementById("password").setAttribute("type","text");
        document.getElementById("eye").src="images/eye.png";
        e=false;

      }
      else{
        document.getElementById("password").setAttribute("type","password");
        document.getElementById("eye").src="images/eye_hide.png";
        e=true;

      }
    }
</script>


</html>