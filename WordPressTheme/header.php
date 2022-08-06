<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- google font -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet"> -->
<!-- adobe font -->
<script>
  (function(d) {
    var config = {
      kitId: 'nsv4xdc',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>

<!-- swiper -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css"> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script> -->
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="l-header p-header j-header">
    <div class="p-header-inner">
      
     
    
      <h1 class="p-header-logo"><a href="<?php echo esc_url(home_url('/')); ?>"> <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-white.png" width="210" height="70" alt="ロゴ"> </a></h1>
     
      <div class="p-header-nav">
      <?php
          wp_nav_menu(
          array(
          'depth' => 1,
          'theme_location' => 'global', //ヘッダーメニューをここに表示すると指定
          // 'container' => 'div',
          'container_class' => 'p-header-nav__items',
          'menu_class' => 'p-header-nav__item',
          )
          );
          ?>
      </div>
      



      <div class="p-header_btn j-header_btn">
        <div class="p-header_hamburger">
          <span></span>
          <span></span>
          <span></span>
      </div>
      </div>
      </div>
      
       <?php
          wp_nav_menu(
          array(
          'depth' => 1,
          'theme_location' => 'drawer', //ドロワーメニューをここに表示すると指定
          'container' => 'nav',
          'container_class' => 'p-header_nav',
          'menu_class' => 'p-header_nav_list',
          )
          );
          ?>


      <div class="p-header_nav-background"></div>
        
        

     
        
  </header>