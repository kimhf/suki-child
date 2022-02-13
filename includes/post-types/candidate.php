<?php

namespace SukiChild;

if (!defined('ABSPATH')) {
  exit;
}

add_action('init', function () {
  $labels = [
    'name'                  => _x('Candidate', 'post type general name', 'suki-child'),
    'singular_name'         => _x('Candidate', 'post type singular name', 'suki-child'),
    'menu_name'             => _x('Candidate', 'admin menu', 'suki-child'),
    'name_admin_bar'        => _x('Candidate', 'add new on admin bar', 'suki-child'),
    'add_new'               => _x('Add New', 'candidate', 'suki-child'),
    'add_new_item'          => __('Add New Candidate', 'suki-child'),
    'new_item'              => __('New Candidate', 'suki-child'),
    'edit_item'             => __('Edit Candidate', 'suki-child'),
    'view_item'             => __('View Candidate', 'suki-child'),
    'all_items'             => __('All Candidates', 'suki-child'),
    'search_items'          => __('Search Candidates', 'suki-child'),
    'parent_item_colon'     => __('Parent Candidate:', 'suki-child'),
    'not_found'             => __('No candidate found.', 'suki-child'),
    'not_found_in_trash'    => __('No candidate found in trash.', 'suki-child'),
    'archives'              => __('Candidate Archives', 'suki-child'),
    'insert_into_item'      => __('Insert into candidate', 'suki-child'),
    'uploaded_to_this_item' => __('Uploaded to this candidate', 'suki-child'),
    'featured_image'        => __('Candidate Image', 'suki-child'),
    'set_featured_image'    => __('Set candidate image', 'suki-child'),
    'remove_featured_image' => __('Remove candidate image', 'suki-child'),
    'use_featured_image'    => __('Use as candidate image', 'suki-child'),
    'filter_items_list'     => __('Filter candidate list', 'suki-child'),
    'items_list_navigation' => __('Candidate list navigation', 'suki-child'),
    'items_list'            => __('Candidate list', 'suki-child'),
  ];

  $args = [
    'labels'             => $labels,
    'description'        => __('Description.', 'suki-child'),
    'public'             => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 5,
    'menu_icon'          => 'dashicons-businessperson',
    'supports'           => ['title', 'editor', 'thumbnail']
  ];

  register_post_type('candidate', $args);
});
