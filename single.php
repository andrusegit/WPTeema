<?php
    get_header();
    ?>

    <h1>zingel</h1>
    
<?php
    echo "<h1>Menüü:</h1>";
    wp_nav_menu(array( 'theme_location' => 'links-menu' ));

    echo "<h1>"; the_title(); echo "</h1>";
    the_content();
    //the_meta();
    echo "<p>" . "Ainekood: " .
    get_post_meta(get_the_ID(), $key="Aine", $single=true) .
    "</p>";

    get_footer();
?>