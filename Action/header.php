
<!-- Header.php -->

  <!-- CSS link -->

  <link rel="stylesheet" href="css/header.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Font links -->
  <link rel="stylesheet" href="https://use.typekit.net/hmw2slg.css">
  <link rel="stylesheet" href="https://fontsgeek.com/yu-gothic-font">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  
  <div id="loader" class="loader"></div>
  <script>
  document.onreadystatechange = function() 
  {
    if (document.readyState != "complete") 
    {
      document.querySelector("body").style.visibility = "hidden";
      document.querySelector("#loader").style.visibility = "visible";
    } 
    else 
    {
      document.querySelector("#loader").style.display = "none";
      document.querySelector("body").style.visibility = "visible";
    }
  };
  </script>

<nav class="navbar">
      
       
      

      <!-- Add your navigations here -->
      <div class="menu">
       
        <ul class="logo_menu">
          <li> <a href="Home.php"><img src="images/LogoHyp.svg" alt="Logo Compagny"></a></li>
          <li class="text_logo"> <a href="Home.php"> 
            <h2> Hypotheekvitaal</h2>
            <p> Klaar voor een huis</p> 
          </a></li>
        </ul>

        <ul class="link_menu">

          <li><a href="Home.php"><p>Home</p></a></li>
          
          <li> <a href="#"> <p>Diensten</p> </a>
            <ul>
              <li><a href="Hypotheekadvies.php"><p>Hypotheekadvies</p></a></li>
              <li><a href="Hypotheekadvies.php"><p>2nd Opinion</p></a></li>
              <li><a href="Hypotheekadvies.php"><p>Hypotheekready</p></a></li>
            </ul>
          </li>
          
          <li><a href="Team.php"><p>Team</p></a></li>
          <li><a href="Contact.php"><p>Contact</p></a></li>
      
          <?php if(!isset($_SESSION['connexion'])):?>
            <li class="client"><a href="Login.php"> <p>Login</p></a></li>
          <?php else:?>
            <li class="client"><a href="Account.php"><p> Account</p></a></li>
          <?php endif ?>

          <!-- Check if this still work when it will be online -->
          <li class="dutch"> <a href="" > <p>NL </p></a></li>
          <li class="english"> <a href="<?php echo "PHP_EN/".rtrim( basename($_SERVER['PHP_SELF']), ".php")."_EN.php" ; ?>"  ><p> EN</p></a> </li> 
          
        
              
        </ul>
      </div>
  
      <!-- Logos for the navigation bar -->
      <div class ="greenLine"></div>


      
</nav>