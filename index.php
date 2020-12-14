<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primo Esercizio PHP</title>
</head>
<body>

<?php 
$para = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi facere molestias eum consectetur Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi facere molestias eum consectetur Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi facere molestias eum consectetur Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi facere molestias eum consectetur Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi facere molestias eum consectetur Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi facere molestias eum consectetur ';
$paraLength = strlen($para);
$badword = $_GET['badword'];
$paraMod = str_replace($badword, '***', $para);

?>

<h3>Prova Paragrafo</h3>
<p><?php echo $para; ?></p>
<p>Lunghezza Testo: <?php echo $paraLength; ?></p>


<h3>Paragrafo Editato</h3>
<p><?php echo $paraMod; ?></p>

    
</body>
</html>