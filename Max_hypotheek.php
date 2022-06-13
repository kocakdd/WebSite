<!DOCTYPE html>
<html lang="NL">

<head>	
	<title> Hypotheekvitaal - Max Hypotheek </title>	
	<META	NAME="author"	CONTENT="NAPIERALA Lisa">	
	<META	NAME="description"	CONTENT="Max Hypotheek">	
	<META	NAME="geography"	CONTENT="Rotterdam,	South-Holland,	Nertheland">	
	<META	NAME="keywords"	CONTENT="Rotterdam, Hypotheekready">	
	<META	NAME="subject"	CONTENT="Max Hypotheek">	

  <!-- CSS link -->
	<link rel="stylesheet" href="css/Max_hypotheek.css">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


</head>	

<body>
    
  <!-- Header -->
  <?php include_once('Action/header.php'); ?>

  <!-- Content --> 

  <!--Contact Formulier -->

  <div class="formulier">
    <h2 > Bereken uw maximale Hypotheek </h2>
    <form onsubmit="return validation();" method="post" action="max_hypotheek_2.php">
      <label for="salary"> Bruto Jaarinkomen </label><br>
      <input type="number" id="frame" name="salary" min="10000" autofocus required>

      <!--
      <label for="years"> Betaaltermijn in jaren </label><br>
      <input type="number" id="frame" name="years" min="2" max="30" required>
      -->
      <div class="choice">
        <input type="radio" id ="annuitei" name="choice" value="Annuiteitenlening" onclick="show();"/>
        <label for="annuitei">Annuiteitenlening</label>

        <input type="radio" id="linear" name="choice" value="Lineaire lening" onclick="show();"/>
        <label for="linear">Lineaire lening</label>

        <input class="combinate" type="radio" id="combinate" name="choice" value="Combinatielening" onclick="show();"/>
        <label for="combinate">Combinatielening</label>
      </div>

      <div class="range-container" id="range-container" style="display:none">
        <p> Annuitei % </p>
        <input type="range" name="annuitei" id="range" max="100" min="0" step="5">
        <label for="range">50%</label>
        
        <p> Linear % </p>
        <input type="range" name="linear" id="range2" max="100" min="0" step="5">
        <label for="range">50%</label>
        
        <p> Interest Only % </p>
        <input type="range" name="interest" id="range3" max="50" min="0" step="5">
        <label for="range3">25%</label>
      </div>

      <script type="text/javascript">
      function show(){
        var myrange = document.getElementById('range-container');
        var combi = document.getElementById('combinate');
        if (combi.checked ===true){
          myrange.style.display = "block";
        }

        else{
          myrange.style.display = "none";
        }
      };
      const range3 = document.getElementById('range3');
      myRangeSlider(range3);
      const range2 = document.getElementById('range2');
      myRangeSlider(range2);
      const range = document.getElementById('range');
      myRangeSlider(range);

      function myRangeSlider(range){
      range.addEventListener('input', (e) => {
        // Get the label (which is the nextElementSibling)
        const label = e.target.nextElementSibling;
        // Get value of the input
        const value = +e.target.value;
        // Get the width value of the input
        const range_width = getComputedStyle(e.target).getPropertyValue('width');
        // Get the width value of the label
        const label_width = getComputedStyle(label).getPropertyValue('width');
        // Remove 'px' and conver to number
        const num_width = +range_width.substring(0, range_width.length - 2);
        const num_label_width = +label_width.substring(0, label_width.length - 2);
        // Get min and max values
        const max = +e.target.max;
        const min = +e.target.min;
        // Calculate the left value
        const left = value * (num_width / max) - num_label_width / 2 + scale(value, min, max, 10, -10);
        
        label.style.left = `${left}px`;
        label.innerHTML = value + "%";
      });

      // From StackOverflow: https://stackoverflow.com/questions/10756313/javascript-jquery-map-a-range-of-numbers-to-another-range-of-numbers
      const scale = (num, in_min, in_max, out_min, out_max) => {
        return (num - in_min) * (out_max - out_min) / (in_max - in_min) + out_min;
      }
      }
      function dbox (msg) {
        if (msg != undefined) {
          document.getElementById("boxTxt").innerHTML = msg;
          document.getElementById("boxBack").classList.add("show");
        } else { document.getElementById("boxBack").classList.remove("show"); }
      }
      function validation(){
        var combi = document.getElementById('combinate');
        var annui = document.getElementById('Annuitei');
        var linear = document.getElementById('linear');
        if (combi.checked==true){
          var sum = parseInt(range.value) + parseInt(range2.value) + parseInt(range3.value);
          if (sum!= 100){
              dbox('Error the sum of Annuitei + Linear + Interest Only need to be equal to 100%');
              return false;
            }
            else{
              return true; 
            }
        }
        else{
          return true;
        }
      }
      </script>
      <div id="boxBack"><div id="boxWrap">
        <div id="boxTxt"></div>
        <input type="button" value="OK" onclick="dbox()"/>
      </div></div>
    <input type="submit" value="Bereken">
    </form>
  </div>

   <!--Footer-->   
  <?php include('Action/footer.php'); ?>

</body>
</html>
