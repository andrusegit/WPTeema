<?php get_header() ?>

<main class="container">

<?php
    the_post();
    echo '<section class="content-block content-block-page">';
    echo "<h1>"; the_title(); echo "</h1>";
    echo "<p>"; the_content(); echo "</p>"; //the_excerpt();
    echo "<br>";
    echo '<nav class="content-block-nav back-nav"><a href="' . home_url() . '">Tagasi</a></nav>';
    echo "</section>";
    //get_post_meta(get_the_ID(), $key="Aine", $single=true)
?>
 
</main>
<?php
    get_footer();
?>
