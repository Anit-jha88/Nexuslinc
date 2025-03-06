<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

 <section class="video-bg-content-wrapper">
        <div class="video-bg player" data-url="<?php echo get_field('banner_video_link');?>"></div>
        <div class="video-bg-content-wrap">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-12 m-auto text-center">
                        <div class="video-bg-txt">
                            <h2><?php the_title();?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    
    <div class="page-wrapper">

     
       
        <!--== Start Our Services Content Area ==-->
        <section class="our-service-content-area">
            <div class="single-call-action-wrap bg-soft-black welCome ">
            <div class="row g-0">
                <div class="col-md-8">
                   
                        <div class="call-action-info">
		<h2><strong class="hed1"><?php echo get_field('welcome_title_orange');?></strong> <strong class="hed2"><?php echo get_field('welcome_title_white');?></strong></h2>
                           <?php echo get_field('main_content');?>
                        </div>
                    </div>
               

                <div class="col-md-4 ">
                    <div class="about-skill-thumb"><img src=" <?php echo get_field('main_content_image');?>" alt="welcome-to-animation-production"></div>
                </div>
            </div>
            </div>
        </section>
        <!--== End Our Services Content Area ==-->


     <!--== Start Architecture Clients Area ==-->
 <section class="our-client-area ">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-lg-9 m-auto text-center">
                <div class="section-title-wrap">
                    <h2><?php echo get_field('our_clients_title');?></h2>
					<h3 class="cOrng"> <?php echo get_field('our_clients_subtitle');?></h3>
                  <?php echo get_field('our_clients_d');?>
                </div>
            </div>
        </div>
        <div class="row ">
           <?php 
            
            $images = get_field('our_clients_sgallery');
            foreach( $images as $image ):
                
              
            
            ?>
            <div class="col-6 col-sm-4 col-lg-2">
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
						<h2 class="bolder-heading"><?php echo get_field('character_animation_title');?></h2>
                        <h3 class="hed1"><?php echo get_field('character_animation_sub_title');?></h3>
                        <?php echo get_field('character_animation_services_content');?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Portfolio Content Area -->
    <section class="port-creative-content-area">
            <?php
            $n=1;
            
            if( have_rows('character_animation_services') ):
            while( have_rows('character_animation_services') ) : the_row();
            
            ?>
        <div class="port-creative-item">
            <div class="row align-items-center g-0">
                <div class="col-md-6">
                    <figure class="port-creative-item-thumb servicevideo">
<!--<img src="<?php echo get_sub_field('character_animation_services_image');?>" /> -->
<!-- 						     <img src="https://drive.google.com/thumbnail?id=<?php echo get_sub_field('character_animation_services_image');?>&sz=w1000" alt="Page Image"> -->
						
	
				   
<iframe 
    width="100%" 
   
    src="https://www.youtube.com/embed/<?php echo get_sub_field('character_animation_services_image');?>?autoplay=1&mute=1&controls=0&modestbranding=1&rel=0&showinfo=0&iv_load_policy=3&disablekb=1" 
    frameborder="0" 
    allow="autoplay; encrypted-media" 
    allowfullscreen 
    oncontextmenu="return false;">
</iframe>
				
					


						
                    </figure>
                </div>
                <div class="col-md-6 text-center my-auto">
                    <div class="port-creative-item-info">
                        <h2><?php echo get_sub_field('character_animation_services_title');?></h2>
                        <div class="port-tags">
                        <p><?php echo get_sub_field('character_animation_services_description');?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <?php $n++; endwhile; endif;?>
     
    </section><!-- End Portfolio Content Area -->
</div>

<!--== Start Page Content Wrapper ==-->
<div class="page-wrapper">
    <!-- Start Portfolio Content Wrapper -->
    <div class="portfolio-page-content-wrapper fix ">
        <div class="container-fluid p-0">
          
            <!-- Start Portfolio Content Wrap -->
            <div class="portfolio-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="portHeader mb-50">
                            <h1><?php echo get_field('portfolio_title');?></h1>
                        </div>
                    </div>
                </div>
                <div class="row g-0 masonry-grid">
                    <?php
                                
                                
                                if( have_rows('portfolio') ):
                                while( have_rows('portfolio') ) : the_row();
                               
                                ?>
                    <div class="col-sm-6 col-lg-4 ">
                        <div class="single-portfolio-wrap">
                           <iframe width="100%" height="230" src="<?php echo get_sub_field('portfolio_video_link');?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <?php endwhile; endif;?>
                   
                </div>
            </div>
        </div>
    </div><!-- End Portfolio Content Wrapper -->
</div>
<!--== End Page Content Wrapper ==-->
     
<div class="call-to-action-wrapper">
    <div class="call-to-action-content-wrap d-md-flex">
       
        <div class="single-call-action-wrap text-center text-lg-start">
            <figure class="call-action-thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mission.png"
                    alt="Call Action"></figure>
            <div class="call-action-info">
                <h2><?php echo get_field('mission_title');?></h2>
				<h3><?php echo get_field('mission_title_sub');?></h3>

               <p>
				 <?php echo get_field('mission_content');?>  
				</p>
            </div>
        </div>
    </div>
