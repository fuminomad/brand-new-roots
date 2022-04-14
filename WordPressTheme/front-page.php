<?php get_header(); ?>
<section class="p-mv l-mv">
  <div class="p-mv-container mv-container">
  <div class="swiper slider0 mv__wrapper">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="slide-img">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/mv.jpg"  width="867" height="500" alt="メインビジュアル">
      </div>
    </div>
    <div class="swiper-slide">
      <div class="slide-img">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/mv-2.jpg"  width="867" height="500" alt="メインビジュアル">
      </div>
    </div>
    <div class="swiper-slide">
      <div class="slide-img">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/mv-4.jpg"  width="867" height="500" alt="メインビジュアル">
      </div>
    </div>
  </div>
</div>

    <div class="p-mv__wrapper">
      <div class="p-mv__texts">
        <h1 class="p-mv__title"> 
          <span>WEBサイトで</span> <span>貴社のビジネスが</span><span>更に根付いていく</span></h1>
        
      </div>
      
      
    </div>
    
  </div>


</section>


<section class="p-service l-service l-section" id="service">
  <div class="passing">
    <div class="passing-box">
      <div class="passing-bar">
        <h2 class="passing-txt">Service</h2>
      </div>
    </div>
  </div>
  <div class="p-service__inner l-section__inner">


    <div class="p-cards">
  <div class="p-card js-fadeUp">
    <div class="p-card__img">
    <figure class="p-card__figure">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/design.jpg" loading="lazy" width="600" height="400" alt="仕事内容">
      </figure>
    </div>
      <div class="p-card__texts">
 
     <div class="p-card__title">ホームページ制作</div>
     <p class="p-card__text">世界シェアトップのwordpressを使用したWEBサイトを制作致します。<br class="u-tab">(基本的なセキュリティー対策を含む
     )<br>1サイト 100,000円〜<br>ランディングページ 75,000円〜

      </p>
    </div>
  </div>
  </div>
  <div class="p-card slick01 js-fadeUp">
    <div class="p-card__img">
    <figure class="p-card__figure p-card__figure-2nd">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/wordpress.jpg" loading="lazy" width="600" height="400" alt="仕事内容">
      </figure>
    </div>
      <div class="p-card__texts p-card__texts-2nd">

     <div class="p-card__title">保守・運用</div>
     <p class="p-card__text">WEBサイトは作ってからが始まりです。<br class="u-tab">24時間、365日働いてくれる営業マンです！
            WEBサイト公開後、低価格での保守・運用も承っております。
      </p>
    </div>
</div>
    <div class="p-card js-fadeUp">
        <div class="p-card__img">
            <figure class="p-card__figure">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/update.jpg" loading="lazy" width="600" height="400" alt="仕事内容">
            </figure>
        </div>
        <div class="p-card__texts">
            
            <div class="p-card__title">コーディング</div>
            <p class="p-card__text">デザインデータからのコーディング業務も承っております。<br>HTML / CSS / Sass /  jQuery /  JavaScript / WordPress /Adobe XD / photoshop / git / gulp
                </p>
            </div>
        </div>
    </div>
  
</section>
<section class="p-works-wp l-works-wp"  id="works">
<div class="passing">
    <div class="passing-box">
      <div class="passing-bar">
        <h2 class="passing-txt">Works</h2>
      </div>
    </div>
  </div>

<div class="p-works-wp__cards">
     
     <?php
     $works = array (
         'category'       => '3', // カテゴリーID
         'post_type'      => 'post', // 投稿タイプ
         'posts_per_page' => '2', // 取得する投稿数
         'order'=>'ASC',         // 投稿古い順
         'orderby'=>'date',      // 投稿日を取得
         'tag' => 'wordpress',
     );
     
 
     $myworksposts = get_posts( $works );
     foreach( $myworksposts as $post ):
     setup_postdata($post); //グローバル変数$postを書き換え
 ?>
    
    <div class="p-works-wp__card-item works-wp__cards js-fadeUp">
      <a href="/category/archive/" class="works-card">
          <div class="works-card__image">
              <figure class="works-card__figure">
               <img src="<?php the_post_thumbnail_url('full'); ?>" alt="制作実績" loading="lazy">
              </figure>
          </div>
          <div class="works-card__texts works-wp__texts">
              <div class="works-card__text">
                <p class="works-card__tag">
                <?php the_tags('');?>  
                </p>
              </div>
              <h4 class="works-card__title">
              <?php the_title();?> 
              </h4>
              <p class="works-card__text">
              <?php the_content(); ?>
              </p>
          </div>
      </a>
      
    </div>
    
    <?php
     endforeach;
     wp_reset_postdata(); // $postをグローバル変数に戻す
     ?>
