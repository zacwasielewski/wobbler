<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    
    <header>
      <div class="entry-thumbnail">
        <?php the_post_thumbnail( 'header' ); ?>
      </div>
      <div class="container">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php get_template_part('templates/entry-meta'); ?>
      </div>
    </header>

    <div class="container">
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <?php get_template_part('templates/entry-meta'); ?>
    </div>

    <div class="entry-author">
      <div class="container">
        <?php get_template_part('templates/entry-author'); ?>
      </div>
    </div>

    <footer>
      <div class="container">
        <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
      </div>
    </footer>

    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
