<?php get_header(); ?>


<section class="hero bg-black">
    <div class="container">
        <?php if (have_rows('hero')) : ?>
            <?php while (have_rows('hero')) : the_row();
                $hero_name = get_sub_field('hero_name');
                $hero_text = get_sub_field('hero_text');
                $hero_button = get_sub_field('hero_button');
                $hero_image = get_sub_field('hero_image');
            ?>
                <div class="row">
                            <div class="col col-md-6 text-white d-flex flex-column justify-content-center hero_right">
                                <?php if (!empty($hero_name)) : ?><h1><?php echo esc_html($hero_name); ?></h1><?php endif; ?>
                                <?php if (!empty($hero_text)) : ?><p id="hero_text"><?php echo esc_html($hero_text); ?></p><?php endif; ?>
                                <?php if (!empty($hero_button)) : ?><button class="hero_button"><?php echo esc_html($hero_button); ?></button><?php endif; ?>
                            </div>

                            <div class="col col-md-6 hero_image">
                                <?php if (!empty($hero_image)) : ?>
                                    <img src="<?php echo esc_url($hero_image); ?>"
                                        alt="<?php echo esc_attr($hero_image); ?>"
                                        >
                                <?php endif; ?>
                            </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <span>Worked with</span>
        <div class="row">
            <div class="d-flex flex-row mx-auto clients_logo g-3" style="flex-wrap: wrap;">
                <?php if (have_rows('clients_logo')) : ?>
                    
                    <?php while (have_rows('clients_logo')) : the_row();
                        $client_logo = get_sub_field('client_logo');
                    ?>
                            <div class="border rounded col-md-2 d-flex flex-column justify-content-center align-items-center">
                                <?php if (!empty($client_logo)) : ?><a href="#"><img src="<?php echo esc_url($client_logo); ?>" alt="Client Logo"></a><?php endif; ?>
                            </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>                            
</section>

<section class="case_studies_section">
    <div class="container">

        <?php if (have_rows('case_studies')) : ?>
                <?php while (have_rows('case_studies')) : the_row();
                    $section_name = get_sub_field('section_name');
                    $section_text = get_sub_field('section_text');
                ?>
                <div class="row case_studies" >
                    <div class="col-md-8 mx-auto text-center">
                        <?php if (!empty($section_name)) : ?><h2 class="case_studies_heading"><?php echo esc_html($section_name); ?></h2><?php endif; ?>
                        <?php if (!empty($section_text)) : ?><p><?php echo esc_html($section_text); ?></p><?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php $i = 0; // Initialize counter ?>
        <?php if (have_rows('case_studies_card')) : $i = 0; ?> 
        <?php while (have_rows('case_studies_card')) : the_row();
            $card_tittle = get_sub_field('card_tittle');
            $card_name = get_sub_field('card_name');
            $card_text = get_sub_field('card_text');
            $card_button_name = get_sub_field('card_button_name');
            $card_image = get_sub_field('card_image');
        ?>
            <div class="row g-4 case_card_<?php echo $i; ?>">
                <?php if ($i % 2 == 0) : ?> 
                    <!-- Even Rows: Text First, Image Second -->
                    <div class="col col-xl-6">
                        <?php if (!empty($card_tittle)) : ?><h5 class="rounded-pill"><?php echo esc_html($card_tittle); ?></h5><?php endif; ?>
                        <?php if (!empty($card_name)) : ?><h3><?php echo esc_html($card_name); ?></h3><?php endif; ?>
                        <?php if (!empty($card_text)) : ?><p><?php echo esc_html($card_text); ?></p><?php endif; ?>
                        <?php if (!empty($card_button_name)) : ?><button type="button" class="btn"><?php echo esc_html($card_button_name); ?></button><?php endif; ?>
                    </div>
                    <div class="col col-xl-6">
                        <?php if (!empty($card_image)) : ?>
                            <img src="<?php echo esc_url($card_image); ?>"
                                alt="<?php echo esc_attr($card_image); ?>"
                                class="img-fluid">
                        <?php endif; ?>
                    </div>
                <?php else : ?>
                    <!-- Odd Rows: Image First, Text Second -->
                    <div class="col col-xl-6 order-xl-2">
                        <?php if (!empty($card_tittle)) : ?><h5 class="rounded-pill"><?php echo esc_html($card_tittle); ?></h5><?php endif; ?>
                        <?php if (!empty($card_name)) : ?><h3><?php echo esc_html($card_name); ?></h3><?php endif; ?>
                        <?php if (!empty($card_text)) : ?><p><?php echo esc_html($card_text); ?></p><?php endif; ?>
                        <?php if (!empty($card_button_name)) : ?><button type="button" class="btn"><?php echo esc_html($card_button_name); ?></button><?php endif; ?>
                    </div>
                    <div class="col col-xl-6 order-xl-1">
                        <?php if (!empty($card_image)) : ?>
                            <img src="<?php echo esc_url($card_image); ?>"
                                alt="<?php echo esc_attr($card_image); ?>"
                                class="img-fluid">
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php $i++; ?>
    <?php endwhile; ?>
