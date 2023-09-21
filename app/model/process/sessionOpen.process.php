<?php
    session_start();
    $_SESSION['session'] = $_POST['session'];
    echo $_SESSION['session'];
?>