</div>
</section>

<section class="p-works l-works">
<div class="passing">
    <div class="passing-box">
      <div class="passing-bar">
        <h2 class="passing-txt">Demo site</h2>
      </div>
    </div>
  </div>

  <div class="p-page-works__cards js-fadeUp">
      <div class="swiper slider1">
    <div class="swiper-wrapper">
    <?php
    $args = array (
        'category'       => '3', // カテゴリーID
        'post_type'      => 'post', // 投稿タイプ
        'posts_per_page' => '6', // 取得する投稿数
        'order'=>'ASC',         // 投稿古い順
        'orderby'=>'date',      // 投稿日を取得
        'tag' => 'demo',
    );
    

    $myposts = get_posts( $args );
    foreach( $myposts as $post ):
    setup_postdata($post); //グローバル変数$postを書き換え
?>
   
   <div class="p-works__card-item works-cards swiper-slide">
     <a href="/category/archive/" class="works-card">
         <div class="works-card__image">
             <figure class="works-card__figure">
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="制作実績" loading="lazy">
             </figure>
         </div>
         <div class="works-card__texts">
             <div class="works-card__text">
               <p class="works-card__tag">
               <?php the_tags('');?>  
               </p>
             </div>
             <h4 class="works-card__title">
             <?php the_title();?> 
             </h4>
             
         </div>
     </a>
     
   </div>
   
   <?php
    endforeach;
    wp_reset_postdata(); // $postをグローバル変数に戻す
    ?>
  </div>
  </div>
  <div class="swiper-pagination"></div>
  <div class="swiper-button-prev fa-2x"><i class="fas fa-arrow-circle-left"></i></div>
<div class="swiper-button-next fa-2x"><i class="fas fa-arrow-circle-right"></i></div>
    <div class="swiper-scrollbar"></div>
<div class="p-works__btn">
  <a class="c-btn__more" href="/category/archive/">一覧表示</a>
</div>



</section>

<section class="p-about l-about" id="about">
<div class="passing">
    <div class="passing-box">
      <div class="passing-bar">
        <h2 class="passing-txt passing-txt-white">Message</h2>
      </div>
    </div>
  </div>
  <div class="p-about__inner">
    <div class="p-about__texts">
   
  <p class="about__text">
     屋号の<span>ウェブルーツ</span> にはホームページ制作を通じてお客様のビジネスが<br class="is-pc"><span>更に根付いていく役割</span> を担っていきたいという想いがあります。<br class="is-pc">貴社の課題をしっかり把握し、Web制作・Web集客のご提案をいたしますので、<br class="is-pc">まずは一度お問い合わせ頂ければ幸いです！
  </p>
</div>

</div>
</div>

</section>


<section class="p-contact l-contact" id="contact">
  <div class="p-contact__inner">
    <div class="p-contact__forms">
  <div class="passing">
    <div class="passing-box">
      <div class="passing-bar">
        <h2 class="passing-txt">Contact</h2>
      </div>
    </div>
  </div>
 
    <div class="p-contact__texts">
      <p class="p-contact__text">ホームページ制作のウェブルーツでは、<br class="is-pc">
       シンプルで分かりやすいご提案を心がけております。<br class="is-pc">
        オンラインでのお打ち合わせを基本としておりますので、<br class="is-pc">
        全国からご注文いただいただく事が可能です。</p>



    </div>

  <?php echo do_shortcode('[contact-form-7 id="34" title="お問い合わせフォーム"]'); ?>
  </div>
</div>
</section>
<?php get_footer(); ?>