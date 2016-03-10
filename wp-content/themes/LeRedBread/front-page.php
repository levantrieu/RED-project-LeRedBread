<?php
/**
* The template for displaying static home page.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <div class="hero-unit">
      <div class="hero-text">Baked to perfection.</div>
    </div>

    <!-- Product types loop -->

    <div class="site-container product-types-grid">
      <?php $terms = get_terms( 'product-type' ); ?>

      <?php if ( ! empty( $terms ) ) : ?>
        <?php foreach ( $terms as $term) : ?>
          <div class="single-product-type">
            <img src="<?php echo get_template_directory_uri() . '/images\/' . $term->slug; ?>.png" alt="<?php echo $term->slug; ?>" />
            <h3><?php echo $term->name; ?></h3>
            <p><?php echo $term->description; ?> <a href="<?php echo get_term_link( $term ); ?>">See More...</a></p>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <!-- Products CTA -->
    <div class="site-container cta">
      <p>All our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently.</p>
      <button class="products-button"><a href="<?php bloginfo('url'); ?>/products/"><div>See Our Products</div></a></button>
    </div>


    <!-- News get_posts loop -->
    <div class="news-section">
      <h2>Our Latest News</h2>
      <div class="section-decoration">
        <div class="rule">
          <div class="dot"></div>
        </div>
      </div>

      <?php
      $args = array ( 'post_type' => 'post', 'posts_per_page' => 4 );
      $lastest_posts = get_posts( $args );
      ?>
      <div class="site-container latest-news-wrapper">
        <?php foreach ($lastest_posts as $post) : setup_postdata( $posts ); ?>
          <div class="latest-news-single">
            <?php if ( has_post_thumbnail() ): ?>
              <div class="latest-news-image">
                <?php the_post_thumbnail( 'large' ); ?>
              </div>
            <?php endif; ?>
            <div class="news-text-wrapper">
              <h5>
                <a href="<?php the_permalink(); ?>"><div class="title-short"><?php the_title(); ?>  </div></a>
              </h5>
              <span class="entry-meta">
                <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
              </span>
            </div>
          </div>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
    </div>
    <!-- Testimonials -->

    <div class="site-container">
      <h2>What Others Say About Us</h2>
      <div class="section-decoration">
        <div class="rule">
          <div class="dot"></div>
        </div>
      </div>
    </div>
    <section class="site-container testimonials">
      <div class="single-test">
        <div class="test-headshot-one"></div>
        <div>
          <p class="test-content">Healthy food be damned! If you are a bakery and sweet addict like myself this place is life changing. So many goodies. Have a cheat day and eat all the pretzels!</p>
          <p class="test-name">Dr. Dosist</p>
          <p class="test-title">Nutritionist &ndash; <a href="#" target="blank">Health Time Clinic</a></p>
        </div>
      </div>
      <div class="single-test">
        <div class="test-headshot-two"></div>
        <div>
          <p class="test-content">Do you like bread? Seriously, who doesn’t? You have to check Le Red Bread’s lovely loaves. Fresh flavours every day…need I say more?</p>
          <p class="test-name">Maxi Milli</p>
          <p class="test-title">Chef &ndash; <a href="#" target="blank">Sailor Spoon</a></p>
        </div>
      </div>
      <div class="single-test">
        <div class="test-headshot-three"></div>
        <div>
          <p class="test-content">Excellent cookies! They always have unique flavours and the cookies are always super fresh. Make sure you get them before they sell out! And keep an eye out on holidays, the flavour combinations they come up with are brilliant. Delicious!</p>
          <p class="test-name">Anna Vandana</p>
          <p class="test-title">Author &ndash; <a href="#" target="blank">Food Is Great Magazine</a></p>
        </div>
      </div>
      <div class="single-test">
        <div class="test-headshot-four"></div>
        <div>
          <p class="test-content">Where has this bakery been all my life! I absolutely love their cookies and muffins. Nom nom.</p>
          <p class="test-name">Martha M. Masters</p>
          <p class="test-title">Food Critic &ndash; <a href="#" target="blank">WikiTravel</a></p>
        </div>
      </div>
    </section>
  </div>



</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
