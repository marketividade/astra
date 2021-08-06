<?php
/*
   Plugin Name: Marketividade Custom Pack
   Plugin URI: portugalpremium.net/mktv-custom-pack
   description: >-
  a plugin to help to customize websites for Marketividade's customers
   Version: 0.2
   Author: Marketividade
   Author URI: http://marketividade.com
   License: GPL2
   */
echo "<script>console.log('PHP File included:mktv-custom-pack.php');</script>";



function mktv_custom_pack_enqueue_script()
{
   wp_register_script( 
        'customizer_script', 
        plugin_dir_url(__FILE__) . 'js/customizer.js', 
        array( 'jquery' )
    );
       wp_enqueue_script('customizer_script');

   wp_register_script( 
        'astra_fixer_script', 
        plugin_dir_url(__FILE__) . 'js/astra-fixer.js', 
        array( 'jquery' )
    );
   wp_enqueue_script('astra_fixer_script');

   wp_register_script( 
        'bb_fixer_script', 
        plugin_dir_url(__FILE__) . 'js/beaver-builder-fixer.js', 
        array( 'jquery' )
    );
   wp_enqueue_script('bb_fixer_script');

   wp_register_script( 
        'toolbox_script', 
        plugin_dir_url(__FILE__) . 'js/toolbox.js', 
        array( 'jquery' )
    );
   wp_enqueue_script('toolbox_script');

   wp_enqueue_style('astra-fixer_styles', plugin_dir_url(__FILE__) . 'css/astra-fixer.css');
   wp_enqueue_style('customizer_style', plugin_dir_url(__FILE__) . 'css/customizer.css');
   wp_enqueue_style('toolbox_style', plugin_dir_url(__FILE__) . 'css/toolbox.css');

}

add_action('wp_enqueue_scripts', 'mktv_custom_pack_enqueue_script');

include_once 'php/shortcodes.php';
