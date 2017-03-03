<!-- USO DE THUMBNAIL - IMAGEN DESTACADA http://codex.wordpress.org/Function_Reference/the_post_thumbnail -->

<!-- Registrar Thumbnail genericos de Wordpress function.php -->
<?php add_theme_support( 'post-thumbnails' );  ?>

<?php the_post_thumbnail( 'thumbnail' ); ?>       // Thumbnail (default 150px x 150px max)
<?php the_post_thumbnail( 'medium' ); ?>         // Medium resolution (default 300px x 300px max)
<?php the_post_thumbnail( 'large' ); ?>          // Large resolution (default 640px x 640px max)
<?php the_post_thumbnail( 'full' ); ?>           // Full resolution (original size uploaded)

<?php the_post_thumbnail( array(100, 100) );?>  // Otras resoluciones

<?php the_post_thumbnail( array(100, 100), array('class' => 'img-responsive') );?>  // Otras resoluciones



<!-- Agregar Class al Thumbnail -->
<?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>



<!-- Obteber URL del Thumbnail-->
<?php
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
echo $thumb_url[0];
?>
