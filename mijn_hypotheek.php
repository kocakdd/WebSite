
<!DOCTYPE html>
<html lang="NL">

<head>	
<title> Hypotheekvitaal - Mijn Hypotheek </title>	
	<META	NAME="author"	CONTENT="Kocak Derya">	
	<META	NAME="description"	CONTENT="Hypotheek">	
	<META	NAME="geography"	CONTENT="Rotterdam,	South-Holland,	Nertheland">	
	<META	NAME="keywords"	CONTENT="Rotterdam, Hypotheek">	
	<META	NAME="subject"	CONTENT="Hypotheek">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <!-- CSS link -->
	<link rel="stylesheet" href="css/mijn_hypotheek.css">

</head>	
<body>

  <!-- Content --> 
  <div class="container">
<div class="row firstrow">
  <div class="col-md-auto">
<div class="graph">
  <h2> Mijn Hypotheek </h2>
  <div class="canvas-container" style="position: relative;  height:40vh; width:40vw">
  <canvas id="myChart" ></canvas>
  </div>
</div>
  </div>
  <!--<div class="col-md-auto">
  <div class="Situatie">
  <h2>Situatie Aanpassen</h2>
</div>

<form class=contentform method="post">
  <select name="situatie" class="situatie"  required>
    <optgroup class="opt" >
      <option value=""  disabled selected><h1> </h1></option>
      <option value=1>Geen aanpassingen</option>
      <option value=2>Verlies inkomen</option>
      <option value=3>Verlies inkomen partner</option>
      <option value=4>Verhoging van inkomen</option>
      <option value=5>Verhoging van inkomen partner</option>
      <option value=6>Extra aflossen</option>
      <option value=7>Verkrijgen uitkering</option>
      <option value=8>Stopgezette uitkering</option>
      <option value=9>Extra maandelijkse kosten</option>
    </optgroup>
  </select>

      <input type="submit" value="Send"> 
</form>
  </div> -->
  <div class="col">
<div class="circles">
<div class="block">
<h1>Maandelijkse </br>  Aflossing</h1>
<div class="circle"> 
<p>$465,40</p>
</div>
</div>

<div class="block">
<h1>Rente</h1>
<div class="circle">
<p> 3.3%</p>
</div>
</div>

<div class="block">
<h1>Totaal </br> Afgelost</h1>
<div class="circle"> 
<p>$4235.20</p>
</div>
</div>
</div>
  </div>
</div>

  </div>
</body>
<script>
  const labels = [
    2017,
    2018,
    2019,
    2020,
    2021,
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: 'Mijn Hypotheek',
      backgroundColor: 'rgb(0, 147, 83)',
      borderColor: 'rgb(0, 147, 83)',
      data: [375000,390000,420000,520000,580000],
    }]
  };

  const config = {
    type: 'line',
    data: data,
    options: {
      plugins:{
      legend:{
        display: false,
      }
    }
  },
    scales: {
      y: { // definin min and max so hiding the dataset does not change scale range
        min: 0,
        max: 600000
      },
    }
  };
  
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>
 
</html>
