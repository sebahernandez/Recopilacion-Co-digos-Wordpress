<!-- Registrar taxonomia en functions.php -->
<?php 
function crear_mis_taxonomias() {
	// Crear Taxonomia
	register_taxonomy('nombre-taxonomia', 'nombre_custom_post', array(
	'hierarchical' => true, 'label' => 'Título Taxonomia',
	'query_var' => true, 'rewrite' => true, 'show_admin_column' => true));
   
	// Replicar Taxonomia en Varios Custom
	register_taxonomy('nombre-taxonomia',array( 'nombre_custom_post1','nombre_custom_post'), array(
	'hierarchical' => true, 'label' => 'Año',
	'query_var' => true, 'rewrite' => true, 'public' => true, 'show_admin_column' => true, 'show_ui' => true));
}
add_action('init', 'crear_mis_taxonomias', 0);
?>



<!-- Imprimir taxonomia individual-->
<?php
$terms = get_the_terms( $post->ID , 'nombretaxonomia' );
foreach ( $terms as $term ) {
echo $term->name;
}
?>



<!-- Mostrar todas las  taxonomia -->
 <?php
	//listado de taxonomias
 	$taxonomy = 'nombretaxonomia';
    $tax_terms = get_terms($taxonomy);
?>
<ul>
<?php
	foreach ($tax_terms as $tax_term) {
	echo '<li class="col-xs-12 col-sm-6"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> '.$tax_term->name.'</li>';
    }
?>
</ul>


<!-- Mostrar taxonomia en el theme como listado -->

<?php query_posts(array('post_type'=>'proyectos',  'ubicacion'=>'centro',  'order' => 'ASC', 'posts_per_page' => "10"  ));?>
<?php while ( have_posts() ) : the_post();?>
						
	Acá va el Contenidoo
                        
<?php endwhile; // end of the loop. ?>
<?php wp_reset_query(); // Reset Query?>