<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 
</head>
<body>
<?php

date_default_timezone_set('Europe/Rome'); 


setlocale(LC_TIME, 'it_IT.utf8'); //setto la lingua locale


$dataOdiernaConGiorno = date('l, d F Y');


echo "<h2 class='text-center '>Data odierna: $dataOdiernaConGiorno</h2>";
?>

<?php

date_default_timezone_set('Europe/Rome');


$nomiGiorniItaliani = [
    'Domenica', 'Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato'
];


$numeroGiornoSettimana = idate('w');


$dataOdiernaConGiorno = $nomiGiorniItaliani[$numeroGiornoSettimana] . ', ' . date('d F Y');


echo "<h2 class='text-center'>Data odierna: $dataOdiernaConGiorno</h2>";
?>
<?php

date_default_timezone_set('Europe/Rome'); 


$nomiGiorniItaliani = ['Domenica', 'Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato'];
$nomiMesiItaliani = ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'];


$numeroGiornoSettimana = idate('w');


$numeroMese = idate('m');


$dataOdiernaConGiornoEMese = $nomiGiorniItaliani[$numeroGiornoSettimana] . ' ' . date('d') . ' ' . $nomiMesiItaliani[$numeroMese - 1] . ' ' . date('Y');


echo "<h2 class='text-center text-uppercase'>Data odierna: $dataOdiernaConGiornoEMese</h2>";
?>
<?php

$squadreSerieA = array(
    "Juventus" => array("Portiere" => "Szczęsny", "Difensore" => "De Ligt", "Centrocampista" => "Bentancur", "Attaccante" => "Ronaldo"),
    "Inter" => array("Portiere" => "Handanovič", "Difensore" => "Škriniar", "Centrocampista" => "Barella", "Attaccante" => "Lukaku"),
    "Milan" => array("Portiere" => "Donnarumma", "Difensore" => "Romagnoli", "Centrocampista" => "Kessié", "Attaccante" => "Ibrahimović"),
   
);


$squadre = array_keys($squadreSerieA);
$numSquadre = count($squadre);
echo '<ul>';
for ($i = 0; $i < $numSquadre; $i++) {
    $squadra = $squadre[$i];
    $formazione = $squadreSerieA[$squadra];
    
    echo "<li class='text-info'>Squadra: $squadra\n </li>";
    echo "<li>Formazione:\n</li>";
    echo '</ul>';
    $ruoli = array_keys($formazione);
    $numRuoli = count($ruoli);
    echo '<ul>';
    for ($j = 0; $j < $numRuoli; $j++) {
        $ruolo = $ruoli[$j];
        $giocatore = $formazione[$ruolo];

        echo "<li>$ruolo: $giocatore\n</li>";
    }
    echo '</ul>';
    echo "\n";
}
?>

<!-- <?php

$squadreSerieA = array(
    "Juventus" => array("Portiere" => "Szczęsny", "Difensore" => "De Ligt", "Centrocampista" => "Bentancur", "Attaccante" => "Ronaldo"),
    "Inter" => array("Portiere" => "Handanovič", "Difensore" => "Škriniar", "Centrocampista" => "Barella", "Attaccante" => "Lukaku"),
    "Milan" => array("Portiere" => "Donnarumma", "Difensore" => "Romagnoli", "Centrocampista" => "Kessié", "Attaccante" => "Ibrahimović"),
   
);


foreach ($squadreSerieA as $squadra => $formazione) {
    echo "Squadra: $squadra\n";
    echo "Formazione:\n";
    
    foreach ($formazione as $ruolo => $giocatore) {
        echo "$ruolo: $giocatore\n";
    }

    echo "\n";
}
?> -->
<?php

$partiteSerieA = array(
    array(
        "casa" => "Juventus",
        "ospite" => "Inter",
        "formazioneCasa" => array("Portiere" => "Szczęsny", "Difensore" => "De Ligt", "Centrocampista" => "Bentancur", "Attaccante" => "Ronaldo"),
        "formazioneOspite" => array("Portiere" => "Handanovič", "Difensore" => "Škriniar", "Centrocampista" => "Barella", "Attaccante" => "Lukaku")
    ),
    array(
        "casa" => "Milan",
        "ospite" => "Roma",
        "formazioneCasa" => array("Portiere" => "Donnarumma", "Difensore" => "Romagnoli", "Centrocampista" => "Kessié", "Attaccante" => "Ibrahimović"),
        "formazioneOspite" => array("Portiere" => "Pau López", "Difensore" => "Mancini", "Centrocampista" => "Veretout", "Attaccante" => "Mkhitaryan")
    ),
   
);


echo '<ul>';
foreach ($partiteSerieA as $partita) {
    echo "<li class='text-success'>Partita: {$partita['casa']} vs {$partita['ospite']}\n</li>";
    echo "<li>Formazione {$partita['casa']}:\n</li>";
    
    foreach ($partita['formazioneCasa'] as $ruolo => $giocatore) {
        echo "<li>$ruolo: $giocatore\n</li>";
    }
    echo '</ul>';
    echo "\n";

    echo "<li>Formazione {$partita['ospite']}:\n</li>";
    echo '<ul>';
    foreach ($partita['formazioneOspite'] as $ruolo => $giocatore) {
        echo "<li>$ruolo: $giocatore\n</li>";
    }

    echo "\n";
    echo '</ul>';
}
?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>