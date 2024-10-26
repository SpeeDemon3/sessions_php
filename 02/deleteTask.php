<?php
    session_start();

    if (isset($_POST['index'])) {
        $indexDelete = $_POST['index'];

        for($i = 0; $i < count($_SESSION['tasks']); $i++) {

            if ($i == $indexDelete) {
                unset($_SESSION['tasks'][$i]);
                header("Location: listTasks.php");
            }
        } 
    } else {
        echo "<h3>The index does not exist.</h3>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Task</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Delete Task</h1>
    <?php
        include_once("html/formDeleteTask.html");
    ?>
</body>
</html>