<?php
while (have_posts()) {
    the_post();
?>
    <h1><?php the_title(); ?> </h1>
    <img src="<?php the_post_thumbnail(); ?>" alt="">
    <p><?php the_content(); ?></p>

<?php





}
?>