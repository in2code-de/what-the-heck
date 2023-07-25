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

    $yourName = $_POST['yourName'];
    $password = $_POST['password'];
    $date_of_birth = $_POST['birthday'];
    $date_of_birth = time();
    $privacy = $_POST['privacy'];
    $comments = $_POST['remark'];
    if (!$comments) {
        $comments = 'keine ';
    }
    $sql = "INSERT INTO fe_users (yourName, password, date_of_birth, privacy, comments)
VALUES ( '$yourName', '$password', '$date_of_birth' , 1, '$comments')";
    echo $sql;
    if ($conn->query($sql) === true) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
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


<div class="container">
    <h2>PHP Form Validation Example</h2>


    <?php
    echo "<h2>Your Input:</h2>";
    echo var_dump($_POST['yourName']);

    echo "<br>";
    echo var_dump($_POST['password']);
    echo "<br>";
    echo var_dump($_POST['passwordRepeat']);

    echo "<br>";
    echo var_dump($_POST['birthday']);

    echo "<br>";
    echo var_dump($_POST['remark']);

    echo "<br>";
    echo var_dump($_POST['privacy']);

    echo "<br>";
    ?>

</div>

</html>
