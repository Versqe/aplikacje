<?php
    $servername = "localhost";
    $username = "root"; 
    $password = "";

    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

    $database = "5inb";
    if (mysqli_select_db($conn, $database)) {
        echo "Database $database selected";
    }   else {
        echo "Error select database: " . mysqli_error($conn);
    }

    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
            VALUES ('John', 'Doe', 'john@example.com')";
    if (mysqli_query($conn, $sql)){
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>