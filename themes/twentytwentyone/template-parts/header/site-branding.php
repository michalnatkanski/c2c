<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<div class="site-branding">

	<?php if ( has_custom_logo() ) : ?>
		<svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
			<g opacity="0.3">
			<circle cx="1.5" cy="1.5" r="1.5" fill="#23242C"/>
			<circle cx="1.5" cy="7.5" r="1.5" fill="#23242C"/>
			<circle cx="7.5" cy="1.5" r="1.5" fill="#23242C"/>
			<circle cx="7.5" cy="7.5" r="1.5" fill="#23242C"/>
			</g>
		</svg> 
		<div class="site-logo"><?php the_custom_logo(); ?></div>
	<?php endif; ?>
</div>
