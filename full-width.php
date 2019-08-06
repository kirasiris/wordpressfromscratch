<?php
  /*
  *
  * Template Name: Full-Width
  * Template Post Type: post, page
  *
  */
?>
<?php get_header(); ?>
<div class="<?php esc_html_e(get_theme_mod('theme_container')); ?>">
  <?php get_breadcrumb(); ?>
  <div class="row">
    <div class="col-lg-12">
      <?php if(have_posts()) : the_post() ?>
        <article class="<?php the_ID(); ?>">
          <h1 class="border-bottom"><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </article>
        <?php comments_template(); ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>