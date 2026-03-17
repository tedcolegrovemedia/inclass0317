<?php
if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main>
  <section class="hero hero-carousel" aria-label="<?php esc_attr_e('Featured pizza images', 'pizza-haven'); ?>">
    <div class="hero-slides" aria-hidden="true">
      <div class="hero-slide is-active" style="background-image: url('https://images.unsplash.com/photo-1513104890138-7c749659a591?auto=format&fit=crop&w=1600&q=80');"></div>
      <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1548365328-9f547fb0953b?auto=format&fit=crop&w=1600&q=80');"></div>
      <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1528137871618-79d2761e3fd5?auto=format&fit=crop&w=1600&q=80');"></div>
    </div>
    <div class="hero-content">
      <p class="kicker"><?php esc_html_e('Fresh. Fast. Fired Right.', 'pizza-haven'); ?></p>
      <h1><?php esc_html_e('Your Favorite Neighborhood Pizza Spot', 'pizza-haven'); ?></h1>
      <p>
        <?php esc_html_e('Hand-stretched dough, rich tomato sauce, and melty mozzarella. Build your own pie or pick a classic.', 'pizza-haven'); ?>
      </p>
      <a class="btn" href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Order / Contact', 'pizza-haven'); ?></a>
    </div>
  </section>

  <section class="quote-container">
    <blockquote>
      <?php esc_html_e('"Design is a funny word. Some people think design means how it looks. But of course, if you dig deeper, it\'s really how it works."', 'pizza-haven'); ?>
    </blockquote>
    <p class="quote-source">
      <?php esc_html_e('- Steve Jobs, via', 'pizza-haven'); ?>
      <a href="https://moravianinteractive.com/" target="_blank" rel="noopener noreferrer">Moravian Interactive</a>
    </p>
  </section>

  <section class="cards">
    <article class="card card-rollover">
      <h2><?php esc_html_e('Classic Margherita', 'pizza-haven'); ?></h2>
      <p><?php esc_html_e('Tomato, fresh mozzarella, basil, and olive oil.', 'pizza-haven'); ?></p>
    </article>
    <article class="card">
      <h2><?php esc_html_e('Pepperoni Supreme', 'pizza-haven'); ?></h2>
      <p><?php esc_html_e('Loaded with pepperoni, cheese, and a touch of chili flakes.', 'pizza-haven'); ?></p>
    </article>
    <article class="card">
      <h2><?php esc_html_e('Veggie Delight', 'pizza-haven'); ?></h2>
      <p><?php esc_html_e('Bell peppers, onions, mushrooms, olives, and spinach.', 'pizza-haven'); ?></p>
    </article>
  </section>
</main>
<?php
get_footer();
