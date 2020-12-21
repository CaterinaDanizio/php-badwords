<!-- CONSEGNA -->
<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la
badword passata in GET con tre *. -->

<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Primo esercizio con PHP</title>
  </head>
  <body>

<!-- Creo una variabile con un paragrafo -->
    <?php
    $paragrafo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

    $_GET['badword'];

    ?>
<!-- Stampo la variabile originale -->
    <p> <?php echo $paragrafo ?> </p>

<!-- Stampo la variabile modificata con relativa lunghezza-->

    <p>
      <?php
        $newparagrafo = str_replace($_GET['badword'], '***', $paragrafo) . " " . strlen($paragrafo);
        echo $newparagrafo;

      ?> 
   </p>

  </body>
</html>
