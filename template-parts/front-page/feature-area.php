<?php
/**
 * Template part for displaying a banner in the front-page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Capacitacion
 */

 ?>
 <!-- feature area start -->
<div class="container">
    <div class="feature-area mb-60">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-title mb-0">
                    <h4 class="subtitle">FEATURES</h4>
                    <h2 class="title"><?php echo esc_html( get_post_meta( get_the_ID(  ), 'custom_repeatable_title-features', true ) ); ?></h2>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="section-title">
                    <p class="content left-line"> <?php echo esc_html( get_post_meta( get_the_ID(  ), 'custom_repeatable_descripcion-features', true ) ); ?></p>
                </div>
            </div>
        </div>
        <div class="feature-slider owl-carousel">
            <?php
            $items = get_post_meta( get_the_ID(), 'custom_repeatable_group', true );
            if (isset($items) && !empty($items)):
                foreach ($items as $item):
            ?>
            <div class="item">
                <div class="feature-wrap bg-pink">
                    <div class="icon">
                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/icon/feature-1.png" alt="img">
                    </div>
                    <h5><?php echo esc_html($item['title']) ?></h5>
                    <p><?php echo esc_html($item['description']) ?></p>
                </div>
            </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</div>
<!-- feature area end -->