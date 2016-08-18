<div class="event_info">
    <h3>Upcoming Events</h3>
    <?php
        $community =  get_the_title();
        $args = array(
            'post_type' => 'events',
            'status' => 'published',
            'orderby' => 'meta_value_num',
            'order' => ASC,
            'meta_key' => 'date_start',
            'posts_per_page' => 3,
            'category_name' => $community
            );

        $events = new WP_Query( $args );
        while ( $events->have_posts() ) : $events->the_post();
    ?>
        <article class="event_info-item">
            <p class="event_info-date">

                <?php
                    $start = get_field('date_start');
                    $end = get_field('date_end');

                    $start_date = strtotime($start);
                    $finish_date = strtotime($end);

                    if ( $finish_date == '' ){
                        echo date( 'j M', $start_date );
                    } else {
                        if ( date( 'Y', $start_date ) == date( 'Y', $finish_date ) ){
                            if ( date( 'M', $start_date ) == date( 'M', $finish_date ) ){
                                echo date( 'j', $start_date ) . ' - ' .  date( 'j M', $finish_date );
                            } else {
                                echo date( 'j M', $start_date ) . ' - ' .  date( 'j M', $finish_date );
                            }
                        } else {
                            echo date( 'j M', $start_date ) . ' - ' .  date( 'j M', $finish_date );
                        }
                    }
                ?>

            </p>
            <p class="event_info-title"><?php echo the_title(); ?></p>
            <div class="event_info-desc">
                <p><?php echo get_field('desc') ?></p>
            </div>

            <a href="<?php echo get_field('register') ?>" class="btn_red">Register Now</a>
        </article>

    <?php endwhile;
        echo '<a href="/events" style="display: inline-block;margin-left: 2em; padding: 1em 0;">View More Events</a>';
    ?>

</div>
