<?php
$homePost = new WP_Query(array(
    'posts_per_page' => 2
));
?>

<div>
    <h1>Posts</h1>
</div>

<?php
$homecarsPost = new WP_Query(array(
    'post_per_page' => 2,
    'post_type' => 'car'
));
while ($homecarsPost->have_posts()) {
    $homecarsPost->the_post();
}
?>


<div>
    <h1>Cars</h1>
</div>