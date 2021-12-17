<?php

$nome = 'Emanuele';
$cognome = 'Arconte';
$utente = $nome.' '.$cognome;
$lunghezza = strlen($utente);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
    <style type="text/css">
    </style>
</head>
<body>
    <div>
      <span>Nome utente:</span><?php echo$utente?> <br>
      <span>Lunghezza caratteri:</span> <?php echo$lunghezza?>
    </div>
</body>
</html>
