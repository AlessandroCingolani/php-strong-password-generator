<?php 
include __DIR__ .'/partials/functions.php';
$instructions = "Scegliere una password con un minimo di 8 caratteri e un massimo di 32 caratteri";

if(isset($_POST['password_length'])){
  if($_POST['password_length'] >= 8 && $_POST['password_length'] <= 32 ){
    session_start();
    $pass_generated = random_generator($_POST['password_length']);
    $_SESSION["pass_to_print"] = $pass_generated;
    header("Location: ./pass-gen.php");
  }else {
    $instructions = "Errore! La lunghezza della password deve avere un minimo di 8 caratteri e un massimo di 32
    caratteri";
  }


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
  <title>PHP Strong Password Generator</title>
</head>
<body>
  <div class="container d-flex justify-content-center">
    <div class="password-generator ">
      <div class="title text-center ">
        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>
      </div>
      <div class="message d-flex align-items-center ">
        <span><?php echo $instructions ?></span>
      </div>
      <div class="form">
        <form class="h-100" action="index.php" method="POST">
          <div class="row h-100 align-items-center p-3">
            <div class="col">
              <h5>Lunghezza password:</h5>
              <button type="submit" class="btn btn-primary">Invia</button>
              <button type="reset" class="btn btn-secondary">Annulla</button>
            </div>
            <div class="col align-self-start ">
              <input  type="number" placeholder="Numero caratteri" name="password_length" id="password_length">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>