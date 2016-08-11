<div class="event_info">
    <h3>Upcoming Events</h3>
    <?php
        $args = array(
            'post_type' => 'events',
            'posts_per_page' => 2,
            'order' => ASC
        );

        $events = new WP_Query( $args );
        while ( $events->have_posts() ) : $events->the_post();
    ?>
        <article class="event_info-item">
            <p class="event_info-date"><?php echo get_field('date')?></p>
            <p class="event_info-title"><?php echo the_title(); ?></p>
            <div class="event_info-desc">
                <p><?php echo get_field('desc') ?></p>
            </div>

            <a href="<?php echo get_field('register') ?>" class="btn_red">Register Now</a>
        </article>

    <?php endwhile; ?>
</div>
