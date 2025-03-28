<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class=" bg-black">
    <nav class="navbar navbar-expand-lg container nav_menu rounded-bottom mx-auto">
        <?php if (have_rows('nav_menu')) : ?>
            <?php while (have_rows('nav_menu')) : the_row();
                $nav_home = get_sub_field('nav_home');
                $nav_case_studies = get_sub_field('nav_case_studies');
                $nav_testimonials = get_sub_field('nav_testimonials');
                $nav_recent_work = get_sub_field('nav_recent_work');
                $nav_get_in_touch = get_sub_field('nav_get_in_touch');
                $linked_in = get_sub_field('linked_in');
                $behance = get_sub_field('behance');
                $twitter = get_sub_field('twitter');
                
            ?>
                <div class="container nav_menu_container">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-center navigation" id="main-menu">
                        <ul class="navbar-nav nav_menu_text">
                            <li class="nav-item "><a class="nav-link " href="#"><?php echo esc_html($nav_home); ?></a></li>
                            <li class="nav-item"><a class="nav-link" href="#case_studies"><?php echo esc_html($nav_case_studies); ?></a></li>
                            <li class="nav-item"><a class="nav-link" href="#testimonials"><?php echo esc_html($nav_testimonials); ?></a></li>
                            <li class="nav-item"><a class="nav-link" href="#recent_work"><?php echo esc_html($nav_recent_work); ?></a></li>
                            <li class="nav-item"><a class="nav-link" href="#get_in_touch"><?php echo esc_html($nav_get_in_touch); ?></a></li>
                        </ul>
                    </div>
                    <div class="d-flex flex-row app_icon">
                        <a href=""><input type="image" src="<?php echo esc_html($linked_in); ?>" alt=""></a>
                        <a href=""><input type="image" src="<?php echo esc_html($behance); ?>" alt=""></a>
                        <a href=""><input type="image" src="<?php echo esc_html($twitter); ?>" alt=""></a>
                    </div>
                    
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </nav>
</header>
