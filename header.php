<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <title><?php echo get_bloginfo( 'name' ); ?> - <?php echo the_title(); ?></title>
        <?php wp_head();?>
    </head>
    <body <?php body_class(); ?>></body>
        <section>
            <div class="center-cropped">
                <div class="overlay">
                    <div class="container">
                      <?php 
                        $page_object = get_page_by_path( 'Home' );
                        $page_id = $page_object->ID;
                        $permalink = get_permalink( $page_id );
                      ?>
                        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
                            <a class="navbar-brand" href="<?php $permalink ?>"><?php echo get_bloginfo( 'name' ); ?></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                          
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <?php 
                              
                                wp_nav_menu(array(
                                  'container' => false,
                                  'menu_class' => 'top-bar',
                                  'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                  'items_wrap' => '<ul id="%1$s" class="navbar-nav mr-0 mb-2 mb-0 %2$s">%3$s</ul>',
                                  'depth' => 2,
                                  'walker' => new WP_Bootstrap_Navwalker(),
                                ));
                              
                              ?>
                            </div>
                          </nav>
