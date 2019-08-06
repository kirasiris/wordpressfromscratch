<div class="col-lg-4">
  <aside>
    <?php
      if(is_active_sidebar('sidebar')) :
        dynamic_sidebar('sidebar');
      endif;
    ?>
  </aside>
</div>