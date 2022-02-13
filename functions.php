<?php

if (!defined('ABSPATH')) {
  exit;
}

/**
 * By default, when migrating to Child Theme, your existing configuration on Parent Theme options are not inherited to Child Theme.
 * It's because WordPress treats Parent Theme configuration and Child Theme configuration as separate data.
 *
 * Set the constant to `true` to make this Child Theme inherit Parent Theme configuration data.
 *
 * Only available on Suki v1.0.0 or later version.
 */
if ( ! defined( 'SUKI_CHILD_USE_PARENT_MODS' ) ) {
	define( 'SUKI_CHILD_USE_PARENT_MODS', false );
}

// Add files that should be included here.
$include_files = [
  'post-types/candidate',
  'setup',
  'cleanup/feeds',
];

foreach ($include_files as $file) {
  require_once(__DIR__ . "/includes/$file.php");
}
