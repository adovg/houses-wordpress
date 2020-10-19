<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <title><?php bloginfo( 'description' ); ?></title>
    <link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?> /assets/img/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <div class="content">
        <div class="container">
            <header class="header" style="background: url('../../build/img/header-img.png');">
                <div class="header__inner">
                    <img class="header__logo" src="<?php bloginfo( 'template_url' ); ?> /assets/img/logo.png" alt="">
                    <div class="header__name">
                        Timber House
                    </div>
                    <a class="header__phone" href="tel:+380779988777">380779988777</a>
                    <h1 class="header__title">Дома из бруса под ключ</h1>
                    <div class="header__sale">
                        <img src="build/img/bonus.png" alt="sale">
                    </div>
                </div>
            </header>