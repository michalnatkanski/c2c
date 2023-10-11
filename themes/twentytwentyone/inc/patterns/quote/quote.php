<?php

declare(strict_types=1);

return [
    'title' => \__('Quote'),
    'categories' => ['custom patterns'],
    'content' => '<!-- wp:group {"tagName":"section","align":"wide","className":"quote","layout":{"type":"constrained"}} -->
    <section class="wp-block-group alignwide quote"><!-- wp:quote {"align":"center","className":"is-style-plain"} -->
    <blockquote class="wp-block-quote has-text-align-center is-style-plain"><!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">In quoting others we cite ourselves</p>
    <!-- /wp:paragraph --></blockquote>
    <!-- /wp:quote --></section>
    <!-- /wp:group -->',
];
