<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <!-- Navigation Bar -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <!-- Site Title or Logo -->
                <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>

                <!-- Mobile Menu Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation Menu -->
                <div class="collapse navbar-collapse " id="mainNav">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary', // Uses the registered menu
                            'menu_class'     => 'navbar-nav ms-auto d-flex justify-content-evenly',
                            'container'      => false, // Removes the default <div> wrapper
                            'depth'          => 2, // Allows dropdowns
                        ));
                    ?>
                </div>
            </div>
        </nav>
    </div>
</header>
