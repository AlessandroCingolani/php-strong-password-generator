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
      <h1>Strong Password Generator</h1>
      <h2>Genera una password sicura</h2>
      <div class="message">
        <p>Scegliere una password con un minimo di 8 caratteri e un massimo di 32 caratteri</p>
      </div>
      <form action="index.php" method="POST" class="form">
        <div class="row">
          <div class="col">
            <h5>Lunghezza password:</h5>
            <button type="submit" class="btn btn-primary">Invia</button>
            <button class="btn btn-secondary">Annulla</button>
          </div>
          <div class="col">
            <input type="number" name="password_length" id="password_length">
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>