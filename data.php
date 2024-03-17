<?php
// Assuming you have already established a connection to the PostgreSQL database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Prepare and execute the SQL query to insert the data into the database
    $query = "INSERT INTO your_table_name (name, email, message) VALUES ('$name', '$email', '$message')";
    $result = pg_query($query);

    if ($result) {
        echo "Data inserted successfully!";
    } else {
        echo "Error inserting data.";
    }
}
?>