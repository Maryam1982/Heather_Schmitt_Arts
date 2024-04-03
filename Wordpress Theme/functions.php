<?php
function HeatherSchmittFiles(){
    wp_enqueue_style('normalize_style', get_theme_file_uri('normalize.css'));
    wp_enqueue_style('main_style', get_theme_file_uri('main-style.css'));

    if (is_front_page())
    {   
        wp_enqueue_style('index_style', get_theme_file_uri('style-index.css'));
        wp_enqueue_script('index_js', get_theme_file_uri('index.js'), array(), 'V-1.0', true);
    }
    
if (is_page('about'))
{
    wp_enqueue_style('style_about', get_theme_file_uri('style-about.css'));
}

if (is_page('contact-us')){
    wp_enqueue_style('style_contact', get_theme_file_uri('style-contact.css'));
    wp_enqueue_script('contact_js', get_theme_file_uri('contact.js'), array(), 'V-1.0', true);
}
    
    

if (is_page('gallery')){
    wp_enqueue_style('style_gallery', get_theme_file_uri('style-gallery.css'));
    wp_enqueue_script('gallery_js', get_theme_file_uri('gallery.js'));
}
    
}

add_action('wp_enqueue_scripts', 'HeatherSchmittFiles');

function subpage_title_feature(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    
}

add_action('after_setup_theme', 'subpage_title_feature');



// function remove_post_autop($content) {
// // remove autop
// remove_filter( 'the_content', 'wpautop' );
// return $content;
// }

// add_filter( 'the_content', 'remove_post_autop', 0 );







?>