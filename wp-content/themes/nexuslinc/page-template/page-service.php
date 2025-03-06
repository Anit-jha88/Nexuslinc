<?php
/**
 * Template Name: Service  
 
 */

get_header(); 
if( !empty(get_the_post_thumbnail_url( get_the_ID(),'full')) ):
	$bannerImage = get_the_post_thumbnail_url( get_the_ID(),'full');
else:
	$bannerImage = get_template_directory_uri().'/assets/images/hero/illustration-1.png';
endif;

?>
 <section class="page-hero  d-flex align-items-center  tringle-bg" id="page-hero">
      <div class="overlay-photo-image-bg" data-bg-img="<?php echo get_template_directory_uri()?>/assets/images/sections-bg-images/pattern-bg-1.jpg" data-bg-opacity=".2"></div>
      <div class="particles-js  dots" id="particles-js"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-6 ">
            <!--Start of .hero-text-area-->
            <div class="hero-text-area   ">
              <div class="row">
               
                <div class="col-12       ">
               
                  <h1 class="hero-title  bold-title"><?php echo get_the_title();?>
                  
                  <span class="design-element rounded-shape stripes"></span></h1>
                </div>
                <div class="col-10       ">
                  <p class="hero-subtitle "><?php echo get_the_content();?></p>
                </div>
                <div class="col-12   ">
                  <div class="cta-links-area "><a class=" btn-outline cta-link cta-link-primary " href="#0">start now</a>
                    <div class="play-btn-row-dir "><a class="video-link" href="<?php echo get_field('video_url');?>" role="button" title="play" data-fancybox="data-fancybox">
                        <div class="play-video-btn">
                          <div class="play-btn"> <i class="fas fa-play icon"></i></div>
                        </div></a></div>
                  </div>
                </div>
              </div>
            </div>
            <!--End of .hero-text-area-->
          </div>
          <!--start of .image-area -->
          <div class="col-12   mx-md-auto col-lg-6 text-center " data-tilt>  
            <div class="hero-image-area mb-5 mb-lg-0">
              <div class="hero-img-wraper  "><img class="img-fluid " src="<?php echo $bannerImage?>" alt="" draggable="false"></div>
            </div>
          </div>
          <!--End of .image-area -->
        </div>
      </div>
    </section>
    <!-- End  Page hero-->

     <!-- Start  about Section-->
     <section class="about mega-section ptb80" id="about">
      <div class="container">
        <!-- Start first about div-->
        <div class="content-block  ">
          <div class="row">
            <div class="col-12 col-lg-6 d-flex align-items-center order-1 order-lg-0 about-col pad-end  wow fadeInUp " data-wow-delay="0.6s">
              <div class="text-area ">
                <div class="sec-heading  light-title ">
                  <div class="content-area">
                    <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><?php echo get_field('Introduction_title');?></h2>
                  <h3><?php echo get_field('introduction_heading');?></h3>
                  </div>
                </div>
               <?php echo get_field('introduction_content');?>
               
              </div>
            </div>
            <div class="col-12 col-lg-6 d-flex align-items-center order-0 order-lg-1 about-col  wow fadeInUp" data-wow-delay="0.2s">
              <div class="img-area  " data-tilt>
                <div class="image   "><img class="about-img img-fluid " loading="lazy" src="<?php echo get_field('introduction_image');?>" alt="Our vision"></div>
              </div>
            </div>
          </div>
        </div>
        <!--End first about div-->
      </div>
    </section>
    <!-- End  about Section-->

     <!-- Start  our-clients Section-->
     <section class="our-clients  ptb80   wow fadeInUp" id="our-clients" data-wow-delay="0.2s">
      <div class="overlay-photo-image-bg"  data-bg-opacity=".2"></div>
      <div class="container">
        <div class="sec-heading  ">
          <div class="content-area clientP">
        <h2 class="title wow fadeInUp" data-wow-delay=".4s"><?php echo get_field('our_clients_title');?></h2>

            <h3><?php echo get_field('our_client_heading');?></h3>
            <p class="subtitle   wow fadeInUp " data-wow-delay=".6s"><?php echo get_field('our_client_content');?>
            </p>
          </div>
        </div>
        <div class="row ">
			<?php 
