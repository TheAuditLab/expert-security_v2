<?php

/**
 * Rename "Posts" to "News"
 *
 * @link http://new2wp.com/snippet/change-wordpress-posts-post-type-news/
 */
add_action( 'admin_menu', 'pilau_change_post_menu_label' );
add_action( 'init', 'pilau_change_post_object_label' );
function pilau_change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'News';
    $submenu['edit.php'][5][0] = 'News';
    $submenu['edit.php'][10][0] = 'Add News';
    $submenu['edit.php'][16][0] = 'News Tags';
    echo '';
}
function pilau_change_post_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'News';
    $labels->singular_name = 'News';
    $labels->add_new = 'Add News';
    $labels->add_new_item = 'Add News';
    $labels->edit_item = 'Edit News';
    $labels->new_item = 'News';
    $labels->view_item = 'View News';
    $labels->search_items = 'Search News';
    $labels->not_found = 'No News found';
    $labels->not_found_in_trash = 'No News found in Trash';
}

function register_my_menu() {
    register_nav_menus(array(
        'header-menu'           => __( 'Header Menu' ),
        'header-menu-mobile'    => __( 'Header Menu Mobile' ),
    ));
}
add_action( 'init', 'register_my_menu' );

function stf_redirect_to_post(){
    global $wp_query;
    // If there is one post on archive page

    if( is_archive() && $wp_query->post_count == 1 ){
        
        // Setup post data
        the_post();
    
        // Get permalink
        $post_url = get_permalink();
        
        // Redirect to post page
        wp_redirect( $post_url );
    }

} 

//add_action('template_redirect', 'stf_redirect_to_post');

 function custom_excerpt_length( $length ) {
   return 22;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


/***********************************************************************************************/
/* Get Search Form Replace HTML */
/***********************************************************************************************/
function search_form_modify( $html ) {
    $html ='<div class="search-box"><form class="search" method="get" action="'. home_url().'" role="search">
    <input class="form-control" type="search" name="s" required="required" placeholder="Search">
    <input type="submit" value="" />
</form></div>';
    return $html;
}
add_filter( 'get_search_form', 'search_form_modify' );


// ##########################################################################################################


function enqueue_front_page_scripts() {

    // Owl Carousel
    wp_enqueue_script( 'owlcarousel-js', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.js', array( 'jquery' ), null, true );
    wp_enqueue_style( 'owlcarousel-css', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css');
    wp_enqueue_style( 'owlcarousel-theme-css', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.theme.default.min.css');
    
}

wp_enqueue_script("jquery"); 
add_action( 'wp_enqueue_scripts', 'enqueue_front_page_scripts' );


function dd($obj, $die = false){

    echo "<pre>", var_dump($obj), "</pre>";


    if($die){
        die();
    }

}


function content($limit, $raw_content) {
  $content = explode(' ', $raw_content, $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  } 
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}


function uniqueRandomNumbersWithinRange($min, $max, $quantity) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}

function space_change_custom_taxonomy_slug_args( $taxonomy, $object_type, $args ){
    if( 'products' == $taxonomy ){ // Instead of the "old-slug", add current slug, which you want to change.
        remove_action( current_action(), __FUNCTION__ );
        remove_action( 'template_redirect', 'redirect_canonical' );
        remove_action( 'template_redirect', 'wp_old_slug_redirect' );
        $args['rewrite'] = array( 'slug' => 'security-solutions' , 'with_front' => false ); // Instead of the "new-slug", add a new slug name.
        register_taxonomy( $taxonomy, $object_type, $args );
    }
}
add_action( 'registered_taxonomy', 'space_change_custom_taxonomy_slug_args', 10, 3 );



require_once('wp-bootstrap-navwalker-master/wp-bootstrap-navwalker.php');

