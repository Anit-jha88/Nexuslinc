       <!-- Start  page-footer Section-->
    <footer class="page-footer dark-color-footer" id="page-footer">
      <div class="overlay-photo-image-bg"  data-bg-opacity=".2"></div>
      <div class="container">
        <div class="row footer-cols">
         
          <div class="col-12     col-lg-4 footer-col ">
            <h2 class=" footer-col-title    "><?php echo get_field('get_in_touch','option');?></h2>
            <div class="footer-col-content-wrapper">     
              <div class="contact-info-card"><i class="bi bi-geo-alt icon"></i><span class="text-lowercase  info"><?php echo get_field('address','option');?></span></div>  
              <div class="contact-info-card"><i class="bi bi-envelope icon"></i><a class="text-lowercase  info" href="mailto:<?php echo get_field('email','option');?>"><?php echo get_field('email','option');?></a></div>
           
              <div class="contact-info-card"><i class="bi bi-phone icon"></i><a class="info" href="tel:<?php echo get_field('phone','option');?>"><?php echo get_field('phone','option');?></a></div>
              <div class="contact-info-card">
                <div class="social-icons">
                  <div class="sc-wrapper dir-row sc-size-32">
                    <ul class="sc-list">
                      <li class="sc-item " title="Facebook"><a class="sc-link" href="<?php echo get_field('facebook_link','option');?>" title="social media icon" target=_blank><i class="fab fa-facebook-f sc-icon"></i></a></li>
                      <li class="sc-item " title="youtube"><a class="sc-link" href="<?php echo get_field('youtube_link','option');?>" title="social media icon" target=_blank><i class="fab fa-youtube sc-icon"></i></a></li>
                      <li class="sc-item " title="instagram"><a class="sc-link" href="<?php echo get_field('insta_link','option');?>" title="social media icon" target=_blank><i class="fab fa-instagram sc-icon"></i></a></li>
                      <li class="sc-item " title="X"><a class="sc-link" href="<?php echo get_field('twitter_link','option');?>" title="social media icon" target=_blank><i class="fab fa-x-twitter sc-icon"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php  $lang=get_bloginfo("language"); ?>
          <div class="col-12 col-lg-2  footer-col ">
            <h2 class=" footer-col-title    "><?php if($lang=='th'){ echo 'ลิงค์ที่เป็นประโยชน์';}else{ echo 'useful links'; }?></h2>
            <div class="footer-col-content-wrapper">
              <ul class="footer-menu ">
                  <?php
                $menu_name = 'Footer menu'; 
                $menu_items = wp_get_nav_menu_items($menu_name);
                
                if ($menu_items) {
                foreach ($menu_items as $item) {
                ?>
                <li class="footer-menu-item"><i class="bi bi-arrow-right icon "></i><a class="footer-menu-link" href="<?php echo esc_html($item->url); ?>"><?php echo esc_html($item->title); ?></a></li>
            <?php } } ?>
             
              </ul>
            </div>
          </div>
          <div class="col-12 col-lg-3 footer-col ">
            <h2 class=" footer-col-title    ">
                <?php if($lang=='th'){ echo 'บริการ์';}else{ echo 'Services'; } ?>
                 </h2>
            <div class="footer-col-content-wrapper">
              <ul class="footer-menu">
                        <?php
                $menu_name = 'Service menu'; 
                $menu_items = wp_get_nav_menu_items($menu_name);
                
                if ($menu_items) {
                foreach ($menu_items as $item) {
                ?>
                <li class="footer-menu-item"><i class="bi bi-arrow-right icon "></i><a class="footer-menu-link" href="<?php echo esc_html($item->url); ?>"><?php echo esc_html($item->title); ?></a></li>
            <?php } } ?>
          
              </ul>
            </div>
          </div>
          <div class="col-12     col-lg-3 footer-col ">
            <h2 class=" footer-col-title    ">
                <?php if($lang=='th'){ echo 'ค้นหาเรา
์';}else{ echo 'Find Us'; } ?>
                
            </h2>
            <div class="footer-col-content-wrapper">   
         <?php echo get_field('map','option');?>
        </div>
        </div>
        </div>
      </div>
      <div class="copyrights ">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-12 d-flex justify-content-center">
              <p class="creadits">
                 &copy; 2025 Nexuslinc- All Rights Reserved. | Developed By   <a class="link" href="https://www.mkstechnosoft.com/" target="_blank">MKS Technosoft</a>
              </p>
            </div>
           
          </div>
        </div>
      </div>
    </footer>
    <!-- End  page-footer Section-->
    <!-- Start loading-screen Component-->
    <div class="loading-screen" id="loading-screen"><span class="bar top-bar"></span><span class="bar down-bar"></span><span class="progress-line"></span><span class="loading-counter"> </span></div>
    <!-- End loading-screen Component-->
    <!-- Start back-to-top Button-->
    <div class="back-to-top" id="back-to-top"><i class="bi bi-arrow-up icon "></i>
    </div>
    <!-- End back-to-top Button-->
   
<?php wp_footer(); ?>
<script>
jQuery(document).ready(function($) {

    $('.sub-menu li > a').addClass('sub-menu-link');
	$('.sub-menu li').removeClass('menu-item menu-item-type-post_type menu-item-object-page menu-item');
	$('.has-sub-menu').removeClass('menu-link menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children');
	$('.has-sub-menu').addClass('menu-item');

});
	</script>
</body>
</html>
