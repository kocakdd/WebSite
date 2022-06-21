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
            <li><a href="Logout_EN.php"><p> Logout</p></a></li>
          <?php else:?>
            <li><a href="Login_EN.php"> <p>Login</p></a></li>
          <?php endif ?>

          <!-- Check if this still work when it will be online -->
          
          <li class="dutch"> <a href="<?php echo "../".rtrim( basename($_SERVER['PHP_SELF']), "_EN.php").".php" ; ?>"  ><p> NL</p></a> </li> 
          <li class="english"> <a href="" > <p>EN </p></a></li>
        
              
        </ul>
      </div>
  
      <!-- Logos for the navigation bar *-->
      <div class ="greenLine"></div>


      <!-- When the Client is connected -->

      <?php if(isset($_SESSION['auth'])):?>

      <div class="switch">
        <button id="switch-left" class="switch-left" onClick="change_l(),toggle_text_l()">
          <img id ="left" src="images/login_left.png"  alt="Logo Left" style="width:20%;">
        </button>
        <button id="switch-right" class="switch-right" onClick="change_r(), toggle_text_r()">
          <img id="right" src="images/login_right_g.png" alt="Logo Right" style="width:20%;" >
        </button>
      </div>

      
        <div class="span-left"  id="span-left" style="left:-100%;">
          <?php include("mijn_hypotheek.php"); ?>
        </div>
      
        <div class="span-right" id="span-right" style="left:100%;" >
          <?php include("Persoonsgegevens.php"); ?>
        </div>
      
      <script type="text/javascript">
      
      var windowHeight = document.documentElement.scrollHeight;
      document.getElementById("span-right").style.height = windowHeight-250+ "px";
      document.getElementById("span-left").style.height = windowHeight-250+ "px";
r=true;
l=true;


function change_r(){
  if(r){
    document.getElementById("right").src = "images/login_right.png";
    document.getElementById("switch-right").style.backgroundColor = '#009353';
    r=false;
  }
  else{
    document.getElementById("right").src = "images/login_right_g.png"; 
    document.getElementById("switch-right").style.backgroundColor = '#FFF';
    r=true;
  }
  if(document.getElementById("switch-left").style.backgroundColor === document.getElementById("switch-right").style.backgroundColor){
      document.getElementById("switch-left").style.backgroundColor = '#FFF';
      document.getElementById("left").src = "images/login_left.png"; 
      l = true;
      toggle_text_l();
  }
}


function change_l(){
  if(l){
    document.getElementById("switch-left").style.backgroundColor = '#009353';
    document.getElementById("left").src = "images/login_left_w.png";
    l=false;
  }
  else{
    document.getElementById("switch-left").style.backgroundColor = '#FFF';
    document.getElementById("left").src = "images/login_left.png";
    l=true;
  }
  if(document.getElementById("switch-left").style.backgroundColor === document.getElementById("switch-right").style.backgroundColor){
      document.getElementById("switch-right").style.backgroundColor = '#FFF';
      document.getElementById("right").src = "images/login_right_g.png"; 
      r=true;
      toggle_text_r();

  }
}

function toggle_text_l() {
  var id = null;
  var span = document.getElementById("span-left");
  if(l==false) {
    
    var pos = parseInt(span.style.left);
    clearInterval(id);
    id = setInterval(frame, 10);
    
    function frame() {
      if (pos == 0) {
        clearInterval(id);
      } else {
        pos++; 
        span.style.left = pos + '%'; 
      }
    }
  
  } else {
    clearInterval(id);
    var pos = parseInt(span.style.left);
    id = setInterval(frame, 10);
    function frame() {
      if (pos == (-100)) {
        clearInterval(id);
      } else {
        pos--; 
        span.style.left = pos + '%'; 
      }

    }
    
  }
}

function toggle_text_r() {
  var id = null;
  var span = document.getElementById("span-right");
  if(r==false) {
    clearInterval(id);
    var pos = parseInt(span.style.left);
    id = setInterval(frame, 10);
    
    function frame() {
      if (pos == 0) {
        clearInterval(id);
      } else {
        pos--; 
        span.style.left = pos + '%'; 
      }
    }
  
  } else {
    clearInterval(id);
    var pos = parseInt(span.style.left);
    id = setInterval(frame, 10);
    function frame() {
      if (pos == (100)) {
        clearInterval(id);
      } else {
        pos++; 
        span.style.left = pos + '%'; 
      }

    }
    
  }
}


      </script>
      
      <?php endif ?>

</nav>