<?php wp_footer(); ?>
</main>

<footer>
  <div class="<?php esc_html_e(get_theme_mod('theme_container')) ?> pt-3 pb-3 border-top">
    <div class="row">
      <div class="col-lg-3">
      <?php
        if(is_active_sidebar('footer_1')) :
          dynamic_sidebar('footer_1');
        endif;
      ?>
      </div>
      <div class="col-lg-3">
      <?php
        if(is_active_sidebar('footer_2')) :
          dynamic_sidebar('footer_2');
        endif;
      ?>
      </div>
      <div class="col-lg-3">
      <?php
        if(is_active_sidebar('footer_3')) :
          dynamic_sidebar('footer_3');
        endif;
      ?>
      </div>
      <div class="col-lg-3">
      <?php
        if(is_active_sidebar('footer_4')) :
          dynamic_sidebar('footer_4');
        endif;
      ?>
      </div>
    </div>
  </div>
  <div class="container-fluid text-center border-top">
    <p class="mb-auto pt-3 pb-3">New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="/docs/4.3/getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </body>
</html>
