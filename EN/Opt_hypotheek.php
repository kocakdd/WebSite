<?php include_once('../Action/db_contact_opt_hypo.php'); ?>

<!-- CSS link -->
<link rel="stylesheet" href="../css/Opt_hypotheek.css">


  <!-- Content --> 
<div class="content">

  <div class="text-first-opt">
    <h2> Optimale Hypotheek</h2>
    <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
    </p>
  </div>


  <div class="formulier-opt">
    <h2 > Vul onderstaande gegevens in </h2>

    <form method="post">
      <div class="row-opt">
        <div class="column-opt">
      <label for="fname"> Name person </label><br>
      <input type="text" name="fname" placeholder="Name placeholder" pattern="[a-zA-Z- ]{1,60}" required><br>

      <label for="email"> E-mail person </label><br>
      <input type="email" name="email" placeholder="E-mail placeholder" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}" required><br>

      <label for="salary"> Loan Amount </label><br>
      <input type="number" name="loan_amount" placeholder="Loan Amount placeholder" min="0" required><br>

      <label for="salary"> Gross Income </label><br>
      <input type="number" name="gross_income" placeholder="Gross Income placeholder" min="0" required><br>
    </div>
    <div class="column-opt">
      <label for="salary"> Monthly budget </label><br>
      <input type="number" name="monthly_budget" placeholder="Monthly budget placeholder" min="0" required><br>

      <label for="salary"> Value of the house </label><br>
      <input type="number" name="house_price" placeholder="Value of the house placeholder" min="0" required><br>

      <label for="salary"> WOZ value of the house </label><br>
      <input type="number" name="woz_value" placeholder="WOZ placeholder" min="0" required><br>

      <label for="salary"> Age of retirement </label><br>
      <input type="number" name="age_retirement" placeholder="Age of retirement placeholder" min="20" max="100" required>
    </div>
  </div>
      <input type="submit" name="validate" value="Bereken">
    </form>
  </div>

</div>

   <!--Footer-->   
  <?php include('footer.php'); ?>


