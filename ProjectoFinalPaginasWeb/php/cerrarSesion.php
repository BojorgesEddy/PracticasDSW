<?php

    session_start();

    session_destroy();

    header('Location: ../loginAdmin.html');
    exit();
?>