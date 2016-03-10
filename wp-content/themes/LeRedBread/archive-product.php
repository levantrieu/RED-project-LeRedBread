<?php
/**
* The template for displaying archive products.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area site-container">
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				<p class="tagline">We are a team of creative and talented individuals who love making delicious treats.</p>
			</header>

			<div class="products-archive-wrapper">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="product-single">
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
						<?php endif; ?>
						<?php the_title( '<p class="product-archive-name">', '</p>' ); ?>
						<?php echo CFS()->get( 'price' ); ?>
					</div>
				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<?php endif; ?>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
