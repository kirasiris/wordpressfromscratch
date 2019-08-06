<?php get_header(); ?>
    <div class="<?php esc_html_e(get_theme_mod('theme_container')) ?>">
      <?php get_breadcrumb(); ?>
      <div class="row">
        <div class="col-lg-12">
          <?php if(have_posts()) : ?>
            <div class="card-columns">
            <?php while(have_posts()) : the_post() ; ?>
              <article class="<?php the_ID() ?> mb-3">
                <div class="card">
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                  </div>
                </div>
              </article>
            <?php endwhile; ?>
            </div>
            <!-- Pagination -->
          <?php else : ?>
            <div class="alert alert-danger">
              Ningun post encontrado
            </div>
          <?php endif; ?>
          <?php numeric_pagination(); ?>
        </div>
      </div>
    </div>
  <?php get_footer(); ?>