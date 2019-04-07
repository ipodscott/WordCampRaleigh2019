<?php 

function custom_admin_js() {
    wp_enqueue_script( 'adminjs', get_template_directory_uri() . '/js/wp-admin.js', array('jquery'), '1.0', true );
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/admin.css',true,'1.1','all');
}
add_action('admin_footer', 'custom_admin_js');