<!-- hotels array list -->
<?php
$hotels = [

    // hotel 1 data
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],

    // hotel 2 data
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],

    // hotel 3 data
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],

    // hotel 4 data
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],

    // hotel 5 data
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];
?>
<!-- /hotels array list -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- /bootstrap cdn -->

    <!-- title -->
    <title>PHP Hotels</title>
    <!-- /title -->

</head>

<body>

    <!-- form section to select the hotel that the user prefer -->
    <form action="index.php" method="GET">
        <label for="parking">Parking</label>

        <!-- user parking choice -->
        <select name="parking" id="parking">
            <option value="0">...</option>
            <option value="1">Yes</option>
            <option value="2">No</option>
        </select>
        <!-- /user parking choice -->

        <!-- user vote choice -->
        <label for="vote">Vote</label>
        <select name="vote" id="vote">
            <option value="">...</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <!-- /user voice choice -->

        <button type="submit">Search</button>
    </form>
    <!-- /form section to select the hotel that the user prefer -->

    <!-- hotels table -->
    <table class="table">

        <!-- table head -->
        <thead>
            <tr>
                <!-- hotels voices data iteration -->
                <?php foreach ($hotels[0] as $key => $value /*voices-data*/) { ?>
                    <th scope="col"><?php echo $key; ?></th>
                <?php } ?>
                <!-- /hotels voices data iteration -->
            </tr>
        </thead>
        <!-- /table head -->

        <!-- table body -->
        <tbody>

            <!-- hotels itereation data -->
            <?php foreach ($hotels as $hotel) { ?>
                <tr>
                    <?php foreach ($hotel as $key => $hotelData) { ?>
                        <!-- hotel name section -->
                        <!-- name data -->
                        <?php if ($key === "name") { ?>
                            <th scope="row"><?php echo $hotelData; ?></th>
                        <?php } else { ?>

                            <!-- hotel parking section -->
                            <!-- parking true || false data -->
                            <?php if ($key === "parking") { ?>

                                <!-- true -> yes -->
                                <?php if ($hotelData === true) { ?>
                                    <td>Yes</td>

                                <!-- false -> no -->
                                <?php } else { ?>
                                    <td>No</td>
                                <?php } ?>

                            <!-- others hotels voices data -->
                            <?php } else { ?>
                                <td><?php echo $hotelData; ?></td>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                </tr>
            <?php } ?>
            <!-- /hotels iteration data -->
            
        </tbody>
        <!-- /table body -->

    </table>
    <!-- /hotels table -->

</body>

</html>