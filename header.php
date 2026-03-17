<?php
if (! defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
  <nav class="nav" aria-label="<?php esc_attr_e('Main navigation', 'pizza-haven'); ?>">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php esc_attr_e('Pizza Haven home', 'pizza-haven'); ?>">
      <span class="pizza-logo" aria-hidden="true"></span>
    </a>

    <div class="nav-links">
      <?php
      wp_nav_menu([
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'menu',
          'fallback_cb'    => function (): void {
              echo '<ul class="menu">';
              echo '<li><a href="' . esc_url(home_url('/')) . '">' . esc_html__('Home', 'pizza-haven') . '</a></li>';
              echo '<li><a href="' . esc_url(home_url('/about/')) . '">' . esc_html__('About', 'pizza-haven') . '</a></li>';
              echo '<li><a href="' . esc_url(home_url('/contact/')) . '">' . esc_html__('Contact Us', 'pizza-haven') . '</a></li>';
              echo '</ul>';
          },
      ]);
      ?>

      <ul class="lang-switcher" aria-label="<?php esc_attr_e('Language switcher', 'pizza-haven'); ?>">
        <li><a href="<?php echo esc_url(home_url('/')); ?>" lang="en">EN</a></li>
        <li><a href="<?php echo esc_url(home_url('/de/')); ?>" lang="de">DE</a></li>
        <li><a href="<?php echo esc_url(home_url('/uk/')); ?>" lang="uk">UK</a></li>
      </ul>
    </div>
  </nav>
</header>
