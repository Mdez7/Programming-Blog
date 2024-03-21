<?php
    include_once('helpers/url.php');
    include_once('data/posts.php');
    include_once('data/categories.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!--ESTILOS DO PROJETO-->
    <link rel="stylesheet" href="<?php $BASE_URL ?>/css/styles.css">
    <!--GOOGLE FONTES-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header> 
        <a href="<?php $BASE_URL?>" id="logo">
            <img src="<?php $BASE_URL?>/img/logo.svg" alt="Blog">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?php $BASE_URL ?>/index.php"class="nav-link">Home</a></li>
                <li><a href="#"class="nav-link">Categorias</a></li>
                <li><a href="#"class="nav-link">Sobre</a></li>
                <li><a href="<?php $BASE_URL?>contact.php"class="nav-link">Contato</a></li>
            </ul>
        </nav>
    </header> 
