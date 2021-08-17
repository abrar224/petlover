<?php
    session_start();
    unset($_SESSION['uname']);
    session_destroy();

    echo "<script>window.location.assign('index.html');</script>";
?>