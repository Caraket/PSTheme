<?php 

    //==========================
    // Enqueue Scripts and CSS =
    //==========================

    // Enqueue Styles
    function load_css() {
        wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
        wp_enqueue_style('main');
    }
    add_action( 'wp_enqueue_scripts', 'load_css' );


    // Enqueue Scripts
    function load_js() {
        wp_enqueue_script('jquery');
    }

    add_action( 'wp_enqueue_scripts', 'load_js' );
?>

<?php 
    //==========================
    //      Theme Supports     =
    //==========================


    // Custom Background
    add_theme_support( 'custom-background' );

?>

<?php 
    //==========================
    //        Nav Menus        =
    //==========================

    register_nav_menus( array(
        'primary' => __('Primary Menu', 'PSTheme'),
    ) );
?>

<?php 
    //==========================
    //        NavWalker        =
    //==========================

    /**
    * Register Custom Navigation Walker
    */
    function register_navwalker(){
        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    }
    add_action( 'after_setup_theme', 'register_navwalker' );
?>