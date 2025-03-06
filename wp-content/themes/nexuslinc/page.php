<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<?php echo get_template_part( 'template-parts/header', 'banner' ); ?>


	<div class="page-header-wrapper blogTitle">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="page-header-content d-flex">
                        <h1><?php the_title();?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-wrapper">
        <div class="blog-page-content-wrapper fix ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        
                          <?php the_content();?>

                            
                            
                          
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
