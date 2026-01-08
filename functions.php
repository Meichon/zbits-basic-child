<?php
// Carga el estilo del padre PRIMERO
add_action('wp_enqueue_scripts', function() {
    // 1. Estilo del padre (zbits-basico)
    wp_enqueue_style('parent-style', 
        get_template_directory_uri() . '/style.css'
    );
    
    // 2. Estilo del hijo (sobreescribe al padre)
    wp_enqueue_style('child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style'),
        wp_get_theme()->get('Version')
    );
    
    // 3. Si necesitas JavaScript adicional
    // wp_enqueue_script('child-scripts', ...);
});

// Puedes agregar funciones personalizadas aquí
// Estas sobreescribirán las del padre si tienen el mismo nombre