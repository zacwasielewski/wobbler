<?php
if (is_single() && $post = get_post() && '' != get_the_post_thumbnail($post->ID)): ?>
  <header class="banner navbar navbar-inverse navbar-static-top" role="banner">
<?php else: ?>
  <header class="banner navbar navbar-default navbar-static-top" role="banner">
<?php endif; ?>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
      <span class="navbar-description"><?php bloginfo('description'); ?></span>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>
