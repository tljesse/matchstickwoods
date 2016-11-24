<?php
/*
 Template Name: Front Page
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap fill cf">

		<main id="main" class="m-all cf pagination" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<header class="article-header">
				<img src="<?php echo get_site_url() . '/wp-content/themes/matchstickwoods/library/images/matchstick3_white_transp_back.png'; ?>" class="m-all" alt="matchstickwoods"/>
			</header>
			<div class="full-page vertical-center">
				<h1>Shou Sugi Ban</h1>
				<footer class="article-footer">
						<h2><?php _e( 'Charred Wood Siding and Wall Cladding for Commercial and Residential', 'bonestheme' ); ?></h2>
				</footer>
				<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<?php wp_nav_menu(array(
					         'container' => false,                           // remove nav container
					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
					         'menu_class' => 'nav front-nav cf',               // adding custom nav class
					         'theme_location' => 'main-nav',                 // where it's located in the theme
					         'before' => '',                                 // before the menu
    			               'after' => '',                                  // after the menu
    			               'link_before' => '',                            // before each link
    			               'link_after' => '',                             // after each link
    			               'depth' => 0,                                   // limit the depth of the nav
					         'fallback_cb' => ''                             // fallback function (if there is one)
					)); ?>

				</nav>
			</div>

		</main>

	</div>

</div>


<?php get_footer(); ?>
