<?php
/**
 * Template part for displaying a banner in the front-page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Capacitacion
 */

 ?>
<!-- service area start -->
<div class="service-area pd-top-115 pd-bottom-90 pb-lg-0" style="background: url(assets/img/service/bg.png);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="section-title text-center">
                                    <h4 class="subtitle style-2">SERVICES</h4>
                                    <h2 class="title"><?php echo esc_html( get_post_meta( get_the_ID(  ), 'services_repeatable_title-services', true ) ); ?></h2>
                                    <p><?php echo esc_html( get_post_meta( get_the_ID(  ), 'services_repeatable_descripcion-services', true ) ); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                             <!-- AQUI EMPIEZA -->
                             <?php
                                $items = get_post_meta( get_the_ID ( ), 'services_repeatable_group', true );
                                if (isset($items) && !empty($items)):
                                    foreach ($items as $item):
                            ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-service-wrap">
                                    <div class="thumb">
                                        <img src="<?php echo esc_attr($item['background']); ?>" alt="img">
                                        <div class="icon">
                                            <img src="<?php echo esc_attr($item['icon']); ?>" alt="img">
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h5><?php echo esc_html($item['title-service']) ?></h5>
                                        <p><?php echo esc_html($item['title-service']) ?></p>
                                        <div class="btn-wrap">
                                            <a class="read-more-text" href="service-details.html">READ MORE <span><i class="fa fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                    endforeach;
                                endif;
                            ?>
                            <!-- AQUI TERMINA -->

                        </div>
                    </div>
                </div>
                <!-- service area end -->