<?php
/*
 Template Name: Gallery Template
*/
?>

<?php
	$post = get_post();
	$title = apply_filters('the_title', $post->post_title);
	$content = apply_filters('the_content', $post->post_content);
?>

<?php get_header(); ?>

<div id="content">

	<main id="main" class="m-all cf pagination" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
		<div id="inner-content" class="wrap cf">

			<header class="article-header">
				<h1><?php echo $title; ?>:</h1>
				<?php echo $content; ?>
			</header>

			<div class="gallery-container">
				<?php
					$images =& get_children( array (
						'post_parent' => $post->ID,
						'post_type' => 'attachment',
						'post_mime_type' => 'image'
					));

					if ( empty($images) ) {
						// no attachments here
					} else {
						foreach ( $images as $attachment_id => $attachment ) {
							$image_meta = wp_get_attachment( $attachment_id );
							?>
							<div class="m-all t-1of3 d-1of3">
								<a href="<?php echo $image_meta['href']; ?>"><img src="<?php echo $image_meta['src']; ?>" alt="<?php echo $image_meta['alt']; ?>"></a>
								<div class="product-caption"><?php echo $image_meta['caption']; ?></div>
							</div>
							<?php
						}
					}
				?>
			</div>
		</div>

	</main>

</div>


<?php get_footer(); ?>
