<?php
// wp_nav_menu( array( 
//     'theme_location' => 'my-custom-menu', 
//     'container_class' => 'custom-menu-class' ) ); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/639d1b6db2.css" media="all" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/style.css"; ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a href="/#homepage" class="navbar-brand">
            <img class="navbar-icon" src="<?php echo get_template_directory_uri() . '/static/img/digital-max.png'; ?>">
        </a>
        <button type="button" class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarCollapse">
            <div class="navbar-nav ml-auto navbar-txt">
            <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'header-menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => '',
                    'container_id'      => '',
                    'menu_class'        => 'navbar-nav ml-auto',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
            ?>
                <!-- <a href="#" class="nav-item nav-link active">Chi siamo</a>
                <a href="#" class="nav-item nav-link">Servizi</a>
                <a href="#" class="nav-item nav-link">Experience</a>
                <a href="#" class="nav-item nav-link active">Lavori</a>
                <a href="#" class="nav-item nav-link">Partner tecnologici </a>
                <a href="#" class="nav-item nav-link">Certificazioni</a> -->
            </div>
        </div>
    </nav>