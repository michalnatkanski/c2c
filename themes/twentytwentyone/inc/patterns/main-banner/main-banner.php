<?php

declare(strict_types=1);

return [
    'title' => \__('Main Banner'),
    'categories' => ['custom patterns'],
    'content' => '<!-- wp:group {"tagName":"section","align":"wide","className":"main-banner","layout":{"type":"default"}} -->
    <section class="wp-block-group alignwide main-banner"><!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%","className":"main-banner__content"} -->
    <div class="wp-block-column main-banner__content" style="flex-basis:66.66%"><!-- wp:paragraph -->
    <p>Introducing</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:heading {"level":1} -->
    <h1 class="wp-block-heading">Mad hatters,<br><span><sup>b</sup>/<sub>c</sub></span> style matters</h1>
    <!-- /wp:heading -->
    
    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button -->
    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Learn more</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"33.33%","className":"main-banner__decoration"} -->
    <div class="wp-block-column main-banner__decoration" style="flex-basis:33.33%"><!-- wp:image {"id":79,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="http://localhost/wp-content/uploads/2023/10/Talent-Shot-Woman.jpg" alt="" class="wp-image-79"/></figure>
    <!-- /wp:image -->
    
    <!-- wp:image {"id":78,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="http://localhost/wp-content/uploads/2023/10/Talent-shot-man.jpg" alt="" class="wp-image-78"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></section>
    <!-- /wp:group -->',
];