$images = get_field('our_client_logo');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
foreach( $images as $image ): 
  
 ?>
			<div class="col-6 col-sm-4 col-lg-2 m-auto">
				<figure class="single-client-item">
					<img src="<?php echo $image; ?>" alt="">

				</figure>
			</div>
       
        <?php endforeach; ?>
</div>
      </div>
    </section>
    <!-- End  our-clients Section-->
    <!-- End  Page hero-->



    <section class="about-banner-area ptb80 parallaxBg OrSerBg" >
      <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-11 m-auto text-center">
                  <div class="about-banner-content">
                      <h2 class="bolder-heading"><?php echo get_field('service_title');?></h2>
                      <h3 class="hed1"><?php echo get_field('service_heading');?></h3>
                      <p><?php echo get_field('service_content');?></p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Start Portfolio Content Area -->
  <section class="port-creative-content-area">
    
      <!-- Start Single Portfolio Item -->
	  <?php
                                
                                
                                if( have_rows('all_service') ):
                                while( have_rows('all_service') ) : the_row();
                                $all_service_title = get_sub_field('all_service_title');
                                $all_service_content = get_sub_field('all_service_content');
                                $all_service_images = get_sub_field('all_service_images');
                              
                                ?>
      <div class="port-creative-item">
          <div class="row align-items-center g-0">
              <div class="col-md-6">
                  <figure class="port-creative-item-thumb">
                     <img src="<?php echo $all_service_images;?>" />
                  </figure>
              </div>
              <div class="col-md-6 text-center my-auto">
                  <div class="port-creative-item-info">
                      <h2><?php echo $all_service_title;?></h2>
                      <div class="port-tags">
                          <p><?php echo $all_service_content;?>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
     
  <?php endwhile; endif;?>
                         

    



   
  </section><!-- End Portfolio Content Area -->

   <!-- Start  about Section-->
   <section class="about ptb80 aboutOne" id="about" >
    <div class="overlay-photo-image-bg parallax "  data-bg-opacity=".25"> </div>
    <div class="container">
      <!-- Start first about div-->
      <div class="content-block  ">
        <div class="row">
          <div class="col-12 col-lg-12 d-flex align-items-center order-1 order-lg-0 about-col pad-end  wow fadeInUp " data-wow-delay="0.6s">
            <div class="text-area ">
              <div class="sec-heading  light-title ">
                <div class="content-area">
                  <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><?php echo get_field('why-chs-us');?></h2>
                  <h3><?php echo get_field('why_choose_us_heading');?>
                  </h3><br />
                </div>
              </div>
             
              <div class="info-items-list ">
                <div class="row ">
					<?php
                       if( have_rows('why_choose_us') ):
                       while( have_rows('why_choose_us') ) : the_row();
					?>
             
                  <div class="col-12 col-xl-6">
                    <div class="info-item"><i class="<?php echo get_sub_field('icon');?>   info-icon"></i>
                      <div class="info-content">
                        <h5 class="info-title"><?php echo get_sub_field('name_w');?>  </h5>
                        <p class="info-text"><?php echo get_sub_field('why_contents');?> 
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
      </div>
      <!--End first about div-->
    
    </div>
  </section>
  <!-- End  about Section-->

    <!-- Start  services Section-->
    <section class="services services-boxed ptb80 " id="services">
      <div class="container">
        <div class="sec-heading  ">
          <div class="content-area">
            <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><?php echo get_field('our_process_title');?></h2>
           <h3><?php echo get_field('our_process_heading');?></h3>
          </div>
          
        </div>
        <div class="row gx-4 gy-4 services-row text-center">  
			<?php
			           $n=1;
                       if( have_rows('our_process') ):
                       while( have_rows('our_process') ) : the_row();
					?>
          <div class="col-12 col-md-6  col-lg-4 mx-auto ">
            <!--Start First service box-->
            <div class="box service-box serviceBox2 wow fadeInUp reveal-start" data-wow-offset="0" data-wow-delay=".1s">
              <div class="service-icon"><i class="<?php echo get_sub_field('picon');?> font-icon"></i></div><span class="service-num hollow-text"><?php echo $n;?></span>
              <div class="service-content">
                <h3 class="service-title"><?php echo get_sub_field('processname');?></h3>
                <p><?php echo get_sub_field('pcontent');?></p>
              </div>
            </div>
            <!-- End First service box   -->
          </div>
        
         <?php $n++; endwhile; endif;?>
       
        
        
        
        
        </div>
      </div>
    </section>
    <!-- End  services Section-->
 

    <!-- Start  portfolio-slider Section-->
    <section class="portfolio pt80   " id="portfolio">
      <div class="container">
        <div class="sec-heading  ">
          <div class="content-area">
            <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><?php echo get_field('pportfolio_title');?></h2>
          </div>
          <div class=" cta-area   wow fadeInUp" data-wow-delay=".8s"><a class="cta-btn btn-solid    " href="<?php echo get_page_link(21);?>">Discover more <i class="bi bi-arrow-right icon "></i></a></div>
        </div>
        <div class="portfolio-wrapper  ">
          <!--a menu of links to show the photos users needs   -->
          <ul class="portfolio-btn-list wow fadeInUp" data-wow-delay=".2s">
            <li class="portfolio-btn active " data-filter="*"><?php if($lang=='th'){ echo 'ทั้งหมด';}else{ echo 'All'; }?></li>
			  <?php
            if( have_rows('portfolioesss') ):
            while( have_rows('portfolioesss') ) : the_row();
        
            ?>
            <li class="portfolio-btn" data-filter=".<?php echo str_replace(' ', '',get_sub_field('ps'));?>"><?php echo get_sub_field('ps');?></li>
        
		<?php endwhile; endif;?>
           
          </ul>
          <div class="portfolio-group wow fadeIn" data-wow-delay=".4s">
            <div class="row ">
                
             <?php
        
        
        if( have_rows('portfolioesss') ):
        while( have_rows('portfolioesss') ) : the_row();
	     $a=str_replace(' ', '',get_sub_field('ps'));
		if( have_rows('protfolio_video_s') ):
        while( have_rows('protfolio_video_s') ) : the_row();
        
        ?>
           
               <div class="col-12  col-md-6  col-lg-4  portfolio-item <?php echo $a;?>">
                <figure class="port-creative-item-thumb">
                  <iframe width="100%" height="400" src="<?php echo get_sub_field('protfolio_video_url');?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </figure>
              </div>
				<?php endwhile; endif;?>
				 <?php endwhile; endif;?>
				
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End  portfolio-slider Section-->
   
     <!-- Start  take-action Section-->
     <section class="take-action elf-section has-dark-bg" id="take-action">
      <div class="overlay-photo-image-bg  " data-bg-img="assets/images/sections-bg-images/2.jpg" data-bg-opacity=".25"> </div>
      <div class="cta-wrapper">
        <div class="container">
          <div class="sec-heading  centered mb-0 ">
            <div class="content-area">
              <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">Contact Us              </h2>
              <p class="subtitle   wow fadeInUp " data-wow-delay=".6s">Ready to elevate your brand with expert Brand Strategy & Design Services? Let's discuss your vision. Contact us today for a free consultation and discover how Nexuslinc can help you achieve your business goals.</p>
            </div>
          </div>
          <!--Start .see-more-area-->
       <div class=" see-more-area wow fadeInUp" data-wow-delay="0.8s"><a class=" btn-solid cta-link" href="<?php echo get_page_link(29);?>">contact us</a></div>
          <!--End Of .see-more-area        -->
        </div>
      </div>
    </section>
    <!-- End  take-action Section-->
<?php get_footer(); ?>