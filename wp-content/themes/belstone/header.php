<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Mixen">
        <link rel="shortcut icon" type="img/png" href="<?php echo bloginfo('template_url').'/'; ?>img/favicon.ico"/>
        <link rel="stylesheet" href="<?php echo bloginfo('template_url').'/'; ?>css/ekko-lightbox.min.css">
        <link rel="stylesheet" href="<?php echo bloginfo('template_url').'/'; ?>css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo bloginfo('template_url').'/'; ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <title>BelStone</title>
        <?php wp_head(); ?>
        <script src="<?php echo bloginfo('template_url').'/'; ?>js/jquery-1.12.0.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <a href="<?php if($page != 'index') { echo 'index.php'; }?>#index" class="smoothScroll nav-logo">
                    <img src="<?php echo bloginfo('template_url').'/'; ?>img/icons/logo.png" alt="logo" class="vertical-align">
                </a>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php if($page != 'index') { echo 'index.php'; }?>#index" class="smoothScroll vertical-align nav-padd">Inicio</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#nosotros" class="smoothScroll vertical-align nav-padd">Nosotros</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#materiales" class="smoothScroll vertical-align nav-padd">Materiales</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#contacto" class="smoothScroll vertical-align nav-padd">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>