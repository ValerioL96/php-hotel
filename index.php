<?php
//Milestone 1
//Stampare tutti i nostri hotel con tutti i dati disponibili. Iniziate in modo graduale.
//Prima stampate in pagina i dati, senza preoccuparvi dello stile.
//Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];


if($hotels['parking'] == true){
    echo 'Presente';
}else{
    echo 'Non presente';
}
?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
</head>
<body>
    <ul>
        <?php foreach($hotels as $hotel){?>
            <li>
                <h2>
                    Nome: <?php echo $hotel['name']; ?>
                </h2>
                <h3>
                    <?php echo $hotel['description']; ?>:
                </h3>
                <p>
                    parcheggio: <?php echo $hotel['parking']; ?>:
                </p>
                <h5> 
                    Valutazione: <?php echo $hotel['vote']; ?>
                </h5>
                <p>
                    Distanza dal centro: <?php echo $hotel['distance_to_center']; ?> m 
                </p>
            </li>
        <?php }?>
    </ul>
    
</body>
</html>


