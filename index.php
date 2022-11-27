<!-- php -->
<?php
$hotelsArray = [

    // hotel 1 
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],

    // hotel 2
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],

    // hotel 3
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],

    // hotel 4
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],

    // hotel 5
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];
?>
<!-- /php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- title -->
    <title>PHP Hotel</title>
    <!-- /title -->

</head>

<body>

    <!-- php -->
    <?php

    // print hotelsArray items on screen
    foreach ($hotelsArray as $voice => $hotel) { ?>

        <?php foreach ( $hotel as $key => $value ) { ?>
            <span><?php echo $key; ?>: </span>
            <span><?php echo $value; ?></span>
            <?php echo '<br>';?>

        <?php }; ?>
        <?php echo '<br>';?>

    <?php }; ?>
    <!-- /php -->

</body>

</html>