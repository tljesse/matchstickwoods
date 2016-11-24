			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.
					<a href="https://www.pinterest.com/charredwoodprod/"><img class="pinterest" src="<?php if ( is_front_page() ){ 
							echo get_site_url() . '/wp-content/themes/matchstickwoods/library/images/pinterest-white.png';
						} else {
							echo get_site_url() . '/wp-content/themes/matchstickwoods/library/images/pinterest.png';
						} ?>" alt="Matchstick Woods Pinterest">
					<a href="https://www.houzz.com/pro/charredwoodproducts"><img class="houzz" src="<?php if ( is_front_page() ){ 
							echo get_site_url() . '/wp-content/themes/matchstickwoods/library/images/houzz-white.png';
						} else {
							echo get_site_url() . '/wp-content/themes/matchstickwoods/library/images/houzz.png';
						} ?>" alt="Matchstick Woods Houzz"></a>
					</p>
				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
