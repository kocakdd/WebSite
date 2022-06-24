<?php session_start();?>
<!DOCTYPE html>
<html lang="NL">

<head>	
	<title> Hypotheekvitaak - Home </title>	
	<META	NAME="author"	CONTENT="NAPIERALA Lisa">	
	<META	NAME="description"	CONTENT="Home">	
	<META	NAME="geography"	CONTENT="Rotterdam,	South-Holland,	Nertheland">	
	<META	NAME="keywords"	CONTENT="Rotterdam, Home">	
	<META	NAME="subject"	CONTENT="Home">	

  <!-- CSS link -->
  <link rel="stylesheet" type="text/css" href="../css/Home.css">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
	

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
   <!-- Icon image -->
  <link rel="icon" href="../images/LogoHyp.svg">
</head>	

<body>
    <!--Header-->    
  <?php $nav_en_cours = 'home'; ?>
  <?php include_once('header_EN.php'); ?>

  <!-- Content -->  
<div class="content">
  <img class="desk-image" src="../images/Home.png" alt="Font Image">
  
  <div class="first-text-block">
    <h2 class="title1"> About hypotheekvitaal </h2>
    <h3 class="title2"> Subtitle </h3>
    <p class="text1"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum </p>
    
  </div>
  <div class="educatie">
  <div class="second-bis-text-block">
    <h2> Educatie </h2>
    <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
  </div>
    
  <!-- The three blocks -->

 <div class="video">
    <div class="video_image"><img src="../images/video.svg" alt="Graphic"></div>
    <div class="video_image"><img src="../images/video.svg" alt="Graphic"></div>
    <div class="video_image"><img src="../images/video.svg" alt="Graphic"></div>
  </div>


  </div>
  <div class="second-block">
    <div class="second-text-block">
    <h2> Diensten </h2>
    <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
    </div>
    
  <!-- The three blocks -->
  <div class="three-blocks">
  <div class="ndOpinion">
    <img src="../images/Graph.svg" alt="Graphic">
    <h2> 2nd Opinion </h2>
    <p> Zekerheid over uw keuze </p>
  </div>

  <div class="ndOpinion">
    <img src="../images/Graph.svg" alt="Graphic">
    <h2> Hypotheekadvies </h2>
    <p> Advies voor uw hypotheek </p>
  </div>

    <div class="ndOpinion">
    <img src="../images/Graph.svg" alt="Graphic">
    <h2> Hypotheekready </h2>
    <p> Zekerheid over uw keuze </p>
  </div>
</div>
</div>

  <!--The slider -->

<div class="theswip">
<div class="swiper-slider">
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="frame-content"> 
                <img class="triangle-image" src="../images/Cube.svg" alt="Font Image">
                <h2> Hypotheek: Pre-service 1</h2>
                <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd <br>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem </p>
            </div> 
        </div>
          <div class="swiper-slide">
            <div class="frame-content"> 
                <img class="triangle-image" src="../images/Cube.svg" alt="Font Image">
                <h2> Hypotheek: Orientatie</h2>
                <p> ipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus</p>
            </div> 
        </div>
        <div class="swiper-slide">
            <div class="frame-content">
                <img class="triangle-image" src="../images/Cube.svg" alt="Font Image">
                <h2> Hypotheek: Advies</h2>
                <p> ipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus</p>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="frame-content">
                <img class="triangle-image" src="../images/Cube.svg" alt="Font Image">
                <h2> Hypotheek: Post Service</h2>
                <p> ipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus</p>
            </div>
        </div> 

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Add Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
 
    </div>
</div>
</div>


<!-- Overheidsinstellingen -->
<div class="final_block">
    <h2> Overheidsinstellingen </h2>
    <div class="slider">
    <div class="slide-track">
        <div class="slide">
            <img class="mask-image" src="../images/Mask_1.svg" alt="Font Image">
        </div>
        <div class="slide">
            <img class="mask-image" src="../images/Mask_1.svg" alt="Font Image">
        </div>
        <div class="slide">
            <img class="mask-image" src="../images/Mask_1.svg" alt="Font Image">
        </div>
        <div class="slide">
            <img class="mask-image" src="../images/Mask_1.svg" alt="Font Image">
        </div>
        <div class="slide">
            <img class="mask-image" src="../images/Mask_1.svg" alt="Font Image">
        </div>
        <div class="slide">
            <img class="mask-image" src="../images/Mask_1.svg" alt="Font Image">
        </div>
        <div class="slide">
            <img class="mask-image" src="../images/Mask_1.svg" alt="Font Image">
        </div>
        <div class="slide">
            <img class="mask-image" src="../images/Mask_1.svg" alt="Font Image">
        </div>
        <div class="slide">
            <img class="mask-image" src="../images/Mask_1.svg" alt="Font Image">
        </div>
        <div class="slide">
            <img class="mask-image" src="../images/Mask_1.svg" alt="Font Image">
        </div>
        <div class="slide">
            <img class="mask-image" src="../images/Mask_1.svg" alt="Font Image">
        </div>
        <div class="slide">
            <img class="mask-image" src="../images/Mask_1.svg" alt="Font Image">
        </div>
        <div class="slide">
            <img class="mask-image" src="../images/Mask_1.svg" alt="Font Image">
        </div>
        <div class="slide">
            <img class="mask-image" src="../images/Mask_1.svg" alt="Font Image">
        </div>
    </div>
    </div> 

</div>
</div>
</body>
   <!--Footer    -->
  
   <?php include('footer_EN.php'); ?>


</html>
   <!-- Swiper JS -->
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

        autoplay:{
            delay: 5500,
        },

    });

    
</script>