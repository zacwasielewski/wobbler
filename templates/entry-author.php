<div>

  <h3>About the Author</h3>
  <?php echo get_avatar( get_the_author_meta('ID'), $size = '96', $default = '' ); ?>
  <p><strong><?php echo get_the_author() ?></strong><br>
  <em><?php echo get_the_author_meta('description') ?></em></p>

</div>
