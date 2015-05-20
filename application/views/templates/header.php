<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fuckapp</title>
        <link rel="stylesheet" href="<?php echo asset_url(); ?>css/styles.css" />
        <link rel="stylesheet" href="<?php echo asset_url(); ?>css/normalize.css">
        <link rel="stylesheet" href="<?php echo asset_url(); ?>css/materialize.min.css" />
    </head>
    <body id="<?php echo isset($page_id) ? $page_id : ""; ?>">
        <?php $this->load->view("layout/menu"); ?>
        <div class="container">
