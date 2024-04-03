<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head();?>
        <title>Heather Schmitt Arts</title>
    </head>

    <body>
        <div class="hero-section">
            <header>
                <a href=<?php echo site_url(); ?> >
                <img src=<?php echo get_theme_file_uri('images/logo.png'); ?>></a>
                <nav>
                    <a href=<?php echo site_url('/Home'); ?>>Home</a>
                    <a href=<?php echo site_url('/gallery'); ?>>Gallery</a>
                    <a href=<?php echo site_url('/about'); ?> >About</a>
                    <a href=<?php echo site_url('/contact'); ?> >Contact</a>
                </nav>
            </header>