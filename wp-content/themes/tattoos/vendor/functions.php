<?php
/*********=============== Sidebar ============*****************/
if(!function_exists('tattoos_sidebar')){
	function tattoos_sidebar(){
		get_sidebar();
	}
}
/*********=============== add a menu start ============*****************/
if(!function_exists('tattoos_menu_editor')){
 function tattoos_menu_editor($args){
	    if ( ! current_user_can( 'edit_theme_options' ) ){
		    return;
	   	}
        // see wp-includes/nav-menu-template.php for available arguments
        extract( $args );
        $link = $link_before
              . '<a href="' .esc_url(admin_url( 'nav-menus.php' )) . '">' . $before . esc_html__('Add a menu','tattoos') . $after . '</a>'
             . $link_after;
        // We have a list
       if ( FALSE !== stripos( $items_wrap, '<ul' )
        
	       or FALSE !== stripos( $items_wrap, '<ol' )
		)
		{
			$link = "<li>$link</li>";
		}
		$output = sprintf( $items_wrap, $menu_id, $menu_class, $link );
		if ( ! empty ( $container ) ){
			$output  = "<$container class='$container_class' id='$container_id'>$output</$container>";
		}
		if ( $echo ){
			echo "$output";
		}
		return $output;
	}
}
/*********========= start edit archive count ======*********/
add_filter('get_archives_link', 'tattoos_archive_count');
function tattoos_archive_count($links) {
$links = str_replace('</a>&nbsp;(', '&nbsp;<span>(', $links);
$links = str_replace(')', ')</span></a>', $links);
return $links;
} 

add_filter('get_archives_link', 'tattoos_archive_count1');
function tattoos_archive_count1($links) {
$links = str_replace(')</span></a></option>', ')</option>', $links);
return $links;
}
/*********========= close edit archive count ======*********/
/*********========= edit category ======*********/
add_filter('wp_list_categories', 'tattoos_cat_count');
function tattoos_cat_count($links) {
$links = str_replace('</a> (', ' <span>(', $links);
$links = str_replace(')', ')</span></a>', $links);
return $links;
}
/*********============ custom comment fields ==========*****************/
add_filter( 'comment_form_default_fields', 'tattoos_comment_form_fields' );
function tattoos_comment_form_fields( $fields ) {
	$commenter = wp_get_current_commenter();
	$aria_req = " aria-required='true'";
    unset($fields['author']);
    unset($fields['email']);
    unset($fields['url']);
	
		$fields['url']  = '<div class="row"><div class="col-sm-12"><input id="url" name="url" type="url" placeholder="'.esc_attr__('Website&hellip;','tattoos').'" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" class="form-control" size="30"' . $aria_req . ' /></div></div>';
		$fields['author'] = '<div class="row"><div class="col-sm-6"><input id="author" name="author" type="text" placeholder="'.esc_attr__('Name&hellip;','tattoos').'" value="' . esc_attr( $commenter['comment_author'] ) . '" class="form-control" size="30"' . $aria_req . ' /></div>';
		$fields['email']  = '<div class="col-sm-6"><input id="email" name="email" type="email" placeholder="'.esc_attr__('Email&hellip;','tattoos').'" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" class="form-control" size="30"' . $aria_req . ' /></div></div>';
		
	return $fields;
}
add_filter( 'comment_form_defaults', 'tattoos_comment_form_defaults' );
function tattoos_comment_form_defaults( $defaults ) {

	$defaults['title_reply'] = '';
	$defaults['id_submit'] = 'comments_button';
	$defaults['label_submit'] = esc_attr__( 'Send Comment', 'tattoos' );
	$defaults['comment_notes_before'] = '';
	$defaults['comment_notes_after'] = '';
	$defaults['comment_field'] = '<div class="row"><div class="col-lg-12"><textarea name="comment" rows="3" placeholder="'.esc_attr__('Comment&hellip;','tattoos').'" class="comment_textarea"></textarea></div></div>';
	$defaults['class_submit'] = 'comment_button';
	return $defaults;
} 
// Load Google fonts
function tattoos_google_fonts_url() {
    $fonts_url = '';
    $DancingScript = _x( 'on', 'Dancing Script font: on or off', 'tattoos' );   

    if (  'off' !== $DancingScript  )
    {
        $font_families = array();
		
		if ('off' !== $DancingScript) {
            $font_families[] = 'Dancing Script:400,700';
        }

        $query_args = array(
            'family' => urlencode(implode('|', $font_families )),
            'subset' => urlencode('latin,latin-ext')
        );

        $fonts_url = add_query_arg($query_args, 'https://fonts.googleapis.com/css');
    }

    return esc_url_raw($fonts_url); 
}

// Google fonts
function tattoos_enqueue_googlefonts() {
    wp_enqueue_style( 'tattoos-googlefonts', tattoos_google_fonts_url(), array(), null );
}
add_action('wp_enqueue_scripts', 'tattoos_enqueue_googlefonts');
/*********************** Require File Start **********************************/
require_once get_template_directory() . '/vendor/include/tattoos-enqueue.php';
/************************* Require File End ************************************/
?>