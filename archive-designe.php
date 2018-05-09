<?php


get_header();
?>

<?php

$args = array( 'post_type' => 'design', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
  the_title();
  echo '<div class="entry-content">';
  the_content();
  echo '</div>';
endwhile;

?>

<?php
get_sidebar();
get_footer();