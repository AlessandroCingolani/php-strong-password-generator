<?php

session_start();

if(isset($_SESSION["number_to_generate"])){
  $pass_output = $_SESSION["pass_to_print"];
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
  <!-- CSS -->
  <link rel="stylesheet" href="./css/style.css">
  <title>Password Generated</title>
</head>
<body>
  <div class="container">
    <div class="password-generator text-center ">
      <h2>La password generata è:</h2>
      <div class="message">
        <span><?php echo $pass_output ?></span>
      </div>
      <a href="index.php"><button class="btn btn-info ">Torna alla homepage</button></a>
    </div>
  </div>
</body>
</html>