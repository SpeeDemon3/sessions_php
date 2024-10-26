<?php
    session_start();

    if (!isset($_SESSION["tasks"])) {
        $_SESSION["tasks"] = [];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include_once("html/header.html");
        include_once("html/formAddTask.html");
    ?>
</body>
</html>