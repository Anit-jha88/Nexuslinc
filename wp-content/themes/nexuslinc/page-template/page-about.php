<?php
/**
 * Template Name: About
 
 */

get_header(); 
if( !empty(get_the_post_thumbnail_url( get_the_ID(),'full')) ):
	$bannerImage = get_the_post_thumbnail_url( get_the_ID(),'full');
else:
	$bannerImage = get_template_directory_uri().'/images/dealerBannerImg.png';
endif;

?>
<?php  $lang=get_bloginfo("language"); ?>
<section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg parallax"  data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
        <div class="hero-text-area centerd">
          <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s"><?php the_title();?></h1> 
          <nav aria-label="breadcrumb ">
            <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="<?php echo home_url(); ?>"><i class="bi bi-house icon "></i>
              <?php if($lang=='th'){ echo 'บ้าน';}else{ echo 'home'; }?>
              </a></li>
              <li class="breadcrumb-item active"><?php the_title();?></li>
            </ul>
          </nav>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->
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
                    <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><?php echo get_field('introduction_title');?></h2>
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

    <section class="port-creative-content-area">
    
      <!-- Start Single Portfolio Item -->
      <div class="port-creative-item visionMision">
          <div class="row align-items-center g-0">
            <div class="col-md-6 text-center my-auto">
              <div class="port-creative-item-info">
                <i class="flaticon-idea  info-icon"></i>
                  <h2><?php echo get_field('vision_title');?> </h2>
                  <h3><?php echo get_field('vision_heading');?></h3>
                  <div class="port-tags">
                      <p><?php echo get_field('vision_content');?></p>
                  </div>
              </div>
          </div>
              <div class="col-md-6 text-center my-auto">
                  <div class="port-creative-item-info">
                    <i class="flaticon-medal  info-icon"></i>
                      <h2><?php echo get_field('mission_title');?> </h2>
                      <h3><?php echo get_field('mission_heading');?></h3>
                      <div class="port-tags">
                          <p><?php echo get_field('mission_content');?></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    
  </section>

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
                  <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><?php echo get_field('awhy_us_title');?></h2>
                  <h3><?php echo get_field('awhy_us_heading');?></h3><br />
                </div>
              </div>
          
              <div class="info-items-list ">
                <div class="row ">
						<?php
                       if( have_rows('awhy_us') ):
                       while( have_rows('awhy_us') ) : the_row();
					?>
             
                  <div class="col-12 col-xl-6">
                    <div class="info-item"><i class="<?php echo get_sub_field('whyicon');?>   info-icon"></i>
                      <div class="info-content">
                        <h5 class="info-title"><?php echo get_sub_field('why_aus_title');?>  </h5>
                        <p class="info-text"><?php echo get_sub_field('wdescription');?> 
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
   
   <!-- Start  take-action Section-->
   <section class="take-action elf-section has-dark-bg" id="take-action">
    <div class="overlay-photo-image-bg  "  data-bg-opacity=".25"> </div>
    <div class="cta-wrapper">
      <div class="container">
        <div class="sec-heading  centered mb-0 ">
          <div class="content-area">
            <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><?php echo get_field('contact_usa_title');?> </h2>
            <p class="subtitle   wow fadeInUp " data-wow-delay=".6s"><?php echo get_field('contact_us_a');?> </p>
          </div>
        </div>
        <!--Start .see-more-area-->
        <div class=" see-more-area wow fadeInUp" data-wow-delay="0.8s"><a class=" btn-solid cta-link" href="<?php echo get_page_link(29)?>"><?php echo get_field('contact_usa_title');?> </a></div>
        <!--End Of .see-more-area        -->
      </div>
    </div>
  </section>
<?php get_footer(); ?>