<?php
/**
 * Template Name: Portfolio  
 
 */

get_header(); 
if( !empty(get_the_post_thumbnail_url( get_the_ID(),'full')) ):
	$bannerImage = get_the_post_thumbnail_url( get_the_ID(),'full');
else:
	$bannerImage = get_template_directory_uri().'/asset/images/welcome-to-animation-production.png';
endif;

?>
<?php  $lang=get_bloginfo("language"); ?>
     <!--End Page Header-->
    <!-- Start inner Page hero-->
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
      
        <div class="content-block  ">
          <div class="row">
            <div class="col-12 col-lg-6 d-flex align-items-center order-1 order-lg-0 about-col pad-end  wow fadeInUp " data-wow-delay="0.6s">
              <div class="text-area ">
                <div class="sec-heading  light-title ">
                  <div class="content-area">
                    <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><?php the_title();?></h2>
                  <h3><?php echo get_the_content();?>
                  </h3>
                  </div>
                </div>
                <p><?php echo get_field('portfolio_content');?>
                </p>
            
               
              </div>
            </div>
            <div class="col-12 col-lg-6 d-flex align-items-center order-0 order-lg-1 about-col  wow fadeInUp" data-wow-delay="0.2s">
              <div class="img-area  " data-tilt>
                <div class="image"><img class="about-img img-fluid" loading="lazy" src="<?php echo $bannerImage; ?>" alt="Our vision"></div>
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </section>
    <!-- End  about Section-->

     <!-- Start  portfolio-slider Section-->
     <section class="portfolio   " id="portfolio">
      <div class="container">
        <div class="sec-heading  ">
          <div class="content-area">
            <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><?php echo get_field('impact_h');?></h2>
          </div>
         
        </div>
        <div class="portfolio-wrapper  ">
          <!--a menu of links to show the photos users needs   -->
          <ul class="portfolio-btn-list wow fadeInUp" data-wow-delay=".2s">
            <li class="portfolio-btn active " data-filter="*"> <?php if($lang=='th'){ echo 'ทั้งหมด';}else{ echo 'All'; }?></li>
			   <?php
        
        
        if( have_rows('our_impact') ):
        while( have_rows('our_impact') ) : the_row();
        
        ?>
            <li class="portfolio-btn" data-filter=".<?php echo str_replace(' ', '',get_sub_field('impact_title'));?>"><?php echo get_sub_field('impact_title');?></li>
        
		<?php endwhile; endif;?>
          </ul>
          <div class="portfolio-group wow fadeIn" data-wow-delay=".4s">
            <div class="row ">
            
             
             <?php
        
        
        if( have_rows('our_impact') ):
        while( have_rows('our_impact') ) : the_row();
	     $a=str_replace(' ', '',get_sub_field('impact_title'));
		if( have_rows('impact_video') ):
        while( have_rows('impact_video') ) : the_row();
        
        ?>
             
              <div class="col-12  col-md-6  col-lg-4  portfolio-item <?php echo $a;?>">
                <figure class="port-creative-item-thumb">
                  <iframe width="100%" height="400" src="<?php echo get_sub_field('video_url');?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
    <div class="overlay-photo-image-bg  "  data-bg-opacity=".25"> </div>
    <div class="cta-wrapper">
      <div class="container">
        <div class="sec-heading  centered mb-0 ">
          <div class="content-area">
            <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><?php echo get_field('contact_us_tuitles');?></h2>
            <p class="subtitle   wow fadeInUp " data-wow-delay=".6s"><?php echo get_field('contact_us_description');?></p>
          </div>
        </div>
        <!--Start .see-more-area-->
        <div class=" see-more-area wow fadeInUp" data-wow-delay="0.8s"><a class=" btn-solid cta-link" href="<?php echo get_page_link(29)?>"><?php echo get_field('contact_us_tuitles');?></a></div>
        <!--End Of .see-more-area        -->
      </div>
    </div>
  </section>
  <!-- End  take-action Section-->
  
<?php get_footer(); ?>