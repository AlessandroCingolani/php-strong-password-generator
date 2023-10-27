<?php
include __DIR__ .'/partials/functions.php';
session_start();

if(isset($_SESSION["number_to_generate"])){
  $number_input = $_SESSION["number_to_generate"];
  $pass_generated = random_generator($number_input);
  var_dump($pass_generated);
}else {
  header("Location: ./index.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>PHP Strong Password Generator</title>
</head>
<body>
  <div class="container">
    <div class="password-generator text-center ">
      <h2>Genera una password sicura</h2>
      <div class="message">
        <p><?php echo $pass_generated ?></p>
      </div>
      <a href="index.php"><button class="btn btn-primary ">Torna alla homepage</button></a>
    </div>
  </div>
</body>
</html>