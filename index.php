<?php
//Milestone 1
//Stampare tutti i nostri hotel con tutti i dati disponibili. Iniziate in modo graduale.
//Prima stampate in pagina i dati, senza preoccuparvi dello stile.
//Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.

//Milestone 2
//Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.


//Milestone 3 
//Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto
//(es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)


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

$message="";

if(empty($_GET['parking']) || empty($_GET['vote'])){
    $message ="Errore";
}elseif(!is_numeric($_GET['vote'])){
    $message= 'Errore';
}else{
    $message= $hotel['parking'];
    $message= $hotel['vote'];
}
    echo $message;



//if($hotels['parking'] == true){
  //  echo 'Presente';
//}else{
  //  echo 'Non presente';
//}
?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
</head>
<body>

<form action="./index.php" method="GET">
    <div>
        <label for="parking">Parcheggio</label>
        <input type="text" name="parking" id="parking">
    </div>
    <div>
        <label for="vote">Valutazione</label>
        <input type="number" name="vote" id="vote">
    </div>
    <button type="submit">Cerca</button>
</form>

<table class="table">
<?php foreach($hotels as $hotel){?>
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Parcheggio</th>
            <th scope="col">Valutazione</th>
            <th scope="col">Distanza dal centro</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <?php echo $hotel['name']; ?>
            </td>
            <td>
                <?php echo $hotel['description']; ?>:
            </td>
            <td>
                <?php echo $hotel['parking']; ?>:
            </td>
            <td>
                <?php echo $hotel['vote']; ?>
            </td>
            <td>
                <?php echo $hotel['distance_to_center']; ?> m 
            </td>
        </tr>
    </tbody>
<?php }?>
</table>



    <!--<ul>
        <php foreach($hotels as $hotel){?>
            <li>
                <h2>
                    Nome: <php echo $hotel['name']; ?>
                </h2>
                <h3>
                    <php echo $hotel['description']; ?>:
                </h3>
                <p>
                    parcheggio: <php echo $hotel['parking']; ?>:
                </p>
                <h5> 
                    Valutazione: <php echo $hotel['vote']; ?>
                </h5>
                <p>
                    Distanza dal centro: <php echo $hotel['distance_to_center']; ?> m 
                </p>
            </li>
        <php }?>
    </ul> -->
    

        <!--bootstrap-->

<script 
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" 
    crossorigin="anonymous">
</script>
<script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" 
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous">
</script>
</body>
</html>


