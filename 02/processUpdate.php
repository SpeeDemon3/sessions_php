<?php
    session_start();

    $index;
    $nameTask;

    if (isset($_POST['index'])) {
        $index = $_POST['index'];
    } else {
        header("refresh:4; url = update.php");
        echo "<h3 style='color: red;'>Index not valid.</h3>";
    }

    if (isset($_POST['name']) && !empty($_POST['name'])) {
        header("Location: listTasks.php");
        $nameTask = $_POST['name'];
        $_SESSION['tasks'][$index] = $nameTask;
    } else {
        header("refresh:4; url = update.php");
        echo "<h3 style='color: red;'>Name not valid.</h3>";
    }

?>