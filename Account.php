<!DOCTYPE html>
<html lang="NL">

<head>	
	<title> Hypotheekvitaak - Account </title>	
	<META	NAME="author"	CONTENT="NAPIERALA Lisa">	
	<META	NAME="description"	CONTENT="Account">	
	<META	NAME="geography"	CONTENT="Rotterdam,	South-Holland,	Nertheland">	
	<META	NAME="keywords"	CONTENT="Rotterdam, Account, Hypotheek">	
	<META	NAME="subject"	CONTENT="Account">	

  <!-- CSS link -->
  <link rel="stylesheet" type="text/css" href="css/Account.css">


   <!-- Icon image -->
  <link rel="icon" href="images/LogoHyp.svg">

</head>	

<body>
    <!--Header-->    
  <?php $nav_en_cours = 'account'; ?>
  <?php include_once('Action/header.php'); ?>

  <!-- CLient bar -->

<div class="switch">
    <button id="switch-left" class="switch-left" onClick="change_l(),toggle_text_l()">
      <img id ="left" src="images/login_left_w.png"  alt="Logo Left" style="width:10%;">
    </button>
    <button id="switch-right" class="switch-right" onClick="change_r(), toggle_text_r()">
      <img id="right" src="images/login_right_g.png" alt="Logo Right" style="width:10%;">
    </button>
</div>

  <!-- Content -->  
<div class="content">

        <div class="span-left"  id="span-left" style="left:0%;">
          <?php include("mijn_hypotheek.php"); ?>
        </div>
      
        <div class="span-right" id="span-right" style="display:none;left:0%;" >
          <?php include("Persoonsgegevens.php"); ?>
        </div>
      
      <script type="text/javascript">
      
      var windowHeight = document.documentElement.scrollHeight;
      document.getElementById("span-right").style.height = windowHeight-250+ "px";
      document.getElementById("span-left").style.height = windowHeight-250+ "px";
r=true;
l=false;


function change_r(){
  if(r){
    document.getElementById("right").src = "images/login_right.png";
    document.getElementById("switch-right").style.backgroundColor = '#009353';
    r=false;
    document.getElementById("switch-left").style.backgroundColor = '#FFF';
    document.getElementById("left").src = "images/login_left.png"; 
    l = true;
    toggle_text_l();
  }
  else{
    document.getElementById("right").src = "images/login_right_g.png"; 
    document.getElementById("switch-right").style.backgroundColor = '#FFF';
    r=true;
    document.getElementById("switch-left").style.backgroundColor = '#009353';
    document.getElementById("left").src = "images/login_left_w.png"; 
    l = false;
    toggle_text_l();
  }
  
}


function change_l(){
  if(l){
    document.getElementById("switch-left").style.backgroundColor = '#009353';
    document.getElementById("left").src = "images/login_left_w.png";
    l=false;

    document.getElementById("switch-right").style.backgroundColor = '#FFF';
    document.getElementById("right").src = "images/login_right_g.png"; 
    r=true;
    toggle_text_r();
  }
  else{
    document.getElementById("switch-left").style.backgroundColor = '#FFF';
    document.getElementById("left").src = "images/login_left.png";
    l=true;
    document.getElementById("switch-right").style.backgroundColor = '#009353';
    document.getElementById("right").src = "images/login_right.png"; 
    r=false;
    toggle_text_r();
  }
  
}

function toggle_text_l() {
  var id = null;
  var span = document.getElementById("span-left");
  if(l==false) {
    
    span.style.display = "inline";
  
  } else {
    span.style.display = "none";
    
  }
}

function toggle_text_r() {
  var id = null;
  var span = document.getElementById("span-right");
  if(r==false) {
    span.style.display = "inline";
  
  } else {
    span.style.display= "none";
    
  }
}


      </script>


</div>

</body>
   <!--Footer    -->
  
   <?php include('Action/footer.php'); ?>


</html>