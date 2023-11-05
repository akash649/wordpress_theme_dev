<?php 
//my theme funtion
//theme title
add_theme_support("title-tag");


//theme css and jquery file calling

function akash_css_js_file_calling(){
    // wordpress style file call
    wp_enqueue_style("akash-wp-style", get_stylesheet_uri());
    // my style file register and call
    wp_register_style("akash-style", get_template_directory_uri()."/assets/css/style.css", array(),"1.0.0","all");
    wp_enqueue_style("akash-style");

    // wordpress jquery file call
    wp_enqueue_script("jquery");
    // my js file call
    wp_enqueue_script("akash", get_template_directory_uri()."/assets/js/main.js",array(),"1.0.0","true");
}

add_action("wp_enqueue_scripts","akash_css_js_file_calling");
















?>