<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<?php  $lang=get_bloginfo("language"); ?>
 <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg parallax"  data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
        <div class="hero-text-area centerd">
          <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s"><?php if($lang=='th'){ echo 'บล็อก รายละเอียด';}else{ echo 'Blog Details'; }?></h1>
          <nav aria-label="breadcrumb ">
            <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="#0"><i class="bi bi-house icon "></i> <?php if($lang=='th'){ echo 'บ้าน';}else{ echo 'home'; }?></a></li>
              <li class="breadcrumb-item active"><?php if($lang=='th'){ echo 'บล็อก รายละเอียด';}else{ echo 'Blog Details'; }?></li>
            </ul>
          </nav>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start _post -->
    <div class="blog blog-post ">
        <?php $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full'); ?>
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-10 mx-auto">
            <!--post heading area2021-->
           
            <h2 class="post-title"><?php the_title();?> </h2>
            <div class="post-img-wrapper post-featured-area"><img class="featured-img" loading="lazy" src="<?php echo $image[0];?>" alt="Featured Image"></div>
          </div>
          <div class="col-12 col-lg-9 mx-auto">
            <div class="post-main-area">
              <div class="post-info">
              
                <a class="info post-author" href="#"><i class="fas fa-user icon"></i>Admin</a>
                <a class="info post-date" href="#"><i class="fas fa-history icon"></i><?php echo get_the_date('d M Y');?></a>
              
              </div>
              <div class="post-content">
                <?php the_content();?>
              </div>
            
           
          
            </div>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
