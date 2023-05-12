<?php

    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "test");
    echo("Hej")
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP test</title>
    
</head>
<body>
    <h2>PHP</h2>
    
    <div>
    <?php
    // Execute a SQL query
    $result = mysqli_query($conn, "SELECT * FROM table_jens");

    // Loop through the query result and fetch each row of data
    while ($row = mysqli_fetch_assoc($result)) {
        // Access the data using the column names as keys in the associative array
        echo "Namn: " . $row["namn"] . "<br>";
    }

    // Close the database connection
    mysqli_close($conn);
    
    ?>

    </div>
</body>
</html>