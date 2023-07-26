<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "db";
    $username = "db";
    $password = "db";
    $dbname = "db";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = $_POST['mail'];
    $password = $_POST['password'];
    $sql = "SELECT * from fe_users WHERE email='$email' AND password='$password';";
    $row = $conn->query($sql);
    if ($row->num_rows > 0) {
        echo "Logged in successfully";
    } else {
        echo "Log in failed.";
    }

    $conn->close();
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

</html>
