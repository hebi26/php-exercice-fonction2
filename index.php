<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="jquery-3.2.1.min.js"></script>
      <title>Formulaire sql</title>
    </head>
    <body>

<h1>exercice 1</h1>


<?php
function message(){
?>

<script>
alert('erreur');
</script>

<?php
}
?>


<h1>exercice 2</h1>

<?php


function table($tableau){
$tableau= array('un', 'deux','trois');

for($i=0, $size=count($tableau); $i < $size; $i++){
  $tableau[$i]=ucfirst(strtolower($tableau[$i]));

  echo ($tableau[$i].'<br>');
  }
}

table();
?>

<h1>exercice 3</h1>

<form action="index.php" method="post">
<input type="text" name="col" placeholder="ex : A, B, C...">
<input type="text" name="row" placeholder="ex : 1, 2, 3...">
<input type="submit" name"submit" value="Tirez !">
</form>

<?php

function bataille ($col, $row){
    $bateaux = array(array('d', 2),
                    array('d', 3),
                    array('a',5),
                    array('b',5),
                    array('g',6),
                    array('g',7),
                    array('g',8),
                    array('c',4),
                    array('d',4));

    $col = strtolower($col);
    $target = array($col, $row);
    if ($col > 'j' || $col < 'a' || $row  < 1 || $row  > 10)
    {
        return 'hors-jeu !';
    }
    else if (in_array($target, $bateaux)){
        return 'touché Capitaine !!!';
    }
    else{
        return 'C\'est raté...';
    }
}
echo bataille($_POST['col'], $_POST['row']);

?>








  </body>
  </html>
