<?php
    session_start();

    foreach($_SESSION['tasks'] as $index => $task) {
        echo "<h1>$index - $task </h1>";
    }


    if (isset($_POST['del']) && !empty($_POST['del'])) {
        $index = $_POST['del'];
        unset($_SESSION['tasks'][$index]);
        echo "<h2 style='color:red;'>Deleted element.</h2>";
        foreach($_SESSION['tasks'] as $index => $value) {
            echo "$index - $value" . "<br>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Delete value</h3>
    <form action="" method='post'>
        <input type="text" name="del" id="del" placeholder="index">
        <input type="submit" value="Delete">
    </form>
</body>
</html>