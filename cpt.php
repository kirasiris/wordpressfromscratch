<?php
 function custom_photos_type(){
  /*
  *
  *
  * CUSTOM PHOTOS CPT
  *
  */
  $photos_labels = array(
    'name'                => _x( 'Photos', 'Post Type General Name', 'wordpressfromscratch' ),
    'singular_name'       => _x( 'Photo', 'Post Type Singular Name', 'wordpressfromscratch' ),
    'menu_name'           => __( 'Photos', 'wordpressfromscratch' ),
    'name_admin_bar'      => __( 'Photo', 'wordpressfromscratch' ),
    'archives'            => __( 'Photos Archive', 'wordpressfromscratch' ),
    'attributes'          => __( 'Photo Attributes', 'wordpressfromscratch' ),
    'parent_item_colon'   => __( 'Parent Photo', 'wordpressfromscratch' ),
    'all_items'           => __( 'All Photos', 'wordpressfromscratch' ),
    'add_new_item'        => __( 'Add New Photo', 'wordpressfromscratch' ),
    'add_new'             => __( 'Add Photo', 'wordpressfromscratch' ),
    'new_item'            => __( 'New Item', 'wordpressfromscratch' ),
    'edit_item'           => __( 'Edit Photo', 'wordpressfromscratch' ),
    'update_item'         => __( 'Update Photo', 'wordpressfromscratch' ),
    'view_item'           => __( 'View Photo', 'wordpressfromscratch' ),
    'view_items'          => __( 'View Photos', 'wordpressfromscratch' ),
    'search_items'        => __( 'Search Photos', 'wordpressfromscratch' ),
    'not_found'           => __( 'Not Found', 'wordpressfromscratch' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'wordpressfromscratch' ),
    'featured_image'      => __( 'Featured Image', 'wordpressfromscratch' ),
    'set_featured_image'  => __( 'Set featured image', 'wordpressfromscratch' ),
    'remove_featured_image' => __( 'Remove featured image', 'wordpressfromscratch' ),
    'use_featured_image'    => __( 'Use as featured image', 'wordpressfromscratch' ),
    'insert_into_item'      => __( 'Insert into item', 'wordpressfromscratch' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'wordpressfromscratch' ),
    'items_list'            => __( 'Items list', 'wordpressfromscratch' ),
    'items_list_navigation' => __( 'Items list navigation', 'wordpressfromscratch' ),
    'filter_items_list'     => __( 'Filter items list', 'wordpressfromscratch' ),
  );

  $photos_args = array(
    'label'               => __( 'photos', 'wordpressfromscratch' ),
    'description'         => __( 'Photo Templates', 'wordpressfromscratch' ),
    'labels'              => $photos_labels,
    // Features this CPT supports in Post Editor
    'supports'            =>  array(
                                'title',
                                'editor',
                                'author',
                                'thumbnail',
                                'excerpt',
                                'trackbacks',
                                'custom-fields',
                                'comments',
                                'revisions',
                                'post-formats'
                              ),
    // You can associate this CPT with a taxonomy or custom taxonomy.
    'taxonomies'          => array( 'photo_categories'),
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'post',
  );

  // Registrar custom type
  register_post_type('photos', $photos_args);

 }

 add_action('init', 'custom_photos_type', 0);
  /*
  *
  *
  * CUSTOM PHOTOS CATEGORIES CPT TAXONOMY
  *
  */
  function photos_categories_taxonomy(){
    $photo_labels = array(
      'name' => _x('Categories', 'taxonomy general name'),
      'singular_name' => _x('Category', 'taxonomy singular name'),
      'search_items' => __('Search Categories'),
      'all_items' => __('All Categories'),
      'parent_item' => __('Parent Category'),
      'parent_item_colon' => __('Parent Category'),
      'edit_item' => __('Edit Category'),
      'update_item' => __('Update Category'),
      'add_new_item' => __('Add New Cateogory'),
      'new_item_name' => __('New Category'),
      'menu_name' => __('Categories')
    );
    register_taxonomy('photo_categories', array('photos'), array(
      'hierarchical'  =>  true,
      'labels'        =>  $photo_labels,
      'show_ui'       =>  true,
      'show_admin_column' =>  true,
      'query_var'     =>  true,
      'rewrite'       =>  array('slug' => 'photo_categories')
    ));
  }
  add_action('init', 'photos_categories_taxonomy');
  /*
  *
  *
  * CUSTOM PHOTOS TAGS CPT TAXONOMY
  *
  */
  function photos_tags_taxonomy(){
    $photo_labels = array(
      'name' => _x('Tags', 'taxonomy general name'),
      'singular_name' => _x('Tag', 'taxonomy singular name'),
      'search_items' => __('Search Tags'),
      'popular_item'  =>  __('Popular Tags'),
      'all_items' => __('All Tags'),
      'parent_item' => __('Parent Tag'),
      'parent_item_colon' => __('Parent Tag'),
      'edit_item' => __('Edit Tag'),
      'update_item' => __('Update Tag'),
      'add_new_item' => __('Add New Cateogory'),
      'new_item_name' => __('New Tag'),
      'separate_items_with_commas'  =>  __('Separate Tags with Commas'),
      'add_or_remove_items' =>  __('Add or remove tags'),
      'choose_from_most_used' =>  __('Choose from the most used tags'),
      'menu_name' => __('Tags')
    );
    register_taxonomy('photo_tags', array('photos'), array(
      'hierarchical'  =>  false,
      'labels'        =>  $photo_labels,
      'show_ui'       =>  true,
      'show_admin_column' =>  true,
      'update_count_callback' =>  '_update_post_term_count',
      'query_var'     =>  true,
      'rewrite'       =>  array('slug' => 'photo_tags')
    ));
  }
  add_action('init', 'photos_tags_taxonomy');
?>