<?php
/*
Template Name: home

*/ ?>
<?php get_header(); ?>
<section class="services">
    <div class="container">
        <h2 class="title">OUR SERVICES</h2>
        <div class="services__inner">
            <div class="services__content">
                <?php the_field('service_text'); ?>

                <a href="#" class="button button--decor">EXPERT CONSULTATION</a>
            </div>
        </div>

        <?php the_field('service_item'); ?>

    </div>
    </div>
</section>

<section class="benefits">
    <div class="container">
        <div class="benefits__inner">
            <img data-wow-delay="2s" class="benefits__<?php bloginfo("template_url"); ?>/assets/    images/ wow animate__fadeInUp" src="<?php the_field("benefits-img"); ?>" alt="car">
            <div class="benefits__content">
                <h2 class="title benefits__title">WHY US?</h2>
                <?php the_field('benefits-text'); ?>
            </div>

        </div>
    </div>
</section>


<section class="carousel">
    <div class="container">
        <h2 class="title">
            CARS WE HAVE IMPORTED
        </h2>
        <div class="carousel__inner">

            <?php
            global $post;

            $myposts = get_posts([
                'numberposts' => -1,
            ]);

            if ($myposts) {
                foreach ($myposts as $post) {
                    setup_postdata($post);
            ?>
                    <div class="carousel__item">
                        <div class="carousel__item-box">

                            <?php the_post_thumbnail(
                                array(380, 250),
                                array(
                                    'class' => 'carousel__item-img'
                                )
                            ) ?>
                            <h4 class="carousel__item-title"><?php the_title(); ?></h4>
                            <p class="carousel__item-text"><?php the_content(); ?></p>
                        </div>
                    </div>
            <?php }
            }
            wp_reset_postdata();  ?>

        </div>
    </div>
</section>



<section class="contacts">
    <div class="container">
        <div class="contacts__inner">
            <div class="contacts__info">
                <h2 class="title">
                    Contacts
                </h2>
                <ul class="contacts__list">
                    <li class="contacts__item">
                        <p class="contacts__item-title">Address</p>
                        <p class="contacts__item-text">
                            <?php the_field('address'); ?>
                        </p>
                    </li>
                    <li class="contacts__item">
                        <p class="contacts__item-title">Working hours</p>
                        <p class="contacts__item-text">

                            <?php the_field('working_hours'); ?>

                        </p>
                    </li>
                    <li class="contacts__item">
                        <p class="contacts__item-title">Telephone</p>
                        <p class="contacts__item-text">
                            <?php

                            $phone = get_field('phone');

                            // delete spaces in tel
                            $phone_for_tel = preg_replace('/[^\d]/', '', $phone);
                            ?>
                            <a href="tel:<?php echo esc_attr($phone_for_tel); ?>"><?php echo esc_html($phone); ?></a>
                        </p>
                    </li>
                </ul>
            </div>
            <div class="contacts__form">
                <h2 class="title contacts__title">Submit a Request</h2>
                <?php echo do_shortcode('[contact-form-7 id="c50cd78" title="Contact form"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>