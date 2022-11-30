<!-- hotel array data -->
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
// /hotel array data

// methods to get the user choice about hotel optional
// parking optional (GET method): if the user wants a hotel with parking zone
$parking = $_GET["parking"] ?? "";

// vote (GET method): if the user wants to filter the hotels by their votes
$vote = $_GET["vote"] ?? "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- import bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- /import bootstrap -->

    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <!-- /css -->

    <!-- title -->
    <title>PHP Hotels</title>
    <!-- /title -->

</head>

<body>
    
    <h1>HOTELS</h1>

    <!-- hotels table data -->
    <table class="table table-striped table-dark">

        <!-- hotels table head data -->
        <thead>
            <tr>
                <!-- hotels voices data iteration -->
                <?php foreach ($hotels[0] as $key => $value) { ?>
                    <th scope="col"><?php echo $key; ?></th>
                <?php } ?>
                <!-- /hotels voices data iteration -->
            </tr>
        </thead>
        <!-- /hotels table head data -->

        <!-- hotels table body data -->
        <tbody>
            <?php
            // used foreach inside another foreach to reiterate the operations for every item ($hotel) inside the array ($hotels)
            foreach ($hotels as $hotel) {
                // method to GET user choice about optional
                // check
                if ($parking === "" && $vote === "") {
                    echo "<tr>";
                    foreach ($hotel as $key => $hotel) {
                        // hotels name voice data
                        if ($key === "name") {
                            echo "<th scope='row'>$hotel</th>";
                        } else {
                            // if the voice is 'parking' -> ...
                            // true || false parking data
                            if ($key === "parking") {
                                // true
                                if ($hotel == true) {
                                    echo "<td>Yes</td>";
                                } else {
                                    // false
                                    echo "<td>No</td>";
                                }
                            } else {
                                // other hotel data
                                echo "<td>$hotel</td>";
                            }
                        }
                    }
                    echo "</tr>";
                } else {
                    // method to GET user choice about optional (none)
                    if ($parking != "" && $vote != "") {
                        // check
                        if ($hotel['parking'] == $parking && $hotel['vote'] == $vote) {
                            echo "<tr>";
                            foreach ($hotel as $key => $hotel) {
                                // hotels name voice data
                                if ($key === "name") {
                                    echo "<th scope='row'>$hotel</th>";
                                } else {
                                    // if the voice is 'parking' -> ...
                                    // true || false parking data
                                    if ($key === "parking") {
                                        // true
                                        if ($hotel == true) {
                                            echo "<td>Yes</td>";
                                        } else {
                                            // false
                                            echo "<td>No</td>";
                                        }
                                    } else {
                                        // other hotels data
                                        echo "<td>$hotel</td>";
                                    }
                                }
                            }
                            echo "</tr>";
                        }
                    } else {
                        // parking optional method
                        if ($parking === "") {
                            // vote optional method
                            if ($vote == $hotel['vote']) {
                                echo "<tr>";
                                foreach ($hotel as $key => $hotel) {
                                    // hotels name voice data
                                    if ($key === "name") {
                                        echo "<th scope='row'>$hotel</th>";
                                    } else {
                                        // if the voice is 'parking' -> ...
                                        // true || false parking data
                                        if ($key === "parking") {
                                            // true
                                            if ($hotel == true) {
                                                echo "<td>Yes</td>";
                                            } else {
                                                // false
                                                echo "<td>No</td>";
                                            }
                                        } else {
                                            // other hotels data
                                            echo "<td>$hotel</td>";
                                        }
                                    }
                                }
                                echo "</tr>";
                            }
                        } else {
                            // parking check
                            if ($parking == $hotel['parking']) {
                                echo "<tr>";
                                foreach ($hotel as $key => $hotel) {
                                    // hotel name voice data
                                    if ($key === "name") {
                                        echo "<th scope='row'>$hotel</th>";
                                    } else {
                                        // if the voice is 'parking' -> ...
                                        // true || false parking data
                                        if ($key === "parking") {
                                            // true
                                            if ($hotel == true) {
                                                echo "<td>Yes</td>";
                                            } else {
                                                // false
                                                echo "<td>No</td>";
                                            }
                                        } else {
                                            // other hotels data
                                            echo "<td>$hotel</td>";
                                        }
                                    }
                                }
                                echo "</tr>";
                            }
                        }
                    }
                }
            }
            ?>
        </tbody>
        <!-- /hotels table body data -->

    </table>
    <!-- /hotel table data -->

    <!-- form user choice about hotels optional data  -->
    <form action="index.php" method="GET">

    <!-- hotels parking data -->
    <label for="parking-optional">Parking zone optional</label>
    <select name="parking" id="parking-optional">
        <option value="">Yes/No</option>
        <option value="1">Yes</option>
        <option value="2">No</option>
    </select>
    <!-- /hotels parking data -->

    <!-- hotels vote data -->
    <label for="vote-optional">Vote</label>
    <select name="vote" id="vote-optional">
        <option value=""></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <!-- /hotels vote data -->

    <!-- search button -->
    <button type="submit">Search my Hotel</button>
    </form>
    <!-- /form user choice about hotels optional data  -->

</body>

</html>