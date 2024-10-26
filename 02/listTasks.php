<?php
    session_start();

    // Si no esta vacio el contenido
    if (!empty($_POST['name'])) {
        $nameTask = $_POST['name'];
        // Agrego el valor al array
        $_SESSION['tasks'][] = $nameTask;
    } 

    echo "<h1 style='color:white;'>List Task</h1>";

    foreach($_SESSION['tasks'] as $index => $task) {
        echo "<p>$index - $task</p> <br/>";
    }

    header("refresh:3; url=selectAction.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Task</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
</body>
</html>