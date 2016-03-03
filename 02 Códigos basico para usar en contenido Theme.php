<!-- CODIGOS PARA THEME PARA USO DE CONTENIDO -->

<!-- Titulos-->
<?php the_title(); ?>

<!-- Contenido-->
<?php the_content(); ?>

<!-- Extracto-->
<?php the_excerpt(); ?> 

<!-- Enlace URL del post o pagina -->
<?php the_permalink() ?>

<!-- Fecha-->
<?php the_time('l, j F, Y') ?> 

<!-- Lista de Categorias -->
<?php wp_list_categories( ); ?>

<!-- Categorias -->
<?php the_category(', ') ?>

<!-- Tags -->
<?php the_tags( __('Tags: ', 'blank'), ", ", " <br />" ) ?>

<!-- Para uso de Plugins ACF -->
<?php the_field('nombre-field'); ?>

<!-- Código para insertar Shortcode -->
<?php echo do_shortcode ('[promoslider]'); ?>