</div>

  <!--== Start About Content Area ==-->
  <section class="about-area-content whyChasing">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-12">
                <div class="about-area-content-left">
                    <div class="fashion-call-action-left mb-20 mb-sm-40">
						<h2><?php echo get_field('why_chasing_title');?> </h2>
                        <h3 class="hed1"><?php echo get_field('why_chasing_title_sub');?> </h3>
                         <p>
							<?php echo get_field('why_chasing_contenttt');?> 
						</p>
                    </div>

                    <div class="row  chaseFormula">
                        
                            <?php
                                
                                
                                if( have_rows('why_chasing') ):
                                while( have_rows('why_chasing') ) : the_row();
                               
                                ?>
                        
                        <div class="col-lg-6 col-sm-6 cfBox">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="<?php echo get_sub_field('why_chasing_images');?>" />
                                </div>
                                <div class="col-md-8">
                                    <h3><?php echo get_sub_field('why_chasing');?></h3>
                                    <p><?php echo get_sub_field('why_chasing_description');?>  
                                    </p>
                                </div>
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

<div class="port-work-process-area whyUs ">
          
    <div class="work-process-area ">
        <div class="container">
            <div class="work-process-content whyChoose">
                <div class="row">
                    <div class="col-md-12">
                        <div class="fashion-call-action-left mb-md-50 mb-sm-40">
							<h2> <?php echo get_field('our_process_title');?></h2>
<h3 class="cOrng"><?php echo get_field('our_process_title_sub');?> </h3>
                            <?php echo get_field('our_process_content');?>
                        </div>
                    </div>
                </div>
                <div class="row bgbox1">
					
					   <?php
                                
                                
                                if( have_rows('our_process') ):
                                while( have_rows('our_process') ) : the_row();
                               
                                ?>
                  
                    <!-- Work Process Item #1 -->
                    <div class="col-md-4">
                        <div class="single-desc-item-wrap ">
                            <img src="<?php echo get_sub_field('our_process_images');?>" />
                            <h3><?php echo get_sub_field('our_process_title');?></h3>
                            <p><?php echo get_sub_field('our_process_description');?>
                            </p>
                        </div>
                    </div><!-- Work Process Item #2 -->
                  
                  <?php endwhile; endif;?>
                  
                
               
                </div>
            </div>
        </div>
    </div>
</div>

  <!--== Start Testimonial Area Wrapper ==-->
  <section class="testimonial-area bg-img mt-0 mt-md-80 "
  data-bg="<?php echo get_template_directory_uri(); ?>/assets/images/testi-bg.jpg">
  <div class="container">
      <div class="row">
          <div class="col-lg-8 m-auto text-center">
              <div class="testimonial-content-wrap mtm-10">
                  <div class="ht-slick-slider" data-slick='{"slidesToShow": 1, "arrows": false}'>
					  
					   <?php
                                
                                
                                if( have_rows('tittimonialservice') ):
                                while( have_rows('tittimonialservice') ) : the_row();
                               
                                ?>
                    
                      <div class="single-testimonial-wrap">
                          <p>“<?php echo get_sub_field('testimonialeeee');?>”</p>
                          <h3 class="client-name"><?php echo get_sub_field('testimonial_given_by');?></h3>
                          <h5 class="client-designation"><?php echo get_sub_field('designation');?></h5>
                      </div>
                  
                     <?php endwhile; endif;?>
                   
                    
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!--== End Testimonial Area Wrapper ==-->

  

    <!-- Start Get Connected Area -->
        <section class="get-connected-area bg-brand  ">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-12 my-auto text-center">
                        <div class="about-us-content p-0">
                            <h2 class="mb-40 mb-md-18 mb-sm-18"> <?php echo get_field('contact_us_title_fdg');?></h2>
                            <h4> <?php echo get_field('contact_us_sub_titleddsd');?>
                            </h4>
                            <p class="paragraph-width"> <?php echo get_field('contact_us_descriptionsdsds');?>
                            </p>
                        </div>
                     
                        <div class="about-social-icons get-connected mt-60 mt-sm-30 mt-md-30">
                          <a href="https://www.facebook.com/chasingillusionsproductions/" target="_blank"><i class="fa fa-facebook"></i></a> 
                          <a href="https://x.com/0cis0?t=p0NvzKiTSNwgYk8xnX9YHw&s=09" target="_blank"><i class="fa fa-twitter"></i></a> 
                          <a href="https://www.linkedin.com/newsletters/chasing-illusions-studio-7194578791669592064/" target="_blank"><i class="fa fa-linkedin"></i></a>
                          <a href="https://www.instagram.com/chasing.illusions.studio/" target="_blank"><i class="fa fa-instagram"></i></a>
                          <a href="https://www.youtube.com/channel/UCdLLO-SOD6m3e2-duw-fgXQ" target="_blank"><i class="fa fa-youtube"></i></a>
                        </div>
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
<style>
	.ytp-gradient-top{
		display:none;
	}
</style>
	
<?php get_footer(); ?>
