<?php

namespace SukiChild;

if (!defined('ABSPATH')) {
  exit;
}

/**
 * Make a feed unavailable.
 *
 * @return void
 */
function disable_feed(): void
{
  $url = get_bloginfo('url');
  $message = sprintf(wp_kses(__('No feed available, please visit our <a href="%s">homepage</a>!', 'suki-child'), ['a' => ['href' => []]]), esc_url($url));

  // We send a 404 response status code, insead of the default 500, to indicate that the content is not here, but no error has occurred.
  wp_die($message, __('Feed unavailable', 'suki-child'), 404);
}

/**
 * Make feeds unavailable.
 */
add_action('do_feed', __NAMESPACE__ . '\disable_feed', 1);
add_action('do_feed_rdf', __NAMESPACE__ . '\disable_feed', 1);
add_action('do_feed_rss', __NAMESPACE__ . '\disable_feed', 1);
add_action('do_feed_rss2', __NAMESPACE__ . '\disable_feed', 1);
add_action('do_feed_atom', __NAMESPACE__ . '\disable_feed', 1);
add_action('do_feed_rss2_comments', __NAMESPACE__ . '\disable_feed', 1);
add_action('do_feed_atom_comments', __NAMESPACE__ . '\disable_feed', 1);

/**
 * De-register support for the automatic-feed-links feature, initially added by suki.
 */
add_action('after_setup_theme', function() {
  remove_theme_support('automatic-feed-links');
}, 20);

/**
 * Remove default feed urls from <head>.
 */
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
