<?php
$paragraph = "Un paragrafo a caso";
// definisco una variabile e la stampo in HTML con echo

$censured_word = $_GET['caso'];
// passo una parola da censurare tramite parametro GET

$newParagraph = str_replace('caso', '***', $paragraph);
// attraverso la funzione replace sostituisco la parola 'caso' con 3*** nella variabile $paragraph








?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div><?php echo $paragraph ?></div>
<div>La lunghezza (come stringa) della variabile $paragraph --> <?php echo strlen($paragraph)?></div>

<br>

<div><?php echo $newParagraph?></div>
<div>La lunghezza (come stringa) della variabile $newParagraph --> <?php echo strlen($newParagraph)?></div>




    
</body>
</html>