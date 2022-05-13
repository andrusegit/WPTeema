<?php get_header() ?>

<main class="container-home">
 
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        echo '<section class="content-block content-block-home">';
        echo "<h1>"; the_title(); echo "</h1>";
        echo "<p>"; the_excerpt(); echo "</p>"; 
        echo '<nav class="content-block-nav"><a href="'; the_permalink(); echo '">Loe rohkem </a></nav>';
        echo "</section>";
    }
}
?>
</main>
<?php
    get_footer();
?>
