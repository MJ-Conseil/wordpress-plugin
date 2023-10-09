<?php

/**
 * Plugin Name: MJConseil - Custom Resources
 * Plugin URI: 
 * Description: A Set of custom post type to manage custom resources for MJ Conseil website
 * Version: 0.0.1
 * Author: Fairness coop
 * Author URI: https:/fairness.coop
 * Requires PHP: 5.6
 *
 * @since 1.0
 */

function create_mj_reference_taxonomy()
{
  register_taxonomy('reference_types', ['reference'], [
    'label' => __('Type de référence', 'txtdomain'),
    'hierarchical' => false,
    'rewrite' => ['slug' => 'reference_type'],
    'show_admin_column' => true,
    'show_in_rest' => true,
    'labels' => [
      'singular_name' => __('type de référence', 'txtdomain'),
      'all_items' => __('Tous les types de référence', 'txtdomain'),
      'edit_item' => __('Modifier un type de référence', 'txtdomain'),
      'view_item' => __('Voir un type de référence', 'txtdomain'),
      'update_item' => __('Modifier un type de référence', 'txtdomain'),
      'add_new_item' => __('Ajouter un type de référence', 'txtdomain'),
      'new_item_name' => __('Nouveau type de référence', 'txtdomain'),
      'search_items' => __('Rechercher un type de référence', 'txtdomain'),
      'popular_items' => __('Les types de références populaires', 'txtdomain'),
      'choose_from_most_used' => __('Choisir parmis les types de référence les plus utilisés', 'txtdomain'),
      'not_found' => __('Aucun type de référence trouve', 'txtdomain'),
    ]
  ]);
}


function create_mj_offer_type_taxonomy()
{
  register_taxonomy('offer_type', ['reference'], [
    'label' => __("Type d'offre", 'txtdomain'),
    'hierarchical' => false,
    'rewrite' => ['slug' => 'reference_type'],
    'show_admin_column' => true,
    'show_in_rest' => true,
    'labels' => [
      'singular_name' => __("Type d'offre", 'txtdomain'),
      'all_items' => __("Tous les types d'offres", 'txtdomain'),
      'edit_item' => __("Modifier un type d'offre", 'txtdomain'),
      'view_item' => __("Voir un type d'offre", 'txtdomain'),
      'update_item' => __("Modifier un type d'offre", 'txtdomain'),
      'add_new_item' => __("Ajouter un type d'offre", 'txtdomain'),
      'new_item_name' => __("Nouveau type d'offre", 'txtdomain'),
      'search_items' => __("Rechercher un type d'offre", 'txtdomain'),
      'popular_items' => __("Les types d'offre les plus populaires", 'txtdomain'),
      'choose_from_most_used' => __("Choisir parmis les types d'offres les plus utilisés", 'txtdomain'),
      'not_found' => __("Aucun type d'offre trouvé", 'txtdomain'),
    ]
  ]);
}





function create_mj_references()
{
  $labels = array(
    'name'               => _x('Références', 'post type general name'),
    'singular_name'      => _x('Référence', 'post type singular name'),
    'add_new'            => _x('Ajouter une référence', 'book'),
    'add_new_item'       => __('Ajouter une référence'),
    'edit_item'          => __('Modifier une référence'),
    'new_item'           => __('Ajouter une référence'),
    'all_items'          => __('Toutes les références'),
    'view_item'          => __('Voir la référence'),
    'search_items'       => __('Rechercher une référence'),
    'not_found'          => __('Aucune référence trouvée'),
    'not_found_in_trash' => __('Aucune référence trouvée dans la corbeille'),
    'parent_item_colon'  => '',
    'menu_name'          => 'Références'
  );
  $args = array(
    'labels'             => $labels,
    'description'        => __('Description.', 'your-plugin-textdomain'),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array('slug' => 'reference'),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'show_in_rest'       => true,
    'rest_base'          => 'references',
    'taxonomies'          => array('reference_types', 'offer_type'),
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'supports'           => array('title', 'thumbnail', 'editor')
  );
  register_post_type('reference', $args);
}

