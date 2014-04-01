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
    </div>

    <div class="entry-blog-meta">
      <div class="container">
        <center><big>You are reading <a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></big><br>
          The entry <em><?php the_title(); ?></em> was posted on <?php the_date(); ?>
          <?php if (get_the_tags()): ?>
            and tagged <?php the_tags('', ', ',''); ?>
          <?php endif; ?>
        </center>
      </div>
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
