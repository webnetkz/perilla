<?php

require_once './settings.php';
require_once './app/libs/Dev.php';

$x = new Dev(true);

?>

<html lang="en">
    <head>
        <title><?=$title;?></title>

        <meta charset="UTF-8">
        <meta name="theme-color" content="#FFF">
        <meta name="author" content="webnet.kz">
        <meta name="description" content="<?=$description;?>">
        <meta name="keywords" content="<?=$keywords;?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width">
        <meta name="robots" content="index, follow">

        <link rel="stylesheet" href="./assets/css/styles.css">
        <link rel="stylesheet" href="./assets/css/mobile.css">

        <link rel="shortcut icon" type="image/png" href="./assets/logo512.png">
        <link rel="apple-touch-icon" href="./assets/logo512.png">
        <link rel="manifest" href="./manifest.json"> 
      </head>
<body>
