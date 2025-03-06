<?php
/**
 * Template Name: Contact
 
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
    <!-- Start contact-us -->
    <section class="contact-us  mega-section  ptb80" id="contact-us">
      <div class="container">

        <section class="locations-section  mega-section ">
          <div class="sec-heading centered  ">
            <div class="content-area">
              <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">
                  <?php the_content();?></h2>
            </div>
          </div>
          <div class=" contact-info-panel ">
            <div class="info-section ">
              <div class="row d-flex justify-content-center">
                <?php
                
                
                if( have_rows('address_section') ):
                while( have_rows('address_section') ) : the_row();
                
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
        </section><br /><br />
        <section class="contact-us-form-section  mega-section  ">
          <div class="row">
            <div class="col-12 ">
              <div class="contact-form-panel">
                <div class="sec-heading centered    ">
                  <div class="content-area">
                    <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><?php echo get_field('Contact_Form_Heading');?></h2>
                  </div>
                </div>
                <div class="contact-form-inputs wow fadeInUp" data-wow-delay=".6s">
                  <div class="custom-form-area input-boxed"> 
                    <!--Form To have user messages-->
                    <?php echo do_shortcode('[contact-form-7 id="44a3f78" title="Contact form 1"]');?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section><br /><br />

        <section class="locations-section  mega-section ">
          <div class="sec-heading centered  ">
            <div class="content-area">
              <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"> <?php if($lang=='th'){ echo 'ค้นหาเรา
์';}else{ echo 'Find Us'; } ?></h2>
            </div>
          </div>
          <div class=" contact-info-panel ">
            <div class="info-section ">
              <div class="row d-flex justify-content-center">
                <div class="col-12 col-lg-12">     
                 <?php echo get_field('cmap');?>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>

<?php get_footer(); ?>