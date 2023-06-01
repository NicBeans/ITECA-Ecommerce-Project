<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">
</head>



<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/routes/web.php';

include_once "../src/Views/Partials/navbar.php";
require_once __DIR__ . '/../src/Router.php';
