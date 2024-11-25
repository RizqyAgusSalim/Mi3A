<?php
    $namahost = "localhost";
    $username = "root";
    $password = ""; // password for MySQLi
    $database = "mi3a"; // your database name

    // Create connection
    $connection = mysqli_connect($namahost, $username, $password, $database);

    // Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Optional: Select the database (not needed if you specify it in mysqli_connect)
    // mysqli_select_db($connection, $database) or die("Database not exist");

?>