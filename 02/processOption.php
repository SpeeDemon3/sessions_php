<?php
    session_start();

    if (isset($_POST['option'])) {

        if ($_POST['option'] == 'update') {
            header("Location: update.php");
        }

        if ($_POST['option'] == 'delete') {
            header("Location: deleteTask.php");
        }

        if ($_POST['option'] == 'add') {
            header("Location: index.php");
        }

        if ($_POST['option'] == 'list') {
            header("Location: listTasks.php");
        }


    } else {
        header("Location: index.php");
    }

?>