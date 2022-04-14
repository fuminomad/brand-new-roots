<footer class="l-footer p-footer">
 <div class="p-footer__inner">
   <div class="p-footer__logo">
   <p class="p-footer-title"><a href="<?php echo esc_url(home_url('/')); ?>"> <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-black.png" width="210" height="70" alt="ロゴ"> </a></p>
   </div>
   <?php
          wp_nav_menu(
          array(
          'depth' => 1,
          'theme_location' => 'footer_nav', //フッターナブをここに表示すると指定
          'container' => 'nav',
          'container_class' => 'p-footer_nav',
          'menu_class' => 'p-footer_nav_inner',
          )
          );
          ?>
  </div>
   <div class="p-footer__copylights">
    <p class="p-footer__copylight">&copy; 2021 web-roots</p> 
   </div>
   <div class="p-footer__btn">
  <a href="#" class="c-top-btn">
    <img class="c-top-btn__white" src="<?php echo get_template_directory_uri() ?>/assets/img/top-return.svg" alt="トップに戻るボタン">
    <img class="c-top-btn__black" src="<?php echo get_template_directory_uri() ?>/assets/img/top-return-hover.svg" alt="トップに戻るボタン">
    
 
  </a>
   </div>

   
</footer>
<?php wp_footer(); ?>
</body>
</html>