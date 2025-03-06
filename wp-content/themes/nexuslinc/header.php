<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<title>
<?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the site name.
	bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) ) {
	echo " | $site_description";
}

	// Add a page number if necessary:
if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
	/* translators: %s: Page number. */
	echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );
}

?>
	</title>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700%7CPlayfair+Display:400,400i%7CDancing+Script:400,700">
</head>
 <body class=" dark-theme ">
    <!--Start Page Header-->
    <header class=" page-header   content-always-light header-basic" id="page-header">
            
      <!-- <div class="header-search-box">
        <div class="close-search"></div>
        <form class="nav-search search-form" role="search" method="get" action="#">
          <div class="search-wrapper"> 
            <label class="search-lbl">Search for:</label>
            <input class="search-input" type="search" placeholder="Search..." name="searchInput" autofocus="autofocus"/>
            <button class="search-btn" type="submit"><i class="bi bi-search icon"></i></button>
          </div>
        </form>
      </div> -->
      <div class="container">
        <nav class="menu-navbar">
        
          <div class="links menu-wrapper ">
          
              
          
         	           <?php
wp_nav_menu([
    'theme_location'  => 'primary_menu',
    'menu_class'      => 'list-js links-list',
    'container'       => false,
    'walker'          => new Custom_Walker_Nav_Menu()
]);
?>
          
            
          </div>
          <div class="controls-box">
            <!--Menu Toggler button-->
            <div class="control  menu-toggler"><span></span><span></span><span></span></div>
            <!--search Icon button-->
            <!-- <div class="control header-search-btn"><i class="bi bi-search icon"></i></div> -->
            <!--Dark/Light mode button-->
            <div class="mode-switcher ">
             <?php if ( function_exists ( 'wpm_language_switcher' ) ) wpm_language_switcher($type='select'); ?>
            </div>
            <!--mini shoping cart-->
          </div>
        </nav>
      </div>
      </header>





 

