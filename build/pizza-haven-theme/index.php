<?php
if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main class="content-page">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class(); ?>>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <?php the_excerpt(); ?>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <h1><?php esc_html_e('Nothing Found', 'pizza-haven'); ?></h1>
    <p><?php esc_html_e('No content is available yet.', 'pizza-haven'); ?></p>
  <?php endif; ?>
</main>
<?php
get_footer();
