<?php
/**
* Template Name: About Page
**/

get_header(); ?>

<div id="primary" class="content-area site-container">
  <main id="main" class="site-main" role="main">

    <h1>Learn About Our Team and Culture</h1>
    <p class="tagline"><?php echo CFS()->get( 'tagline' ); ?></p>

    <div class="section-decoration">
      <div class="rule">
        <div class="dot"></div>
      </div>
    </div>

    <div class="team-bakery-wrapper">
      <div class="lrb-about">
        <img src="<?php bloginfo( 'template_directory' ); ?>/images/team.jpg" alt="Le Red Bread team" />
        <div>
          <h3>Le Red Bread Team</h3>
          <p class="about-tagline">Baking up a storm every day.</p>
          <p><?php echo CFS()->get( 'team_copy' ); ?></p>
        </div>
      </div>
      <div class="lrb-about">
        <img src="<?php bloginfo( 'template_directory' ); ?>/images/bakery.jpg" alt="Le Red Bread bakery" />
        <div>
          <h3>Le Red Bread Bakery</h3>
          <p class="about-tagline">A home away from home.</p>
          <p><?php echo CFS()->get( 'bakery_copy' ); ?></p>
        </div>
      </div>
    </div>
    <h2>Our Story</h2>
    <p><?php echo CFS()->get( 'our_story_copy' ); ?></p>

    <!-- Contact CTA -->
    <div class="cta">
      <p>Feel free to contact us with any questions coments or suggestions. We even take custom orders!</p>
      <button class="products-button"><a href="<?php bloginfo('url'); ?>/contact/"><div>Contact Us</div></a></button>
    </div>

  </main><!-- #main -->

</div><!-- #primary -->

<?php get_footer(); ?>
