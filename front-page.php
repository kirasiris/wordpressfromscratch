<?php get_header(); ?>
<style>
.navbar{
  margin-bottom: 0px !important;
}
</style>
<div class="jumbotron text-center">
        <div class="<?php esc_html_e(get_theme_mod('theme_container')) ?>">
          <h1 class="display-3"><?php echo get_theme_mod('front_page_heading','Bienvenidos a Wordpress From Scratch'); ?></h1>
          <p><?php echo get_theme_mod('front_page_paragraph','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus erat urna, id aliquet orci euismod et. In vel leo.'); ?></p>
          <?php if(get_theme_mod('front_btn_text', 'Comienza!') != '') : ?>
            <a class="btn btn-primary btn-lg" href="<?php echo get_theme_mod('front_btn_url','#'); ?>" role="button"><?php echo get_theme_mod('front_btn_text','Comienza!'); ?></a>
          <?php endif; ?>
        </div>
      </div>

      <div class="<?php esc_html_e(get_theme_mod('theme_container')) ?>">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4 text-center">
            <h2><?php echo get_theme_mod('front_page_first_icon','El primer Icono'); ?></h2>
            <p><?php echo get_theme_mod('front_page_first_icon_text','Lorem Ipsun'); ?></p>
          </div>
          <div class="col-md-4 text-center">
            <h2><?php echo get_theme_mod('front_page_second_icon','El segundo Icono'); ?></h2>
            <p><?php echo get_theme_mod('front_page_second_icon_text','Lorem Ipsun'); ?></p>
          </div>
          <div class="col-md-4 text-center">
            <h2><?php echo get_theme_mod('front_page_third_icon','El tercer Icono'); ?></h2>
            <p><?php echo get_theme_mod('front_page_third_icon_text','Lorem Ipsun'); ?></p>
          </div>
        </div>
      </div>
      <?php get_footer(); ?>