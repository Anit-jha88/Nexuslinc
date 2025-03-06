<?php
/**
 * Template Name: Home
 
 */

get_header(); 
if( !empty(get_the_post_thumbnail_url( get_the_ID(),'full')) ):
	$bannerImage = get_the_post_thumbnail_url( get_the_ID(),'full');
else:
	$bannerImage = get_template_directory_uri().'/images/dealerBannerImg.png';
endif;

?>
<?php  $lang=get_bloginfo("language"); ?>
  <!-- Start  Page hero-->
    <section class="page-hero d-flex align-items-center" id="page-hero">
      <div class="section-video-bg">
        <video class="hero-video-bg" src="<?php echo get_template_directory_uri(); ?>/assets/video/nexuslinc.mp4" autoplay muted loop> </video>
      </div>
      <div class="overlay-color " data-bg-opacity=".5"></div>
      <div class="container">
        <div class="hero-text-area  content-always-light   ">
          <div class="row g-0">
            <div class="col-12 col-lg-8 "> 
              <div class="row ">
               
                <div class="col-12">
                  <h1 class="hero-title bold-title"><?php echo get_the_content(); ?>
                  <span class="design-element rounded-shape stripes"></span></h1>
                </div>
              
                <div class="col-12   ">
                  <div class="cta-links-area">
                    <a class=" btn-solid cta-link cta-link-primary  " href="<?php echo get_page_link(89)?>"> <?php if($lang=='th'){ echo 'ค้นพบบริการของเรา

';}else{ echo 'Discover Our Services'; }?></a>
                    <a class=" btn-outline cta-link  " href="<?php echo get_page_link(29)?>"><?php if($lang=='th'){ echo 'ติดต่อเรา
';}else{ echo 'Contact Us'; }?>
                         </a>
                  </div>
                </div>
              </div>
            </div>
            <!--End of .hero-text-area-->
          </div>
        </div>
      </div>
    </section>

    
    <!-- End  Page hero-->
    <!-- Start  services Section-->
    <section class="services services-boxed ptb80 " id="services">
      <div class="container">
        <div class="sec-heading  ">
          <div class="content-area">
            <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><?php echo get_field('home_service__title');?></h2>
            <p class="subtitle   wow fadeInUp " data-wow-delay=".6s"><?php echo get_field('service_home_content');?></p>
          </div>
        </div>

        <div class="row gx-4 gy-4 services-row text-center">  
			 <?php
        
        $n=1;
        if( have_rows('homeservice') ):
        while( have_rows('homeservice') ) : the_row();
        
        ?>
          <div class="col-12 col-md-6  col-lg-4 mx-auto ">
            <!--Start First service box-->
            <div class="box service-box  wow fadeInUp reveal-start" data-wow-offset="0" data-wow-delay=".1s">
              <div class="service-icon"><i class="<?php echo get_sub_field('home_service_icon');?>  font-icon"></i></div><span class="service-num hollow-text"><?php echo $n;?>   </span>
              <div class="service-content">
                <h3 class="service-title"><?php echo get_sub_field('home_service_name');?></h3>
                <ul class="serviceList">
                 <?php echo get_sub_field('home_servie_content');?>
                </ul>
              </div>
				<?php 

				$link = get_sub_field('service_link');

				if( $link ): 
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';
				?>
				<a class="read-more" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?><i class="bi bi-arrow-right icon "></i></a>
				<?php endif; ?>
				
            </div>
            <!-- End First service box   -->
          </div>
        
        
     <?php endwhile; endif;?>
       
        
        </div>
      </div>
    </section>
    <!-- End  services Section-->
    <!-- Start  about Section-->
    <section class="about ptb80 aboutOne" id="about" >
      <div class="overlay-photo-image-bg parallax "  data-bg-opacity=".25"> </div>
      <div class="container">
        <!-- Start first about div-->
        <div class="content-block  ">
          <div class="row">
            <div class="sec-heading  light-title ">
              <div class="content-area">
                <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><?php echo get_field('whm'); ?></h2>
                <p class=" about-text"><?php echo get_field('home_choose_us'); ?> </p>
          
              </div>
            </div>
           
            <div class="col-12 col-lg-6 d-flex align-items-center order-1 order-lg-0 about-col pad-end  wow fadeInUp " data-wow-delay="0.6s">
              <div class="text-area ">
                <div class="info-items-list ">
                  <div class="row ">
					  
					  <?php

					  $n=1;
					  if( have_rows('homewhy_us') ):
					  while( have_rows('homewhy_us') ) : the_row();

					  ?>
					  
                    <div class="col-12 col-xl-6">
                      <div class="info-item"><i class="<?php echo get_sub_field('hicon');?>  info-icon"></i>
                        <div class="info-content">
                          <h5 class="info-title"><?php echo get_sub_field('htitle');?></h5>
                          <p class="info-text"><?php echo get_sub_field('hdescription');?>
                          </p>
                        </div>
                      </div>
                    </div>
                  
                    <?php endwhile; endif;?>
                   
                  </div>
                </div>
                <div class="cta-area"><a class=" btn-solid reveal-start" href="<?php echo get_page_link(29);?>"> <?php if($lang=='th'){ echo 'สนใจติดต่อ
';}else{ echo 'Get in touch'; }?></a>
                 
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 d-flex align-items-center order-0 order-lg-1 about-col  wow fadeInUp" data-wow-delay="0.2s">
              <div class="img-area  " data-tilt>
                <div class="image"><img class="about-img img-fluid " loading="lazy" src="<?php echo get_field('why_us_image');?>" alt="Our vision"></div>
              </div>
            </div>
          </div>
        </div>
        <!--End first about div-->
      
      </div>
    </section>
    <!-- End  about Section-->

      <!-- Start  about Section-->
      <section class="about ptb80" id="about" >
        <div class="container">
         
          <!-- Start first about div-->
          <div class="content-block  ">
            <div class="row">
              <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInUp" data-wow-delay="0.2s">
                <div class="img-area  ">
                  <div class="image  " data-tilt><img class="about-img img-fluid " loading="lazy" src="<?php echo get_field('habout_image');?>" alt="about"></div>
                </div>
              </div>
              <div class="col-12 col-lg-6 d-flex align-items-center about-col pad-start  wow fadeInUp " data-wow-delay="0.6s">
                <div class="text-area ">
                  <div class="sec-heading  light-title ">
                    <div class="content-area">
                       <h2 class="title wow fadeInUp" data-wow-delay=".4s"><?php echo get_field('home_about_us_title');?></h2>
                    </div>
                  </div>
                  <p class=" about-text"><?php echo get_field('about_us__content');?></p>
                
                  <div class="info-items-list">
                    <div class="row ">
                      <div class="col-12 ">
                        <div class="info-item">
                          <!-- <span class="info-number ">01.</span> -->
                          <div class="info-content">
                            <h5 class="info-title"><?php echo get_field('latest_technologies');?></h5>
                            <p class="info-text"><?php echo get_field('latest_technologies_content');?>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 ">
                        <div class="info-item">
                          <div class="info-content">
                            <h5 class="info-title"><?php echo get_field('unique_solutions');?></h5>
                            <p class="info-text"><?php echo get_field('unique_solutions_content');?>
                            </p>
                          </div>
                        </div>
                      </div>
                    
                    </div>
                  </div>
                  <div class="cta-area "><a class=" btn-solid " href="<?php echo get_page_link(17)?>"><?php if($lang=='th'){ echo 'ค้นพบเพิ่มเติม

';}else{ echo 'Discover More'; }?></a></div>
                </div>
              </div>
            </div>
          </div>
          <!--End first about div-->
        </div>
      </section>
      <!-- End  about Section-->
    <!-- Start  stats Section-->
    <section class="stats js-stats-counter ptb80">
      <div class="overlay-photo-image-bg"  data-bg-opacity=".2"></div>
      <div class="container">
        <div class="stats-inner">
          <div class="row ">
            <!--Info One-->
            <div class="col-12 col-md-6 col-lg-3 stat-box ">
              <div class="stat-box-inner  " data-tilt="data-tilt"><i class="flaticon-project-management stat-icon"></i>
                <p class="stat-num "><span class="counter" data-from="10" data-to="<?php echo get_field('finished_projects_count');?>" data-speed="3000" data-refresh-interval="50"></span><span class="sign">+</span></p><span class="stat-desc"><?php echo get_field('finished_projects');?></span>
              </div>
            </div>
            <!--Info Two-->
            <div class="col-12 col-md-6 col-lg-3 stat-box ">
              <div class="stat-box-inner  " data-tilt="data-tilt"><i class="flaticon-content-management stat-icon"></i>
                <p class="stat-num "><span class="counter" data-from="0" data-to="<?php echo get_field('created_jobs_count');?>" data-speed="3000" data-refresh-interval="50"></span><span class="sign">+</span></p><span class="stat-desc"><?php echo get_field('created_jobs');?></span>
              </div>
            </div>
            <!--Info Three-->
            <div class="col-12 col-md-6 col-lg-3 stat-box ">
              <div class="stat-box-inner  " data-tilt="data-tilt"><i class="flaticon-user stat-icon"></i>
                <p class="stat-num "><span class="counter" data-from="0" data-to="<?php echo get_field('happy_customers_count');?>" data-speed="3000" data-refresh-interval="50"></span><span class="sign">+</span></p><span class="stat-desc"><?php echo get_field('happy_customers');?></span>
              </div>
            </div>
            <!--Info Four-->
            <div class="col-12 col-md-6 col-lg-3 stat-box ">
              <div class="stat-box-inner  " data-tilt="data-tilt"><i class="flaticon-aim stat-icon"></i>
                <p class="stat-num "><span class="counter" data-from="0" data-to="<?php echo get_field('years_of_exprience_count');?>" data-speed="3000" data-refresh-interval="50"></span><span class="sign">+</span></p><span class="stat-desc"><?php echo get_field('years_of_exprience');?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End  stats Section-->
    <!-- Start  portfolio-slider Section-->
    <section class="portfolio pt80   " id="portfolio">
      <div class="container">
        <div class="sec-heading  ">
          <div class="content-area">
            <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><?php echo get_field('himpact_title');?></h2>
          </div>
          <div class=" cta-area   wow fadeInUp" data-wow-delay=".8s"><a class="cta-btn btn-solid" href="<?php echo get_page_link(21);?>"><?php if($lang=='th'){ echo 'ค้นพบเพิ่มเติม

';}else{ echo 'Discover More'; }?> <i class="bi bi-arrow-right icon "></i></a></div>
        </div>
        <div class="portfolio-wrapper  ">
          <!--a menu of links to show the photos users needs   -->
          <ul class="portfolio-btn-list wow fadeInUp" data-wow-delay=".2s">
            <li class="portfolio-btn active " data-filter="*"><?php if($lang=='th'){ echo 'ทั้งหมด';}else{ echo 'All'; }?></li>
           <?php
        
        
        if( have_rows('hour_impact') ):
        while( have_rows('hour_impact') ) : the_row();
        
        ?>
            <li class="portfolio-btn" data-filter=".<?php echo str_replace(' ', '',get_sub_field('homeimpact_title'));?>"><?php echo get_sub_field('homeimpact_title');?></li>
        
		<?php endwhile; endif;?>
          </ul>
          <div class="portfolio-group wow fadeIn" data-wow-delay=".4s">
            <div class="row ">
          
           
            
          
                    <?php
        
        
        if( have_rows('hour_impact') ):
        while( have_rows('hour_impact') ) : the_row();
	     $a=str_replace(' ', '',get_sub_field('homeimpact_title'));
		if( have_rows('himpact_video') ):
        while( have_rows('himpact_video') ) : the_row();
        
        ?>
             
              <div class="col-12  col-md-6  col-lg-4  portfolio-item <?php echo $a;?>">
                <figure class="port-creative-item-thumb">
                  <iframe width="100%" height="400" src="<?php echo get_sub_field('hvideo_url');?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
    <!-- Start  our-clients Section-->
    <section class="our-clients  ptb80   wow fadeInUp" id="our-clients" data-wow-delay="0.2s">
      <div class="overlay-photo-image-bg"  data-bg-opacity=".2"></div>
      <div class="container">
        <div class="sec-heading   centered ">
          <div class="content-area">
            <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><?php echo get_field('client__heading');?></h2>
          </div>
        </div>
        <div class="row ">
       

 
 			<?php 
$images = get_field('client_logo_home');
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
   
    <!-- Start  testimonials Section-->
    <section class="testimonials testimonials-1-col   has-dark-bg  ptb80 " id="testimonials-img-bg">
      <div class="overlay-photo-image-bg parallax " data-bg-img=" <?php echo get_template_directory_uri(); ?>/assets/images/sections-bg-images/1.jpg" data-bg-opacity=".25"> </div>
      <div class="container">
        <div class="sec-heading  centered ">
          <div class="content-area">
            <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><?php echo get_field('testimonials_title');?></h2>
          </div>
        </div>
        <div class="row d-flex align-items-center">
          <div class="col-12 col-md-10  mx-auto">
            <div class="swiper-container  wow fadeInUp  " data-wow-delay="0.2s">
              <div class="swiper-wrapper">
                <!--First Slide-->
             
              
                <!--third Slide-->
				  <?php
				  if( have_rows('testimonials') ):
				  while( have_rows('testimonials') ) : the_row();

				  ?>
                <div class="swiper-slide">
                  <div class="testmonial-card d-flex align-items-center justify-content-center">
                    <div class="testimonial-content">
                      <div class="customer-img "><img class="img-fluid " loading="lazy" src="<?php echo get_sub_field('profile_image');?>" alt="First Slide "></div>
                      <div class="customer-testimonial">
                        <div class="content">
                          <p class="testimonial-text "><?php echo get_sub_field('tcontent');?> </p>
                        </div>
                      </div>
                      <div class="customer-info ">
                        <div class="customer-details">
                          <p class="customer-name"><?php echo get_sub_field('tn');?></p>
                          <p class="customer-role"><?php echo get_sub_field('tdesignation');?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
				  <?php endwhile; endif;?> 
				  
              </div>
              <!--navigation buttons-->
              <div class="swiper-button-prev">
                <div class="left-arrow"><i class="bi bi-chevron-left icon "></i>
                </div>
              </div>
              <div class="swiper-button-next">
                <div class="right-arrow"><i class="bi bi-chevron-right icon "></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End  testimonials Section-->

    <section class="blog blog-home mega-section pt80 " id="blog">
      <div class="container ">
        <div class="sec-heading  ">
          <div class="content-area">
            <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">latest <span class='hollow-text'>news</span></h2>
          </div>
          <div class=" cta-area  cta-area  wow fadeInUp" data-wow-delay=".8s">
		<a class="cta-btn btn-solid   cta-btn btn-solid  " href="<?php echo get_page_link(25)?>">see all posts<i class="bi bi-arrow-right icon "></i></a></div>
        </div>
        <div class="row ">
          <div class="col-12 "> 
            <div class="posts-grid ">
              <div class="row">
             
				  <?php
				  $args = array(
					  'numberposts' => 3, // Fetches 5 recent posts
					  'post_type'   => 'post',
					  'orderby'     => 'date',
					  'order'       => 'DESC'
				  );

				  $recent_posts = get_posts($args);
				  foreach ($recent_posts as $post) {
					  $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
				  ?>
                <div class="col-12 col-lg-4 ">         
                  <div class="post-box">     <a class="post-link" href="<?php the_permalink();?>" title="the role of domain names in SEO world explained "> 
                      <div class="post-img-wrapper  "><img class=" parallax-img   post-img" loading="lazy" src="<?php echo $image[0];?>" alt=""/><span class="post-date"><span class="day"><?php echo get_the_date('d');?> </span><?php echo   get_the_date('M Y');?></span></div></a>
                    <div class="post-summary">
                      <div class="post-info">
                     
                        <a class="info post-author" href="<?php the_permalink();?>"> <i class=" bi bi-person icon"></i>Admin</a>
                      </div>
                      <div class="post-text"><a class="post-link" href="post-single.html"> 
                          <h2 class="post-title"> <?php echo get_the_title();?> </h2></a>
                        <p class="post-excerpt"><?php $excerpt = get_the_excerpt(); 

$excerpt = substr( $excerpt, 0, 100 ); // Only display first 260 characters of excerpt
$result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
echo $result;
?></p><a class="read-more" href="<?php the_permalink();?>" title="the role of domain names in SEO world explained "><?php if($lang=='th'){ echo 'อ่านเพิ่มเติม
';}else{ echo 'Read More'; }?><i class="bi bi-arrow-right icon "></i></a>
                      </div>
                    </div>
                  </div>
                </div>
				 <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
      <!-- Start contact-us -->
    <section class="contact-us  ptb80 " id="contact-us">
      <div class="container">
        <section class="locations-section  mega-section ">
          <div class="sec-heading centered  ">
            <div class="content-area">
              <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">
				<?php 
$id=29; 
$post = get_post($id); 
$content = apply_filters('the_content', $post->post_content); 
echo $content;  
?>
				</h2>
            </div>
          </div>
          <div class=" contact-info-panel ">
            <div class="info-section ">
              <div class="row d-flex justify-content-center">
				   <?php
                
                
                if( have_rows('address_section',29) ):
                while( have_rows('address_section',29) ) : the_row();
                
                ?>
                <div class="col-12 col-lg-4">     
                  <div class="info-panel  wow fadeInUp" data-wow-delay=".4s ">
                    <h4 class="location-title"><?php echo get_sub_field('address_country');?></h4>
                    <div class="line-on-side "> </div>
                    <p class="location-address"><?php echo get_sub_field('full_address');?></p>
                    <div class="location-card  "><i class="flaticon-email icon"></i>
                      <div class="card-content">
                        <h6 class="content-title"><?php if($lang=='th'){ echo 'อีเมล';}else{ echo 'email'; }?>
         :</h6><a class="email link" href="mailto:<?php echo get_sub_field('aemail');?>"><?php echo get_sub_field('aemail');?></a>
                      </div>
                    </div>
                    <div class="location-card  "><i class="flaticon-phone-call icon"></i>
                      <div class="card-content">
                        <h6 class="content-title"> <?php if($lang=='th'){ echo 'โทรศัพท์';}else{ echo 'phone'; }?>:</h6><a class="tel link" href="tel:<?php echo get_sub_field('aphoane');?>"><?php echo get_sub_field('aphoane');?></a>
                      </div>
                    </div>
                  </div>
                </div>
             
                 <?php endwhile; endif;?>
                
               
              </div>
            </div>
          </div>
        </section>
       
       
      </div>
    </section>
  
   
            
<?php get_footer(); ?>