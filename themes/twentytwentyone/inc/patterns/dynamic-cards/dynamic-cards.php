<?php

declare(strict_types=1);

return [
    'title' => \__('Dynamic Cards'),
    'categories' => ['custom patterns'],
    'content' => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Hat’s that bring the fire</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:heading {"textAlign":"center"} -->
    <h2 class="wp-block-heading has-text-align-center">Our Range</h2>
    <!-- /wp:heading -->
    
    <!-- wp:create-block/dynamic-posts {"align":"center"} -->
    <p class="wp-block-create-block-dynamic-posts aligncenter">Dynamic Posts – hello from the saved content!</p>
    <!-- /wp:create-block/dynamic-posts --></div>
    <!-- /wp:group -->',
];
