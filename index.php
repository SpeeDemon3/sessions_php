<?php
    session_start();

    if (!isset($_SESSION['tasks'])) {
        $_SESSION['tasks'] = [];
    }
        $_SESSION['tasks'][] = "A";
        $_SESSION['tasks'][] = "B";
        $_SESSION['tasks'][] = "C";


    echo "Estoy en index";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='css/style.css'>
    <title>Task</title>
</head>
<body>

    <form action="paint.php" method="post">

        <input type="text" name="name" id="name" placeholder="name">
        <input type="submit" value="Send">

    </form>


</body>
</html>