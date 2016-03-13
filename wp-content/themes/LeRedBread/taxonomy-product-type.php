<!-- <p class="product-description"> get_template_part( 'template-parts/content' ); </p> -->

<?php
/**
* The template for displaying taxonomy product type.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area site-container product-type">
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="single-product">
					<div class="product-image">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>
					</div>
					<div class="product-description">
						<a href="<?php the_permalink(); ?>"><?php the_title( '<h4>', '</h4>' ); ?></a>
						<p><?php the_content(); ?></p>
						<p class="product-price">Price: <?php echo CFS()->get( 'price' ); ?></p>
					</div>
				</div>
			<?php endwhile; ?>
			<?php the_posts_navigation(); ?>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
