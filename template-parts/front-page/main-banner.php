<?php
/**
 * Template part for displaying a banner in the front-page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Capacitacion
 */

?>

<!-- banner start -->
<div class="banner-area banner-area-1">
    <div class="banner-slider owl-carousel">
    <!-- comienza aqui el repetible-->
        <?php
            $items = get_post_meta( get_the_ID ( ), 'banner_repeatable_group', true );
            if (isset($items) && !empty($items)):
                foreach ($items as $item):
        ?>
        <div class="item" style="background-image: url('<?php echo esc_attr($item['background-banner1']); ?>')">

            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-8">
                        <div class="banner-inner style-white">
                            <h1 class="b-animate-2 title"><?php echo esc_html($item['title']) ?></h1>
                            <p class="b-animate-3 content"><?php echo esc_html($item['description']) ?></p>
                            <div class="btn-wrap">
                                <a class="btn btn-base b-animate-4" href="<?php echo esc_attr($item['buttonService']) ?>"><?php echo esc_html($item['Service']) ?></a>
                                <a class="btn btn-white b-animate-4" href="<?php echo esc_attr($item['buttonAbout']) ?>"><?php echo esc_html($item['About']) ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
                endforeach;
            endif;
            ?>
<!-- Termina aqui aqui -->
    </div>
</div>

<!-- banner end -->
<?php
printf('<pre>%s</pre>',var_export(get_post_custom( get_the_ID(  ) ), true));
