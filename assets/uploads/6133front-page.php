<?php get_header(); ?>

        <!-- Splash -->
        <div class="flexslider ">
            <?php if( have_rows('hp_slider') ): ?>
                <ul class="slides"> 
                <?php while( have_rows('hp_slider') ): the_row(); ?>
                    <li>
                        <a href="<?php the_sub_field('hp_splash_link'); ?>">
                            <img class="desktop-slide" src="<?php the_sub_field('desktop_slider'); ?>" />
                            <img class="mobile-slide" src="<?php the_sub_field('mobile_slider'); ?>" />
                            <div class="slider-info">
                                <span><?php the_sub_field('hp_splash_title'); ?></span>
                                <span><?php the_sub_field('hp_splash_caption'); ?></span>
                            </div>
                        </a>
                    </li>
                <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
        <!-- end splash -->
        <!-- start callouts section -->
        <div class="container-fluid whitebg text-center section-pd-4x">
            <div class="max-width-wrapper">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="hp-cta hp-cta-01">
                            <a href="<?php the_field('hp_step_01_link'); ?>">
                                <div class="hpimgcta hpimg-01"></div>
                                <div class="h3"><?php the_field('hp_cta_01_title'); ?></div>
                                <p><?php the_field('hp_cta_01_teaser'); ?></p>
                            </a> 
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hp-cta hp-cta-02">
                            <a href="<?php the_field('hp_step_02_link'); ?>">
                                <div class="hpimgcta hpimg-02"></div>
                                <div class="h3"><?php the_field('hp_cta_02_title'); ?></div>
                                <p><?php the_field('hp_cta_02_teaser'); ?></p>
                            </a> 
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hp-cta hp-cta-03">
                            <a href="<?php the_field('hp_step_03_link'); ?>">
                                <div class="hpimgcta hpimg-03"></div>
                                <div class="h3"><?php the_field('hp_cta_03_title'); ?></div>
                                <p><?php the_field('hp_cta_03_teaser'); ?></p>
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end callouts section -->

        <!-- start content section -->
        <div class="container-fluid ltgraybg hpcontent">
                <div class="row">
                    <div class="col-xs-12 col-md-5 col-md-offset-1">
                        <div class="section-pd-4x clearfix hpcnt-left">
                            <section class="entry-content">
                                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                                <?php the_content(); ?>
                                <div class="entry-links"><?php wp_link_pages(); ?></div>
                            </section>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5 col-md-offset-1">
                        <div class="hpcnt-right">
                            <div class="video-top">
                                <div class="video-container">
                                    <?php the_field('hp_featured_video'); ?>
                                </div>
                                <div class="hp-blocks">
                                <div class="hpblock hpblock-01">
                                    <a href="<?php the_field('hp_callout_block_01_link'); ?>">
                                       <img src="<?php the_field('hp_callout_block_01_img'); ?>">
                                    </a>
                                </div>
                                <div class="hpblock hpblock-02">
                                    <a href="<?php the_field('hp_callout_block_02_link'); ?>">
                                       <img src="<?php the_field('hp_callout_block_02_img'); ?>">
                                    </a>
                                </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- end content section -->

        <!-- start hp news section -->
        <div class="container-fluid whitebg section-pd-4x hpnews-cont">
            <div class="max-width-wrapper">
                <div class="row">
                    <div class="col-xs-12 clearfix graybdiv text-center h2">
                        <div class="whitebg">What's Happening at Georgia Highlands College</div>
                    </div>
                    <div class="clearfix gray-bdr-box">

                        
                        <div class="col-xs-12 clearfix hpnews">
                            <div class="title-section">News
                                <a href="georgia-highlands-news/" class="link">Read More ›</a>
                                <hr/>
                            </div>
                            <ul>
                                <?php query_posts('category_name=news&post_status=publish&showposts=3&orderby=date');?>
                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                                <li class="hp-news-article">
                                        <div class="clearfix hpnews-img"><?php the_post_thumbnail(); ?></div>
                                        <div class="hp-article-content">
                                            <a href="<?php the_permalink(); ?>"><p class="article-title"><?php the_title(); ?></p></a>
                                            <p><?php the_excerpt(); ?></p>
                                            <a href="<?php the_permalink(); ?>" class="link">Read More ›</a>
                                        </div>
                                </li>

                                <?php endwhile; else: endif; ?>
                                <?php wp_reset_query(); ?>
                            </ul>
                        </div>
                        
                        <div class="col-xs-12 clearfix hpevents">
                            <div class="title-section">Announcements
                                <a href="announcements" class="link">Read More ›</a>
                                <hr/>
                            </div>
                            <div class="hpevents-wrap">
                            
                                <!-- box 01 -->
                                <div class="hpevents-block hpevents-block-01">
                                    <div class="events_date">
                                        <span><?php the_field('hp_event_date_01'); ?></span>
                                    </div>
                                    <div class="event-cnt">
                                        <div class="event-title">
                                            <a href="<?php the_field('hp_event_link_01'); ?>">
                                                <?php the_field('hp_event_title_block_01'); ?>
                                            </a>
                                        </div>
                                        <div class="event-teaser">
                                            <?php the_field('hp_event_teaser_block_01'); ?>
                                            <a href="<?php the_field('hp_event_link_01'); ?>" class="link">Read More ›</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- box 02 -->
                                <div class="hpevents-block hpevents-block-02">
                                    <div class="events_date">
                                        <span><?php the_field('hp_event_date_02'); ?></span>
                                    </div>
                                    <div class="event-cnt">
                                        <div class="event-title">
                                            <a href="<?php the_field('hp_event_link_02'); ?>">
                                                <?php the_field('hp_event_title_block_02'); ?>
                                            </a>
                                        </div>
                                        <div class="event-teaser">
                                            <?php the_field('hp_event_teaser_block_02'); ?>
                                            <a href="<?php the_field('hp_event_link_02'); ?>" class="link">Read More ›</a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <!-- end hp news section -->

        <!-- start campus locations // map -->
        <div class="container-fluid ltorangebg hp-locations">
            <div class="max-width-wrapper">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="h2 text-center"><div class="ltorangebg">Campus Locations</div></div>
                    </div>
                    <div class="hp-map">
                        <?php echo do_shortcode('[wpgmza id="1"]'); ?>
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3299.6311077507517!2d-84.78430519999999!3d34.2069006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f54fefd1886f6f%3A0x2194da3fa2620d36!2s5441+GA-20%2C+Cartersville%2C+GA+30121!5e0!3m2!1sen!2sus!4v1438112599825" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end campus locations // map -->


<?php get_footer(); ?>
