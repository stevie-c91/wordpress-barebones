<?php
/*
* Define constants for shorter calls
*/
define('PARENT', get_template_directory_uri());
define('CHILD', get_stylesheet_directory_uri());

/*
* Disable WordPress admin file-editor
*/
define('DISALLOW_FILE_EDIT', true);

/*
* Remove WordPress version number from source code
*/
function bb_remove_version()
{
    return '';
}
add_filter('the_generator', 'bb_remove_version');

/*
* Remove WordPress version number from default scripts and styles
*/
function bb_remove_version_scripts_styles($src)
{
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'bb_remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'bb_remove_version_scripts_styles', 9999);

/*
* Show generic error message for failed login for better security
*/
function bb_generic_login_error()
{
    return 'Something is wrong!';
}
add_filter('login_errors', 'bb_generic_login_error');

/*
* Disable XML-RPC. This is very rarely used
*/
add_filter('xmlrpc_enabled', '__return_false');

/*
* Remove emoji bloat scripts and styles
*/
function bb_disable_emojis()
{
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
}
add_action('init', 'bb_disable_emojis');

/*
* Disable comment support
*/
function bb_remove_comments()
{
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
        }
    }
}
add_action('init', 'bb_remove_comments');

/*
* Remove comments menu item
*/
function bb_remove_comments_menu()
{
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'bb_remove_comments_menu');

/*
* Remove comments icon from admin bar
*/
function bb_remove_comments_admin_bar()
{
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action('wp_before_admin_bar_render', 'bb_remove_comments_admin_bar');
