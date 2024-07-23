<?php 

$paragraph = $_POST['paragraph'];
$badword = $_POST['badword'];

// recupero la lunghezza del paragrafo per stamparla
$paragraph_length = strlen($paragraph);

//Sostituisco la parola inserita da censurare con gli ***
$censored_paragraph = str_replace($badword, '***', $paragraph);
// recupero la lunghezza del paragrafo censurato per stamparla
$censored_paragraph_length = strlen($censored_paragraph);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords landing page</title>
</head>
<body>
    <!-- Paragrafo inserito e la sua lunghezza -->
    <h2>Questo è il paragrafo inserito</h2>
    <div><?php echo $paragraph ?></div>
    <h4>Ed è lungo <?php echo $paragraph_length ?> caratteri</h4>

    <!-- Paragrafo censurato e la sua linghezza -->
    <h2>Questo è il paragrafo con le parole censurate</h2>
    <div><?php echo $censored_paragraph ?></div>
    <h4>Ed è lungo <?php echo $censored_paragraph_length ?> caratteri</h4>
    

</body>
</html>