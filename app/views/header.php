<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="default-src 'self'; img-src 'self' https://localhost/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title><?php if (isset($title)) echo $title; else echo "Document"; ?></title>
    <link rel="stylesheet" href="<?php if(isset($style))echo $style;?>">
    <link rel="stylesheet" href="<?php if(isset($bootstrap))echo $bootstrap;?>">
</head>
<body>
    