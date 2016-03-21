<?php
/**
* The template for displaying the footer.
*
* @package RED_Starter_Theme
*/

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-container footer-contact">
		<div class="contact-info">
			<p class="contact-header">Contact</p>
			<p><i class="fa fa-envelope"></i> <a href="mailto:info@leredbread.com">info@leredbread.com</a></p>
			<p><i class="fa fa-phone"></i> <a href="tel:5553437891">(555) 343 456 7891</a></p>
			<p class="social-icons-footer">
				<a href="#" target="blank"><i class="fa fa-twitter-square"></i></a>
				<a href="#" target="blank"><i class="fa fa-facebook-square"></i></a>
				<a href="#" target="blank"><i class="fa fa-google-plus-square"></i></a>
			</p>
		</div>
		<div class="logo-footer"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/lrb-logo-white.svg" alt="Le Red Bread Logo" /></div>
		<div id="footer-sidebar" class="secondary">
			<div id="footer-sidebar1">
				<?php
				if(is_active_sidebar('footer-sidebar-1')){
					dynamic_sidebar('footer-sidebar-1');
				}
				?>
			</div>
		</div>
	</div>
	<div class="copyright">Copyright &copy; 2016 Le Red Bread</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
