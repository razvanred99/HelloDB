<!doctype html>

<html>

<head>
    <title>HelloDB</title>
    <meta charset="utf-8"/>
</head>

<body>

<?php

if (!empty($_POST)) {

    try {
        $connection = new mysqli($_POST['host'], $_POST['username'], $_POST['password'], $_POST['db']);
    } catch (Exception $e) {
        echo "catched";
    }

    if (!$connection->connect_error) {
        echo "Successfully connected!";

        $command = "SHOW TABLES;";
        $result = $connection->query($command);

        if (!$result)
            echo "Wrong command";
        else
            echo "\nCorrect command";
    } else

        //echo "Failed";

        header("location: index.php");
}
?>

</body>

</html>