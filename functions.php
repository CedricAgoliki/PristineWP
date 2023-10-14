<?
if (!function_exists('pristinewp_setup')) :
    function pristinewp_setup()
    {
        add_theme_support('wp-block-styles');
        add_editor_style('editor-style.css');
    }
endif;
add_action('after_setup_theme', 'pristinewp_setup');
