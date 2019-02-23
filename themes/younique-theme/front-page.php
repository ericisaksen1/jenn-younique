<?php

/**
 * Custom Homepage
 */

// Predetermined full width layout
add_filter('genesis_pre_get_option_site_layout', '__genesis_return_full_width_content');

// Remove the Genesis Loop
remove_action('genesis_loop', 'genesis_do_loop');

// Add the custom homepage loop
add_action('genesis_loop', 'custom_home_page');

//Create the homepage function
function custom_home_page() {
    //Display the custom widgets
    ?>
        <div class="hero">
            <?php
                genesis_widget_area( 'hero-left', array(
                    'before' => '<div class="hero-left"><div class="wrap">',
                    'after'  => '</div></div>',
                ) );
                genesis_widget_area( 'hero-right', array(
                    'before' => '<div class="hero-right"><div class="wrap">',
                    'after'  => '</div></div>',
                ) );
            ?>
        </div>
    <?php
    genesis_widget_area( 'tier-1', array(
        'before' => '<div class="tier-1" id="start"><div class="wrap">',
        'after'  => '</div></div>',
    ) );
    genesis_widget_area( 'tier-2', array(
        'before' => '<div class="tier-2"><svg id=Layer_1 style="enable-background:new 0 0 1920 120"version=1.1 viewBox="0 0 1920 120"x=0px xml:space=preserve xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink y=0px><style>.st0{fill:#fff}</style><polygon class=st0 points="0.5,-0.5 960.5,59.5 1920.5,-0.5 "/></svg><div class="wrap">',
        'after'  => '</div><svg id=Layer_2 style="enable-background:new 0 0 1920 120"version=1.1 viewBox="0 0 1920 120"x=0px xml:space=preserve xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink y=0px><style>.st0{fill:#fff}</style><polygon class=st0 points="0.5,-0.5 960.5,59.5 1920.5,-0.5 "/></svg></div>',
    ) );
    genesis_widget_area( 'tier-3', array(
        'before' => '<div class="tier-3"><div class="wrap">',
        'after'  => '</div></div>',
    ) );
}

//Run the Genesis structure
genesis();
?>