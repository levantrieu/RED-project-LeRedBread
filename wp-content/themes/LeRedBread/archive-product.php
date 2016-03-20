<?php
/**
* The template for displaying archive products.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div class="archive-product-page">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
					<p class="tagline">We are a team of creative and talented individuals who love making delicious treats.</p>
				</header>

				<div class="section-decoration">
					<div class="rule">
						<div class="dot"></div>
					</div>
				</div>

				<div class="site-container product-icons-grid">
					<?php $terms = get_terms( 'product-type' ); ?>
					<?php if ( ! empty( $terms ) ) : ?>
						<?php foreach ( $terms as $term) : ?>
							<div class="single-product-icon">
								<img src="<?php echo get_template_directory_uri() . '/images/' . $term->slug; ?>.png" alt="<?php echo $term->slug; ?>" />
								<h6><a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a></h6>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>

				<div class="products-archive-wrapper">
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="product-single">
							<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
							<?php endif; ?>
							<p class="product-info-wrapper">
								<?php the_title( '<span class="product-archive-name">', '</span>' ); ?>
								<span class="product-price"><?php echo CFS()->get( 'price' ); ?></span>
							</p>
						</div>
					<?php endwhile; ?>
					<?php the_posts_navigation(); ?>
				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif; ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<?php get_footer(); ?>
