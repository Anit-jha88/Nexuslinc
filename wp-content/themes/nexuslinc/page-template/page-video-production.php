<?php
/**
 * Template Name: Video Production
 
 */

get_header(); 
if( !empty(get_the_post_thumbnail_url( get_the_ID(),'full')) ):
	$bannerImage = get_the_post_thumbnail_url( get_the_ID(),'full');
else:
	$bannerImage = get_template_directory_uri().'/asset/images/welcome-to-animation-production.png';
endif;

?>
 <section class="video-bg-content-wrapper">
        <div class="video-bg player" data-url="https://www.youtube.com/watch?v=cHJwcI05PCI&t=14s"></div>
        <div class="video-bg-content-wrap">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-12 m-auto text-center">
                        <div class="video-bg-txt">
                            <!--<h2><?php the_title();?></h2>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!--== End Video Background Content Area ==-->

    <!--== Start Page Content Wrapper ==-->
    <div class="page-wrapper">

     
       
        <!--== Start Our Services Content Area ==-->
        <section class="our-service-content-area">
            <div class="single-call-action-wrap bg-soft-black welCome ">
            <div class="row g-0">
                <div class="col-md-8">
                   
                        <div class="call-action-info">
                           <?php the_content();?>
                        </div>
                    </div>
               

                <div class="col-md-4 ">
                    <div class="about-skill-thumb"><img src="<?php echo $bannerImage ?>" alt="welcome-to-animation-production"></div>
                </div>
            </div>
            </div>
        </section>
        <!--== End Our Services Content Area ==-->

           <!--== Start Business Feature Area ==-->
    <section class="business-feature-area ">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-12">
                    <div class="fashion-call-action-left mb-md-50 mb-sm-40">
                        <h2>12 Years In Numbers                        </h2>
                      <h4>Uncover Our Numbers, Crunching The Truth!
                      </h4>
                    </div>
                    <div class="row mtm-50">
                     <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                              <?php echo get_field('12_years_content');?>

                            </div>

                            </div>

                    
                        </div>
                        <div class="col-md-6">
                            <img src=" <?php echo get_field('12_years_images');?>" width="100%" />
                        </div>

                     </div>
                       
                      <!-- Single Business Feature Item #4 -->
                        <!-- <div class="col-md-6">
                            <div class="single-desc-item-wrap d-flex"><span
                                    class="desc-number desc-number-white">4</span>
                                <div class="busi-fea-info">
                                    <h3>Premium Plugins Included</h3>
                                    <p class="m-0">A long radio-like mix of music you can start from any track or
                                        artist. Soundtrack your next party with one click.</p><a href="#"
                                        class="btn-view">View Demo</a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Business Feature Area ==-->

     <!--== Start Architecture Clients Area ==-->
 <section class="our-client-area ">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-lg-6 m-auto text-center">
                <div class="section-title-wrap">
                    <h2>Our clients</h2>
                </div>
            </div>
        </div>
        <div class="row ">
           <?php 
            
            $images = get_field('our_clients_animation');
            foreach( $images as $image ):
                
              
            
            ?>
            <div class="col-6 col-sm-4 col-lg-2 m-auto">
                <figure class="single-client-item">
                <img src="<?php echo esc_url($image); ?>" alt="" />

                </figure>
            </div>
          <?php endforeach; ?>
          
        </div>
    </div>
</section>
<!--== End Architecture Clients Area ==-->


<div class="page-wrapper">
    <section class="about-banner-area  parallaxBg OrSerBg" >
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-11 m-auto text-center">
                    <div class="about-banner-content">
                        <h2 class="bolder-heading">Our Services</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Portfolio Content Area -->
    <section class="port-creative-content-area">
        
         <?php
                $args = array(
                'post_type' => 'our-services', // Replace with your custom post type
                'tax_query' => array(
                array(
                'taxonomy' => 'our-service-category', // Replace with your taxonomy slug
                'field'    => 'slug', // You can also use 'term_id' or 'name'
                'terms'    => 'video-production', // Replace with your term slug
                ),
                
                ),
                'posts_per_page' => -1, 
                'order' => 'ASC',
                );
                
                $query = new WP_Query($args);
                
                if ($query->have_posts()) {
                while ($query->have_posts()) {
                $query->the_post();
                // Output post data
            ?>
      
        <div class="port-creative-item">
            <div class="row align-items-center g-0">
                <div class="col-md-6">
                    <!-- Start Portfolio Thumbnail -->
                    <figure class="port-creative-item-thumb">
                        <iframe width="100%" height="400" src="<?php echo get_field('listing_video_link');?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </figure>
                    <!-- End Portfolio Thumbnail -->
                </div>
                <div class="col-md-6 text-center my-auto">
                    <div class="port-creative-item-info">
                        <h2><?php echo get_the_title();?></h2>
                        <div class="port-tags">
                            <p><?php echo get_the_content();?></p>
                        </div>
                        <a href="<?php echo get_permalink() ?>" class="btn btn-brand">View Details <i   class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div><!-- End Single Portfolio Item -->
    
        <?php } wp_reset_postdata(); } ?>
         
      
       

    </section>
</div>
     
   
    
        <!--== Start About Content Area ==-->
        <section class="about-area-content whyChasing">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-12">
                        <div class="about-area-content-left">
                            <div class="fashion-call-action-left text-center mb-60 mb-sm-40">
                                <h2>Our Studio-Quality 3D Animation Video Production Process.
                                </h2>
                            </div>


                            <div class="row mtm-50 text-center">
                               <?php
                                
                                
                                if( have_rows('3d_animation') ):
                                while( have_rows('3d_animation') ) : the_row();
                               
                                ?>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="single-desc-item-wrap">
                                       <img src="<?php echo get_sub_field('3d_animation_images');?>" />
                                       <h3><?php echo get_sub_field('3d_animation_title');?></h3>
                                        <p><?php echo get_sub_field('3d_animation_content');?></p>
                                    </div>
                                </div>
                                 <?php endwhile; endif;?>
                             
                              
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End About Content Area ==-->

         <!-- Start Get Connected Area -->
         <section class="get-connected-area bg-brand  ">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-12 my-auto text-center">
                         <?php echo get_field('contact_us_animation');?>
                    </div>
                </div>
            </div>
        </section>
    <!-- End Get Connected Area -->

        <section class="contact-content-area ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto text-center">
                        <!-- Start Contact Form Area -->
                        <div class="contact-form-area-wrapper">
                            <div class="area-title mb-52 mb-sm-32">
                                <h2 class="mb-20">We’ve been waiting for you!</h2>
                                <p class="m-0">Send us a RFP, brief, or just questions.
                                    Whatever works best for you.</p>
                            </div>
                            <div class="contact-form-wrapper">
                                <?php echo do_shortcode('[contact-form-7 id="ec8ad52" title="Contact form 1" html_id="contact-form" html_class=""]');?>
                            </div>
                        </div><!-- End Contact Form Area -->
                    </div>
                </div>
            </div>
        </section>
     

    </div>
<?php get_footer(); ?>