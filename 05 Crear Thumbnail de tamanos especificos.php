<!-- Crear Thumbnail especificos agregar al functions.php-->
<?php
add_image_size('foto_home', 300, 170, true);
add_image_size('foto_single', 580, 300, true);
?>

<!-- Agregar al theme con clase -->
<?php the_post_thumbnail( 'foto_single', array( 'class' => 'img-responsive' ) ); ?> 