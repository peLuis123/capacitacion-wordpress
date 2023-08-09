<?php
/**
 * Template part for displaying a banner in the front-page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Capacitacion
 */

 ?>

 <!-- about area start -->
 <div class="about-area pd-bottom-120">
                    <div class="container">
                        <div class="about-area-inner">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="about-thumb-wrap">
                                        <img class="img-1" src="<?php echo esc_attr( get_post_meta( get_the_ID(  ), 'about1', true ) ); ?>" alt="img">
                                        <img class="img-2" src="<?php echo esc_attr( get_post_meta( get_the_ID(  ), 'about2', true ) ); ?>" alt="img">
                                        <img class="img-3" src="<?php echo esc_attr( get_post_meta( get_the_ID(  ), 'about3', true ) ); ?>" alt="img">
                                        <div class="exprience-wrap">
                                            <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/about/shape-3.png" alt="img">
                                            <div class="details">
                                                <h1>22</h1>
                                                <p>YEARS EXPERIENCE</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 align-self-center">
                                    <div class="about-inner-wrap">
                                        <div class="section-title mb-0">
                                            <h4 class="subtitle">ABOUT US</h4>
                                            <h2 class="title"><?php echo esc_html( get_post_meta( get_the_ID(  ), 'about_repeatable_title-about', true ) ); ?></h2>
                                            <p class="content left-line"><?php echo esc_html( get_post_meta( get_the_ID(  ), 'about_repeatable_descripcion-about', true ) ); ?>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-6">
                                                    <ul class="list-inner-wrap mb-mb-0 mb-3 mb-lg-3 mb-xl-0">
                                                        <!-- empieza aqui -->
                                                        <?php
                                                            $items = get_post_meta( get_the_ID ( ), 'about_repeatable_group', true );
                                                            if (isset($items) && !empty($items)):
                                                                foreach ($items as $item):
                                                        ?>
                                                        <li><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/icon/check.png" alt="img"><?php echo esc_html($item['item']) ?></li>
                                                        <!-- termina aqui -->
                                                        <?php
                                                                endforeach;
                                                            endif;
                                                        ?>
                                                    </ul>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-6 align-self-center">
                                                    <div class="thumb"><img src="<?php echo esc_attr( get_post_meta( get_the_ID(  ), 'imageAbout1', true ) ); ?>" alt="img"></div>
                                                </div>
                                            </div>
                                            <div class="btn-wrap">
                                                <a class="btn btn-base" href="about.html">ABOUT MORE</a>
                                                <div class="author-wrap">
                                                    <div class="thumb"><img src="<?php echo esc_attr( get_post_meta( get_the_ID(  ), 'imageAbout2', true ) ); ?>" alt="img"></div>
                                                    <div class="details">
                                                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/about/signature.png" alt="img">
                                                        <p>CEO, Of Company</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- about area end -->