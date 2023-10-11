<?php

declare(strict_types=1);

\defined('ABSPATH') || exit('File cannot be opened directly!');

/**
 * In this file can be added more Custom Patterns.
 * Each Pattern should be in the separate directory.
 */
$patterns = \glob(THEME_DIR . '\/inc\/patterns\/**\/*.php');

if (false !== $patterns) {
    foreach ($patterns as $pattern) {
        $lastSlash = \strrchr($pattern, '/');

        if (false === $lastSlash) {
            continue;
        }

        $patternSlug = \explode('.', \substr($lastSlash, 1))[0];

        \register_block_pattern(
            'custom/' . $patternSlug,
            require_once $pattern
        );
    }
}
