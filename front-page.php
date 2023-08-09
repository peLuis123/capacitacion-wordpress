<?php
/**
 * This template is for the home website
 * @since 1.0.0
 * @link https://developer.wordpress.org/files/2014/10/wp-hierarchy.png
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
                get_template_part( 'template-parts/front-page/main', 'banner');
                get_template_part( 'template-parts/front-page/feature', 'area');
                get_template_part( 'template-parts/front-page/about', 'area');

                ?>



                <!-- service area start -->
                <div class="service-area pd-top-115 pd-bottom-90 pb-lg-0" style="background: url(assets/img/service/bg.png);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="section-title text-center">
                                    <h4 class="subtitle style-2">SERVICES</h4>
                                    <h2 class="title">OUR SERVICE FOR YOU</h2>
                                    <p>Quickly optimize cooperative models for long-term high-impact ROI. Dynamically drive innovative e-commerce and distributed paradigms.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-service-wrap">
                                    <div class="thumb">
                                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/service/1.png" alt="img">
                                        <div class="icon">
                                            <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/service/service-icon-1.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h5>SEA TRANSPORTATION</h5>
                                        <p>Intrinsicly exploit e-business imperative with emerging human capital.</p>
                                        <div class="btn-wrap">
                                            <a class="read-more-text" href="service-details.html">READ MORE <span><i class="fa fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-service-wrap">
                                    <div class="thumb">
                                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/service/2.png" alt="img">
                                        <div class="icon">
                                            <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/service/service-icon-2.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h5>AIR TRANSPORTATION</h5>
                                        <p>Intrinsicly exploit e-business imperative with emerging human capital.</p>
                                        <div class="btn-wrap">
                                            <a class="read-more-text" href="service-details.html">READ MORE <span><i class="fa fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-service-wrap">
                                    <div class="thumb">
                                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/service/3.png" alt="img">
                                        <div class="icon">
                                            <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/service/service-icon-3.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h5>WAREHOUSING</h5>
                                        <p>Intrinsicly exploit e-business imperative with emerging human capital.</p>
                                        <div class="btn-wrap">
                                            <a class="read-more-text" href="service-details.html">READ MORE <span><i class="fa fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- service area end -->

                <!--wcu-area start-->
                <div class="wcu-area bg-overlay" style="background: url(assets/img/wcu/bg.png);">
                    <img class="img-1" src="assets/img/wcu/1.png" alt="img">
                    <img class="img-2" src="assets/img/wcu/2.png" alt="img">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-6 order-lg-2">
                                <div class="video-thumb-wrap">
                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/wcu/video.png" alt="img">
                                    <a class="video-play-btn" href="https://www.youtube.com/embed/Wimkqo8gDZ0" data-effect="mfp-zoom-in"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6 order-lg-1">
                                <div class="section-title style-white mb-0">
                                    <h4 class="subtitle style-2">WHY CHOOSE US</h4>
                                    <h2 class="title">WHY CHOOSE FOR US</h2>
                                    <p class="content">Dramatically enhance interactive metrics for reliable services. Proactively unleash fully researched e-commerce.</p>
                                </div>
                                <div class="single-wcu-wrap">
                                    <div class="icon">
                                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/wcu/icon-1.png" alt="img">
                                    </div>
                                    <div class="details">
                                        <h6>FAST TRANSPORTION SERVICE</h6>
                                        <p>Enhance interactive metrics for reliable services. Proactively unleash fully researched.</p>
                                    </div>
                                </div>
                                <div class="single-wcu-wrap">
                                    <div class="icon">
                                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/wcu/icon-2.png" alt="img">
                                    </div>
                                    <div class="details">
                                        <h6>24/7 ONLINE SUPPORT</h6>
                                        <p>Enhance interactive metrics for reliable services. Proactively unleash fully researched.</p>
                                    </div>
                                </div>
                                <div class="single-wcu-wrap">
                                    <div class="icon">
                                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/wcu/icon-3.png" alt="img">
                                    </div>
                                    <div class="details">
                                        <h6>SAFETY AND RELIABILITY</h6>
                                        <p>Enhance interactive metrics for reliable services. Proactively unleash fully researched.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--wcu-area end-->

                <!--fact-area start-->
                <div class="container">
                    <div class="fact-counter-area" style="background: url(assets/img/fact/bg.png);">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-md-6">
                                <div class="single-fact-wrap">
                                    <h2><span class="counter">2000</span>+</h2>
                                    <h5>PROJECT COMPLETE</h5>
                                    <p>Conveniently impact front-end
                                        niches via maintainable.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="single-fact-wrap">
                                    <h2><span class="counter">100</span>+</h2>
                                    <h5>BEST EMPLOYEES</h5>
                                    <p>Conveniently impact front-end
                                        niches via maintainable.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="single-fact-wrap">
                                    <h2><span class="counter">450</span>+</h2>
                                    <h5>WORLDWIDE CLIENTS</h5>
                                    <p>Conveniently impact front-end
                                        niches via maintainable.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="single-fact-wrap after-none">
                                    <h2><span class="counter">80</span>+</h2>
                                    <h5>WORLD AWARDS</h5>
                                    <p>Conveniently impact front-end
                                        niches via maintainable.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--fact-area end-->

                <!--team-area start-->
                <div class="team-area pd-top-115">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="section-title text-center">
                                    <h4 class="subtitle">TEAM MEMBERS</h4>
                                    <h2 class="title">OUR PROFESSIONAL TEAM</h2>
                                    <p>Dramatically enhance interactive metrics for reliable services. Proactively unleash fully researched e-commerce.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="team-slider owl-carousel">
                                    <div class="item">
                                        <div class="single-team-wrap">
                                            <div class="thumb">
                                                <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/team/1.png" alt="img">
                                            </div>
                                            <div class="details">
                                                <h5>MICHEL RICHARD</h5>
                                                <p>Director & CEO</p>
                                                <div class="hover-icon">
                                                    <i class="fa fa-plus"></i>
                                                    <ul class="social-area">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="single-team-wrap">
                                            <div class="thumb">
                                                <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/team/2.png" alt="img">
                                            </div>
                                            <div class="details">
                                                <h5>ANJELINA ROSEE</h5>
                                                <p>Founder</p>
                                                <div class="hover-icon">
                                                    <i class="fa fa-plus"></i>
                                                    <ul class="social-area">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="single-team-wrap">
                                            <div class="thumb">
                                                <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/team/3.png" alt="img">
                                            </div>
                                            <div class="details">
                                                <h5>MISHEL MARSH</h5>
                                                <p>Co-Founder</p>
                                                <div class="hover-icon">
                                                    <i class="fa fa-plus"></i>
                                                    <ul class="social-area">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--team-area end-->

                <!--contact-area start-->
                <div class="call-to-contact-area pd-top-240" style="background: #F9F9F9;">
                    <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/contact/1.png" alt="img">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-xl-6 col-lg-7">
                                <div class="cta-inner-wrap">
                                    <div class="section-title style-white mb-0">
                                        <h4 class="subtitle style-2">LET’S TALK</h4>
                                        <h2 class="title">YOU NEED ANY HELP?
                                            GET FREE CONSULTATION</h2>
                                    </div>
                                    <div class="single-cta-wrap">
                                        <div class="icon">
                                            <i class="fa fa-phone-alt"></i>
                                        </div>
                                        <div class="details">
                                            <h6>Have Any Question</h6>
                                            <h3>+19524357106</h3>
                                        </div>
                                    </div>
                                    <a class="btn btn-base" href="contact.html">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--contact-area end-->

                <!-- testimonial area start -->
                <div class="testimonial-area pd-top-115 pd-bottom-120">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="section-title text-center mb-0">
                                    <h4 class="subtitle">TESTIMONIALS</h4>
                                    <h2 class="title">OUR CLIENT’S FEEDBACK</h2>
                                    <p class="content">Dramatically enhance interactive metrics for reliable services. Proactively unleash fully researched e-commerce.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-slider owl-carousel">
                            <div class="item">
                                <div class="single-testimonial-wrap">
                                    <div class="icon">
                                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/testimonial/quote.png" alt="img">
                                    </div>
                                    <p>“Progressively strategize intermandated manufactured products after multidisci plinary sources. Conveniently iterate value-added systems with.”</p>
                                    <div class="client-wrap">
                                        <div class="thumb">
                                            <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/testimonial/1.png" alt="img">
                                        </div>
                                        <div class="details">
                                            <h5>ANJELINA MATHEUS</h5>
                                            <p>Co-Founder</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-testimonial-wrap">
                                    <div class="icon">
                                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/testimonial/quote.png" alt="img">
                                    </div>
                                    <p>“Progressively strategize intermandated manufactured products after multidisci plinary sources. Conveniently iterate value-added systems with.”</p>
                                    <div class="client-wrap">
                                        <div class="thumb">
                                            <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/testimonial/2.png" alt="img">
                                        </div>
                                        <div class="details">
                                            <h5>MONISH POUL</h5>
                                            <p>Co-Founder</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-testimonial-wrap">
                                    <div class="icon">
                                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/testimonial/quote.png" alt="img">
                                    </div>
                                    <p>“Progressively strategize intermandated manufactured products after multidisci plinary sources. Conveniently iterate value-added systems with.”</p>
                                    <div class="client-wrap">
                                        <div class="thumb">
                                            <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/testimonial/3.png" alt="img">
                                        </div>
                                        <div class="details">
                                            <h5>MICHEL CLACRK</h5>
                                            <p>Co-Founder</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- testimonial area end -->

                <!-- portfolio area start -->
                <div class="portfolio-area pd-top-115" style="background: url(assets/img/portfolio/bg.png);">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="section-title style-white">
                                    <h4 class="subtitle style-2">OUR PORTFOLIO</h4>
                                    <h2 class="title">LET'S CHECK OUT OUR ALL PORTFOLIO</h2>
                                    <p class="content">Dramatically enhance interactive metrics for reliable services. Proactively unleash fully researched e-commerce. Compellingly synthesize innovative leadership.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-container">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="single-portfolio-wrap">
                                        <div class="thumb">
                                            <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/portfolio/1.png" alt="img">
                                        </div>
                                        <div class="portfolio-details">
                                            <div class="details">
                                                <p>Logistics Transportation</p>
                                                <h4>SPECIALIST TRANSPORT SERVICES.</h4>
                                            </div>
                                            <a href="#" class="icon">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-portfolio-wrap">
                                        <div class="thumb">
                                            <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/portfolio/2.png" alt="img">
                                        </div>
                                        <div class="portfolio-details">
                                            <div class="details">
                                                <p>Logistics Transportation</p>
                                                <h4>SPECIALIST TRANSPORT SERVICES.</h4>
                                            </div>
                                            <a href="#" class="icon">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-portfolio-wrap">
                                        <div class="thumb">
                                            <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/portfolio/3.png" alt="img">
                                        </div>
                                        <div class="portfolio-details">
                                            <div class="details">
                                                <p>Logistics Transportation</p>
                                                <h4>SPECIALIST TRANSPORT SERVICES.</h4>
                                            </div>
                                            <a href="#" class="icon">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev button"><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/icon/left-arrow.png" alt="img"></div>
                            <div class="swiper-button-next button"><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/icon/right-arrow.png" alt="img"></div>
                        </div>
                    </div>
                </div>
                <!-- portfolio area end -->

                <!--blog-area start-->
                <div class="blog-area pd-top-115 pt-lg-0">
                    <div class="container p-sm-0">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="section-title text-center">
                                    <h4 class="subtitle">LATEST BLOG</h4>
                                    <h2 class="title">LATEST NEWS & ARTICLES</h2>
                                    <p class="content">Dramatically enhance interactive metrics for reliable services. Proactively unleash fully researched e-commerce.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-blog-inner">
                                    <div class="thumb">
                                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/blog/1.png" alt="img">
                                    </div>
                                    <div class="details">
                                        <h4><a href="blog-details.html">Express delivery is going to
                                            slow down in 2023</a></h4>
                                        <ul class="blog-meta">
                                            <li><i class="fa fa-user"></i> By <a class="ms-1" href="#"> Admin</a></li>
                                            <li><i class="fas fa-calendar-alt"></i> 01 July, 2023</li>
                                        </ul>
                                        <a class="read-more-text" href="blog-details.html">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-blog-inner">
                                    <div class="thumb">
                                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/blog/2.png" alt="img">
                                    </div>
                                    <div class="details">
                                        <h4><a href="blog-details.html">USA exhibition support for
                                            teneso NewYork.</a></h4>
                                        <ul class="blog-meta">
                                            <li><i class="fa fa-user"></i> By <a class="ms-1" href="#"> Admin</a></li>
                                            <li><i class="fas fa-calendar-alt"></i> 01 July, 2023</li>
                                        </ul>
                                        <a class="read-more-text" href="blog-details.html">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-blog-inner">
                                    <div class="thumb">
                                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/blog/3.png" alt="img">
                                    </div>
                                    <div class="details">
                                        <h4><a href="blog-details.html">New Additions to our great
                                            Metro trucks.</a></h4>
                                        <ul class="blog-meta">
                                            <li><i class="fa fa-user"></i> By <a class="ms-1" href="#"> Admin</a></li>
                                            <li><i class="fas fa-calendar-alt"></i> 01 July, 2023</li>
                                        </ul>
                                        <a class="read-more-text" href="blog-details.html">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--blog-area end-->

                <!--partner-area start-->
                <div class="partner-area pd-top-90 pd-bottom-120">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="section-title text-center">
                                    <h4 class="subtitle">HAPPY CLIENTS</h4>
                                    <h2 class="title">TRUSTED BY OUR
                                        365,000 CLIENTS</h2>
                                    <p class="content">Dramatically enhance interactive metrics for reliable services. Proactively unleash fully researched e-commerce.</p>
                                </div>
                            </div>
                        </div>
                        <div class="partner-slider owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/partner/1.png" alt="img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/partner/2.png" alt="img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/partner/3.png" alt="img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/partner/4.png" alt="img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/partner/5.png" alt="img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/partner/6.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--partner-area end-->
                <?php
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->



<?php
// get_sidebar();
get_footer();
