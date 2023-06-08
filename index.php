<?php 
/* 
Descrizione
Partiamo da questo array di hotel. Stampate tutti i dati di tutti gli alberghi.
Iniziate in modo graduale: stampate prima i dati in pagina, senza badare allo stile.
Dopo aggiungete Bootstrap (CDN) e mostrate le informazioni con una tabella.
BONUS
Create una pagina iniziale con un form, da cui scegliere se filtrare gli hotel con parcheggio. Dovrete quindi passare un parametro GET alla pagina precedentemente creata. Gestite l'input dell'utente con una select si/no o una checkbox o un input radio.
Nella pagina del form aggiungete un secondo filtro, in base ai voti. Sarà un input numerico. Inserendo 3 mostrerò solo gli hotel con un voto di 3 stelle o superiore.
Unite form e tabella in un'unica pagina. Avrete quindi una pagina con form la cui action punta alla pagina stessa.
*/


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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <h1 class="py-4">PHP Hotels</h1>
        <table class="table">
            <thead>
                <?php foreach ($hotels[0] as $key => $value) : ?>
                    <th scope="col"><?= ucwords(str_replace('_', ' ', $key)) ?></th>
                <?php endforeach?>
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel) : ?>
                    <tr>
                        <?php foreach ($hotel as $key => $value) : ?>
                            <?php if ($value === true) : ?>
                                <td>Yes</td>
                            <?php elseif ($value === false) : ?>
                                <td>No</td>
                            <?php else : ?>
                            <td><?= $value ?></td>
                            <?php endif ?>
                        <?php endforeach ?>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div>
</body>
</html>