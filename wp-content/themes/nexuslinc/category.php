<?php
/**
 * Template for displaying Category Archive pages
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<?php  $lang=get_bloginfo("language"); ?>
<section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg parallax"  data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
          <div class="hero-text-area centerd">
          <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s"> <?php	printf( __( ' %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1> 
          <nav aria-label="breadcrumb ">
            <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="<?php echo home_url(); ?>"><i class="bi bi-house icon "></i>
              <?php if($lang=='th'){ echo 'บ้าน';}else{ echo 'home'; }?>
              </a></li>
              <li class="breadcrumb-item active"> <?php	printf( __( ' %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></li>
            </ul>
          </nav>
        </div>
      </div>
    </section>
    
    
      <section class="blog blog-home mega-section ptb80">
      <div class="container ">
        <div class="row ">
          <div class="col-12 col-xl-8 "> 
            <div class="posts-grid horizontal">
              <div class="row">
             
                    
                       <?php 
							if (have_posts()) :
							while ( have_posts() ) : the_post(); 
							$image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
							?>
               
                <div class="col-12 ">         
                  <div class="post-box">     <a class="post-link" href="<?php the_permalink();?>" title="give your website a new look and feel with themes"> 
                      <div class="post-img-wrapper  ">
                          <img class=" parallax-img   post-img" loading="lazy"  src="<?php echo $image[0];?>" alt="Blog Thumb" ><span class="post-date"><span class="day"><?php echo get_the_date('d');?>   </span><?php echo get_the_date('M y');?>     </span></div></a>
                    <div class="post-summary">
                      <div class="post-info"><a class="info post-cat" href="<?php the_permalink();?>"> <i class="bi bi-person  icon"></i><?php if($lang=='th'){ echo 'ผู้ดูแลระบบ
';}else{ echo 'Admin'; }?></a></div>
                      <div class="post-text">
                        <a class="post-link" href="<?php the_permalink();?>"> 
                          <h2 class="post-title"> <?php the_title();?> </h2>
                        </a>
                        <p class="post-excerpt"><?php $excerpt = get_the_excerpt(); 

$excerpt = substr( $excerpt, 0, 100 ); // Only display first 260 characters of excerpt
$result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
echo $result;
?></p><a class="read-more" href="<?php the_permalink();?>" title="How litespeed technology works to speed up your site "><?php if($lang=='th'){ echo 'อ่านเพิ่มเติม
';}else{ echo 'Read More'; }?><i class="bi bi-arrow-right icon "></i></a>
                      </div>
                    </div>
                  </div>
                </div>
               <?php   endwhile; ?>
                <div class="col-12">
                  <!--Start pagination--> 
                  <nav class="ma-pagination">
                      <?php
                        custom_pagination($custom_query); 
                        wp_reset_postdata();
                        else :
                        echo 'No posts found.';
                        endif;
                        ?>
                    <!--<ul class="pagination justify-content-center">-->
                    <!--  <li class="ma-page-item deactive-page-item"><a class="ma-page-link " href="#" title="Previous Page"><i class="bi bi-chevron-left icon "></i></a></li>-->
                    <!--  <li class="ma-page-item active"><a class="ma-page-link " href="#">1 </a></li>-->
                    <!--  <li class="ma-page-item  "><a class="ma-page-link " href="#">2 </a></li>-->
                    <!--  <li class="ma-page-item  "><a class="ma-page-link " href="#">3 </a></li>-->
                    <!--  <li class="ma-page-item  "><a class="ma-page-link " href="#">4 </a></li>-->
                    <!--  <li class="ma-page-item  "><a class="ma-page-link " href="#">5 </a></li>-->
                    <!--  <li class="ma-page-item  "><a class="ma-page-link " href="#">6 </a></li>-->
                    <!--  <li class="ma-page-item"><a class="ma-page-link" href="#" title="Next Page"><i class="bi bi-chevron-right icon "></i></a></li>-->
                    <!--</ul>-->
                  </nav>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-xl-4 ">
            <div class="blog-sidebar">
              <!--search box-->
              <div class="search sidebar-box">
                <form class="search-form" action="#">
                  <input class="search-input" type="search" name="seach_form" placeholder="Search Posts...">
                  <button class="search-btn" type="submit"><i class="bi bi-search icon"></i></button>
                </form>
              </div>
              <!--categories box-->
              <div class="cats sidebar-box">
                <h6 class="sidebar-box-title">
                         <?php if($lang=='th'){ echo 'หมวดหมู่';}else{ echo 'Categories'; }?>:</h6>
                <ul class="sidebar-list cats-list  ">
                 
                   <?php
                                // Get parent categories
                                $parent_categories = get_categories(array(
                                'parent' => 0 ,
                                'hide_empty' => false
                                ));
                                
                                // Loop through parent categories
                                foreach ($parent_categories as $parent_category) {
                                // Query to count posts in the current category
                                $category_post_count = new WP_Query(array(
                                'category__in' => array($parent_category->term_id),
                                'posts_per_page' => -1, // Get all posts
                                'post_status' => 'publish' // Only count published posts
                                ));
                               

                                // Output category name and post count
                                echo '<li class="cat-item"><a href="' . esc_url(get_category_link($parent_category->term_id)) . '" class="cat-link">' . $parent_category->name . '<span class="cat-count">'.$parent_category->count.'</span> </a></li>';
                                
                                // Reset post data
                                wp_reset_postdata();
                                }
                                ?>
                </ul>
              </div>
              <!--Recent posts  -->
              <div class="recent-posts sidebar-box">
                <h6 class="sidebar-box-title">
                   recent posts:   </h6>
                <ul class="sidebar-list r-posts-list ">
                    <?php
                           $args = array(
            'numberposts' => 4, // Fetches 5 recent posts
            'post_type'   => 'post',
            'orderby'     => 'date',
            'order'       => 'DESC'
        );
        
        $recent_posts = get_posts($args);
        foreach ($recent_posts as $post) {
             $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
                    ?>
                  <li class="r-post-item"><a class="r-post-link" href="<?php the_permalink();?>">
                      <div class="r-post-img-wrapper"><img class="r-post-img" loading="lazy" src="<?php echo $image[0];?>" alt="recent post image"></div>
                      <div class="content">
                        <h6 class="r-post-title"><?php echo get_the_title();?></h6><span class="r-post-date"><?php echo   get_the_date('d M Y');?>   </span>
                      </div></a></li>
                     
                    <?php } ?>
               
                </ul>
              </div>
            
            
            </div>
          </div>
        </div>
      </div>
    </section>
    



<?php get_footer(); ?>
