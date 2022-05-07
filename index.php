<?php get_header() ?>

<h1>index</h1>
<?php
echo "<h1>Menüü:</h1>";
wp_nav_menu(array( 'theme_location' => 'links-menu' ));
?>

<h1>1 2 3 4 Veebiprogemine</h1>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        echo "<h2>";  the_title(); echo "</h2>";
        the_content(); //the_excerpt();
        echo '<a href="'; the_permalink(); echo '">Loe rohkem </a>';
    }
}
get_footer();
?>
