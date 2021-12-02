<?php
    function addPath($path) {
        session_start();
        if(!isset($_SESSION['links'])) {
            $_SESSION['links'] = [];
        }
        $_SESSION['links'][] = $path;
    }
?>