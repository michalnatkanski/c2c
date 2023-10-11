<?php
/**
 * Plugin Name:       Dynamic Posts
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       dynamic-posts
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */

 
 function get_block_data($attributes) {
    return [
        'attributes' => $attributes,
    ];
}

function create_block_dynamic_posts_block_init() {
	register_block_type( __DIR__ . '/build',array(
        'render_callback' => 'dynamic_posts_block_render',
    ) );
}

function dynamic_posts_block_render($attributes) {
    wp_enqueue_script('view', plugin_dir_url(__FILE__) . '/src/view.js');
    wp_localize_script('view', 'blockData', get_block_data($attributes));

	$posts_per_page = isset($attributes['postsPerView']) ? (int) $attributes['postsPerView'] : -1;
    
    $query = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => $posts_per_page,
		'paged' => 1,
		'order' => 'ASC',
        'groupby' => 'ID',
    ));

    if ($query->have_posts()) {
        ob_start();
        ?>
        <div class="dynamic-posts">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="dynamic-posts__box" data-id="<?php echo get_the_ID(); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                        <img class="dynamic-posts__image" src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?>
					<div class="dynamic-posts__content">
					<h3 class="dynamic-posts__title"><?php the_title(); ?></h3>
                    <p class="dynamic-posts__excerpt"><?php echo nl2br(get_the_excerpt()); ?></p>
					</div>
                </div>
            <?php endwhile; ?>
        </div>
		<div class="dynamic-posts__show-more">
			<div class="dynamic-posts__show-more-container">
			<button class="dynamic-posts__show-more-button">Show more</button>
			</div>
		</div>
        <?php
        wp_reset_postdata();
        return ob_get_clean();
    }

    return '';
}

add_action( 'init', 'create_block_dynamic_posts_block_init' );