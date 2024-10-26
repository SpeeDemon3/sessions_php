<?php
    session_start();
    header("refresh:4; url=paint2.php");
    echo "Estoy en paint";

    var_dump($_SESSION['tasks']);

    $_SESSION['tasks'][] = 1;
    $_SESSION['tasks'][] = 2;

    if (!empty($_POST['name']) && isset($_POST['name'])) {
        $name = $_POST['name'];
        $_SESSION['tasks'][] = $name;
    }

    foreach($_SESSION['tasks'] as $task) {
        echo "<h1>$task</h1>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
</body>
</html>