<?php
  echo '<a href="' . sow_esc_url( $instance['button_url'] ) . '" ' . ( $instance['new_window'] ? 'target="_blank"' : '' ) . ' class="'.$instance['button_class'].'">';
  echo wp_kses_post( $instance['button_text'] );
  echo '</a>';