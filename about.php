<?php
/*
 Template Name: About Page
*/
?>

<?php get_header(); ?>

<div id="content">

	<main id="main" class="m-all cf pagination" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
		<div id="inner-content" class="wrap cf">

			<div class="about-image m-all t-2of3 d-2of3">
				<img src="<?php echo get_site_url() . '/wp-content/themes/matchstickwoods/library/images/rainbow.jpg'; ?>" alt="Charred Wood of all types"/>
			</div>

			<header class="article-header m-all t-1of3 d-1of3">
				<?php dynamic_sidebar( 'About Description' ); ?>
			</header>
		</div>

	</main>

</div>


<?php get_footer(); ?>
