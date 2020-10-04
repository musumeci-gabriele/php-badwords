<?php
  // Prendi la parola dal command line
  $badword = $_GET["word"];
  // variabile sostitutiva
  $censura = "* * *";
  // paragrafo
  $paragraph = "Ciao come stai secco, il sole e' bello e le caprette gironzolano felici.";
  //cerca pa parola nel paragrafo
  $wordFind = strpos($paragraph,$badword);
  // sostituisce la stringa cercata con i * * *
  $newParagraph = str_replace($badword,$censura,$paragraph);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bad Words</title>
  </head>

  <body>
    <h1>Esercizio:</h1>
    <h3>Creare una variabile con un paragrafo di testo. Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre *.</h3>

    <p><?php echo $newParagraph; ?></p>
    <p>La lunghezza delle stringa e' di <?php echo strlen($paragraph); ?> caratteri.</p>
  </body>
</html>