function create_mj_media_resource_taxonomy()
{
  register_taxonomy('media_resource_type', ['media_resource'], [
    'label' => __("Type de ressource média", 'txtdomain'),
    'hierarchical' => false,
    'rewrite' => ['slug' => 'media_resource_type'],
    'show_admin_column' => true,
    'show_in_rest' => true,
    'labels' => [
      'singular_name' => __("Type de ressource média", 'txtdomain'),
      'all_items' => __("Tous les types de ressource média", 'txtdomain'),
      'edit_item' => __("Modifier un Type de ressource média", 'txtdomain'),
      'view_item' => __("Voir un Type de ressource média", 'txtdomain'),
      'update_item' => __("Modifier un Type de ressource média", 'txtdomain'),
      'add_new_item' => __("Ajouter un Type de ressource média", 'txtdomain'),
      'new_item_name' => __("Nouveau Type de ressource média", 'txtdomain'),
      'search_items' => __("Rechercher un Type de ressource média", 'txtdomain'),
      'popular_items' => __("Les types de ressource média les plus populaires", 'txtdomain'),
      'choose_from_most_used' => __("Choisir parmis les types de ressource média les plus utilisés", 'txtdomain'),
      'not_found' => __("Aucun Type de ressource média trouvé", 'txtdomain'),
    ]
  ]);
}



function create_mj_media_resources()
{
  $labels = array(
    'name'               => _x('Ressources Media', 'post type general name'),
    'singular_name'      => _x('Ressource média', 'post type singular name'),
    'add_new'            => _x('Ajouter une ressource média', 'book'),
    'add_new_item'       => __('Ajouter une ressource média'),
    'edit_item'          => __('Modifier une ressource média'),
    'new_item'           => __('Ajouter une ressource média'),
    'all_items'          => __('Toutes les Ressources Media'),
    'view_item'          => __('Voir la ressource média'),
    'search_items'       => __('Rechercher une ressource média'),
    'not_found'          => __('Aucune ressource média trouvée'),
    'not_found_in_trash' => __('Aucune ressource média trouvée dans la corbeille'),
    'parent_item_colon'  => '',
    'menu_name'          => 'Ressources Media'
  );
  $args = array(
    'labels'             => $labels,
    'description'        => __('Description.', 'your-plugin-textdomain'),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array('slug' => 'media_resource'),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'menu_icon'           => 'dashicons-book',
    'show_in_rest'       => true,
    'rest_base'          => 'media_resource',
    'taxonomies'          => array('media_resource_type'),
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'supports'           => array('title', 'thumbnail', 'editor')
  );
  register_post_type('media_resource', $args);
}



function create_mj_newsletter()
{
  $labels = array(
    'name'               => _x('Newsletter', 'post type general name'),
    'singular_name'      => _x('Newsletter', 'post type singular name'),
    'add_new'            => _x('Ajouter une Newsletter', 'book'),
    'add_new_item'       => __('Ajouter une Newsletter'),
    'edit_item'          => __('Modifier une Newsletter'),
    'new_item'           => __('Ajouter une Newsletter'),
    'all_items'          => __('Toutes les Newsletter'),
    'view_item'          => __('Voir la Newsletter'),
    'search_items'       => __('Rechercher une Newsletter'),
    'not_found'          => __('Aucune Newsletter trouvée'),
    'not_found_in_trash' => __('Aucune Newsletter trouvée dans la corbeille'),
    'parent_item_colon'  => '',
    'menu_name'          => 'Newsletter'
  );
  $args = array(
    'labels'             => $labels,
    'description'        => __('Description.', 'your-plugin-textdomain'),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array('slug' => 'newsletter'),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'menu_icon'           => 'dashicons-welcome-write-blog',
    'show_in_rest'       => true,
    'rest_base'          => 'newsletters',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'supports'           => array('title', 'thumbnail', 'editor')
  );
  register_post_type('newsletter', $args);
}

add_action('init', 'create_mj_offer_type_taxonomy');
add_action('init', 'create_mj_reference_taxonomy');
add_action('init', 'create_mj_references');
add_action('init', 'create_mj_media_resource_taxonomy');
add_action('init', 'create_mj_media_resources');
add_action('init', 'create_mj_newsletter');