<?php endif; ?>


    </div> 

</section>

<section class="testimonials bg-black">
    <div class="container">
        <?php if (have_rows('testimonials')) : ?>
                <?php while (have_rows('testimonials')) : the_row();
                    $testimonial_name = get_sub_field('testimonial_name');
                    $testimonial_text = get_sub_field('testimonial_text');
                ?>
                <div class="row">
                    <div class="col-md-6 mx-auto text-center testimonial_head">
                        <?php if (!empty($testimonial_name)) : ?><h2><?php echo esc_html($testimonial_name); ?></h2><?php endif; ?>
                        <?php if (!empty($testimonial_text)) : ?><p><?php echo esc_html($testimonial_text); ?></p><?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        
        <?php if (have_rows('testimonial_card')) : ?>
            <div class="row testimonial_card_row">
                <?php while (have_rows('testimonial_card')) : the_row();
                    $card_comma = get_sub_field('card_comma');
                    $card_text = get_sub_field('card_text');
                    $card_image = get_sub_field('card_image');
                    $card_image_name = get_sub_field('card_image_name');
                ?>
                    
                        <div class="col col-md-6 border rounded testimonial_card">
                            <?php if (!empty($card_comma)) : ?><span><?php echo esc_html($card_comma); ?></span><?php endif; ?>
                            <?php if (!empty($card_text)) : ?><p><?php echo esc_html($card_text); ?></p><?php endif; ?>
                            <div class="card_image d-flex align-items-center">
                                <?php if (!empty($card_image)) : ?>
                                    <img src="<?php echo esc_url($card_image); ?>"
                                        alt="<?php echo esc_attr($card_image); ?>"
                                        class="img-fluid">
                                <?php endif; ?>
                                <?php if (!empty($card_image_name)) : ?><h6 style="color: white !important;
        font-weight: bold !important;
        font-family: 'Raleway' !important;"><?php echo esc_html($card_image_name); ?></h6><?php endif; ?>
                            </div>
                        </div>

                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        
    </div> 

</section>

<section class="recent_work">
    <div class="container">
        <?php if (have_rows('recent_work')) : ?>
                <?php while (have_rows('recent_work')) : the_row();
                    $recent_work_name = get_sub_field('recent_work_name');
                    $recent_work_text = get_sub_field('recent_work_text');
                ?>
                    <div class="row">
                        <div class="col-md-5 mx-auto text-center recent_work_head">
                            <?php if (!empty($recent_work_name)) : ?><h2><?php echo esc_html($recent_work_name); ?></h2><?php endif; ?>
                            <?php if (!empty($recent_work_text)) : ?><p><?php echo esc_html($recent_work_text); ?></p><?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
        <?php endif; ?>
        <?php if (have_rows('recent_work_card')) : ?>
            <div class="row row-cols-1 row-cols-md-2 recent_work_card">
                <?php while (have_rows('recent_work_card')) : the_row();
                    $card_image = get_sub_field('card_image');
                    $card_name = get_sub_field('card_name');
                    $card_text = get_sub_field('card_text');
                    $card_button_name = get_sub_field('card_button_name');
                ?>
                        <div class="col" style="width: 445px;">
                                <div>
                                    <?php if (!empty($card_image)) : ?>
                                        <img src="<?php echo esc_url($card_image); ?>"
                                            alt="<?php echo esc_attr($card_image); ?>"
                                            class="img-fluid">
                                    <?php endif; ?>
                                </div>
                                <?php if (!empty($card_name)) : ?><span><?php echo esc_html($card_name); ?></span><?php endif; ?>
                                <?php if (!empty($card_text)) : ?><p><?php echo esc_html($card_text); ?></p><?php endif; ?>
                                <?php if (!empty($card_button_name)) : ?><button class="btn "><?php echo esc_html($card_button_name); ?></button><?php endif; ?>
                        </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?> 
    </div>
</section>

<section class="get_in_touch bg-black">
    <div class="container">
        <?php if (have_rows('get_in_touch')) : ?>
                <?php while (have_rows('get_in_touch')) : the_row();
                    $get_in_touch_title = get_sub_field('get_in_touch_title');
                    $get_in_touch_text = get_sub_field('get_in_touch_text');
                ?>
                <div class="row">
                    <div class="col-md-6 mx-auto text-center get_in_touch_head">
                        <?php if (!empty($get_in_touch_title)) : ?><h2 class="case_studies_heading"><?php echo esc_html($get_in_touch_title); ?></h2><?php endif; ?>
                        <?php if (!empty($get_in_touch_text)) : ?><p><?php echo esc_html($get_in_touch_text); ?></p><?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <div class="row" style="justify-content: center;">
            <div class="col col-md-6" style="width: 350px;">
                <?php echo do_shortcode('[fluentform id="3"]');?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
