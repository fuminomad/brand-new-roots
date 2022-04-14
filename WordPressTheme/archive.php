<?php get_header(); ?>
<section class="l-page-works p-page-works">

       <div class="p-works__image">
       <figure class="p-works__figure">
           <h2 class="c-section__title p-works__title">制作実績</h2>
       </figure>
    </div>

    <div class="p-page-works__inner">
    <div class="p-page-works__cards">
    <?php if(have_posts()): ?>
    <?php while(have_posts()):the_post(); ?>
    <div class="p-page-works__card-item works-cards">
      <a href="" class="works-card">
          <div class="works-card__image">
              <figure class="works-card__figure">
               <img src="<?php the_post_thumbnail_url('full'); ?>" alt="制作実績">
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
              <p class="works-card__text">
              <?php the_content(); ?>
              </p>
          </div>
      </a>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div>
    </div>
</section>
<?php get_footer(); ?>