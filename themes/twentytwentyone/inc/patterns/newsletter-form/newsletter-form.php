<?php

declare(strict_types=1);

return [
    'title' => \__('Newsletter form'),
    'categories' => ['custom patterns'],
    'content' => '<!-- wp:group {"tagName":"section","align":"wide","className":"newsletter-form","layout":{"type":"default"}} -->
    <section class="wp-block-group alignwide newsletter-form"><!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Keep up-to-date on us</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:heading -->
    <h2 class="wp-block-heading"></h2>
    <!-- /wp:heading -->
    
    <!-- wp:contact-form-7/contact-form-selector {"id":18,"hash":"57527a7","title":"Contact form 1","htmlId":"0","htmlName":"Test value name","htmlTitle":"test title","htmlClass":"newsletter-form__form"} -->
    <div class="wp-block-contact-form-7-contact-form-selector">[contact-form-7 id="57527a7" title="Contact form 1" html_id="0" html_name="Test value name" html_title="test title" html_class="newsletter-form__form"]</div>
    <!-- /wp:contact-form-7/contact-form-selector --></section>
    <!-- /wp:group -->',
];
