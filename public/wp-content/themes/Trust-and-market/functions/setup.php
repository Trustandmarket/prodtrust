<?php

function bst_plus_setup() {
    add_editor_style('css/editor-style.css');
    add_theme_support('post-thumbnails');
    update_option('thumbnail_size_w', 170);
    update_option('medium_size_w', 470);
    update_option('large_size_w', 970);
}
add_action('init', 'bst_plus_setup');

if (! isset($content_width))
	$content_width = 600;

function bst_plus_excerpt_readmore() {
    return '<br><br> <p class="c-excerpt"><a class="read-more" href="'. get_permalink() . '">' . __('Lire la suite', 'bst-plus')  . '</a></p><div class="custom-addtoany">'. do_shortcode('[addtoany]') .'</div>';
}
add_filter('excerpt_more', 'bst_plus_excerpt_readmore');

function bst_plus_browser_body_class( $classes ) {
	global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
	
	if($is_lynx) $classes[] = 'lynx';
	elseif($is_gecko) $classes[] = 'gecko';
	elseif($is_opera) $classes[] = 'opera';
	elseif($is_NS4) $classes[] = 'ns4';
	elseif($is_safari) $classes[] = 'safari';
	elseif($is_chrome) $classes[] = 'chrome';
	elseif($is_IE) {
		$browser = $_SERVER['HTTP_USER_AGENT'];
		$browser = substr( "$browser", 25, 8);
		if ($browser == "MSIE 7.0"  ) {
			$classes[] = 'ie7';
			$classes[] = 'ie';
		} elseif ($browser == "MSIE 6.0" ) {
			$classes[] = 'ie6';
			$classes[] = 'ie';
		} elseif ($browser == "MSIE 8.0" ) {
			$classes[] = 'ie8';
			$classes[] = 'ie';
		} elseif ($browser == "MSIE 9.0" ) {
			$classes[] = 'ie9';
			$classes[] = 'ie';
		} else {
            $classes[] = 'ie';
        }
	}
	else $classes[] = 'unknown';
 
	if( $is_iphone ) $classes[] = 'iphone';
 
	return $classes;
}
add_filter( 'body_class', 'bst_plus_browser_body_class' );

// Add post formats support. See http://codex.wordpress.org/Post_Formats

add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

// Bootstrap pagination

if ( ! function_exists( 'bst_plus_pagination' ) ) {
	function bst_plus_pagination() {
		global $wp_query;
		$big = 999999999; // This needs to be an unlikely integer
		// For more options and info view the docs for paginate_links()
		// http://codex.wordpress.org/Function_Reference/paginate_links
		$paginate_links = paginate_links( array(
			'base' => str_replace( $big, '%#%', get_pagenum_link($big) ),
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'mid_size' => 5,
			'prev_next' => True,
			'prev_text' => __('<i class="glyphicon glyphicon-chevron-left"></i> Newer'),
			'next_text' => __('Older <i class="glyphicon glyphicon-chevron-right"></i>'),
			'type' => 'list'
		) );
		$paginate_links = str_replace( "<ul class='page-numbers'>", "<ul class='pagination'>", $paginate_links );
		$paginate_links = str_replace( "<li><span class='page-numbers current'>", "<li class='active'><a href='#'>", $paginate_links );
		$paginate_links = str_replace( "</span>", "</a>", $paginate_links );
		$paginate_links = preg_replace( "/\s*page-numbers/", "", $paginate_links );
		// Display the pagination if more than one page is found
		if ( $paginate_links ) {
			echo $paginate_links;
		}
	}
}

add_theme_support( 'woocommerce' );



