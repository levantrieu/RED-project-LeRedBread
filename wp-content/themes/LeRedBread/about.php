<?php
/**
* Template Name: About Page
**/

get_header(); ?>

<div class="about-page">
  <div id="primary" class="content-area">
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
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/team.jpg" alt="Le Red Bread team" />
          <div>
            <h3>Le Red Bread Team</h3>
            <p class="about-tagline">Baking up a storm every day.</p>
            <?php echo CFS()->get( 'team_copy' ); ?>
          </div>
        </div>
        <div class="lrb-about">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bakery.jpg" alt="Le Red Bread bakery" />
          <div>
            <h3>Le Red Bread Bakery</h3>
            <p class="about-tagline">A home away from home.</p>
            <?php echo CFS()->get( 'bakery_copy' ); ?>
          </div>
        </div>
      </div>
      <h2>Our Story</h2>
      <?php echo CFS()->get( 'our_story_copy' ); ?>

      <!-- Contact CTA -->
      <div class="cta">
        <p>Feel free to contact us with any questions coments or suggestions. We even take custom orders!</p>
        <div class="main-button"><a href="<?php echo esc_url( home_url() ); ?>/contact/">Contact Us</a></div>
      </div>
    </main><!-- #main -->
  </div><!-- #primary -->
</div>

<?php get_footer(); ?>
