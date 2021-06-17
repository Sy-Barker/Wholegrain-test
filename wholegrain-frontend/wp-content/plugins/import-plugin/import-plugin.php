<?php
/**
 * Plugin Name: Import Plugin
 * Description: Wholegrain Starter plugin for developer test
 * Version: 0.1
 * Author: Wholegrain Digital
*/

/** 
 *
 * https://codex.wordpress.org/Plugin_API/Action_Reference
 *
**/

namespace WGD;

class ImportPlugin
{
    public static function init(): void
    {
      
      /* if (($handle = fopen('https://gitlab.com/wholegrain/webdeveloper-test/-/raw/master/backend-test/locations.csv', 'r')) !== FALSE) { // Check the resource is valid
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { // Check opening the file is OK!
        print_r($data); // Array
        }
        fclose($handle);
    } */
      
      /* function import_csv_scripts () {
        $csv = array_map('str_getcsv', file('https://gitlab.com/wholegrain/webdeveloper-test/-/raw/master/backend-test/locations.csv'));
        print_r($csv);
      } */
      
    }

    // A function to register the post type and taxonomy
    public static function register(): void
    {
      
      /* function prefix_register_post_type()
{
        register_post_type(
          'prefix_portfolio',
          array(
            'labels'        => array(
              'name'               => __('Portfolio', 'text_domain'),
              'singular_name'      => __('Portfolio', 'text_domain'),
              'menu_name'          => __('Portfolio', 'text_domain'),
              'name_admin_bar'     => __('Portfolio Item', 'text_domain'),
              'all_items'          => __('All Items', 'text_domain'),
              'add_new'            => _x('Add New', 'prefix_portfolio', 'text_domain'),
              'add_new_item'       => __('Add New Item', 'text_domain'),
              'edit_item'          => __('Edit Item', 'text_domain'),
              'new_item'           => __('New Item', 'text_domain'),
              'view_item'          => __('View Item', 'text_domain'),
              'search_items'       => __('Search Items', 'text_domain'),
              'not_found'          => __('No items found.', 'text_domain'),
              'not_found_in_trash' => __('No items found in Trash.', 'text_domain'),
              'parent_item_colon'  => __('Parent Items:', 'text_domain'),
            ),
            'public'        => true,
            'menu_position' => 5,
            'supports'      => array(
              'title',
              'editor',
              'thumbnail',
              'excerpt',
              'custom-fields',
            ),
            'taxonomies'    => array(
              'prefix_portfolio_categories',
            ),
            'has_archive'   => true,
            'rewrite'       => array(
              'slug' => 'portfolio',
            ),
          )
        );
      }

      add_action('init', 'prefix_register_post_type'); */

    }
}

\WGD\ImportPlugin::init();
