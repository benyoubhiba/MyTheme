<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

  
    
wp_enqueue_style( 
    'capitaine', 
    get_template_directory_uri() . '/css/main.css',
    array(), 
    '1.0'
);