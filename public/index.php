<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Sebastian Kornel Art</title>
    <link rel="icon" href="https://iteca-project.fra1.cdn.digitaloceanspaces.com/logo.svg" type="image/svg+xml">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">
</head>



<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/config/config.php';
session_start();
require_once __DIR__ . '/../src/routes/web.php';

require_once __DIR__ . '/../src/Router.php';
