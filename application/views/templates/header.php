<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fuckapp</title>

        <link type="text/css" rel="stylesheet" href="<?php echo asset_url(); ?>/css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php echo asset_url(); ?>/css/stylematerialize.css"  media="screen,projection"/>
    </head>
    <body id="<?php echo isset($page_id) ? $page_id : ""; ?>">
    <?php $this->load->view("layout/menu"); ?>
        <nav>
            <div class="nav-wrapper" style="background-color:#290728;background: -moz-linear-gradient(top, #290728 0%, #3c0a3c 100%);">
                <!-- <img src="<?php //echo asset_url(); ?>img/logo.png" alt="logo">-->
                <a href="#" class="brand-logo right" style="text-align: center;"><img height="50px" src="<?php echo asset_url(); ?>/img/logo.png" alt="logo"></a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="" id="volver"><</a></li>
                </ul>
            </div>
        </nav>
        <div class="container center">