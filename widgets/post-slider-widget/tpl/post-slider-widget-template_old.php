<?php
//print_r($instance);

$seed = 'JvKnrQWPsThuJteNQAuH';
$hash = sha1(uniqid($seed . mt_rand(), true));

$the_query = new WP_Query( $query );

if($instance['slider_dot_color']):
	?>
	<style>
		#slider_<?php echo $hash; ?> .slick-dots li button{
			background: <?php echo $instance['slider_dot_color']; ?>;
		}
	</style>
<?php
endif;
?>

	<div class="container" id="slider_<?php echo $hash; ?>">
		<?php if($instance['slider_title']): ?>
			<div class="slider-title">
				<?php echo $instance['slider_title']; ?>
			</div>
		<?php endif; ?>
		<div class="row">
			<div class="slider-padder col-md-10 col-md-offset-1">
				<div class="slider">
					<?php

					// The Loop
					if ( $the_query->have_posts() ) {
						while ( $the_query->have_posts() ) {
							$the_query->the_post();

							?>
							<div class="slide">
								<div class="slide-inner">
									<div class="text-center">
										<div class="slide-title"><?php echo the_content(); ?></div>
										<div class="slide-byline"><strong><?php echo get_field('title', get_the_ID()); ?></strong><?php if(get_field('subtitle', get_the_ID())): ?>, <?php echo get_field('subtitle', get_the_ID()); ?><?php endif; ?></div>
										<div class="slide-icons">
											<i class="icon icon-quote-o" style="color: #54b8d6; vertical-align: middle; font-size: 80px; display: inline-block; margin-right: 10px"></i>
											<?php if(has_post_thumbnail($post->ID)): ?>
												<img src="<?php echo newbox_post_thumbnail(get_the_ID(), 'square-small'); ?>" class="img-circle" style="vertical-align: middle; display: inline-block; height: 80px; width: 80px">
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
							<?
						}
					}

					// Restore original Post Data
					wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</div>
<?php
$hash = '';
?>