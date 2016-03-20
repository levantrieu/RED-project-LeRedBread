<?php

/* single-product.php page
single-'product' must match first arguement in register_post_type( 'product', $args ) */

/**
 * The template for displaying all single products.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area site-container">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      	<header class="entry-header">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
      		<?php if ( has_post_thumbnail() ) : ?>
      			<?php the_post_thumbnail( 'large' ); ?>
      		<?php endif; ?>
				</header><!-- .entry-header -->

				<h4>Price: <?php echo CFS()->get( 'price' ); ?></h4>
      	<div class="entry-content">
      		<?php the_content(); ?>
      		<?php
      			wp_link_pages( array(
      				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
      				'after'  => '</div>',
      			) );
      		?>
      	</div><!-- .entry-content -->
			</article>	
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
