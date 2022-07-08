
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
<div class="content_mijn">
  <h1> Mijn Hypotheekoverzicht </h1>
  <div class="id_number">
    <h3>Hypotheeknummer: 59324335</h3>
    <h3> LTV: 80%</h3>
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
  
  <div class="circles">
    <div class="block">
      <h2>Maandelijkse </br>  Aflossing</h2>
      <div class="circle"> 
        <p>$465,40</p>
      </div>
    </div>

    <div class="block">
      <h2></br>Rente</h2>
      <div class="circle">
        <p> 3.3%</p>
      </div>
    </div>

    <div class="block">
      <h2>Totaal </br> Afgelost</h2>
      <div class="circle"> 
        <p>$4235.20</p>
      </div>
    </div>

  </div>

  <div class="graph">
    <div class="canvas-container" style="position: relative;  height:70; width:70vw">
    <canvas id="myChart" ></canvas>
    </div>
  </div>

  <div class="">
    <h3> Locatie </h3>
    <p> Random Adress</p>

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
      label: 'Total Hypotheek',
      backgroundColor: 'rgb(0, 147, 83)',
      borderColor: 'rgb(0, 147, 83)',
      data: [375000,300000,280000,220000,180000],
    },
    {
      label: 'Repayment Hypotheek',
      backgroundColor: 'rgb(182, 255, 14)',
      borderColor: 'rgb(182, 255, 14)',
      data: [370000,270000,240000,200000,100000],
    },
    {
      label: 'Interest Hypotheek',
      backgroundColor: 'rgb(14, 252, 85)',
      borderColor: 'rgb(14, 252, 85)',
      data: [5000,30000,40000,20000,80000],
    }]
  };
  

  const config = {
    type: 'line',
    data: data,
    options: {
      plugins:{
      legend:{
        display: true,
      },
      title: {
                display: true,
                text: 'Custom Chart Title',
                padding: {
                    top: 10,
                    bottom: 30,
                }
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
