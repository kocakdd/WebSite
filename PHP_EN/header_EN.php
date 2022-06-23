<?php session_start();?>
<!-- Header.php -->

  <!-- CSS link -->

  <link rel="stylesheet" href="../css/header.css">
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
          <li> <a href="Home_EN.php"><img src="../images/LogoHyp.svg" alt="Logo Compagny"></a></li>
          <li class="text_logo"> <a href="Home_EN.php"> 
            <h2> Hypotheekvitaal</h2>
            <p> Ready for an house</p> 
          </a></li>
        </ul>

        <ul class="link_menu">

          <li><a href="Home_EN.php"><p>Home</p></a></li>
          
          <li> <a href="#"> <p>Services</p> </a>
            <ul>
              <li><a href="Hypotheekadvies_EN.php"><p>Mortgage Advices</p></a></li>
              <li><a href="Hypotheekadvies_EN.php"><p>2nd Opinion</p></a></li>
              <li><a href="Hypotheekadvies_EN.php"><p>Morgage Ready</p></a></li>
            </ul>
          </li>
          
          
          <li><a href="Team_EN.php"><p>Team</p></a></li>
          <li><a href="Contact_EN.php"><p>Contact</p></a></li>
      
          <?php if(isset($_SESSION['auth'])):?>
            <li class="client"><a href="Account_EN.php"><p> Account</p></a></li>
          <?php else:?>
            <li class="client"><a href="Login_EN.php"> <p>Login</p></a></li>
          <?php endif ?>

          <!-- Check if this still work when it will be online -->
          
          <li class="dutch"> <a href="<?php echo "../".rtrim( basename($_SERVER['PHP_SELF']), "_EN.php").".php" ; ?>"  ><p> NL</p></a> </li> 
          <li class="english"> <a href="" > <p>EN </p></a></li>
        
              
        </ul>
      </div>
  
      <!-- Logos for the navigation bar *-->
      <div class ="greenLine"></div>



</nav>