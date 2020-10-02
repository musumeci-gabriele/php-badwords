<?php
  // Prendi la parola dal comman line
  $_GET = ["word"];
  // variabile sostitutiva
  $censura = "* * *";
  // paragrafo
  $paragraph = "Ciao come stai secco, il sole e' bello e le caprette gironzolano felici.";
  //cerca pa parola nel paragrafo
  strpos($paragraph,$_GET);
  // sostituisce la stringa cercata con i * * *
  str_replace($_get,$censura,$paragraph)
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bad Words</title>
  </head>

  <body>
    <h1>Esercizio:</h1>
    <h2>Creare una variabile con un paragrafo di testo. Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre *.</h2>

    <p><?php echo $paragraph; ?>,<?php strlen($paragraph); ?></p>
  </body>
</html>
