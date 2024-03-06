<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kodutöö_nr3</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md">
      <i class="fas fa-envelope"></i>
      <span>jolana@hiiesalu.ee</span>
      <i class="fas fa-headphones"></i>
      <span>+372 111 1111</span>
    </div>

    <div class="col-md-3 text-end">
      <h6>
        <span class="text-primary">Est</span>
        <span class="text-dark">|</span>
        <span class="text-primary">Eng</span>
        <span class="text-dark">|</span>
        <span class="text-primary">Rus</span>
      </h6>
    </div>

    <div class="col-md-1">
      <a href="#" class="facebook-icon"><i class="fab fa-facebook-f text-dark"></i></a>
      <a href="#" class="twitter-icon"><i class="fab fa-twitter text-dark"></i></a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="logo">
        <h1><b>Jolana Hiiesalu</b></h1>
      </div>
    </div>

    <div class="col-md-6 d-flex justify-content-end">
      <nav class="navbar navbar-expand-lg">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Avaleht</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Tooted</a></li>
          <li class="nav-item"><a class="nav-link" href="Teenused.php">Teenused</a></li>
          <li class="nav-item"><a class="nav-link" href="Kontakt.php">Kontakt</a></li>
        </ul>
        <button type="button" class="btn btn-primary mx-lg-2 my-2 d-xs-block">Login</button>
      </nav>
    </div>
  </div>
</div>

<div class="container mt-5">
  <h2 class="mb-4">Teenuse kalkulaator!</h2>
  <form action="" method="GET">
    <div class="form-group">
      <select class="form-control" id="select_option" name="select_option">
        <option value="Vali siit">Teenus</option>
        <option value="Toode1">Kodulehe loomine</option>
        <option value="Toode2">Kodulehe haldus</option>
      </select>
    </div>

    <div class="form-group">
      <label for="input_value1">Hind</label>
      <input type="number" class="form-control" id="input_value1" name="input_value1" required min="1" max="1000">
    </div>

    <div class="form-group">
      <label for="input_value2">Tk</label>
      <input type="number" class="form-control" id="input_value2" name="input_value2" required min="1" max="5">
    </div>

    <input type="checkbox" class="form-check-input" id="noustun" name="noustun" required>
    <label class="form-check-label" for="noustun">NÕUSTUN TINGIMUSTEGA!</label><br>
    <button type="submit" name="calculate" class="btn btn-primary">Arvuta</button>
  </form>
  <div class="container mt-3">
    <div class="alert alert-danger" role="alert">Palun täitke kõik väljad ja nõustuge teenusetingimustega.</div>
  </div>

  <?php
  if(isset($_GET['calculate'])) {
    $selected_option = $_GET['select_option'];
    $input_value1 = $_GET['input_value1'];
    $input_value2 = $_GET['input_value2'];

    // Calculate the total cost based on the selected service and input values
    if ($selected_option === "Toode1") {
      $total_cost = $input_value1 * $input_value2;
    } elseif ($selected_option === "Toode2") {
      $total_cost = $input_value1 + $input_value2;
    } else {
      $total_cost = 0; // Default value if no option is selected
    }
    // Display the total cost
    echo "<p>Teenuste kogusumma $selected_option is: $total_cost</p>";
  }
  ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
