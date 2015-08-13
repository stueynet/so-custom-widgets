<?php
$seed = 'JvKnrQWPsThuJteNQAuH';
$hash = sha1(uniqid($seed . mt_rand(), true));
//print_r($feature);

$feature = $instance;
?>
<div class="sow-features-feature">

	<?php if( !empty( $feature['more_url'] ) && $feature['icon_link'] ) echo '<a href="' . sow_esc_url( $feature['more_url'] ) . '" ' . ( $feature['new_window'] ? 'target="_blank"' : '' ) . '>'; ?>
	<div class="sow-icon-container" style="background: <?php echo esc_attr($feature['container_color']) ?>;">
		<?php
		if( !empty($feature['icon_image']) ) {
			$attachment = wp_get_attachment_image_src($feature['icon_image']);
			if(!empty($attachment)) {
				$icon_styles[] = 'background-image: url(' . sow_esc_url($attachment[0]) . ')';
				if(!empty($feature['icon_size'])) $icon_styles[] = 'font-size: '.intval($feature['icon_size']).'px';

				?><div class="sow-icon-image" style="<?php echo implode('; ', $icon_styles) ?>"></div><?php
			}
		}
		else {
			$icon_styles = array();
			//if(!empty($feature['icon_size'])) $icon_styles[] = 'font-size: '.intval($feature['icon_size']).'px';
			if(!empty($feature['icon_color'])) $icon_styles[] = 'color: '.$feature['icon_color'];

			echo siteorigin_widget_get_icon($feature['icon'], $icon_styles);
		}
		?>
	</div>
	<?php if( !empty( $feature['more_url'] ) && $feature['icon_link'] ) echo '</a>'; ?>

	<div class="textwidget">
		<?php if(!empty($feature['title'])) : ?>
			<h3 class="widget-title">
				<?php if( !empty( $feature['more_url'] ) && $feature['title_link'] ) echo '<a href="' . sow_esc_url( $feature['more_url'] ) . '" ' . ( $feature['new_window'] ? 'target="_blank"' : '' ) . '>'; ?>
				<?php echo wp_kses_post( $feature['title'] ) ?>
				<?php if( !empty( $feature['more_url'] ) && $feature['title_link'] ) echo '</a>'; ?>
			</h3>
		<?php endif; ?>

		<?php if(!empty($feature['text'])) : ?>
			<p><?php echo wp_kses_post( $feature['text'] ) ?></p>
		<?php endif; ?>

		<?php if(!empty($feature['more_text'])) : ?>
			<div class="sow-more-link">
				<hr>
				<p class="sow-more-text">
					<?php if( !empty( $feature['more_url'] ) ) echo '<a href="' . sow_esc_url( $feature['more_url'] ) . '" ' . ( $feature['new_window'] ? 'target="_blank"' : '' ) . ' class="btn btn-default">'; ?>
					<?php echo wp_kses_post( $feature['more_text'] ) ?>
					<?php if( !empty( $feature['more_url'] ) ) echo '</a>'; ?>
				</p>
			</div>
		<?php endif; ?>
	</div>
</div>