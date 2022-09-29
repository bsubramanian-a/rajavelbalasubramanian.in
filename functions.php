<?php 
function kia_add_favicon(){ 
?>
    <!-- Custom Favicons -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.ico"/>
<?php 
}
add_action('wp_head','kia_add_favicon');

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/styles.css' );
    //wp_enqueue_style ( 'custom', get_template_directory_uri () . '/css/custom.css', array( 'style' ) );
}
add_action ( 'wp_enqueue_scripts', 'add_theme_scripts' );