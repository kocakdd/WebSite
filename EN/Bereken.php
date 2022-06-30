<?php session_start();?>
<!DOCTYPE html>
<html lang="EN">

<head>	
	<title> Hypotheekvitaak - Calcul </title>	
	<META	NAME="author"	CONTENT="NAPIERALA Lisa">	
	<META	NAME="description"	CONTENT="Account">	
	<META	NAME="geography"	CONTENT="Rotterdam,	South-Holland,	Nertheland">	
	<META	NAME="keywords"	CONTENT="Rotterdam, Account, Hypotheek">	
	<META	NAME="subject"	CONTENT="Account">	

  <!-- CSS link -->
  <link rel="stylesheet" type="text/css" href="../css/Bereken.css">


   <!-- Icon image -->
  <link rel="icon" href="images/LogoHyp.svg">

</head>	

<body>
    <!--Header-->  
    <?php $nav_en_cours = 'bereken'; ?>
    <?php include_once('header.php'); ?>  
    

  <!-- Bereken bar -->

<div class="switch">
    <button id="switch-left" class="switch-left" onClick="change_l(),toggle_text_l()">
      Calcul your maximal Mortgage
    </button>
    <button id="switch-right" class="switch-right" onClick="change_r(), toggle_text_r()">
      Calcul your optimize Mortgage
    </button>
</div>

  <!-- Content -->  
<div class="content">

        <div class="span-left"  id="span-left" style="left:0%;">
          <?php include("Max_hypotheek.php"); ?>
        </div>
      
        <div class="span-right" id="span-right" style="display:none;left:0%;" >
          <?php include('Opt_hypotheek.php'); ?>
        </div>
      
      <script type="text/javascript">
      
r=true;
l=false;


function change_r(){
  if(r){
    document.getElementById("switch-right").style.color = '#FFF';
    document.getElementById("switch-right").style.backgroundColor = '#009353';
    r=false;
    document.getElementById("switch-left").style.backgroundColor = '#FFF';
    document.getElementById("switch-left").style.color = '#009353'; 
    l = true;
    toggle_text_l();
  }
  else{
    document.getElementById("switch-right").style.color = '#009353'; 
    document.getElementById("switch-right").style.backgroundColor = '#FFF';
    r=true;
    document.getElementById("switch-left").style.backgroundColor = '#009353';
    document.getElementById("switch-left").style.color = '#FFF'; 
    l = false;
    toggle_text_l();
  }
  
}


function change_l(){
  if(l){
    document.getElementById("switch-left").style.backgroundColor = '#009353';
    document.getElementById("switch-left").style.color = '#FFF';
    l=false;

    document.getElementById("switch-right").style.backgroundColor = '#FFF';
    document.getElementById("switch-right").style.color = '#009353'; 
    r=true;
    toggle_text_r();
  }
  else{
    document.getElementById("switch-left").style.backgroundColor = '#FFF';
    document.getElementById("switch-left").style.color = '#009353';
    l=true;
    document.getElementById("switch-right").style.backgroundColor = '#009353';
    document.getElementById("switch-right").style.color = '#FFF'; 
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


</html>