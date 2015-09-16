<?php

$settings = array(
        'speed' => $instance['speed'],
        'linked' => $instance['linked'],
        'thumb_size' => $instance['thumb_size'],
);
if( ! $instance['speed'])
    $settings['speed'] = 3000;

if( ! $instance['linked'])
    $settings['linked'] = true;

if( ! $instance['thumb_size'])
    $settings['thumb_size'] = 'logo';

if( empty($instance['posts']) ) return;
$seed = 'thiskhj736tg4893odd';
$hash = sha1(uniqid($seed . mt_rand(), true));
$query = siteorigin_widget_post_selector_process_query( $instance['posts'] );
// The Query
$the_query = new WP_Query( $query );

// The Loop
if ( $the_query->have_posts() ) {?>
    <div class="so-custom-carousel-slides" id="carousel_<?php echo $hash; ?>">
        <?php
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            ?>
            <article <?php post_class(); ?>>
                <div class="card" style="margin-right: 0.5em; margin-left: 0.5em; padding: 0.3em; margin-bottom: 0.1em">
                    <?php
                    if ( has_post_thumbnail(get_the_ID())) {
                        $full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), $settings['thumb_size']);
                        if($settings['linked']){
                            echo '<a href="'.get_the_permalink().'" title="Go to ' . the_title_attribute('echo=0') . '">';
                        }
                        echo '<img src="' . $full_image_url[0] . '" title="' . the_title_attribute('echo=0') . '">';
                        if($settings['linked']){
                            echo '</a>';
                        }
                    } else {
                        if($settings['linked']){
                            echo '<a href="'.get_the_permalink().'" title="Go to ' . the_title_attribute('echo=0') . '">';
                        }
                        echo '<img src="http://placehold.it/500x250?text=500x250 (1000x500 upload)" title="' . the_title_attribute('echo=0') . '" />';
                        if($settings['linked']){
                            echo '</a>';
                        }
                    }
                    ?>
                </div>
            </article>

            <?php
        } ?>
    </div>
<?php }

// Restore original Post Data
wp_reset_postdata();
?>
    <script>
        $('#carousel_<?php echo $hash; ?>').slick({
            slidesToShow: 8,
            slidesToScroll: 3,
            infinite: true,
            autoplay: true,
            autoplaySpeed: <?php echo $settings['speed']; ?>,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 8,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>
<?php
$hash = '';
?>