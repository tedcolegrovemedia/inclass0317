<?php
if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main class="content-page">
  <?php
  while (have_posts()) :
      the_post();
      ?>
      <h1><?php the_title(); ?></h1>
      <?php if (trim((string) get_the_content()) !== '') : ?>
        <?php the_content(); ?>
      <?php else : ?>
        <?php
        $slug = (string) get_post_field('post_name', get_the_ID());
        if ($slug === 'about') :
            ?>
          <p><?php esc_html_e('Pizza Haven started with one goal: serve bold, delicious pizza using simple ingredients and traditional techniques.', 'pizza-haven'); ?></p>
          <p><?php esc_html_e('Every day we prepare fresh dough, simmer our house sauce, and grate our cheese in-house to make every slice memorable.', 'pizza-haven'); ?></p>
          <p><?php esc_html_e('We are proud to be a local favorite for family dinners, game nights, and late-night cravings.', 'pizza-haven'); ?></p>
        <?php elseif ($slug === 'contact') : ?>
          <p><?php esc_html_e('We would love to hear from you. Reach us using the details below.', 'pizza-haven'); ?></p>
          <div class="contact-box">
            <p><strong><?php esc_html_e('Phone:', 'pizza-haven'); ?></strong> (555) 123-4567</p>
            <p><strong><?php esc_html_e('Email:', 'pizza-haven'); ?></strong> hello@pizzahaven.com</p>
            <p><strong><?php esc_html_e('Address:', 'pizza-haven'); ?></strong> 123 Slice Street, Flavor Town, USA</p>
            <p><strong><?php esc_html_e('Hours:', 'pizza-haven'); ?></strong> Mon-Sun, 11:00 AM - 10:00 PM</p>
          </div>
        <?php endif; ?>
      <?php endif; ?>
      <?php
  endwhile;
  ?>
</main>
<?php
get_footer();
