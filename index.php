<?php

include __DIR__ . '/classes/Giochi.php';
include __DIR__ . '/classes/Igene.php';

$giochi = new Giochi('Papera', '0000', 20, 'Game', 18, 4);
$igene = new Igene('Dentifricio', '0001', '1.5', 'Igene', '15A');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Prodotto</h2>
    <ul>
        <li>Tipologia:<?php echo $giochi->print('tipologia'); ?></li>
        <li>Nome Prodotto:<?php echo $giochi->print('nome_prodotto'); ?></li>
        <li>Codice:<?php echo $giochi->print('codice_prodotto'); ?></li>
        <li>Prezzo: € <?php echo $giochi->print('prezzo'); ?></li>
        <li>Giocatori:<?php echo $giochi->print('numero_giocatori'); ?></li>
        <li>Età:<?php echo $giochi->print('età'); ?></li>
    </ul>
    <h2>Prodotto</h2>
    <ul>
        <li>Tipologia:<?php echo $igene->print('tipologia'); ?></li>
        <li>Nome Prodotto:<?php echo $igene->print('nome_prodotto'); ?></li>
        <li>Codice:<?php echo $igene->print('codice_prodotto'); ?></li>
        <li>Prezzo: € <?php echo $igene->print('prezzo'); ?></li>
        <li>Posizione: <?php echo $igene->print('posizione'); ?></li>
    </ul>
</body>
</html>